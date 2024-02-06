<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Approval;
use App\Models\Company;
use App\Models\Nationality;
use App\Models\Martial_status;
use App\Models\Education_level;
use App\Models\Profession;
use App\Models\Job_title;
use App\Models\Employee_status;
use App\Mail\Websitemail;
use Auth;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::get();
        return view('employee.list', compact('employees'));
    }

    public function details($id){
        $employee = Employee::find($id);
        return view('employee.details', compact('employee'));
    }
    
    public function add(){
        $approvals = Approval::get();
        $companies = Company::get();
        $nationalities = Nationality::get();
        $martial_statuses = Martial_status::get();
        $education_levels = Education_level::get();
        $professions = Profession::get();
        $job_titles = Job_title::get();
        $employee_statuses = Employee_status::get();
        
        return view('employee.add', compact(
            'approvals','companies','nationalities','martial_statuses',
            'education_levels','professions','job_titles','employee_statuses'));
    }

    public function store(Request $request){
        $employee = new Employee();
        //dd('this is company:' . $request->company_id);
        $request->validate([
            'first_name' => 'required|max:15',
            'second_name' => 'required|max:15',
            'third_name' => 'required|max:15',
            'last_name' => 'required|max:15',
            'first_name_ar' => 'required|max:15',
            'second_name_ar' => 'required|max:15',
            'third_name_ar' => 'required|max:15',
            'last_name_ar' => 'required|max:15',
            'passport_no' => 'required',
            'pass_issue_date' => 'required|date',
            'pass_expire_date' => 'required|date|after:pass_issue_date',
            'pass_photo' => 'required|file|mimes:pdf,jpg,jpeg,png,gif|max:5120',
            'gender' => 'required',
            'birth_date' => 'date',
            'nationality_id' => 'required',
            'company_id' => 'required',
            'job_title_id' => 'required',
            'mobile1' => 'required|regex:/^(\+?\d{1,3}[\s-]?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
            'address' => 'max:50',
            'employee_status_id' => 'required'
           
        ]);

        if ($request->mobile2 != null) {
            $request->validate([
                'mobile2' => 'regex:/^(\+?\d{1,3}[\s-]?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/'
            ]);
        }
        if ($request->whatsapp != null) {
            $request->validate([
                'whatsapp' => 'regex:/^(\+?\d{1,3}[\s-]?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/'
            ]);
        }
        if ($request->email != null) {
            $request->validate([
                'email' => 'email'
            ]);
        }
        if ($request->hire_date != null) {
            $request->validate([
                'hire_date' => 'date'
            ]);
        }
        if ($request->visa_no != null) {
            $request->validate([
                'visa_no' => 'max:50',
                'visa_issue_date' => 'date',
                'visa_expire_date' => 'date|after:pass_issue_date',
                'visa_photo' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->qid_no != null) {
            $request->validate([
                'qid_no' => 'numeric',
                'qid_issue_date' => 'date',
                'qid_expire_date' => 'date|after:qid_issue_date',
                'qid_photo' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->hasFile('emp_photo')) {
            $request->validate([
                'emp_photo' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->hasFile('certificate')) {
            $request->validate([
                'certificate' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->hasFile('resume')) {
            $request->validate([
                'resume' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->hasFile('contract')) {
            $request->validate([
                'contract' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->salary != null) {
            $request->validate([
                'salary' => 'numeric',
                'bank_name' => 'max:30',
                'bank_account' => 'max:30'
            ]);
        }
        $employee->company_id = $request->company_id;
        $employee->first_name = $request->first_name;
        $employee->second_name = $request->second_name;
        $employee->third_name = $request->third_name;
        $employee->last_name = $request->last_name;
        $employee->first_name_ar = $request->first_name_ar;
        $employee->second_name_ar = $request->second_name_ar;
        $employee->third_name_ar = $request->third_name_ar;
        $employee->last_name_ar = $request->last_name_ar;
        $employee->nationality_id = $request->nationality_id;
        $employee->job_title_id = $request->job_title_id;
        $employee->gender = $request->gender;
        $employee->birth_date = $request->birth_date;
        $employee->martial_status_id = $request->martial_status_id;
        $employee->approval_id = $request->approval_id;
        $employee->passport_no = $request->passport_no;
        $employee->pass_issue_date = $request->pass_issue_date;
        $employee->pass_expire_date = $request->pass_expire_date;
        // Create directory to store files.
        $tempDirectory = 'Temp';
        Storage::disk('uploads')->makeDirectory($tempDirectory, 0777, true);
        if ($request->hasFile('pass_photo')) {
            $passFile = $request->file('pass_photo');
            $ext = $request->file('pass_photo')->extension();
            $passFileName = 'passport'.time().'.'.$ext;
            $employee->pass_photo = $passFileName;
            Storage::disk('uploads')->putFileAs($tempDirectory, $passFile, $passFileName);
        }
        if ($request->hasFile('emp_photo')) {
            $photoFile = $request->file('emp_photo');
            $ext = $request->file('emp_photo')->extension();
            $photoFileName = 'photo'.time().'.'.$ext;
            $employee->emp_photo = $photoFileName;
            Storage::disk('uploads')->putFileAs($tempDirectory, $photoFile, $photoFileName);
        }
        $employee->visa_no = $request->visa_no;
        $employee->visa_issue_date = $request->visa_issue_date;
        $employee->visa_expire_date = $request->visa_expire_date;
        if ($request->hasFile('visa_photo')) {
            $visaFile = $request->file('visa_photo');
            $ext = $request->file('visa_photo')->extension();
            $visaFileName = 'visa'.time().'.'.$ext;
            $employee->pass_photo = $visaFileName;
            Storage::disk('uploads')->putFileAs($tempDirectory, $visaFile, $visaFileName);
        }
        $employee->qid_no = $request->qid_no;
        $employee->qid_issue_date = $request->qid_issue_date;
        $employee->qid_expire_date = $request->qid_expire_date;
        if ($request->hasFile('qid_photo')) {
            $qidFile = $request->file('qid_photo');
            $ext = $request->file('qid_photo')->extension();
            $qidFileName = 'qid'.time().'.'.$ext;
            $employee->qid_photo = $qidFileName;
            Storage::disk('uploads')->putFileAs($tempDirectory, $qidFile, $qidFileName);
        }
        $employee->education_level_id = $request->education_level_id;
        $employee->profession_id = $request->profession_id;
        if ($request->hasFile('certificate')) {
            $certFile = $request->file('certificate');
            $ext = $request->file('certificate')->extension();
            $certFileName = 'certificate'.time().'.'.$ext;
            $employee->certificate = $certFileName;
            Storage::disk('uploads')->putFileAs($tempDirectory, $certFile, $certFileName);
        }
        if ($request->hasFile('resume')) {
            $resumeFile = $request->file('resume');
            $ext = $request->file('resume')->extension();
            $resumeFileName = 'resume'.time().'.'.$ext;
            $employee->resume = $resumeFileName;
            Storage::disk('uploads')->putFileAs($tempDirectory, $resumeFile, $resumeFileName);
        }
        $employee->hire_date = $request->hire_date;
        if ($request->hasFile('contract')) {
            $contractFile = $request->file('contract');
            $ext = $request->file('contract')->extension();
            $contractFileName = 'contract'.time().'.'.$ext;
            $employee->contract = $contractFileName;
            Storage::disk('uploads')->putFileAs($tempDirectory, $contractFile, $contractFileName);
        }
        $employee->salary = $request->salary;
        $employee->bank_name = $request->bank_name;
        $employee->bank_account = $request->bank_account;
        $employee->email = $request->email;
        $employee->mobile1 = $request->mobile1;
        $employee->mobile2 = $request->mobile2;
        $employee->whatsapp = $request->whatsapp;
        $employee->address = $request->address;
        $employee->employee_status_id = $request->employee_status_id;
        $employee->created_by = Auth::id();
        
        try {
            $employee->save();
            $directory = $employee->company->company_name.'/employees/'.$employee->first_name.$employee->id;
            Storage::disk('uploads')->move($tempDirectory, $directory);
            return redirect()->route('employees')->with('success', 'Employee added successfully! ');
        } catch (\Throwable $th) {
            //throw $th;
            Storage::disk('uploads')->deleteDirectory(tempDirectory);
        }
    }

    public function edit($id){
        $employee = Employee::find($id);
        $approvals = Approval::get();
        $companies = Company::get();
        $nationalities = Nationality::get();
        $martial_statuses = Martial_status::get();
        $education_levels = Education_level::get();
        $professions = Profession::get();
        $job_titles = Job_title::get();
        $employee_statuses = Employee_status::get();
        return view('employee.edit', compact('employee',
        'approvals','companies','nationalities','martial_statuses',
        'education_levels','professions','job_titles','employee_statuses'));
    }

    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $oldName = $employee->first_name;
        $request->validate([
            'first_name' => 'required|max:15',
            'second_name' => 'required|max:15',
            'third_name' => 'required|max:15',
            'last_name' => 'required|max:15',
            'first_name_ar' => 'required|max:15',
            'second_name_ar' => 'required|max:15',
            'third_name_ar' => 'required|max:15',
            'last_name_ar' => 'required|max:15',
            'passport_no' => 'required',
            'pass_issue_date' => 'required|date',
            'pass_expire_date' => 'required|date|after:pass_issue_date',
            'gender' => 'required',
            'birth_date' => 'date',
            'nationality_id' => 'required',
            'job_title_id' => 'required',
            'company_id' => 'required',
            'mobile1' => 'required|regex:/^(\+?\d{1,3}[\s-]?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
            'address' => 'max:50',
            'employee_status_id' => 'required'
           
        ]);
        if ($request->hasFile('pass_photo')) {
            $request->validate([
            'pass_photo' => 'required|file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }

        if ($request->mobile2 != null) {
            $request->validate([
                'mobile2' => 'regex:/^(\+?\d{1,3}[\s-]?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/'
            ]);
        }
        if ($request->whatsapp != null) {
            $request->validate([
                'whatsapp' => 'regex:/^(\+?\d{1,3}[\s-]?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/'
            ]);
        }
        if ($request->email != null) {
            $request->validate([
                'email' => 'email'
            ]);
        }
        if ($request->hire_date != null) {
            $request->validate([
                'hire_date' => 'date'
            ]);
        }
        if ($request->visa_no != null) {
            $request->validate([
                'visa_no' => 'max:50',
                'visa_issue_date' => 'date',
                'visa_expire_date' => 'date|after:pass_issue_date',
                'visa_photo' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->qid_no != null) {
            $request->validate([
                'qid_no' => 'numeric',
                'qid_issue_date' => 'date',
                'qid_expire_date' => 'date|after:qid_issue_date',
                'qid_photo' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->hasFile('emp_photo')) {
            $request->validate([
                'emp_photo' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->hasFile('certificate')) {
            $request->validate([
                'certificate' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->hasFile('resume')) {
            $request->validate([
                'resume' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->hasFile('contract')) {
            $request->validate([
                'contract' => 'file|mimes:pdf,jpg,jpeg,png,gif|max:5120'
            ]);
        }
        if ($request->salary != null) {
            $request->validate([
                'salary' => 'numeric',
                'bank_name' => 'max:30',
                'bank_account' => 'max:30'
            ]);
        }

        
        $directory = $employee->company->company_name.'/employees/'.$employee->first_name.$employee->id;
        if (!Storage::disk('uploads')->exists($directory, 0777, true)) {
            Storage::disk('uploads')->makeDirectory($directory, 0777, true);
        }
        $employee->first_name = $request->first_name;
        $employee->second_name = $request->second_name;
        $employee->third_name = $request->third_name;
        $employee->last_name = $request->last_name;
        $employee->first_name_ar = $request->first_name_ar;
        $employee->second_name_ar = $request->second_name_ar;
        $employee->third_name_ar = $request->third_name_ar;
        $employee->last_name_ar = $request->last_name_ar;
        $employee->gender = $request->gender;
        $employee->approval_id = $request->approval_id;
        if ($request->hasFile('emp_photo')) {
            $photoFile = $request->file('emp_photo');
            $ext = $request->file('emp_photo')->extension();
            $photoFileName = 'photo'.time().'.'.$ext;
            $employee->emp_photo = $photoFileName;
            Storage::disk('uploads')->putFileAs($directory, $photoFile, $photoFileName);
        }
        $employee->nationality_id = $request->nationality_id;
        $employee->martial_status_id = $request->martial_status_id;
        $employee->education_level_id = $request->education_level_id;
        $employee->profession_id = $request->profession_id;

        if ($request->hasFile('certificate')) {
            $certFile = $request->file('certificate');
            $ext = $request->file('certificate')->extension();
            $certFileName = 'certificate'.time().'.'.$ext;
            $employee->certificate = $certFileName;
            Storage::disk('uploads')->putFileAs($directory, $certFile, $certFileName);
        }

        if ($request->hasFile('resume')) {
            $resumeFile = $request->file('resume');
            $ext = $request->file('resume')->extension();
            $resumeFileName = 'resume'.time().'.'.$ext;
            $employee->resume = $resumeFileName;
            Storage::disk('uploads')->putFileAs($directory, $resumeFile, $resumeFileName);
        }


        $employee->company_id = $request->company_id;
        $employee->job_title_id = $request->job_title_id;
        $employee->email = $request->email;
        $employee->mobile1 = $request->mobile1;
        $employee->mobile2 = $request->mobile2;
        $employee->address = $request->address;
        $employee->birth_date = $request->birth_date;
        $employee->hire_date = $request->hire_date;
        $employee->passport_no = $request->passport_no;
        $employee->pass_issue_date = $request->pass_issue_date;
        $employee->pass_expire_date = $request->pass_expire_date;

        if ($request->hasFile('pass_photo')) {
            $passFile = $request->file('pass_photo');
            $ext = $request->file('pass_photo')->extension();
            $passFileName = 'passport'.time().'.'.$ext;
            $employee->pass_photo = $passFileName;
            Storage::disk('uploads')->putFileAs($directory, $passFile, $passFileName);
        }

        $employee->visa_no = $request->visa_no;
        $employee->visa_issue_date = $request->visa_issue_date;
        $employee->visa_expire_date = $request->visa_expire_date;

        if ($request->hasFile('visa_photo')) {
            $visaFile = $request->file('visa_photo');
            $ext = $request->file('visa_photo')->extension();
            $visaFileName = 'visa'.time().'.'.$ext;
            $employee->pass_photo = $visaFileName;
            Storage::disk('uploads')->putFileAs($directory, $visaFile, $visaFileName);
        }
        
        $employee->qid_no = $request->qid_no;
        $employee->qid_issue_date = $request->qid_issue_date;
        $employee->qid_expire_date = $request->qid_expire_date;

        if ($request->hasFile('qid_photo')) {
            $qidFile = $request->file('qid_photo');
            $ext = $request->file('qid_photo')->extension();
            $qidFileName = 'qid'.time().'.'.$ext;
            $employee->qid_photo = $qidFileName;
            Storage::disk('uploads')->putFileAs($directory, $qidFile, $qidFileName);
        }

        if ($request->hasFile('contract')) {
            $contractFile = $request->file('contract');
            $ext = $request->file('contract')->extension();
            $contractFileName = 'contract'.time().'.'.$ext;
            $employee->contract = $contractFileName;
            Storage::disk('uploads')->putFileAs($directory, $contractFile, $contractFileName);
        }
        
        $employee->salary = $request->salary;
        $employee->bank_name = $request->bank_name;
        $employee->bank_account = $request->bank_account;
        $employee->employee_status_id = $request->employee_status_id;
        $employee->modified_by = Auth::id();
        $employee->update();

        if ($oldName != $employee->first_name) {
            $newDirectory = $employee->company->company_name.'/employees/'.$employee->first_name.$employee->id;

            Storage::disk('uploads')->makeDirectory($directory, 0777, true);
           // dd($directory.'  '.$newDirectory);
            Storage::disk('uploads')->move($directory, $newDirectory);
        }


        return redirect()->route('employees')->with('success', 'Employee updated successfully! ');
    }

    public function delete($id){
        $employee = Employee::find($id);
        $directory = $employee->company->company_name.'/employees/'.$employee->first_name.$employee->id;
        Storage::disk('uploads')->deleteDirectory($directory);
        $employee->delete();
        return redirect()->route('employees')->with('success', 'User deleted successfully! ');
    }


}
