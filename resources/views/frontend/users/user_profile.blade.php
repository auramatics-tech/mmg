@extends('backend_layouts.master')
@section('content')
<form action="{{route('update_profile')}}" method="post" class="px-10 bg-white pt-0" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-6 flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Profile</label>
            <input type="file" class="form-control form-control-solid" placeholder="" name="profile_pic" value="{{Auth::user()->profile_pic}}" />
        </div>
        <div class="col-6 flex-column mb-7 fv-row">
        <label class="form-check form-switch form-check-custom form-check-solid d-flex justify-content-between">
            <div>
            <span class="form-check-label fw-bold text-dark" for="kt_modal_add_customer_billing">Account Status</span>
                <div class="form-check-label fw-bold text-muted">ON/OFF</div>
            </div>
                <input class="form-check-input" name="account_status" type="checkbox" value="1" id="kt_modal_add_customer_billing" />
            </label>
        </div>
    </div>
    <div class="row">
    <div class="col-6 flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">First Name</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter first name" name="first_name" value="{{Auth::user()->first_name}}" />
        </div>
        <div class="col-6 flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Last Name</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter last name" name="last_name" value="{{Auth::user()->last_name}}" />
        </div>
    </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Email</label>
            <input type="email" class="form-control form-control-solid" placeholder="Enter email" name="email" value="{{Auth::user()->email}}" />
            <div class="d-flex flex-stack pt-5">
                <div class="me-5">
                    <label class="fs-6 fw-bold">Email Notifications</label>
                    <div class="fs-7 fw-bold text-muted">ON/OFF</div>
                </div>
                <label class="form-check form-switch form-check-custom form-check-solid">
                    <input class="form-check-input" name="notification_flag" type="checkbox" value="1" id="kt_modal_add_customer_billing" />
                </label>
            </div>
        </div>
        <div class="row">
        <div class="col-6 flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Password</label>
            <input type="password" class="form-control form-control-solid" placeholder="Enter password" name="password" value="" />
        </div>
        <div class="col-6 flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Confirm Password</label>
            <input type="password" class="form-control form-control-solid" placeholder="" name="confirm_password" value="" />
        </div>
        </div>
    <br>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection