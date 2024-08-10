@extends('layouts.master')
@section('title')
    Company-details
@endsection
@section('css')
@endsection
@section('content')
    <div class="row navbar-custom">
        <ul class="list-unstyled topbar-nav mb-0">
            <li class="creat-btn">
                <div class="nav-link">
                    <a class=" btn btn-sm btn-soft-primary" href="{{ route('companies') }}" role="button"><i
                            class="fas fa-backward me-2"></i>{{ __('master.back') }}</a>
                </div>
            </li>
            <li>
                <h3>{{ __('companies.companyDetails') }}</h3>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 align-self-start">
                            <img src="{{ URL::asset('uploads/' . $company->company_name . '/profile/' . $company->company_logo) }}"
                                alt="" class=" mx-auto  d-block" height="300">
                        </div><!--end col-->
                        <div class="col-lg-8 align-self-center">
                            <div class="single-pro-detail">
                                <p class="mb-1"></p>
                                <div class="custom-border mb-3"></div>
                                <h3 class="pro-title">
                                    {{ App::getLocale() == 'ar' ? $company->company_name_ar : $company->company_name }}
                                </h3>
                                <p class="text-muted mb-0">{{ $company->business }}</p>
                                <dl class="dl-horizontal">
                                    <dt>{{ __('companies.ownerId') }}</dt>
                                    <dd>{{ $company->owner_id }}</dd>
                                    <dt>{{ __('companies.ownerPhone') }}</dt>
                                    <dd>{{ $company->owner_phone }}</dd>
                                    <dt>{{ __('companies.estId') }}</dt>
                                    <dd>{{ $company->registration_id }}</dd>
                                    <dt>{{ __('companies.estIssueDate') }}</dt>
                                    <dd>{{ $company->reg_issue_date }}</dd>
                                    <dt>{{ __('companies.estExpireDate') }}</dt>
                                    <dd>{{ $company->reg_expire_date }}</dd>
                                    <dt>{{ __('companies.comId') }}</dt>
                                    <dd>{{ $company->commercial_id }}</dd>
                                    <dt>{{ __('companies.comIssueDate') }}</dt>
                                    <dd>{{ $company->com_issue_date }}</dd>
                                    <dt>{{ __('companies.comExpireDate') }}</dt>
                                    <dd>{{ $company->com_expire_date }}</dd>
                                    <dt>{{ __('companies.licNo') }}</dt>
                                    <dd>{{ $company->license_no }}</dd>
                                    <dt>{{ __('companies.licIssueDate') }}</dt>
                                    <dd>{{ $company->lic_issue_date }}</dd>
                                    <dt>{{ __('companies.licExpireDate') }}</dt>
                                    <dd>{{ $company->lic_expire_date }}</dd>
                                    <dt>{{ __('companies.mainBranch') }}</dt>
                                    <dd>{{ $company->main_branch }}</dd>
                                    <dt>{{ __('companies.address') }}</dt>
                                    <dd>{{ $company->company_address }}</dd>
                                    <dt>{{ __('companies.telephone') }}</dt>
                                    <dd>{{ $company->telephone }}</dd>
                                    <dt>{{ __('companies.email') }}</dt>
                                    <dd>{{ $company->email }}</dd>
                                    <dt>{{ __('companies.website') }}</dt>
                                    <dd>{{ $company->website }}</dd>
                                    <dt>{{ __('master.createdAt') }}</dt>
                                    <dd>{{ $company->created_at }}</dd>
                                    <dt>{{ __('master.createdBy') }}</dt>
                                    <dd>{{ $company->creator->name }}</dd>
                                    <dt>{{ __('master.updatedAt') }}</dt>
                                    <dd>{{ $company->updated_at }}</dd>
                                    <dt>{{ __('master.modifiedBy') }}</dt>
                                    <dd>{{ $company->modifier->name ?? '' }}</dd>
                                </dl>
                            </div>
                            <div class="row">
                                @if ($company->reg_photo != null)
                                    <div class="col-md-2 col-sm-4">
                                        <div class="card">
                                            <img class="align-self-center"
                                                src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" width="40"
                                                alt="Card image cap">
                                            <div class="py-2 text-center">
                                                <a href="{{ URL::asset('uploads/' . $company->company_name . '/profile/' . $company->reg_photo) }}"
                                                    class="text-muted">{{ __('companies.estPhoto') }}<i
                                                        class="dripicons-download ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($company->com_photo != null)
                                    <div class="col-md-2 col-sm-4">
                                        <div class="card">
                                            <img class="align-self-center"
                                                src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" width="40"
                                                alt="Card image cap">
                                            <div class="py-2 text-center">
                                                <a href="{{ URL::asset('uploads/' . $company->company_name . '/profile/' . $company->com_photo) }}"
                                                    class="text-muted">{{ __('companies.comPhoto') }}<i
                                                        class="dripicons-download ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($company->lic_photo != null)
                                    <div class="col-md-2 col-sm-4">
                                        <div class="card">
                                            <img class="align-self-center"
                                                src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" width="40"
                                                alt="Card image cap">
                                            <div class="py-2 text-center">
                                                <a href="{{ URL::asset('uploads/' . $company->company_name . '/profile/' . $company->lic_photo) }}"
                                                    class="text-muted">{{ __('companies.licPhoto') }}<i
                                                        class="dripicons-download ms-1"></i></a>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#employees" role="tab"
                                aria-selected="true">{{ __('master.employees') }}</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#approvals" role="tab"
                                aria-selected="false">{{ __('master.approvals') }}</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane p-3 active" id="employees" role="tabpanel">
                            <div class="table-responsive">
                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>{{ __('employees.qidNo') }}</th>
                                            <th>{{ __('employees.empName') }}</th>
                                            <th>{{ __('employees.nationality') }}</th>
                                            <th>{{ __('employees.mobileNo') }}</th>
                                            <th>{{ __('employees.jobTitle') }}</th>
                                            <th>{{ __('employees.salary') }}</th>
                                            <th>{{ __('employees.status') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($company->employees as $employee)
                                            <tr>
                                                <td><a href="{{ route('employee', $employee->id) }}">{{ $employee->qid_no }}</a></td>
                                                <td><a href="{{ route('employee', $employee->id) }}">
                                                    {{ App::getLocale() == 'ar' ? $employee->first_name_ar . ' ' . $employee->second_name_ar : $employee->first_name . ' ' . $employee->second_name }}
                                                </a>
                                                </td>
                                                <td>{{ App::getLocale() == 'ar' ? $employee->nationality->name_ar : $employee->nationality->name }}
                                                </td>
                                                <td>{{ $employee->mobile1 }}</td>
                                                <td>{{ App::getLocale() == 'ar' ? $employee->job_title->name_ar ?? '' : $employee->job_title->name ?? '' }}
                                                </td>
                                                <td>{{ $employee->salary }}</td>
                                                <td>{{ App::getLocale() == 'ar' ? $employee->employee_status->name_ar ?? '' : $employee->employee_status->name ?? '' }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane p-3" id="approvals" role="tabpanel">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{ __('approvals.vpNo') }}</th>
                                            <th>{{ __('approvals.reqNo') }}</th>
                                            <th>{{ __('approvals.issueOn') }}</th>
                                            <th>{{ __('approvals.expireOn') }}</th>
                                            <th>{{ __('approvals.nationality') }}</th>
                                            <th>{{ __('approvals.gender') }}</th>
                                            <th>{{ __('approvals.jobTitle') }}</th>
                                            <th>{{ __('approvals.total') }}</th>
                                            <th>{{ __('approvals.consumed') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($company->approvals as $approval)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('approval', $approval->id) }}">
                                                        {{ $approval->vp_no }}</td>
                                                    </a>
                                                <td>{{ $approval->req_no }}</td>
                                                <td>{{ $approval->issue_date }}</td>
                                                <td>{{ $approval->expire_date }}</td>
                                                <td>{{ App::getLocale() == 'ar' ? $approval->nationality->name_ar : $approval->nationality->name }}
                                                </td>
                                                <td>{{ $approval->gender }}</td>
                                                <td>{{ App::getLocale() == 'ar' ? $approval->job_title->name_ar : $approval->job_title->name }}
                                                </td>
                                                <td>{{ $approval->total }}</td>
                                                <td>{{ $approval->consumed }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
