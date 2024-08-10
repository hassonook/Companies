@extends('layouts.master')
@section('title')
    NewApproval
@endsection
@section('css')
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row navbar-custom">
        <ul class="list-unstyled topbar-nav mb-0">
            <li class="creat-btn">
                <div class="nav-link">
                    <a class=" btn btn-sm btn-soft-primary" href="{{ route('approvals') }}" role="button"><i
                            class="fas fa-backward me-2"></i>{{ __('master.back') }}</a>
                </div>
            </li>
            <li>
                <h3>{{ __('approvals.newApproval') }}</h3>
            </li>
        </ul>
    </div>


    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{ route('approval_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 row">
                                    <label for="company_id"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.company') }}</label>
                                    <div class="col-sm-10">
                                        <select
                                            class="select2 form-control mb-3 @error('company_id') parsley-error @enderror"
                                            name="company_id" id="company_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}"
                                                    @if (old('company_id') == $company->id) selected @endif>
                                                    {{ App::getLocale() == 'ar' ? $company->company_name_ar : $company->company_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('company_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="vp_no"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.vpNo') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('vp_no') parsley-error @enderror" name="vp_no"
                                            type="text" value="{{ old('vp_no') }}" id="vp_no">
                                        @error('vp_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="req_no"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.reqNo') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('req_no') parsley-error @enderror" name="req_no"
                                            type="text" value="{{ old('req_no') }}" id="req_no">
                                        @error('req_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="issue_date"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.issueOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('issue_date') parsley-error @enderror"
                                            name="issue_date" type="date" value="{{ old('issue_date') }}"
                                            id="issue_date">
                                        @error('issue_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="expire_date"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.expireOn') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('expire_date') parsley-error @enderror"
                                            name="expire_date" type="date" value="{{ old('expire_date') }}"
                                            id="expire_date">
                                        @error('expire_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nationality_id"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.nationality') }}</label>
                                    <div class="col-sm-10">
                                        <select
                                            class="select2 form-control mb-3 @error('nationality_id') parsley-error @enderror"
                                            name="nationality_id" id="nationality_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>
                                            @foreach ($nationalities as $code => $name)
                                                <option value="{{ $code }}"
                                                    @if (old('nationality_id') == $code) selected @endif>{{ $name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('nationality_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="job_title_id"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.jobTitle') }}</label>
                                    <div class="col-sm-6">
                                        <select
                                            class="select2 form-control mb-3 @error('job_title_id') parsley-error @enderror"
                                            name="job_title_id" id="job_title_id" style="width: 100%">
                                            <option value="">{{ __('master.select') }}</option>
                                            @foreach ($job_titles as $job_title)
                                                <option value="{{ $job_title->id }}"
                                                    @if (old('job_title_id') == $job_title->id) selected @endif>
                                                    {{ App::getLocale() == 'ar' ? $job_title->name_ar : $job_title->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('job_title_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#jobModal">{{ __('approvals.addNewJob') }}</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.gender') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('gender') parsley-error @enderror"
                                                type="radio" name="gender" id="inlineRadio1" value="Male"
                                                @if (old('gender') == 'Male') checked @endif>
                                            <label class="form-check-label"
                                                for="inlineRadio1">{{ __('employees.male') }}</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('gender') parsley-error @enderror"
                                                type="radio" name="gender" id="inlineRadio2"
                                                value="Female @if (old('gender') == 'Female') checked @endif">
                                            <label class="form-check-label"
                                                for="inlineRadio2">{{ __('employees.female') }}</label>
                                        </div>
                                        @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="total"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.total') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('total') parsley-error @enderror"
                                            name="total" type="number" value="{{ old('total') }}" id="total">
                                        @error('total')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="consumed"
                                        class="col-sm-2 form-label align-self-center mb-lg-0 text-end">{{ __('approvals.consumed') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('consumed') parsley-error @enderror"
                                            name="consumed" type="number" value="{{ old('consumed') }}"
                                            id="consumed">
                                        @error('consumed')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">{{ __('master.submit') }}</button>
                                        <a href="{{ route('approvals') }}"
                                            class="btn btn-danger">{{ __('master.cancel') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>

    <div class="modal fade" id="jobModal" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="jobModalLabel">{{ __('master.new') }}</h6>
                    <button type="button" id="close" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">
                    <div class="card-body p-0">
                        <form id="newJobForm" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label class="form-label" for="jobName">{{ __('master.name') }}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" id="jobName">
                                </div>
                            </div><!--end form-group-->

                            <div class="form-group mb-2">
                                <label class="form-label" for="jobNameAr">{{ __('master.nameAr') }}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nameAr" id="jobNameAr">
                                </div>
                            </div><!--end form-group-->

                            <div class="form-group mb-0 row">
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 waves-effect waves-light"
                                        type="submit">{{ __('master.save') }}</button>
                                </div><!--end col-->
                            </div> <!--end form-group-->
                        </form>
                    </div><!--end card-body-->
                </div><!--end modal-body-->

            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->
@endsection
@section('script')
    <script src="{{ URL::asset('node_modules/axios/dist/axios.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('select').select2({
                width: '100%'
            });
            $('select.parsley-error').next().find('span.select2-selection.select2-selection--single').addClass(
                'parsley-error');
            ////////////////////////////////////////////////////////////////////////////////////////////////////////
            document.getElementById('newJobForm').addEventListener('submit', function(e) {
                e.preventDefault();
                var lang = "{{ App::getLocale() }}";
                var formData = new FormData(this);
                // Send form data using Axios
                axios.post('/lookup/job', formData)
                    .then(function(response) {
                        var dropdown = document.getElementById('job_title_id');
                        var option = document.createElement('option');
                        option.value = response.data.id;
                        if (lang == 'en') {
                            option.text = response.data.name;
                        } else {
                            option.text = response.data.name_ar;
                        }

                        dropdown.add(option);
                        option.selected = true;
                        document.getElementById('jobModal').click();
                    })
                    .catch(function(error) {
                        console.error(error);
                    });
            });
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        });
    </script>
@endsection
