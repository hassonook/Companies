@extends('layouts.master-without_nav')

@section('title') Reset Password @endsection

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
                                            <img src="{{ URL::asset('assets/images/logo-sm-dark.png') }}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">{{ __('auth.resetPasswordHeader') }}</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success text-center mb-4" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal  auth-form" method="POST" action="{{ route('reset_password_submit') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">

                                            <div class="form-group mb-2">
                                                <label class="form-label" for="useremail">{{ __('auth.email') }}</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" value="{{ old('email') }}" name="email" placeholder="{{ __('auth.enterEmail') }}" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group mb-2">
                                                <label class="form-label" for="userpassword">{{ __('auth.password') }}</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password" placeholder="{{ __('auth.enterPassword') }}" autofocus>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group mb-2">
                                                <label class="form-label" for="conf_password">{{ __('auth.repassword') }}</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirmpassword" name="repassword" placeholder="{{ __('auth.enterRePassword') }}" autofocus>
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">{{ __('auth.reset') }}<i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div>
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    <p class="text-muted mb-0 mt-3"><a href="{{ url('login') }}" class="text-primary ms-2">{{ __('auth.loginHere') }}</a></p>
                                </div>
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">{{ __('auth.loginFooter') }}<script>
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

