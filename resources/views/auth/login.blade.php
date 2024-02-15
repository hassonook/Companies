@extends('layouts.master-without_nav')

@section('title')
    Login
@endsection

@section('content')

    <body class="account-body accountbg">
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index" class="logo logo-admin">
                                            <img src="{{ URL::asset('assets/images/logo-sm-dark.png') }}" height="50"
                                                alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">{{ __('auth.letsGet') }}</h4>
                                        <p class="text-muted  mb-0">{{ __('auth.logInToContinue') }}</p>
                                    </div>
                                    @if (App::getLocale() == 'ar')
                                        <a class="m-3 text-white font-16" href="{{ Route('lang.switch', 'en') }}">
                                            <span class="fi fi-us"></span>{{ 'English'}}
                                        </a>
                                    @else
                                        <a class="m-3 text-white font-16" href="{{ Route('lang.switch', 'ar') }}">
                                            <span class="fi fi-sa"></span>{{'العربية'}}
                                        </a>
                                    @endif

                                </div>
                                <div class="card-body p-0">
                                    <!-- Tab panes -->
                                    <div class="tab-pane active  p-3" id="LogIn_Tab" role="tabpanel">

                                        @if (Session::has('success'))
                                            <div class="alert alert-success text-center">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger text-center">
                                                {{ Session::get('error') }}
                                            </div>
                                        @endif
                                        <form class="form-horizontal auth-form" method="POST"
                                            action="{{ route('login_submit') }}">
                                            @csrf
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="username">{{ __('auth.username') }}</label>
                                                <div class="input-group">
                                                    <input name="email" type="text"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        value="" id="username"
                                                        placeholder="{{ __('auth.enterEmail') }}" autocomplete="email"
                                                        autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group mb-2">
                                                <label class="form-label"
                                                    for="userpassword">{{ __('auth.password') }}</label>
                                                <div class="input-group">
                                                    <input type="password" name="password"
                                                        class="form-control  @error('password') is-invalid @enderror"
                                                        id="userpassword" value=""
                                                        placeholder="{{ __('auth.enterPassword') }}" aria-label="Password"
                                                        aria-describedby="password-addon">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row my-3">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <input class="form-check-input" type="checkbox" id="remember"
                                                            {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="remember">{{ __('auth.rememberMe') }}</label>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-sm-6 text-end">
                                                    <a href="{{ route('forget_password') }}"
                                                        class="text-muted">{{ __('auth.forgotPassword') }}</a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->

                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 waves-effect waves-light"
                                                        type="submit">{{ __('auth.loginIn') }} <i
                                                            class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                        <div class="account-social">
                                            <h6 class="mb-3">{{ __('auth.loginWith') }}</h6>
                                        </div>
                                        <div class="btn-group w-100">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">{{ __('auth.facebook') }}</button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">{{ __('auth.twitter') }}</button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">{{ __('auth.google') }}</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">{{ __('auth.loginFooter') }}
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
