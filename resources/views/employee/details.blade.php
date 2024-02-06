@extends('layouts.master')
@section('title') Employee-details @endsection
    @section('content')
        <div class="row navbar-custom">
            <ul class="list-unstyled topbar-nav mb-0">
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="{{ route('employees') }}" role="button"><i class="fas fa-backward me-2"></i>Back</a>
                    </div>
                </li>
                <li>
                    <h3>Employee Details</h3>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <img src="{{ URL::asset('uploads/'.$employee->company->company_name.'/employees/'.$employee->first_name.$employee->id.'/'.$employee->emp_photo) }}" alt="" class=" mx-auto  d-block" height="300">
                            </div><!--end col-->
                            <div class="col-lg-6 align-self-center">
                                <div class="single-pro-detail">
                                    <p class="mb-1"></p>
                                    <div class="custom-border mb-3"></div>
                                    <h4><span>QID: </span><span class="text-danger">{{ $employee->qid_no ?? '' }}</span></h4>
                                    <h3 class="pro-title">{{ $employee->first_name.' '.$employee->second_name .' '.$employee->third_name .' '.$employee->last_name  }}</h3>
                                    <h4 class="text-muted mb-0">{{ $employee->job_title->name }}<span class="text-success">{{' @'. $employee->company->company_name }}</span><span class="text-primary fw-bold ms-2">Company</span></h4>
                                    <h4><span>Profession: </span><span class="text-danger">{{ $employee->profession->name ?? '' }}</span></h4>
                                    <h4><span>Nationality: </span><span class="text-danger">{{ $employee->nationality->name }}</span></h4>
                                    <h4><span>Salary: </span><span class="text-danger">{{ $employee->salary }}$</span></h4>
                                    <h4><span>Employee Status: </span><span class="text-success">{{ $employee->employee_status->name }}</span></h4>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div>

@endsection