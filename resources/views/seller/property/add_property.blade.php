@extends('backend_layouts.master')
@section('css')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
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
                                <div class="stepper-item me-5 me-md-15 {{ (Route::is('seller.add_property_form') == 'seller.add_property_form') ? 'current' : '' }}" data-kt-stepper-element="nav">
                                    @if(isset(request()->property_id))
                                    <a href="{{route('seller.add_property_form',request()->property_id)}}?listing_type={{get_property_type(request()->property_id)->form_type}}">
                                        <h3 class="stepper-title">Listing Details</h3>
                                    </a>
                                    @else
                                    <h3 class="stepper-title">Listing Details</h3>
                                    @endif
                                </div>
                                <div class="stepper-item me-5 me-md-15 {{ (Route::is('seller.property_details_form') == 'seller.property_details_form') ? 'current' : '' }}" data-kt-stepper-element="nav">
                                    @if(isset(request()->property_id))
                                    <a href="{{route('seller.property_details_form',request()->property_id)}}">
                                        <h3 class="stepper-title">Property Details</h3>
                                    </a>
                                    @else
                                    <h3 class="stepper-title">Property Details</h3>
                                    @endif
                                </div>
                                <div class="stepper-item me-5 me-md-15 {{ (Route::is('seller.property_image_form') == 'seller.property_image_form') ? 'current' : '' }}" data-kt-stepper-element="nav">
                                    @if(isset(request()->property_id))
                                    <a href="{{route('seller.property_image_form',request()->property_id)}}">
                                        <h3 class="stepper-title">Images and Copy</h3>
                                    </a>
                                    @else
                                    <h3 class="stepper-title">Images and Copy</h3>
                                    @endif
                                </div>
                                <div class="stepper-item me-5 me-md-15 {{ (Route::is('seller.property_inspection_form') == 'seller.property_inspection_form') ? 'current' : '' }}" data-kt-stepper-element="nav">
                                    @if(isset(request()->property_id))
                                    <a href="{{route('seller.property_inspection_form',request()->property_id)}}">
                                        <h3 class="stepper-title">Inspections</h3>
                                    </a>
                                    @else
                                    <h3 class="stepper-title">Inspections</h3>
                                    @endif
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
    <div id="map" style="display:none;"></div>
    @endsection
    @section('script')
    <script>
        // tagging support
        $('#kt_select2_12_1, #kt_select2_12_2, #kt_select2_12_3, #kt_select2_12_4').select2({
            placeholder: "Select an option",
        });

        // tagging support
        $('#kt_select2_11').select2({
            placeholder: "Add a tag",
            tags: true
        });

        $(document).on('click', '.select_input', function() {
            $('.select_input').children('input').removeAttr('checked');
            $(this).children('input').attr('checked', true);
        })
        var formSubmitting = false;
        var setFormSubmitting = function() {
            formSubmitting = true;
        };

        window.onload = function() {
            window.addEventListener("beforeunload", function(e) {
                if (formSubmitting) {
                    return undefined;
                }

                var confirmationMessage = 'It looks like you have been editing something. ' +
                    'If you leave before saving, your changes will be lost.';

                (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-apy6gxIDy6Te4JSdRBpHQeuUXXjZHQI&callback=initMap&libraries=places&v=weekly" defer></script>

    <script>
        function initMap() {
            const map = mapM = new google.maps.Map(document.getElementById("map"), {
                mapTypeControl: false,
                center: {
                    lat: -33.8688,
                    lng: 151.2195
                },
                zoom: 13,
            });
            //  new AutocompleteDirectionsHandler(map);
            initAutocomplete();
        }

        function initAutocomplete() {
            autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('autocomplete2'), {
                types: ['geocode']
            });
            google.maps.event.addListener(autocomplete2, 'place_changed', function() {
                fillInAddress1();
            })
        }

        function fillInAddress1() {
            var place1 = autocomplete2.getPlace();
            $('#origin-input').val(place1.formatted_address);
            for (var i = 0; i < place1.address_components.length; i++) {
                var addressType = place1.address_components[i].types[0];
                // console.log(addressType);
                if (addressType == "street_number") {
                    var street_number = place1.address_components[i].long_name
                    $('#unit').val(place1.address_components[i].long_name);
                }
                if (addressType == "route") {
                    $('#street_no').val(street_number + ' ' + place1.address_components[i].long_name);
                }
                /* if (addressType == "country") {
                    $('#pickupcountry').val(place1.address_components[i].long_name);
                } */
                if (addressType == "postal_code") {
                    $('#postcode').val(place1.address_components[i].long_name);
                }
                if (addressType == "locality") {
                    $('#suburb').val(place1.address_components[i].long_name);
                }
                if (addressType == "administrative_area_level_1") {
                    $('#state').val(place1.address_components[i].long_name);
                }
            }
        }
    </script>

    @endsection