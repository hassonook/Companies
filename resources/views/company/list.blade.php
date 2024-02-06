@extends('layouts.master')
@section('title')
    Companies
@endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection
@section('content')
    <div class="row navbar-custom">
        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <h3>{{ __('companies.companies') }}</h3>
            </li>
            <li class="creat-btn">
                <div class="nav-link">
                    <a class=" btn btn-sm btn-soft-primary" href="{{ route('company_add') }}" role="button"><i
                            class="fas fa-plus me-2"></i>{{ __('master.addNew') }}</a>
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
                            <th>{{ __('companies.name') }}</th>
                            <th>{{ __('companies.ownerId') }}</th>
                            <th>{{ __('companies.estId') }}</th>
                            <th>{{ __('companies.comId') }}</th>
                            <th>{{ __('companies.licNo') }}</th>
                            <th>{{ __('companies.mainBranch') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td>
                                    <img src="{{ URL::asset('uploads/' . $company->company_name . '/profile/' . $company->company_logo) }}"
                                        alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <a href=""
                                            class="d-inline-block align-middle mb-0 product-name">{{ App::getLocale() == 'ar' ? $company->company_name_ar : $company->company_name }}</a>
                                    </p>
                                </td>
                                <td>{{ $company->owner_id }}</td>
                                <td>{{ $company->registration_id }}</td>
                                <td>{{ $company->commercial_id }}</td>
                                <td>{{ $company->license_no }}</td>
                                <td>{{ $company->main_branch }}</td>

                                <td>
                                    <a href="{{ route('company', $company->id) }}" tooltip="details"><i data-feather="info"
                                            class="text-primary"></i></a>
                                    <a href="{{ route('company_edit', $company->id) }}"><i data-feather="edit"
                                            class="text-success"></i></a>
                                    <a href="{{ route('company_delete', $company->id) }}"><i data-feather="trash"
                                            class="icon-dual text-danger"></i></a>
                                </td>
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
