@extends('layouts.master')
@section('title') Company-details @endsection
    @section('content')
        <div class="row navbar-custom">
            <ul class="list-unstyled topbar-nav mb-0">
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="{{ route('companies') }}" role="button"><i class="fas fa-backward me-2"></i>{{ __('master.back') }}</a>
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
                            <div class="col-lg-6 align-self-center">
                                <img src="{{ URL::asset('uploads/'.$company->company_name.'/profile/'.$company->company_logo) }}" alt="" class=" mx-auto  d-block" height="300">
                            </div><!--end col-->
                            <div class="col-lg-6 align-self-center">
                                <div class="single-pro-detail">
                                    <p class="mb-1"></p>
                                    <div class="custom-border mb-3"></div>
                                    <h3 class="pro-title">{{(App::getLocale() == 'ar' ? $company->company_name_ar : $company->company_name)  }}</h3>
                                    <p class="text-muted mb-0">{{ $company->business }}</p>
                                    <dl class="dl-horizontal">
                                        <dt>{{ __('companies.ownerId') }}</dt>
                                        <dd>{{ $company->owner_id}}</dd>
                                        <dt>{{ __('companies.ownerPhone') }}</dt>
                                        <dd>{{ $company->owner_phone}}</dd>
                                        <dt>{{ __('companies.estId') }}</dt>
                                        <dd>{{ $company->registration_id }}</dd>
                                        <dt>{{ __('companies.estIssueDate') }}</dt>
                                        <dd>{{ $company->reg_issue_date }}</dd>
                                        <dt>{{ __('companies.estExpireDate') }}</dt>
                                        <dd>{{ $company->reg_expire_date }}</dd>
                                        <dt>{{ __('companies.estPhoto') }}</dt>
                                        <dd>
                                            <a href="{{ URL::asset('uploads/'.$company->company_name.'/profile/'.$company->reg_photo) }}" target="_blank">
                                                {{ $company->reg_photo }}<img src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" alt="PDF Icon" height="15">
                                            </a>
                                        </dd>
                                        <dt>{{ __('companies.comId') }}</dt>
                                        <dd>{{ $company->commercial_id }}</dd>
                                        <dt>{{ __('companies.comIssueDate') }}</dt>
                                        <dd>{{ $company->com_issue_date }}</dd>
                                        <dt>{{ __('companies.comExpireDate') }}</dt>
                                        <dd>{{ $company->com_expire_date }}</dd>
                                        <dt>{{ __('companies.comPhoto') }}</dt>
                                        <dd>
                                            <a href="{{ URL::asset('uploads/'.$company->company_name.'/profile/'.$company->com_photo) }}" target="_blank">
                                                {{ $company->com_photo }}<img src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" alt="PDF Icon" height="15">
                                            </a>
                                        </dd>
                                        <dt>{{ __('companies.licNo') }}</dt>
                                        <dd>{{ $company->license_no }}</dd>
                                        <dt>{{ __('companies.licIssueDate') }}</dt>
                                        <dd>{{ $company->lic_issue_date }}</dd>
                                        <dt>{{ __('companies.licExpireDate') }}</dt>
                                        <dd>{{ $company->lic_expire_date }}</dd>
                                        <dt>{{ __('companies.licPhoto') }}</dt>
                                        <dd>
                                            <a href="{{ URL::asset('uploads/'.$company->company_name.'/profile/'.$company->lic_photo) }}" target="_blank">
                                                {{ $company->lic_photo }}<img src="{{ URL::asset('assets/images/file-icons/pdf.png') }}" alt="PDF Icon" height="15">
                                            </a>
                                        </dd>
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
                                    </dl>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div>

@endsection