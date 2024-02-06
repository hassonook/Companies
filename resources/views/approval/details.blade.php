@extends('layouts.master')
@section('title') approval-details @endsection

    @section('content')
        <div class="row navbar-custom">
            <ul class="list-unstyled topbar-nav mb-0">
                <li class="creat-btn">
                    <div class="nav-link">
                        <a class=" btn btn-sm btn-soft-primary" href="{{ route('approvals') }}" role="button"><i class="fas fa-backward me-2"></i>Back</a>
                    </div>
                </li>
                <li>
                    <h3>approval Details</h3>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10 align-self-center">
                                <dl class="dl-horizontal">
                                    <dt>Company</dt>
                                    <dd>{{ $approval->company->company_name}}</dd>
                                    <dt>VP Number</dt>
                                    <dd>{{ $approval->vp_no }}</dd>
                                    <dt>Request No.</dt>
                                    <dd>{{ $approval->req_no }}</dd>
                                </dl>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div>
@endsection
<style>
    /* Optional: Adjust styles as needed */
.dl-horizontal dt {
    float: left;
    width: 150px; /* Adjust width as needed */
    clear: left;
    text-align: right; /* Align terms to the right */
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-weight: bold; /* Make terms bold */
}

.dl-horizontal dd {
    margin-left: 180px; /* Adjust margin to provide space after the term */
}
</style>