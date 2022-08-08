@extends('seller.layouts.master')
@section('css')
<style>
    @if(request()->get('listing_type')=='residential_rental') .land_show {
        display: none !important;
    }

    .commercial_show {
        display: none !important;
    }

    .commercial_lease_show {
        display: none !important;
    }

    .commercial_sale_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .business_show {
        display: none !important;
    }

    .residential_sale_show {
        display: none !important;
    }

    .residential_rental_show {
        display: block !important;
    }

    .residential_rental_hide {
        display: none !important;
    }

    @elseif(request()->get('listing_type')=='land') .commercial_show {
        display: none !important;
    }

    .commercial_lease_show {
        display: none !important;
    }

    .commercial_sale_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .business_show {
        display: none !important;
    }

    .residential_sale_show {
        display: none !important;
    }

    .residential_rental_show {
        display: none !important;
    }

    .land_show {
        display: block !important;
    }

    .land_hide {
        display: none !important;
    }

    @elseif(request()->get('listing_type')=='commercial') .rural_show {
        display: none !important;
    }

    .business_show {
        display: none !important;
    }

    .residential_sale_show {
        display: none !important;
    }

    .residential_rental_show {
        display: none !important;
    }

    .land_show {
        display: none !important;
    }

    .commercial_show {
        display: block !important;
    }

    .commercial_lease_show {
        display: block !important;
    }

    .commercial_sale_show {
        display: block !important;
    }

    .commercial_hide {
        display: none !important;
    }

    @elseif(request()->get('listing_type')=='rural') .business_show {
        display: none !important;
    }

    .residential_sale_show {
        display: none !important;
    }

    .residential_rental_show {
        display: none !important;
    }

    .land_show {
        display: none !important;
    }

    .commercial_show {
        display: none !important;
    }

    .commercial_lease_show {
        display: none !important;
    }

    .commercial_sale_show {
        display: none !important;
    }

    .rural_show {
        display: block !important;
    }

    .rural_hide {
        display: none !important;
    }

    @elseif(request()->get('listing_type')=='business') .residential_sale_show {
        display: none !important;
    }

    .residential_rental_show {
        display: none !important;
    }

    .land_show {
        display: none !important;
    }

    .commercial_show {
        display: none !important;
    }

    .commercial_lease_show {
        display: none !important;
    }

    .commercial_sale_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .business_show {
        display: block !important;
    }

    .business_hide {
        display: none !important;
    }

    @elseif(request()->get('listing_type')=='residential_sale') .residential_rental_show {
        display: none !important;
    }

    .land_show {
        display: none !important;
    }

    .commercial_show {
        display: none !important;
    }

    .commercial_lease_show {
        display: none !important;
    }

    .commercial_sale_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .rural_show {
        display: none !important;
    }

    .business_show {
        display: none !important;
    }

    .residential_sale_show {
        display: block !important;
    }

    .residential_sale_hide {
        display: none !important;
    }

    @endif
</style>
@endsection
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Properties List</h1>
                
                <!--begin::Separator-->
                <span class="h-0px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Property Management</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Properties</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Properties List</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body">
                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper" data-kt-stepper="true">

                        <div class="container">
                            <div class="stepper-nav justify-content-center py-2">
                                <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Listing Details</h3>
                                </div>
                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Property Details</h3>
                                </div>
                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Images and Copy</h3>
                                </div>

                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Inspections</h3>
                                </div>
                            </div>

                            <div class="current" data-kt-stepper-element="content">
                                @if($property_form == "listing_details")
                                    @include('seller.property.inc.listing_details')
                                @elseif($property_form == "property_details")
                                    @include('seller.property.inc.property_details')
                                @elseif($property_form == "image_docs")
                                    @include('seller.property.inc.image_docs')
                                @elseif($property_form == "inspections")
                                    @include('seller.property.inc.inspections')
                                @endif
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection