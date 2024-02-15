@extends('layouts.master')
@section('title')
    Employee-details
@endsection
@section('css')

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
                <h3>{{ __('employees.empDetails') }}</h3>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 align-self-start">
                            <img src="{{ URL::asset('uploads/' . $employee->company->company_name . '/employees/' . $employee->first_name . $employee->id . '/' . $employee->emp_photo) }}"
                                alt="" class="mx-auto d-block" height="300">
                        </div><!--end col-->
                        <div class="col-lg-8 align-self-center">
                            <div class="single-pro-detail">
                                <p class="mb-1"></p>
                                <div class="custom-border mb-3"></div>
                                <dl class="dl-horizontal">
                                    <dt>{{ __('employees.empName') }}</dt>
                                    <dd>{{ $employee->first_name . ' ' . $employee->second_name . ' ' . $employee->third_name . ' ' . $employee->last_name }}
                                    </dd>
                                    <dt>{{ __('employees.empNameAr') }}</dt>
                                    <dd>{{ $employee->first_name_ar . ' ' . $employee->second_name_ar . ' ' . $employee->third_name_ar . ' ' . $employee->last_name_ar }}
                                    </dd>
                                    <dt>{{ __('employees.company') }}</dt>
                                    <dd>{{ App::getLocale() == 'ar' ? $employee->company->company_name_ar : $employee->company->company_name }}
                                    </dd>
                                    <dt>{{ __('employees.jobTitle') }}</dt>
                                    <dd>
                                        {{ App::getLocale() == 'ar' ? $employee->job_title->name_ar : $employee->job_title->name }}
                                    </dd>
                                    <dt>{{ __('employees.hireDate') }}</dt>
                                    <dd>{{ $employee->hire_date }}</dd>
                                    @if ($employee->qid_no != null)
                                        <dt>{{ __('employees.qidNo') }}</dt>
                                        <dd>{{ $employee->qid_no }}</dd>
                                        <dt>{{ __('employees.issueOn') }}</dt>
                                        <dd>{{ $employee->qid_issue_date }}</dd>
                                        <dt>{{ __('employees.expireOn') }}</dt>
                                        <dd>{{ $employee->qid_expire_date }}</dd>
                                    @else
                                        <dt>{{ __('employees.qidNo') }}</dt>
                                        <dd>{{ __('master.na') }}</dd>
                                    @endif
                                    <dt>{{ __('employees.passNo') }}</dt>
                                    <dd>{{ $employee->passport_no }}</dd>
                                    <dt>{{ __('employees.issueOn') }}</dt>
                                    <dd>{{ $employee->pass_issue_date }}</dd>
                                    <dt>{{ __('employees.expireOn') }}</dt>
                                    <dd>{{ $employee->pass_expire_date }}</dd>
                                    @if ($employee->visa_no != null)
                                        <dt>{{ __('employees.visaNo') }}</dt>
                                        <dd>{{ $employee->visa_no }}</dd>
                                        <dt>{{ __('employees.issueOn') }}</dt>
                                        <dd>{{ $employee->visa_issue_date }}</dd>
                                        <dt>{{ __('employees.expireOn') }}</dt>
                                        <dd>{{ $employee->visa_expire_date }}</dd>
                                    @else
                                        <dt>{{ __('employees.visaNo') }}</dt>
                                        <dd>{{ __('master.na') }}</dd>
                                    @endif
                                    <dt>{{ __('employees.email') }}</dt>
                                    <dd>{{ $employee->email }}</dd>
                                    <dt>{{ __('employees.mobileNo') }}</dt>
                                    <dd>{{ $employee->mobile_no }}</dd>
                                    <dt>{{ __('employees.mobileNo2') }}</dt>
                                    <dd>{{ $employee->mobile_no2 }}</dd>
                                    <dt>{{ __('employees.whatsAppNo') }}</dt>
                                    <dd>{{ $employee->whatsapp }}</dd>
                                    <dt>{{ __('employees.gender') }}</dt>
                                    <dd>{{ $employee->gender }}</dd>
                                    <dt>{{ __('employees.birthDate') }}</dt>
                                    <dd>{{ $employee->birth_date }}</dd>
                                    <dt>{{ __('employees.address') }}</dt>
                                    <dd>{{ $employee->address }}</dd>
                                    <dt>{{ __('employees.profession') }}</dt>
                                    <dd>
                                        @if ($employee->profession_id != null)
                                            {{ App::getLocale() == 'ar' ? $employee->profession->name_ar : $employee->profession->name }}
                                        @else
                                            {{ __('master.na') }}
                                        @endif
                                    </dd>
                                    <dt>{{ __('employees.educationLevel') }}</dt>
                                    <dd>
                                        @if ($employee->education_level_id != null)
                                            {{ App::getLocale() == 'ar' ? $employee->education_level->name_ar : $employee->education_level->name }}
                                        @else
                                            {{ __('master.na') }}
                                        @endif
                                    </dd>
                                    <dt>{{ __('employees.martialStatus') }}</dt>
                                    <dd>
                                        @if ($employee->martial_status_id != null)
                                            {{ App::getLocale() == 'ar' ? $employee->martial_status->name_ar : $employee->martial_status->name }}
                                        @else
                                            {{ __('master.na') }}
                                        @endif
                                    </dd>
                                    <dt>{{ __('employees.status') }}</dt>
                                    <dd>{{ App::getLocale() == 'ar' ? $employee->employee_status->name_ar : $employee->employee_status->name }}
                                    </dd>
                                    <dt>{{ __('master.createdAt') }}</dt>
                                    <dd>{{ $employee->created_at }}</dd>
                                    <dt>{{ __('master.createdBy') }}</dt>
                                    <dd>{{ $employee->creator->name }}</dd>
                                    <dt>{{ __('master.updatedAt') }}</dt>
                                    <dd>{{ $employee->updated_at }}</dd>
                                    <dt>{{ __('master.modifiedBy') }}</dt>
                                    <dd>{{ $employee->modifier->name ?? '' }}</dd>
                                </dl>
                            </div>
                            <div class="row">
                                @if ($employee->pass_photo != null)
                                <div class="col-md-2 col-sm-4">
                                    <div class="card">
                                        <img class="align-self-center" src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" width="40" alt="Card image cap">
                                        <div class="py-2 text-center">
                                            <a href="{{ URL::asset('uploads/'.$employee->company->company_name.'/employees/'.$employee->first_name.$employee->id.'/'.$employee->pass_photo) }}"
                                                 class="text-muted">{{ __('employees.passPhoto') }}<i class="dripicons-download ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($employee->visa_photo != null)
                                <div class="col-md-2 col-sm-4">
                                    <div class="card">
                                        <img class="align-self-center" src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" width="40" alt="Card image cap">
                                        <div class="py-2 text-center">
                                            <a href="{{ URL::asset('uploads/'.$employee->company->company_name.'/employees/'.$employee->first_name.$employee->id.'/'.$employee->visa_photo) }}"
                                                 class="text-muted">{{ __('employees.visaPhoto') }}<i class="dripicons-download ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($employee->qid_photo != null)
                                <div class="col-md-2 col-sm-4">
                                    <div class="card">
                                        <img class="align-self-center" src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" width="40" alt="Card image cap">
                                        <div class="py-2 text-center">
                                            <a href="{{ URL::asset('uploads/'.$employee->company->company_name.'/employees/'.$employee->first_name.$employee->id.'/'.$employee->qid_photo) }}"
                                                 class="text-muted">{{ __('employees.qidPhoto') }}<i class="dripicons-download ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($employee->contract != null)
                                <div class="col-md-2 col-sm-4">
                                    <div class="card">
                                        <img class="align-self-center" src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" width="40" alt="Card image cap">
                                        <div class="py-2 text-center">
                                            <a href="{{ URL::asset('uploads/'.$employee->company->company_name.'/employees/'.$employee->first_name.$employee->id.'/'.$employee->contract) }}"
                                                 class="text-muted">{{ __('employees.contract') }}<i class="dripicons-download ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($employee->certificate != null)
                                <div class="col-md-2 col-sm-4">
                                    <div class="card">
                                        <img class="align-self-center" src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" width="40" alt="Card image cap">
                                        <div class="py-2 text-center">
                                            <a href="{{ URL::asset('uploads/'.$employee->company->company_name.'/employees/'.$employee->first_name.$employee->id.'/'.$employee->certificate) }}"
                                                 class="text-muted">{{ __('employees.certificate') }}<i class="dripicons-download ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($employee->resume != null)
                                <div class="col-md-2 col-sm-4">
                                    <div class="card">
                                        <img class="align-self-center" src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" width="40" alt="Card image cap">
                                        <div class="py-2 text-center">
                                            <a href="{{ URL::asset('uploads/'.$employee->company->company_name.'/employees/'.$employee->first_name.$employee->id.'/'.$employee->resume) }}"
                                                 class="text-muted">{{ __('employees.resume') }}<i class="dripicons-download ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                    </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
