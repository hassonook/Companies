<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Mail\Websitemail;
use Hash;
use Auth;


class UserController extends Controller
{
    public function index(){
        $users = User::with('roles')->get();
        return view('user.list', compact('users'));
    }

    public function details($id){
        $user = User::find($id);
        return view('user.details', compact('user'));
    }

    public function add(){
        $roles = Role::get();
        return view('user.add', compact('roles'));
    }

    public function store(Request $request){
        $user = new User();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|same:password',
            'repassword' => 'same:password',
            'roles' => 'required'
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            $ext = $request->file('photo')->extension();
            $final_name =  strstr($request->email, '@', true).'.'.$ext;
            $request->file('photo')->move(public_path('uploads/userPhoto/'),$final_name);
            $user->photo = $final_name;
        }
        if ($request->mobile_number != '') {
            $user->mobile_number = $request->mobile_number;
        }
        $user->save();
        $user->roles()->attach($request->input('roles'));

        return redirect()->route('users')->with('success', 'User added successfully! ');
    }

    public function login(){
        return view('auth.login');
    }

    public function login_submit(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=>'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credential)){
            return redirect()->route('home');
        }else{
            return redirect()->route('login')->with('error', trans('message.incorrectLogin'));
        }
    }

    public function change(Request $request){
        $request->validate([
            'oldPassword'=> 'required',
            'password'=>'required',
            'confirmPassword' => 'same:password',
        ]);
        $credential = [
            'email' => $request->email,
            'password' => $request->oldPassword
        ];
        if(Auth::attempt($credential)){
           $user = Auth::user();
           $user->password = Hash::make($request->password);
           $user->update();
           return redirect()->back()->with('success', trans('message.passwordChanged'));
        }else{
            return redirect()->back()->with('error', trans('message.incorrectLogin'));
        }
    }

    public function forget_password(){
        return view('auth.forget_password');
    }

    public function forget_password_submit(Request $request){

        $request->validate([
            'email'=> 'required|email',
        ]);
        $user_data = User::where('email', $request->email)->first();

        if (!$user_data) {
            return redirect()->back()->with('error', 'Email Address not found!');
        }

        $token = hash('sha256', time());

        $user_data->remember_token = $token;
        $user_data->update();
        $link = url('user/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $body = 'Please click on the following link: <br>';

        \Mail::to($request->email)->send(new Websitemail($subject, $body, $link));
        return redirect()->back()->with('success', 'Please check your email and following the steps there');
    }

    public function reset_password($token, $email){
        $user_data = User::where('remember_token', $token)->where('email', $email)->first();
        if (!$user_data) {
            return redirect()->route('login');
        }
        return view('auth.passwords.reset', compact('token', 'email'));
    }

    public function reset_password_submit(Request $request){

        $request->validate([
            'password'=> 'required',
            'repassword' => 'same:password'
        ]);
        $user_data = User::where('remember_token', $request->token)->where('email', $request->email)->first();
        $user_data->password = Hash::make($request->password);
        $user_data->remember_token = '';
        $user_data->update();
        return redirect()->route('login')->with('success', trans('message.passwordResetSuccess'));
    }

    public function edit($id){
        $user = User::with('roles')->find($id);
        $roles = Role::get();
        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile_number = $request->mobile_number;

        if ($request->reset_password) {
            $user->password = Hash::make(config('auth.default_password'));
        }

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            if (Storage::exists('uploads/userPhoto/'.$user->photo)) {
                Storage::delete('uploads/userPhoto/'.$user->photo);
            }
           //unlink(public_path('uploads/userPhoto/'.$user->photo));

            $ext = $request->file('photo')->extension();
            $final_name =  strstr($request->email, '@', true).'.'.$ext;

            $request->file('photo')->move(public_path('uploads/userPhoto/'),$final_name);

            $user->photo = $final_name;
        }
        $user->roles()->detach();
        $user->roles()->attach($request->input('roles'));
        $user->update();
        return redirect()->route('users')->with('success', 'User updated successfully! ');
    }

    public function delete($id){
        $user = User::find($id);
        $user->roles()->detach();
        if (Storage::exists('uploads/userPhoto/'.$user->photo)) {
            Storage::delete('uploads/userPhoto/'.$user->photo);
        }
        $user->delete();
        return redirect()->route('users')->with('success', 'User deleted successfully! ');
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }


}
