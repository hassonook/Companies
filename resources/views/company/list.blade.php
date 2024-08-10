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
        <style>
            div.dt-top-container {
                display: grid;
                grid-template-columns: auto auto auto;
                }
            div.dt-center-in-div {
                margin: 0 auto;
                }
            div.dt-filter-spacer {
                margin: 10px 0;
                }
            </style>
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
            <div class="card-body">
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
                                        <a href="{{ route('company', $company->id) }}">{{ App::getLocale() == 'ar' ? $company->company_name_ar : $company->company_name }}</a>
                                    </p>
                                </td>
                                <td>{{ $company->owner_id }}</td>
                                <td>{{ $company->registration_id }}</td>
                                <td>{{ $company->commercial_id }}</td>
                                <td>{{ $company->license_no }}</td>
                                <td>{{ $company->main_branch }}</td>

                                <td>
                                    <a href="{{ route('company', $company->id) }}" tooltip="details" title="Info"><i data-feather="info"
                                            class="text-primary"></i></a>
                                    <a href="{{ route('company_edit', $company->id) }}" title="Edit"><i data-feather="edit"
                                            class="text-success"></i></a>
                                    <a href="#" id="deleteButton" data-id="{{ $company->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Delete">
                                        <i data-feather="trash" class="icon-dual text-danger"></i>
                                    </a>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- end col -->
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalDanger1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h6 class="modal-title m-0 text-white" id="exampleModalDanger1">{{ __('master.delete') }}</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 align-items-center">
                            <h5>Are you sure want to delete this record...<i class="la la-skull-crossbones alert-icon text-danger align-self-center font-30 me-3"></i></h5>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton">{{ __('master.delete') }}</button>
                    <button type="button" class="btn btn-soft-primary btn-sm" data-bs-dismiss="modal">{{ __('master.close') }}</button>
                </div><!--end modal-footer-->
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->

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
    <script src="{{ URL::asset('node_modules/axios/dist/axios.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script>
        var table = $('#datatable-buttons').DataTable({
            //language: {url: 'assets/plugins/datatables/json/Arabic.json'},
            dom: '<"dt-top-container"l<"dt-center-in-div"B>f>rtp',
            buttons: ['copy', 'excel', 'pdf', 'colvis']
        });
        // Event listener for delete button click
        document.getElementById('confirmDeleteButton').addEventListener('click', function () {
        // Get the record ID from the button's data-id attribute
        var recordId = document.getElementById('deleteButton').getAttribute('data-id');
        // Send an AJAX request to the server to delete the record
        axios.delete('/company-delete/' + recordId)
        .then(function (response) {
            // Handle success, e.g., reload the page or update the UI
            location.reload();
        })
        .catch(function (error) {
            console.error('Error deleting record: ' + error);
        });
    });
    </script>
@endsection
