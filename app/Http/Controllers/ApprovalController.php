<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Approval;
use App\Models\Company;
use App\Models\Country;
use App\Models\Job_title;
use App\Mail\Websitemail;
use Auth;

class ApprovalController extends Controller
{
    public function index(){
        $approvals = Approval::get();
        return view('approval.list', compact('approvals'));
    }

    public function details($id){
        $approval = Approval::find($id);
        return view('approval.details', compact('approval'));
    }

    public function add(){
        $companies = Company::get();
        $nationalities = Country::get();
        $job_titles = Job_title::get();
        return view('approval.add', compact('companies','nationalities','job_titles'));
    }

    public function store(Request $request){
        $approval = new Approval();
        $request->validate([
            'vp_no' => 'required',
            'req_no' => 'required',
            'issue_date' => 'required|date',
            'expire_date' => 'required|date',
            'gender' => 'required|max:6',
            'company_id' => 'required',
            'nationality_id' => 'required',
            'job_title_id' => 'required',
            'total' => 'required|numeric',
            'consumed' => 'required|numeric'
        ]);
        $approval->vp_no = $request->vp_no;
        $approval->req_no = $request->req_no;
        $approval->issue_date = $request->issue_date;
        $approval->expire_date = $request->expire_date;
        $approval->gender = $request->gender;
        $approval->company_id = $request->company_id;
        $approval->nationality_id = $request->nationality_id;
        $approval->job_title_id = $request->job_title_id;
        $approval->total = $request->total;
        $approval->consumed = $request->consumed;

        $approval->created_by = Auth::id();


        $approval->save();
        return redirect()->route('approvals')->with('success', 'Approval added successfully! ');
    }

    public function edit($id){
        $approval = Approval::find($id);
        $companies = Company::get();
        $nationalities = Country::get();
        $job_titles = Job_title::get();
        return view('approval.edit', compact('approval','companies','nationalities','job_titles'));
    }

    public function update(Request $request, $id){
        $approval = Approval::find($id);
        $request->validate([
            'vp_no' => 'required',
            'req_no' => 'required',
            'issue_date' => 'required|date',
            'expire_date' => 'required|date',
            'gender' => 'required|max:6',
            'company_id' => 'required',
            'nationality_id' => 'required',
            'job_title_id' => 'required',
            'total' => 'required|numeric',
            'consumed' => 'required|numeric'
        ]);

        $approval->vp_no = $request->vp_no;
        $approval->req_no = $request->req_no;
        $approval->issue_date = $request->issue_date;
        $approval->expire_date = $request->expire_date;
        $approval->gender = $request->gender;
        $approval->company_id = $request->company_id;
        $approval->nationality_id = $request->nationality_id;
        $approval->job_title_id = $request->job_title_id;
        $approval->total = $request->total;
        $approval->consumed = $request->consumed;

        $approval->modified_by = Auth::id();

        return redirect()->route('approvals')->with('success', 'Approval updated successfully! ');
    }

    public function delete($id){
        $approval = Approval::find($id);
        try {
            $approval->delete();
        } catch (\Throwable $th) {
            return redirect()->back->with('error', 'Cannot Delete this item please contact system admin!');
        }
        return redirect()->route('approval')->with('success', 'User deleted successfully! ');
    }

}
