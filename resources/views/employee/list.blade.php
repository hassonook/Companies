@extends('layouts.master')
@section('title') Employees @endsection

@section('css')
<link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
    @section('content')
        <div class="row navbar-custom">
            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <h3>{{ __('employees.employees') }}</h3>
                </li>
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="{{ route('employee_add') }}" role="button"><i class="fas fa-plus me-2"></i>{{ __('master.addNew') }}</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>{{ __('employees.qidNo') }}</th>
                            <th>{{ __('employees.empName') }}</th>
                            <th>{{ __('employees.company') }}</th>
                            <th>{{ __('employees.nationality') }}</th>
                            <th>{{ __('employees.mobileNo') }}</th>
                            <th>{{ __('employees.jobTitle') }}</th>
                            <th>{{ __('employees.salary') }}</th>
                            <th>{{ __('employees.status') }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->qid_no }}</td>
                                <td>
                                    <img src="{{ URL::asset('uploads/'.$employee->company->company_name.'/employees/'.$employee->employee_first_name.$employee->id.'/'.$employee->emp_photo) }}" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <a href="" class="d-inline-block align-middle mb-0 product-name">{{ App::getLocale() == 'ar' ? $employee->first_name_ar.' '.$employee->second_name_ar : $employee->first_name.' '.$employee->second_name}}</a>
                                    </p>
                                </td>
                                <td>{{App::getLocale() == 'ar' ? $employee->company->company_name_ar : $employee->company->company_name}}</td>
                                <td>{{App::getLocale() == 'ar' ? $employee->nationality->name_ar : $employee->nationality->name}}</td>
                                <td>{{ $employee->mobile1 }}</td>
                                <td>{{App::getLocale() == 'ar' ? $employee->job_title->name_ar : $employee->job_title->name }}</td>
                                <td>{{ $employee->salary }}</td>
                                <td>{{App::getLocale() == 'ar' ? $employee->employee_status->name_ar : $employee->employee_status->name }}</td>
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
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/jquery.datatable.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
