@extends('layouts.master')
@section('title') 
    user-details 
@endsection
@section('css')

@endsection
    @section('content')
        <div class="row navbar-custom">
            <ul class="list-unstyled topbar-nav mb-0">
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="{{ route('users') }}" role="button"><i class="fas fa-backward me-2"></i>{{ __('master.back') }}</a>
                    </div>
                </li>
                <li>
                    <h3>{{ __('auth.userDetails') }}</h3>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 align-self-start">
                                <img src="{{ URL::asset('uploads/userPhoto/'.$user->photo) }}" alt="" class="mx-auto d-block" height="300">
                            </div>
                            <div class="col-lg-8 align-self-center">
                                <dl class="dl-horizontal">
                                    <dt>{{ __('auth.name') }}</dt>
                                    <dd>{{ $user->name}}</dd>
                                    <dt>{{ __('auth.email') }}</dt>
                                    <dd>{{ $user->email}}</dd>
                                    <dt>{{ __('auth.mobileNo') }}</dt>
                                    <dd>{{ $user->mobile_no}}</dd>
                                    <dt>{{ __('auth.role') }}</dt>
                                    <dd>{{ $user->role}}</dd>
                                    <dt>{{ __('auth.status') }}</dt>
                                    <dd>{{ $user->status}}</dd>
                                </dl>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div>
@endsection