@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('css')
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">New User</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{ route('user_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="mb-3 row">
                                    <label for="name"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('name') parsley-error @enderror" name="name" type="text" value="" id="name">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('email') parsley-error @enderror" name="email" type="email" value="" id="email">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="mobile"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Mobile Nubmer</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('mobile_number') parsley-error @enderror" name="mobile_number" type="tel" value="" id="mobile">
                                        @error('mobile_number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('password') parsley-error @enderror" name="password" type="password" value="" id="password">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="repassword"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('repassword') parsley-error @enderror" name="repassword" type="password" value="" id="repassword">
                                        @error('repassword')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="role" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Role</label>
                                    <div class="col-sm-10">
                                        <select class="select2 mb-3 select2-multiple @error('roles[]') parsley-error @enderror" name="roles[]" id="role"
                                            style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>                                                
                                            @endforeach
                                        </select>
                                        @error('roles[]')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="photo"class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="photo" class="form-control @error('photo') parsley-error @enderror" id="photo">
                                        @error('photo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ route('users') }}" class="btn btn-danger">Cancel</a>
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
            $('select.parsley-error').next('span').find('span.selection').find('span.select2-selection.select2-selection--multiple').addClass('parsley-error');
        });
    </script>
@endsection
