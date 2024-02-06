@extends('layouts.master-without_nav')

@section('title')
    Login
@endsection

@section('content')

    <body class="account-body accountbg">

        <!-- Log In page -->
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
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Lets Get Started MyCompanies</h4>
                                        <p class="text-muted  mb-0">User Registration</p>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">

                                        @if (Session::has('success'))
                                            <div class="alert alert-success text-center">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif

                                        <form class="form-horizontal auth-form" method="POST"
                                            action="{{ route('user_store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="useremail">Email</label>
                                                <div class="input-group">
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="useremail" value="" name="email"
                                                        placeholder="Enter email" autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group mb-2">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <div class="input-group">
                                                    <input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="userpassword" name="password" placeholder="Enter password"
                                                        autofocus>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group mb-2">
                                                <label class="form-label" for="conf_password">Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password"
                                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                                        id="confirmpassword" name="password_confirmation"
                                                        placeholder="Enter Confirm password" autofocus>
                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group mb-2">
                                                <label class="form-label" for="mo_number">Mobile Number</label>
                                                <div class="input-group">
                                                    <input type="text"
                                                        class="form-control @error('mobile_number') is-invalid @enderror"
                                                        id="mo_number" name="mobile_number" placeholder="Enter Mobile Number"
                                                        autofocus>
                                                    @error('mobilenumber')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="from-group mb-2">
                                                <label class="form-label" for="avatar">Profile Picture</label>
                                                <div class="input-group">
                                                    <input type="file"
                                                        class="form-control @error('avatar') is-invalid @enderror"
                                                        id="inputGroupFile02" name="avatar" autofocus>
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                    @error('avatar')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row my-3">
                                                <div class="col-sm-12">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitchSuccess2">
                                                        <label class="form-label text-muted"
                                                            for="customSwitchSuccess2">You agree to the Dastone <a
                                                                href="#" class="text-primary">Terms of Use</a></label>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->

                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 waves-effect waves-light"
                                                        type="submit">Register <i
                                                            class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                        <p class="my-3 text-muted">Already have an account ? <a
                                                href="{{ url('login') }}" class="text-primary ms-2">Log in</a></p>
                                    </div>
                                </div>

                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Hassona ©
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
