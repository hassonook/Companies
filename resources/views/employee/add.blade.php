@extends('layouts.master')
@section('title')
    NewEmployee
@endsection
@section('css')
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row navbar-custom">
    <ul class="list-unstyled topbar-nav mb-0">
        <li class="creat-btn">
            <div class="nav-link">
                <a class=" btn btn-sm btn-soft-primary" href="{{ route('employees') }}" role="button"><i class="fas fa-backward me-2"></i>{{ __('master.back') }}</a>
            </div>
        </li>
        <li>
            <h3>{{__('employees.newEmp')}}</h3>
        </li>
    </ul>
</div>

    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{ route('employee_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 row">
                                    <label for="company_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.company') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 @error('company_id') parsley-error @enderror" name="company_id" id="company_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>                                                
                                            @foreach ($companies as $company)
                                            <option value="{{ $company->id }}" @if(old('company_id') == $company->id) selected @endif>{{ App::getLocale() == 'ar' ? $company->company_name_ar : $company->company_name }}</option>                                                
                                            @endforeach
                                        </select>
                                        @error('company_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="f_name" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.empName') }}</label>
                                    <div class="col-sm-5">
                                        <input class="form-control @error('first_name') parsley-error @enderror" name="first_name" type="text" value="{{ old('first_name') }}" id="f_name" placeholder="{{ __('employees.firstName') }}" autocomplete="given-name">
                                        @error('first_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-5">
                                        <input class="form-control @error('second_name') parsley-error @enderror" name="second_name" type="text" value="{{ old('second_name') }}" id="s_name" placeholder="{{ __('employees.secondName') }}">
                                        @error('second_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-5 offset-2">
                                        <input class="form-control @error('third_name') parsley-error @enderror" name="third_name" type="text" value="{{ old('third_name') }}" id="t_name" placeholder="{{ __('employees.thirdName') }}">
                                        @error('third_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-5">
                                        <input class="form-control @error('last_name') parsley-error @enderror" name="last_name" type="text" value="{{ old('last_name') }}" id="l_name" placeholder="{{ __('employees.lastName') }}" autocomplete="family-name">
                                        @error('last_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="f_name_ar" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.empNameAr') }}</label>
                                    <div class="col-sm-5">
                                        <input class="form-control @error('first_name_ar') parsley-error @enderror" name="first_name_ar" type="text" value="{{ old('first_name_ar') }}" id="f_name_ar" placeholder="{{ __('employees.firstNameAr') }}">
                                        @error('first_name_ar')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-5">
                                        <input class="form-control @error('second_name_ar') parsley-error @enderror" name="second_name_ar" type="text" value="{{ old('second_name_ar') }}" id="s_name_ar" placeholder="{{ __('employees.secondNameAr') }}">
                                        @error('second_name_ar')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-5 offset-2">
                                        <input class="form-control @error('third_name_ar') parsley-error @enderror" name="third_name_ar" type="text" value="{{ old('third_name_ar') }}" id="t_name_ar" placeholder="{{ __('employees.thirdNameAr') }}">
                                        @error('third_name_ar')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-5">
                                        <input class="form-control @error('last_name_ar') parsley-error @enderror" name="last_name_ar" type="text" value="{{ old('last_name_ar') }}" id="l_name_ar" placeholder="{{ __('employees.lastNameAr') }}">
                                        @error('last_name_ar')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="passport_no" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.passNo') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('passport_no') parsley-error @enderror" name="passport_no" type="text" value="{{ old('passport_no') }}" id="passport_no">
                                        @error('passport_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="pass_issue_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.issueOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('pass_issue_date') parsley-error @enderror" name="pass_issue_date" type="date" value="{{ old('pass_issue_date') }}" id="pass_issue_date">
                                        @error('pass_issue_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="pass_expire_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.expireOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('pass_expire_date') parsley-error @enderror" name="pass_expire_date" type="date" value="{{ old('pass_expire_date') }}" id="pass_expire_date">
                                        @error('pass_expire_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="pass_photo"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.passPhoto') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="pass_photo" class="form-control @error('pass_photo') parsley-error @enderror" id="pass_photo">
                                        @error('pass_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.gender') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('gender') parsley-error @enderror" type="radio" name="gender" id="inlineRadio1" value="Male" @if(old('gender') == 'Male') checked @endif>
                                            <label class="form-check-label" for="inlineRadio1">{{ __('employees.male') }}</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('gender') parsley-error @enderror" type="radio" name="gender" id="inlineRadio2" value="Female @if(old('gender') == 'Female') checked @endif">
                                            <label class="form-check-label" for="inlineRadio2">{{ __('employees.female') }}</label>
                                        </div>
                                        @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="birth_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.birthDate') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('birth_date') parsley-error @enderror" name="birth_date" type="date" value="{{ old('birth_date') }}" id="birth_date">
                                        @error('birth_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="mobile1" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.mobileNo') }}</label>
                                    <div class="col-sm-3">
                                        <input class="form-control @error('mobile1') parsley-error @enderror" name="mobile1" type="tel" value="{{ old('mobile1') }}" id="mobile1" placeholder="{{ __('employees.mobileNo') }}">
                                        @error('mobile1')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control @error('mobile2') parsley-error @enderror" name="mobile2" type="tel" value="{{ old('mobile2') }}" id="mobile2" placeholder="{{ __('employees.mobileNo2') }}">
                                        @error('mobile2')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control @error('whatsapp') parsley-error @enderror" name="whatsapp" type="tel" value="{{ old('whatsapp') }}" id="whatsapp" placeholder="{{ __('employees.whatsAppNo') }}">
                                        @error('whatsapp')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="emp_photo"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.empPhoto') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="emp_photo" class="form-control @error('emp_photo') parsley-error @enderror" id="emp_photo">
                                        @error('emp_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="approval_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.approval') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select" name="approval_id" id="approval_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>                                                
                                            @foreach ($approvals as $approval)
                                            <option value="{{ $approval->id }} @if(old('approval_id') == $approval->id) selected @endif">{{ $approval->vp_no }}</option>                                                
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nationality_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.nationality') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select @error('nationality_id') parsley-error @enderror" name="nationality_id" id="nationality_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>                                                
                                            @foreach ($nationalities as $nationality)
                                            <option value="{{ $nationality->id }} @if(old('nationality_id') == $nationality->id) selected @endif">{{App::getLocale() == 'ar' ? $nationality->name_ar : $nationality->name}}</option>                                                
                                            @endforeach
                                        </select>
                                        @error('nationality_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="martial_status_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.martialStatus') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select" name="martial_status_id" id="martial_status_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>                                                
                                            @foreach ($martial_statuses as $martial_status)
                                            <option value="{{ $martial_status->id }} @if(old('martial_status_id') == $martial_status->id) selected @endif">{{App::getLocale() == 'ar' ? $martial_status->name_ar : $martial_status->name}}</option>                                                
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="education_level_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.educationLevel') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select" name="education_level_id" id="education_level_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>                                                
                                            @foreach ($education_levels as $education_level)
                                            <option value="{{ $education_level->id }} @if(old('education_level_id') == $education_level->id) selected @endif">{{App::getLocale() == 'ar' ? $education_level->name_ar : $education_level->name}}</option>                                                
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="profession_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.profession') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select" name="profession_id" id="profession_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>                                                
                                            @foreach ($professions as $profession)
                                            <option value="{{ $profession->id }} @if(old('profession_id') == $profession->id) selected @endif">{{App::getLocale() == 'ar' ? $profession->name_ar : $profession->name}}</option>                                                
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="job_title_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.jobTitle') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select @error('job_title_id') parsley-error @enderror" name="job_title_id" id="job_title_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>                                                
                                            @foreach ($job_titles as $job_title)
                                            <option value="{{ $job_title->id }} @if(old('job_title_id') == $job_title->id) selected @endif">{{App::getLocale() == 'ar' ? $job_title->name_ar : $job_title->name}}</option>                                                
                                            @endforeach
                                        </select>
                                        @error('job_title_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="certificate"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.certificate') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="certificate" class="form-control @error('certificate') parsley-error @enderror" id="certificate">
                                        @error('certificate')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="resume"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.resume') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="resume" class="form-control @error('resume') parsley-error @enderror" id="resume">
                                        @error('resume')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.email') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('email') parsley-error @enderror" name="email" type="email" value="{{ old('email') }}" id="email" autocomplete="off">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="address" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.address') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('address') parsley-error @enderror" name="address" type="text" value="{{ old('address') }}" id="address" autocomplete="off">
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="hire_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.hireDate') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('hire_date') parsley-error @enderror" name="hire_date" type="date" value="{{ old('hire_date') }}" id="hire_date">
                                        @error('hire_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="visa_no" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.visaNo') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('visa_no') parsley-error @enderror" name="visa_no" type="text" value="{{ old('visa_no') }}" id="visa_no">
                                        @error('visa_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="visa_issue_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.issueOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('visa_issue_date') parsley-error @enderror" name="visa_issue_date" type="date" value="{{ old('visa_issue_date') }}" id="visa_issue_date">
                                        @error('visa_issue_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="visa_expire_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.expireOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('visa_expire_date') parsley-error @enderror" name="visa_expire_date" type="date" value="{{ old('visa_expire_date') }}" id="visa_expire_date">
                                        @error('visa_expire_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="visa_photo"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.visaPhoto') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="visa_photo" class="form-control @error('visa_photo') parsley-error @enderror" id="visa_photo">
                                        @error('visa_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="qid_no" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.qidNo') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('qid_no') parsley-error @enderror" name="qid_no" type="text" value="{{ old('qid_no') }}" id="qid_no">
                                        @error('qid_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="qid_issue_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.issueOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('qid_issue_date') parsley-error @enderror" name="qid_issue_date" type="date" value="{{ old('qid_issue_date') }}" id="qid_issue_date">
                                        @error('qid_issue_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="qid_expire_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.expireOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('qid_expire_date') parsley-error @enderror" name="qid_expire_date" type="date" value="{{ old('qid_expire_date') }}" id="qid_expire_date">
                                        @error('qid_expire_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="qid_photo"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.qidPhoto') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="qid_photo" class="form-control @error('qid_photo') parsley-error @enderror" id="qid_photo">
                                        @error('qid_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="contract"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.contract') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="contract" class="form-control @error('contract') parsley-error @enderror" id="contract">
                                        @error('contract')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="salary" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.salary') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('salary') parsley-error @enderror" name="salary" type="text" value="{{ old('salary') }}" id="salary">
                                        @error('salary')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="bank_name" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.bankName') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('bank_name') parsley-error @enderror" name="bank_name" type="text" value="{{ old('bank_name') }}" id="bank_name">
                                        @error('bank_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="bank_account" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.bankAccount') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('bank_account') parsley-error @enderror" name="bank_account" type="text" value="{{ old('bank_account') }}" id="bank_account">
                                        @error('bank_account')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="employee_status_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('employees.status') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select @error('employee_status_id') parsley-error @enderror" name="employee_status_id" id="employee_status_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>                                                
                                            @foreach ($employee_statuses as $employee_status)
                                            <option value="{{ $employee_status->id }} @if(old('employee_status_id') == $employee_status->id) selected @endif">{{App::getLocale() == 'ar' ? $employee_status->name_ar : $employee_status->name}}</option>                                                
                                            @endforeach
                                        </select>
                                        @error('employee_status_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="mb-3 row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">{{ __('master.submit') }}</button>
                                        <a href="{{ route('employees') }}" class="btn btn-danger">{{ __('master.cancel') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('select').select2({
                width: '100%'
            });
            $('select.parsley-error').next().find('span.select2-selection.select2-selection--single').addClass('parsley-error');
        });
    </script>
@endsection
