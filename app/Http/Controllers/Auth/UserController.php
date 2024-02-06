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
            'repassword' => 'required|same:repassword',
            'roles[]' => 'required'
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
               // unlink(public_path('uploads/userPhoto/'.$admin_data->photo));

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
            return redirect()->route('login')->with('error', 'incorrect login info');
        }
    }

    public function forget_password(){
        return view('auth.forget_password');
    }

    public function forget_password_submit(Request $request){
        $request->validate([
            'email'=> 'required|email',
        ]);
        $admin_data = Admin::where('email', $request->email)->first();
        if (!$admin_data) {
            return redirect()->back()->with('error', 'Email Address not found!');
        }

        $token = hash('sha256', time());

        $admin_data->token = $token;
        $admin_data->update();
        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please click on the following link: <br>';
        $message .= '<a href = "'.$reset_link.'">Click here...</a>';

        \Mail::to($request->email)->send(new Websitemail($subject, $message));
        return redirect()->route('admin_login')->with('success', 'Please check your email and following the steps there');
    }

    public function reset_password($token, $email){
        $admin_data = Admin::where('token', $token)->where('email', $email)->first();
        if (!$admin_data) {
            return redirect()->route('admin_login');
        }
        return view('admin.reset_password', compact('token', 'email'));
    }

    public function reset_password_submit(Request $request){
        $request->validate([
            'password'=> 'required',
            'repassword' => 'required|same:password'
        ]);
        $admin_data = Admin::where('token', $request->token)->where('email', $request->email)->first();
        $admin_data->password = Hash::make($request->password);
        $admin_data->token = '';
        $admin_data->update();
        return redirect()->route('admin_login')->with('success', 'Password is reset successfully');
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
        if ($request->password != null) {
            $request->validate([
                'password' => 'required|same:password',
                'repassword' => 'required|same:password'
            ]);
                $user->password = Hash::make($request->password);
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
