@extends('layouts.master')
@section('title')
    NewCompany
@endsection

@section('content')
    <div class="row navbar-custom">
        <ul class="list-unstyled topbar-nav mb-0">
            <li class="creat-btn">
                <div class="nav-link">
                    <a class=" btn btn-sm btn-soft-primary" href="{{ route('companies') }}" role="button"><i class="fas fa-backward me-2"></i>{{ __('master.back') }}</a>
                </div>
            </li>
            <li>
                <h3>{{ __('companies.newCompany') }}</h3>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{ route('company_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 row">
                                    <label for="company_name"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.companyName') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('company_name') parsley-error @enderror"
                                            name="company_name" type="text" value="" id="company_name">
                                        @error('company_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="company_name_ar"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.companyNameAr') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('company_name_ar') parsley-error @enderror"
                                            name="company_name_ar" type="text" value="" id="company_name_ar">
                                        @error('company_name_ar')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label
                                        for="company_logo"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.companyLogo') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="company_logo"
                                            class="form-control @error('company_logo') parsley-error @enderror"
                                            id="company_logo">
                                        @error('company_logo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="owner_id"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.ownerId') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('owner_id') parsley-error @enderror"
                                            name="owner_id" type="text" value="" id="owner_id">
                                        @error('owner_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="owner_phone"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.ownerPhone') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('owner_phone') parsley-error @enderror"
                                            name="owner_phone" type="text" value="" id="owner_phone">
                                        @error('owner_phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="registration_id"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.estId') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('registration_id') parsley-error @enderror"
                                            name="registration_id" type="text" value="" id="registration_id">
                                        @error('registration_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="reg_issue_date"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.estIssueDate') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('reg_issue_date') parsley-error @enderror" name="reg_issue_date" type="date" value="" id="reg_issue_date">
                                        @error('reg_issue_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="reg_expire_date"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.estExpireDate') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('reg_expire_date') parsley-error @enderror"
                                            name="reg_expire_date" type="date" value="" id="reg_expire_date">
                                        @error('reg_expire_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="reg_photo"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.estPhoto') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="reg_photo"
                                            class="form-control @error('reg_photo') parsley-error @enderror"
                                            id="reg_photo">
                                        @error('reg_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="commercial_id"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.comId') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('commercial_id') parsley-error @enderror"
                                            name="commercial_id" type="text" value="" id="commercial_id">
                                        @error('commercial_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="com_issue_date"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.comIssueDate') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('com_issue_date') parsley-error @enderror"
                                            name="com_issue_date" type="date" value="" id="com_issue_date">
                                        @error('com_issue_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="com_expire_date"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.comExpireDate') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('com_expire_date') parsley-error @enderror"
                                            name="com_expire_date" type="date" value="" id="com_expire_date">
                                        @error('com_expire_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label
                                        for="com_photo"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.comPhoto') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="com_photo"
                                            class="form-control @error('com_photo') parsley-error @enderror"
                                            id="com_photo">
                                        @error('com_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="license_no"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.licNo') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('license_no') parsley-error @enderror"
                                            name="license_no" type="text" value="" id="license_no">
                                        @error('license_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="lic_issue_date"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.licIssueDate') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('lic_issue_date') parsley-error @enderror"
                                            name="lic_issue_date" type="date" value="" id="lic_issue_date">
                                        @error('lic_issue_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="lic_expire_date"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.licExpireDate') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('lic_expire_date') parsley-error @enderror"
                                            name="lic_expire_date" type="date" value="" id="lic_expire_date">
                                        @error('lic_expire_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label
                                        for="lic_photo"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.licPhoto') }}</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="lic_photo"
                                            class="form-control @error('lic_photo') parsley-error @enderror"
                                            id="lic_photo">
                                        @error('lic_photo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label
                                        for="main_branch"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.mainBranch') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="main_branch"
                                                id="inlineRadio1" value="Main" checked>
                                            <label class="form-check-label" for="inlineRadio1">{{ __('companies.main') }}</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="main_branch"
                                                id="inlineRadio2" value="Branch">
                                            <label class="form-check-label" for="inlineRadio2">{{ __('companies.branch') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="business"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.companyBusiness') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('business') parsley-error @enderror"
                                            name="business" type="text" value="" id="business">
                                        @error('business')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="company_address"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.address') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('company_address') parsley-error @enderror"
                                            name="company_address" type="text" value="" id="company_address">
                                        @error('company_address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="telephone"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.telephone') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('telephone') parsley-error @enderror"
                                            name="telephone" type="tel" value="" id="telephone">
                                        @error('telephone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.email') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('email') parsley-error @enderror"
                                            name="email" type="email" value="" id="email">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="website"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('companies.website') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('website') parsley-error @enderror"
                                            name="website" type="url" value="" id="website">
                                        @error('website')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">{{ __('master.submit') }}</button>
                                        <a href="{{ route('companies') }}" class="btn btn-danger">{{ __('master.cancel') }}</a>
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
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
