<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Mail\Websitemail;
use Auth;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::get();
        return view('company.list', compact('companies'));
    }

    public function details($id){
        $company = Company::find($id);
        return view('company.details', compact('company'));
    }

    public function add(){
        Storage::disk('uploads')->move('dir1', 'dir2');
        return view('company.add');
    }

    public function store(Request $request){
        $company = new Company();
        //Create temp folder for uploading files
        $directory = $request->company_name.'/profile/';
        Storage::disk('uploads')->makeDirectory($directory, 0777, true);
        $request->validate([
            'company_name' => 'required|max:30',
            'company_name_ar' => 'required|max:30',
            'company_address' => 'required|max:50',
            'company_logo' => 'sometimes|file|mimes:pdf,jpg,jpeg,png,gif',
            'owner_id' => 'required',
            'owner_phone' => 'required',
            'registration_id' => 'required',
            'reg_issue_date' => 'required',
            'reg_expire_date' => 'required',
            'reg_photo' => 'required|file|mimes:pdf,jpg,jpeg,png,gif',
            'commercial_id' => 'required',
            'com_issue_date' => 'required',
            'com_expire_date' => 'required',
            'com_photo' => 'required|file|mimes:pdf,jpg,jpeg,png,gif',
            'license_no' => 'required',
            'lic_issue_date' => 'required',
            'lic_expire_date' => 'required',
            'lic_photo' => 'required|file|mimes:pdf,jpg,jpeg,png,gif',
            'main_branch' => 'required',
            'business' => 'required',
            'company_address' => 'required',
            'telephone' => 'regex:/^(\+?\d{1,3}[\s-]?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
        ]);
        $company->company_name = $request->company_name;
        $company->company_name_ar = $request->company_name_ar;
        if ($request->hasFile('company_logo')) {
            $logo = $request->file('company_logo');
            $ext = $request->file('company_logo')->extension();
            $logoFileName = $request->company_name.'_logo.'.$ext;
            $company->company_logo = $logoFileName;
            Storage::disk('uploads')->putFileAs($directory, $logo, $logoFileName);

        }

        $company->owner_id = $request->owner_id;
        $company->owner_phone = $request->owner_phone;
        $company->registration_id = $request->registration_id;
        $company->reg_issue_date = $request->reg_issue_date;
        $company->reg_expire_date = $request->reg_expire_date;

        $reg_photo = $request->file('reg_photo');
        $ext = $request->file('reg_photo')->extension();
        $regFileName = $request->company_name.'_reg.'.$ext;
        $company->reg_photo = $regFileName;
        Storage::disk('uploads')->putFileAs($directory, $reg_photo, $regFileName);

        $company->commercial_id = $request->commercial_id;
        $company->com_issue_date = $request->com_issue_date;
        $company->com_expire_date = $request->com_expire_date;

        $com_photo = $request->file('com_photo');
        $ext = $request->file('com_photo')->extension();
        $comFileName = $request->company_name.'_com.'.$ext;
        $company->com_photo = $comFileName;
        Storage::disk('uploads')->putFileAs($directory, $com_photo, $comFileName);

        $company->license_no = $request->license_no;
        $company->lic_issue_date = $request->lic_issue_date;
        $company->lic_expire_date = $request->lic_expire_date;

        $lic_photo = $request->file('lic_photo');
        $ext = $request->file('lic_photo')->extension();
        $licFileName = $request->company_name.'_lic.'.$ext;
        $company->lic_photo = $licFileName;
        Storage::disk('uploads')->putFileAs($directory, $lic_photo, $licFileName);

        $company->main_branch = $request->main_branch;
        $company->business = $request->business;
        $company->company_address = $request->company_address;
        $company->telephone = $request->telephone;
        $company->email = $request->email;
        $company->website = $request->website;
        $company->created_by = Auth::id();

        try {
            $company->save();
            return redirect()->route('companies')->with('success', 'Company added successfully! ');

        } catch (\Throwable $th) {
            Storage::disk('uploads')->deleteDirectory($directory);
            return redirect()->back()->with('error', $th->getMessage());
        }

    }

    public function edit($id){
        $company = Company::find($id);
        return view('company.edit', compact('company'));
    }

    public function update(Request $request, $id){
        $company = Company::find($id);
        $request->validate([
            'company_name' => 'required|max:30',
            'company_name_ar' => 'required|max:30',
            'company_address' => 'required|max:50',
            'company_logo' => 'nullable|file|mimes:pdf,jpg,jpeg,png,gif',
            'owner_id' => 'required',
            'owner_phone' => 'required',
            'registration_id' => 'required',
            'reg_issue_date' => 'required',
            'reg_expire_date' => 'required',
            'reg_photo' => 'sometimes|file|mimes:pdf,jpg,jpeg,png,gif',
            'commercial_id' => 'required',
            'com_issue_date' => 'required',
            'com_expire_date' => 'required',
            'com_photo' => 'sometimes|file|mimes:pdf,jpg,jpeg,png,gif',
            'license_no' => 'required',
            'lic_issue_date' => 'required',
            'lic_expire_date' => 'required',
            'lic_photo' => 'sometimes|file|mimes:pdf,jpg,jpeg,png,gif',
            'main_branch' => 'required',
            'business' => 'required',
            'company_address' => 'required',
            'telephone' => 'regex:/^(\+?\d{1,3}[\s-]?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
        ]);

        $directory = $company->company_name.'/profile/';
        if (!Storage::disk('uploads')->exists($directory, 0777, true)) {
            Storage::disk('uploads')->makeDirectory($directory, 0777, true);
        }

        $company->company_name = $request->company_name;
        $company->company_name_ar = $request->company_name_ar;

        if ($request->hasFile('company_logo')) {
            $logo = $request->file('company_logo');
            $ext = $request->file('company_logo')->extension();
            $logoFileName = $request->company_name.'_logo.'.$ext;
            $company->company_logo = $logoFileName;
            Storage::disk('uploads')->putFileAs($directory, $logo, $logoFileName);
        }

        $company->owner_id = $request->owner_id;
        $company->owner_phone = $request->owner_phone;
        $company->registration_id = $request->registration_id;
        $company->reg_issue_date = $request->reg_issue_date;
        $company->reg_expire_date = $request->reg_expire_date;

        if ($request->hasFile('reg_photo')) {
            $reg_photo = $request->file('reg_photo');
            $ext = $request->file('reg_photo')->extension();
            $regFileName = $request->company_name.'_reg.'.$ext;
            $company->reg_photo = $regFileName;
            Storage::disk('uploads')->putFileAs($directory, $reg_photo, $regFileName);
        }

        $company->commercial_id = $request->commercial_id;
        $company->com_issue_date = $request->com_issue_date;
        $company->com_expire_date = $request->com_expire_date;

        if ($request->hasFile('com_photo')) {
            $com_photo = $request->file('com_photo');
            $ext = $request->file('com_photo')->extension();
            $comFileName = $request->company_name.'_com.'.$ext;
            $company->com_photo = $comFileName;
            Storage::disk('uploads')->putFileAs($directory, $com_photo, $comFileName);
        }

        $company->license_no = $request->license_no;
        $company->lic_issue_date = $request->lic_issue_date;
        $company->lic_expire_date = $request->lic_expire_date;

        if ($request->hasFile('lic_photo')) {
            $lic_photo = $request->file('lic_photo');
            $ext = $request->file('lic_photo')->extension();
            $licFileName = $request->company_name.'_lic.'.$ext;
            $company->lic_photo = $licFileName;
            Storage::disk('uploads')->putFileAs($directory, $lic_photo, $licFileName);
        }

        $company->main_branch = $request->main_branch;
        $company->business = $request->business;
        $company->company_address = $request->company_address;
        $company->telephone = $request->telephone;
        $company->email = $request->email;
        $company->website = $request->website;
        $company->modified_by = Auth::id();
        try {
            $company->update();
            return redirect()->route('companies')->with('success', 'Company updated successfully! ');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function delete($id){
        $company = Company::find($id);
        try {
            Storage::disk('uploads')->deleteDirectory($company->company_name);
            $company->delete();
            return redirect()->route('companies')->with('success', 'User deleted successfully! ');
        } catch (\Throwable $th) {
            return redirect()->back->with('error', $th->getMessage());
        }

    }

}
