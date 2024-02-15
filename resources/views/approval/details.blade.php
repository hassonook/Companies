@extends('layouts.master')
@section('title') 
    approval-details 
@endsection
@section('css')

@endsection
    @section('content')
        <div class="row navbar-custom">
            <ul class="list-unstyled topbar-nav mb-0">
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="{{ route('approvals') }}" role="button"><i class="fas fa-backward me-2"></i>Back</a>
                    </div>
                </li>
                <li>
                    <h3>{{ __('approvals.approvalDetails') }}</h3>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10 align-self-center">
                                <dl class="dl-horizontal">
                                    <dt>{{ __('approvals.company') }}</dt>
                                    <dd>{{App::getLocale() == 'ar' ? $approval->company->company_name_ar : $approval->company->company_name}}</dd>
                                    <dt>{{ __('approvals.vpNo') }}</dt>
                                    <dd>{{ $approval->vp_no }}</dd>
                                    <dt>{{ __('approvals.reqNo') }}</dt>
                                    <dd>{{ $approval->req_no }}</dd>
                                    <dt>{{ __('approvals.issueOn') }}</dt>
                                    <dd>{{ $approval->issue_date }}</dd>
                                    <dt>{{ __('approvals.expireOn') }}</dt>
                                    <dd>{{ $approval->expire_date }}</dd>
                                    <dt>{{ __('approvals.nationality') }}</dt>
                                    <dd>{{ App::getLocale() == 'ar' ? $approval->nationality->name_ar : $approval->nationality->name }}</dd>
                                    <dt>{{ __('approvals.jobTitle') }}</dt>
                                    <dd>{{ App::getLocale() == 'ar' ? $approval->job_title->name_ar : $approval->job_title->name }}</dd>
                                    <dt>{{ __('approvals.gender') }}</dt>
                                    <dd>{{ App::getLocale() == 'ar' ? $approval->gender : $approval->gender }}</dd>
                                    <dt>{{ __('approvals.total') }}</dt>
                                    <dd>{{ $approval->total }}</dd>
                                    <dt>{{ __('approvals.consumed') }}</dt>
                                    <dd>{{ $approval->consumed }}</dd>
                                    <dt>{{ __('master.createdAt') }}</dt>
                                    <dd>{{ $approval->created_at }}</dd>
                                    <dt>{{ __('master.createdBy') }}</dt>
                                    <dd>{{ $approval->creator->name }}</dd>
                                    <dt>{{ __('master.updatedAt') }}</dt>
                                    <dd>{{ $approval->updated_at }}</dd>
                                    <dt>{{ __('master.modifiedBy') }}</dt>
                                    <dd>{{ $approval->modifier->name ?? '' }}</dd>
                                </dl>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div>
@endsection