@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Profile</h4>
                <h6>User Profile</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="profile-set">
                    <div class="profile-head">
                    </div>
                    <div class="profile-top">
                        <div class="profile-content">
                            <div class="profile-contentimg">
                                <img src="{{ url('assets/img/profiles/avatar-1.png') }}" alt="img" id="blah">
                                <div class="profileupload">
                                    <input type="file" id="imgInp">
                                    <a href="javascript:void(0);"><img src="assets/img/icons/edit-set.svg"
                                            alt="img"></a>
                                </div>
                            </div>
                            <div class="profile-contentname">
                                <h2>Putri Rohmatun</h2>
                                <h4>Updates Your Photo and Personal Details.</h4>
                            </div>
                        </div>
                        <!-- <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-submit me-2" id="saveButton">Save</a>
                            <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" placeholder="Putri">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Rohmatun">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" placeholder="putrir@gmail.com">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" placeholder="+62 876 432 535">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" placeholder="Putri Rohmatun">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class=" pass-input">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0);" class="btn btn-submit me-2" id="saveButton">Save</a>
                        <a href="{{ url('/')}}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection