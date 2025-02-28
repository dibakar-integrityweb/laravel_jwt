@extends('layouts.admin.app')

@section('title')
    Social
@endsection
@section('css')
    <link href="{{asset('backend/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}"/>
    <link href="{{asset('backend/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}"/>
    <link href="{{asset('backend/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}"/>
    <link href="{{asset('backend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/flatpickr/flatpickr.css')}}" />
    <link href="{{asset('backend/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/select2/select2.css')}}" />
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-6">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>
        </div>
        <div class="col-md-6">
          <div class="dt-action-buttons text-end pt-3 pt-md-0">
            <div class="dt-buttons btn-group flex-wrap">
              <div class="btn-group">
                <button class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-4 waves-effect waves-light border-none" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false">
                  <span>
                    <i class="ri-external-link-line me-sm-1"></i>
                    <span class="d-none d-sm-inline-block">Export</span>
                  </span>
                </button>
              </div>
              <button class="btn btn-secondary create-new btn-primary waves-effect waves-light" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                <span>
                  <i class="ri-add-line"></i>
                  <span class="d-none d-sm-inline-block">Add New</span>
                </span>
              </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="mb-3">
                <select id="select_action" class="form-select form-select-sm select2">
                <option>Select Action</option>
                <option value="is_delete">Delete Teams</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <button type="button" id="apply_action" class="btn btn-primary waves-effect waves-light disabled applyAction">Apply</button>
            </div>
        </div>
        <div class="col-md-2 filter-status">
            <div class="mb-3">
                <select class="form-select form-select-sm select2" id="filter_status" name="status">
                    <option value="">Status Search</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <input id="searchbox" class="form-control form-control-sm" type="search" placeholder="Search.......">
            </div>
        </div>
    </div>  
    <div class="card">   
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table table-bordered" id="dataTable">
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('backend/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<!-- Flat Picker -->
<script src="{{asset('backend/assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/select2/select2.js')}}"></script>
<x-layouts.admin.toast-swal-alert/>
<x-admin.cms.social.social-datatable/>
@endsection
