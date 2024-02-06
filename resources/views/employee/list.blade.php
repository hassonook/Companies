@extends('layouts.master')
@section('title') Employees @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
    @section('content')
        <div class="row navbar-custom">
            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <h3>Employees</h3>
                </li>
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="{{ route('employee_add') }}" role="button"><i class="fas fa-plus me-2"></i>New Employee</a>
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
                            <th>QID</th>
                            <th>Fullname</th>
                            <th>Company</th>
                            <th>Nationality</th>
                            <th>Mobile</th>
                            <th>Job Title</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->qid_no }}</td>
                                <td>
                                    <img src="{{ URL::asset('uploads/'.$employee->company->company_name.'/employees/'.$employee->employee_first_name.$employee->id.'/'.$employee->emp_photo) }}" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <a href="" class="d-inline-block align-middle mb-0 product-name">{{ $employee->first_name.' '.$employee->second_name}}</a>
                                    </p>
                                </td>
                                <td>{{ $employee->company->company_name }}</td>
                                <td>{{ $employee->nationality->name}}</td>
                                <td>{{ $employee->mobile1 }}</td>
                                <td>{{ $employee->job_title->name }}</td>
                                <td>{{ $employee->salary }}</td>
                                <td>{{ $employee->employee_status->name }}</td>
                                <td>
                                    <a href="{{ route('employee', $employee->id) }}" tooltip="details"><i data-feather="info" class="text-primary"></i></a>
                                    <a href="{{ route('employee_edit', $employee->id) }}"><i data-feather="edit" class="text-success"></i></a>
                                    <a href="{{ route('employee_delete', $employee->id) }}"><i data-feather="trash" class="icon-dual text-danger"></i></a>
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
