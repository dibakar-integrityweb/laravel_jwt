@extends('layouts.admin.app')

@section('title')
    Setting
@endsection
@section('css')  
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/toastr/toastr.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/animate-css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}" />
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
       <div class="col-12">
          <h5>Settings</h5>
       </div>
     
       <!-- Vertical Wizard -->
       <div class="col-12 mb-6">
          <div class="bs-stepper wizard-vertical vertical wizard-vertical-icons-example wizard-vertical-icons mt-2">
             <div class="bs-stepper-header">
                <div class="col-12">
                    <small class="text-light fw-medium">Vertical Tabs</small>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <ul class="nav flex-column nav-pills" id="tab-menu" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="account-tab" data-bs-toggle="pill" href="#account-details" role="tab">
                                        <i class="ri-contacts-fill ri-24px"></i> Account Details
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="personal-tab" data-bs-toggle="pill" href="#personal-info" role="tab">
                                        <i class="ri-user-line ri-24px"></i> Personal Info
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="social-tab" data-bs-toggle="pill" href="#social-links" role="tab">
                                        <i class="ri-instagram-line ri-24px"></i> Social Links
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-md-9">
                            <div class="tab-content" id="tab-content">
                                <!-- Account Details -->
                                <div class="tab-pane fade show active" id="account-details" role="tabpanel">
                                    <h6>Account Details</h6>
                                    <small>Enter Your Account Details.</small>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" placeholder="john.doe">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="john.doe@example.com">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button class="btn btn-primary" onclick="nextTab('personal-tab')">Next</button>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Personal Info -->
                                <div class="tab-pane fade" id="personal-info" role="tabpanel">
                                    <h6>Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="John">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Doe">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button class="btn btn-outline-secondary" onclick="prevTab('account-tab')">Previous</button>
                                            <button class="btn btn-primary" onclick="nextTab('social-tab')">Next</button>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Social Links -->
                                <div class="tab-pane fade" id="social-links" role="tabpanel">
                                    <h6>Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="form-label">Twitter</label>
                                            <input type="text" class="form-control" placeholder="https://twitter.com/yourprofile">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Facebook</label>
                                            <input type="text" class="form-control" placeholder="https://facebook.com/yourprofile">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button class="btn btn-outline-secondary" onclick="prevTab('personal-tab')">Previous</button>
                                            <button class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
             </div>
             {{-- <div class="bs-stepper-content">
               
             </div> --}}
          </div>
       </div>
       <!-- /Vertical Wizard -->
    </div>
 </div>
@endsection

@section('js')
    <script src="{{ asset('backend/libs/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/libs/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{asset('backend/assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/libs/select2/select2.js')}}"></script>
    <script src="{{asset('backend/assets/js/form-wizard-icons.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/libs/toastr/toastr.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
    <script src="{{asset('backend/js/loader.js')}}"></script>
    <script src="{{asset('backend/js/coustom.js')}}"></script>
    <script src="{{asset('backend/js/pages/setting.js')}}"></script>
    <x-layouts.admin.toast-swal-alert/>
@endsection