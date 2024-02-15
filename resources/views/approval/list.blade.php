@extends('layouts.master')
@section('title') Approvals @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
    @section('content')
        <div class="row navbar-custom">
            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <h3>{{ __('approvals.approvals') }}</h3>
                </li>
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="{{ route('approval_add') }}" role="button"><i class="fas fa-plus me-2"></i>{{ __('approvals.newApproval') }}</a>
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
                            <th>{{ __('approvals.vpNo') }}</th>
                            <th>{{ __('approvals.reqNo') }}</th>
                            <th>{{ __('approvals.company') }}</th>
                            <th>{{ __('approvals.issueOn') }}</th>
                            <th>{{ __('approvals.expireOn') }}</th>
                            <th>{{ __('approvals.nationality') }}</th>
                            <th>{{ __('approvals.gender') }}</th>
                            <th>{{ __('approvals.jobTitle') }}</th>
                            <th>{{ __('approvals.total') }}</th>
                            <th>{{ __('approvals.consumed') }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($approvals as $approval)
                            <tr>
                                <td>{{ $approval->vp_no }}</td>
                                <td>{{ $approval->req_no }}</td>
                                <td>{{ App::getLocale() == 'ar' ? $approval->company->company_name_ar : $approval->company->company_name }}</td>
                                <td>{{ $approval->issue_date }}</td>
                                <td>{{ $approval->expire_date }}</td>
                                <td>{{ App::getLocale() == 'ar' ? $approval->nationality->name_ar : $approval->nationality->name }}</td>
                                <td>{{ $approval->gender }}</td>
                                <td>{{ App::getLocale() == 'ar' ? $approval->job_title->name_ar : $approval->job_title->name }}</td>
                                <td>{{ $approval->total }}</td>
                                <td>{{ $approval->consumed }}</td>

                                <td>
                                    <a href="{{ route('approval', $approval->id) }}" tooltip="details"><i data-feather="info" class="text-primary"></i></a>
                                    <a href="{{ route('approval_edit', $approval->id) }}"><i data-feather="edit" class="text-success"></i></a>
                                    <a href="{{ route('approval_delete', $approval->id) }}"><i data-feather="trash" class="icon-dual text-danger"></i></a>
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
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script>
        $('#datatable').DataTable();
    </script>
@endsection
