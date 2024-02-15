@extends('layouts.master')
@section('title')
    editUser
@endsection
@section('css')
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">{{ __('auth.userEdit') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{ route('user_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="mb-3 row">
                                    <label for="name"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('auth.name') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('name') parsley-error @enderror" name="name"
                                            type="text" value="{{ $user->name }}" id="name">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email-input"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('auth.email') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('email') parsley-error @enderror" name="email"
                                            type="email" value="{{ $user->email }}" id="email">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="mobile"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('auth.mobileNo') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('mobile_number') parsley-error @enderror"
                                            name="mobile_number" type="tel" value="{{ $user->mobile_number }}"
                                            id="mobile">
                                        @error('mobile_number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="role"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('auth.role') }}</label>
                                    <div class="col-sm-10">
                                        <select class="select2 mb-3 select2-multiple" name="roles[]" id="role"
                                            style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    {{ $user->roles->contains($role->id) ? 'selected' : '' }}>
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="reset_password"
                                        class="col-sm-3 form-label align-self-center mb-lg-0 text-end">{{ __('auth.resetPassword') }}</label>
                                    <div class="col-sm-9">
                                        <div class="checkbox checkbox-danger checkbox-single mb-2">
                                            <input type="checkbox" id="reset_password" name="reset_password" value="true" aria-label="Single checkbox One">
                                            <label></label>
                                        </div>
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">{{ __('master.submit') }}</button>
                                        <a href="{{ route('users') }}"
                                            class="btn btn-danger">{{ __('master.cancel') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{ __('auth.photo') }}</h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <input type="file" name="photo" id="input-file-now-custom-3" class="dropify" data-height="100"
                                            data-default-file="{{ URL::asset('uploads/userPhoto/'.$user->photo) }}" />
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.form-upload.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    \
    <script>
        $(document).ready(function() {
            $('select').select2({
                width: '100%'
            });
            $('select.parsley-error').next().find('span.select2-selection.select2-selection--single').addClass(
                'parsley-error');
        });
    </script>
@endsection
