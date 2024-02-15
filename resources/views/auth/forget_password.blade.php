@extends('layouts.master-without_nav')

{{--  @section('title') Login @endsection  --}}

@section('content')

    <body class="account-body accountbg">

        <!-- Recover-pw page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index" class="logo logo-admin">
                                            <img src="{{ URL::asset('assets/images/logo-sm-dark.png') }}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">{{ __('auth.resetPasswordHeader') }}</h4>
                                        <p class="text-muted  mb-0">{{ __('auth.enterEmailForReset') }}</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal auth-form" action="{{ route('forget_password_submit') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">{{ __('auth.email') }}</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" name="email"  id="email" placeholder="{{ __('auth.enterEmail') }}">
                                            </div>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">{{ __('auth.resetPassword') }}<i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    <p class="text-muted mb-0 mt-3"><a href="{{ route('login') }}" class="text-primary ms-2">{{ __('auth.loginHere') }}</a></p>
                                </div>
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">{{ __('auth.loginFooter') }} <script>
                                        document.write(new Date().getFullYear())
                                    </script></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
