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
                    <a class=" btn btn-sm btn-soft-primary" href="{{ route('users') }}" role="button"><i
                            class="fas fa-backward me-2"></i>{{ __('master.back') }}</a>
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
                            <img src="{{ URL::asset('uploads/userPhoto/' . $user->photo) }}" alt=""
                                class="mx-auto d-block" height="300">
                        </div>
                        <div class="col-lg-8 align-self-center">
                            <dl class="dl-horizontal">
                                <dt>{{ __('auth.name') }}</dt>
                                <dd>{{ $user->name }}</dd>
                                <dt>{{ __('auth.email') }}</dt>
                                <dd>{{ $user->email }}</dd>
                                <dt>{{ __('auth.mobileNo') }}</dt>
                                <dd>{{ $user->mobile_no }}</dd>
                                <dt>{{ __('auth.role') }}</dt>
                                <dd>{{ $user->roles()->pluck('name') }}</dd>
                            </dl>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#changePassordModal">
                                {{ __('auth.changePassword') }}
                            </button>
                            <!--modal-->
                            <div class="modal fade" id="changePassordModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title m-0" id="exampleModalDefaultLogin">Change Password</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div><!--end modal-header-->
                                        <div class="modal-body">
                                            <div class="card-body p-0">
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">
                                                        <form class="form-horizontal auth-form"
                                                            action="{{ route('change_password') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="email"
                                                                value="{{ Auth::User()->email }}" />
                                                            <div class="form-group mb-2">
                                                                <label class="form-label"
                                                                    for="username">{{ __('auth.oldPassword') }}</label>
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control"
                                                                        name="oldPassword" id="oldPassword"
                                                                        placeholder="{{ __('auth.enterOldPassword') }}">
                                                                </div>
                                                            </div><!--end form-group-->

                                                            <div class="form-group mb-2">
                                                                <label class="form-label"
                                                                    for="userpassword">{{ __('auth.password') }}</label>
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control"
                                                                        name="password" id="password"
                                                                        placeholder="{{ __('auth.enterPassword') }}">
                                                                </div>
                                                            </div><!--end form-group-->

                                                            <div class="form-group mb-5">
                                                                <label class="form-label"
                                                                    for="userpassword">{{ __('auth.rePassword') }} </label>
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control"
                                                                        name="confirmPassword" id="confirmPassword"
                                                                        placeholder="{{ __('auth.enterRePassword') }}">
                                                                </div>
                                                            </div><!--end form-group-->
                                                            <div class="form-group mb-0 row">
                                                                <div class="col-12">
                                                                    <button
                                                                        class="btn btn-primary w-100 waves-effect waves-light"
                                                                        type="submit">
                                                                        {{ __('auth.change') }} <i
                                                                            class="fas fa-sign-in-alt ms-1"></i>
                                                                    </button>
                                                                </div><!--end col-->
                                                            </div> <!--end form-group-->
                                                        </form><!--end form-->
                                                    </div>
                                                </div>
                                            </div><!--end card-body-->
                                            <div class="card-body bg-light-alt text-center">
                                                <span class="text-muted d-none d-sm-inline-block">MyCompanyies ©
                                                    <script>
                                                        document.write(new Date().getFullYear())
                                                    </script>
                                                </span>
                                            </div>
                                        </div><!--end modal-body-->

                                    </div><!--end modal-content-->
                                </div><!--end modal-dialog-->
                            </div><!--end modal-->
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
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>
@endsection
