@extends('layouts.master')
@section('title')
    EditApproval
@endsection
@section('css')
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row navbar-custom">
    <ul class="list-unstyled topbar-nav mb-0">
        <li class="creat-btn">
            <div class="nav-link">
                <a class=" btn btn-sm btn-soft-primary" href="{{ route('approvals') }}" role="button"><i class="fas fa-backward me-2"></i>{{ __('master.back') }}</a>
            </div>
        </li>
        <li>
            <h3>{{ __('approvals.approvalEdit') }}</h3>
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
                    <form action="{{ route('approval_update', $approval->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 row">
                                    <label for="company_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.company') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 @error('company_id') parsley-error @enderror" name="company_id" id="company_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>
                                            @foreach ($companies as $company)
                                            <option value="{{ $company->id }}" @if($approval->company_id == $company->id) selected @endif>{{ App::getLocale() == 'ar' ? $company->company_name_ar : $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('company_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="vp_no" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.vpNo') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('vp_no') parsley-error @enderror" name="vp_no" type="text" value="{{ $approval->vp_no }}" id="vp_no">
                                        @error('vp_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="req_no" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.reqNo') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('req_no') parsley-error @enderror" name="req_no" type="text" value="{{ $approval->req_no }}" id="req_no">
                                        @error('req_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="issue_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.issueOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('issue_date') parsley-error @enderror" name="issue_date" type="date" value="{{ $approval->issue_date }}" id="issue_date">
                                        @error('issue_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="expire_date" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.expireOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('expire_date') parsley-error @enderror" name="expire_date" type="date" value="{{ $approval->expire_date }}" id="expire_date">
                                        @error('expire_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nationality_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.nationality') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 @error('nationality_id') parsley-error @enderror" name="nationality_id" id="nationality_id" style="width: 100%">
                                            <option value="">Select</option>
                                            @foreach ($nationalities as $nationality)
                                            <option value="{{ $nationality->code }}" @if($approval->nationality_id == $nationality->code) selected @endif>{{ App::getLocale() == 'ar' ? $nationality->name_ar : $nationality->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('nationality_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="job_title_id" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.jobTitle') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 @error('job_title_id') parsley-error @enderror" name="job_title_id" id="job_title_id" style="width: 100%">
                                            <option value="">Select</option>
                                            @foreach ($job_titles as $job_title)
                                            <option value="{{ $job_title->id }}" @if($approval->job_title_id == $job_title->id) selected @endif>{{ App::getLocale() == 'ar' ? $job_title->name_ar : $job_title->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('job_title_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.gender') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('gender') parsley-error @enderror" type="radio" name="gender" id="inlineRadio1" value="Male" @if($approval->gender == 'Male') checked @endif>
                                            <label class="form-check-label" for="inlineRadio1">{{ __('employees.male') }}</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('gender') parsley-error @enderror" type="radio" name="gender" id="inlineRadio2" value="Female" @if($approval->gender == 'Female') checked @endif>
                                            <label class="form-check-label" for="inlineRadio2">{{ __('employees.female') }}</label>
                                        </div>
                                        @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="total" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.total') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('total') parsley-error @enderror" name="total" type="number" value="{{ $approval->total }}" id="total">
                                        @error('total')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="consumed" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.consumed') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('consumed') parsley-error @enderror" name="consumed" type="number" value="{{ $approval->consumed }}" id="consumed">
                                        @error('consumed')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">{{ __('master.submit') }}</button>
                                        <a href="{{ route('approvals') }}" class="btn btn-danger">{{ __('master.cancel') }}</a>
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
