@extends('layouts.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
    @section('content')
        <div class="row navbar-custom">
            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <h3>{{ __('master.users') }}</h3>
                </li>
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="{{ route('user_add') }}" role="button"><i class="fas fa-plus me-2"></i>{{ __('auth.newUser') }}</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>{{ __('auth.name') }}</th>
                            <th>{{ __('auth.email') }}</th>
                            <th>{{ __('auth.mobileNo') }}</th>
                            <th>{{ __('auth.role') }}</th>
                            <th>{{ __('auth.status') }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    <img src="{{ URL::asset('uploads/userPhoto/'.$user->photo) }}" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <a href="" class="d-inline-block align-middle mb-0 product-name">{{ $user->name }}</a>
                                    </p>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobile_number }}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                    <li>{{ $role->name }}</li>
                                    @endforeach
                                </td>
                                <td><span class="badge badge-soft-warning">status </span></td>
                                <td>
                                    <a href="{{ route('user', $user->id) }}"><i data-feather="info" class="text-primary"></i></a>
                                    <a href="{{ route('user_edit', $user->id) }}"><i data-feather="edit" class="text-success"></i></a>
                                    <a href="{{ route('user_delete', $user->id) }}"><i data-feather="trash" class="icon-dual text-danger"></i></a>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end col -->
        </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script>
        $('#datatable').DataTable();
    </script>
@endsection
