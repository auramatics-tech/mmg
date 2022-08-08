<div class="w-100">
    <form action="{{route('save_listing_details')}}" method="POST">
    @csrf
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#change_status" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Change Status
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="change_status" class="collapse show">

        <div class="d-flex flex-column mb-7 fv-row">

            <label class="required fs-6 fw-bold mb-2">Status</label>
            <select class="form-control form-control-solid " name="status" data-control="select2" data-hide-search="true" data-placeholder="Select a status">
                <option value="">Select status...</option>
                <option value="Draft">Draft</option>
                <option value="Active">Active</option>
                <option value="Off Market">Off Market</option>
                <option value="Withdrawn">Withdrawn</option>
                <option value="Sold">Sold</option>
                <option value="Under Offer">Under Offer</option>
            </select>
        </div>

        <div class="fv-row mb-7">

            <div class="d-flex flex-stack">

                <div class="me-5">

                    <label class="fs-6 fw-bold">Featured Property</label>


                    <div class="fs-7 fw-bold text-muted">Tick this box to display this property in featured areas on your website</div>

                </div>


                <label class="form-check form-switch form-check-custom form-check-solid">

                    <input class="form-check-input" name="is_featured" type="checkbox" value="1" id="kt_modal_add_customer_billing" checked="checked" />


                    <span class="form-check-label fw-bold text-muted" for="kt_modal_add_customer_billing">Yes</span>

                </label>

            </div>

        </div>

    </div>
    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#about_listing" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">About the listing
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="about_listing" class="collapse show">

        <div class="d-flex flex-column mb-7 fv-row business_show">
            <label class="fs-6 fw-bold mb-2">Business Name</label>
            <input class="form-control form-control-solid" placeholder="" name="business_name" value="" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row business_show">
            <label class="fs-6 fw-bold mb-2">Sale or Tender</label>
            <input class="form-control form-control-solid" placeholder="" name="business_name" value="" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row land_hide commercial_hide business_hide ">
            <label class="required fs-6 fw-bold mb-2">Property Type</label>

            <select class="form-control form-control-solid " name="property_type" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value=""></option>
                @foreach($property_types as $property_type)
                <option value="{{$property_type->value}}">{{$property_type->value}}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row land_hide commercial_hide rural_hide business_hide">
            <label class="fs-6 fw-bold mb-2">Established or Development</label>

            <select class="form-control form-control-solid " name="new_construction" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value="0">Established Building</option>
                <option value="1">Under Development</option>
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row residential_sale_show">

            <label class="required fs-6 fw-bold mb-2">Is Home and Land Package</label>

            <select class="form-control form-control-solid " name="home_and_land_package" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row commercial_show">
            <label class="required fs-6 fw-bold mb-2">Sale or Lease</label>
            <select class="form-control form-control-solid" name="commercial_listing_type" id="property_commercial_listing_type">
                <option value="commercial_sale">For Sale</option>
                <option value="commercial_lease">For Lease</option>
                <option value="commercial_sale_and_lease">For Sale and Lease</option>
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">

            <label class="fs-6 fw-bold mb-2">Property Type (Primary) </label>

            
            <select class="form-control form-control-solid " name="commercial_property_type" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value=""></option>
                @foreach($property_types as $property_type)
                <option value="{{$property_type->value}}">{{$property_type->value}}</option>
                @endforeach
            </select>

        </div>
        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">

            <label class="fs-6 fw-bold mb-2">Property Type 2 </label>


            <select class="form-control form-control-solid " name="commercial_property_type2" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value=""></option>
                @foreach($property_types as $property_type)
                <option value="{{$property_type->value}}">{{$property_type->value}}</option>
                @endforeach
            </select>

        </div>
        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">
            <label class="fs-6 fw-bold mb-2">Property Type 3 </label>
            
            <select class="form-control form-control-solid " name="commercial_property_type3" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value=""></option>
                @foreach($property_types as $property_type)
                <option value="{{$property_type->value}}">{{$property_type->value}}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row residential_sale_show land_show commercial_sale_show rural_show">

            <label class="required fs-6 fw-bold mb-2">Authority</label>

            <select class="form-control form-control-solid " name="authority" data-control="select2" data-hide-search="true" data-placeholder="Select a Authority">
                <option value=""></option>
                <option value="Auction">Auction</option>
                <option value="Exclusive">Exclusive</option>
                <option value="Multi List">Multi List</option>
                <option value="Conjunctional">Conjunctional</option>
                <option value="Open">Open</option>
                <option value="Sale by Negotiation">Sale by Negotiation</option>
            </select>
        </div>

        <div class="d-flex flex-column mb-8 fv-row">

            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Agents</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i>
            </label>

            <input class="form-control form-control-solid" name="agents" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row residential_rental_show">

            <label class="fs-6 fw-bold mb-2">Rental Per Week</label>


            <input class="form-control form-control-solid" placeholder="" name="rental_per_week" value="" />

        </div>
        <div class="d-flex flex-column mb-7 fv-row residential_rental_show">

            <label class="fs-6 fw-bold mb-2">Rental Per Calendar Month</label>


            <input class="form-control form-control-solid" placeholder="" name="rental_per_month" value="" />

        </div>
        <div class="d-flex flex-column mb-7 fv-row residential_rental_show">

            <label class="fs-6 fw-bold mb-2">Security Bond</label>


            <input class="form-control form-control-solid" placeholder="" name="rental_security_bond" value="" />

        </div>
        <div class="row g-9 mb-7">

            <div class="col-md-6 fv-row">

                <label class="required fs-6 fw-bold mb-2">Listing Expiry Date</label>


                <input class="form-control form-control-solid" placeholder="" name="listing_expiry_date" type="date" />

            </div>


            <div class="col-md-6 fv-row residential_rental_hide residential_sale_show land_show commercial_sale_show rural_show business_show">

                <label class="required fs-6 fw-bold mb-2">Price</label>


                <input class="form-control form-control-solid" placeholder="" name="price" />

            </div>

        </div>
        <div class="mb-10">

            <div class="mb-3">

                <label class="d-flex align-items-center fs-5 fw-bold">
                    <span class="required">Display Price</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i>
                </label>
            </div>


            <div class="fv-row">

                <div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">

                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">

                        <input class="btn-check" type="radio" name="show_price" checked="checked" value="show" />

                        Show actual price</label>


                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success active" data-kt-button="true">

                        <input class="btn-check" type="radio" name="show_price" value="text" />

                        Show text instead of price</label>


                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">

                        <input class="btn-check" type="radio" name="show_price" value="contact" />

                        Hide the price and display 'Contact Agent'</label>
                </div>
                <br><br>
                <input class="form-control form-control-solid" placeholder="Price text" name="alt_to_price" />


            </div>

        </div>

        <div class="d-flex flex-column mb-7 fv-row residential_rental_show">

            <label class="fs-6 fw-bold mb-2">Date Available</label>


            <input class="form-control form-control-solid" placeholder="" name="rental_date_available" value="" />

        </div>

        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">

            <label class="fs-6 fw-bold mb-2">Exclusivity</label>
            <select class="form-control form-control-solid" name="commercial_exclusivity" id="property_commercial_exclusivity">
                <option value="Exclusive">Exclusive</option>
                <option value="Open">Open</option>
            </select>
        </div>


        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">

            <label class="fs-6 fw-bold mb-2">Tax</label>
            <select class="form-control form-control-solid" name="commercial_tax" id="property_commercial_tax">
                <option value="Exclusive">Exclusive</option>
                <option value="Inclusive">Inclusive</option>
                <option value="Not Applicable">Not Applicable</option>
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row business_show">

            <label class="fs-6 fw-bold mb-2">Terms</label>


            <input class="form-control form-control-solid" placeholder="" name="terms" value="" />

        </div>

        <div class="d-flex flex-column mb-7 fv-row commercial_sale_show">

            <label class="fs-6 fw-bold mb-2">Return on Investment</label>


            <input class="form-control form-control-solid" placeholder="" name="commercial_roi" value="" />

        </div>
    </div>

    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7 commercial_lease_show" data-bs-toggle="collapse" href="#lease_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Lease Details
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="lease_details" class="collapse show commercial_lease_show">
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Rental Per Annum</label>
            <input class="form-control form-control-solid" placeholder="" name="commercial_rental_per_annum" />
        </div>

        <div class="row g-9 mb-7">
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">PSM/PA Min</label>
                <input class="form-control form-control-solid" placeholder="" name="commercial_psm_pa_min" type="date" />
            </div>
            <div class="col-md-6 fv-row residential_rental_hide commercial_sale_show">
                <label class="required fs-6 fw-bold mb-2">PSM/PA Max</label>
                <input class="form-control form-control-solid" placeholder="" name="commercial_psm_pa_max" />
            </div>

        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Current Lease Expiry</label>
            <input class="form-control form-control-solid" placeholder="" name="commercial_lease_expiry_date" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Outgoings</label>
            <input class="form-control form-control-solid" placeholder="" name="commercial_outgoings" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Lease Term</label>
            <input class="form-control form-control-solid" placeholder="" name="commercial_lease_term" />
        </div>
    </div>
    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#vender_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Vendor details
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="vender_details" class="collapse show">
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Vendor/Landlord</label>
            <input class="form-control form-control-solid" placeholder="" name="lardlord" />
        </div>
    </div>

    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#property_address" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Property Address
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="property_address" class="collapse show">
        <div class="d-flex flex-column mb-7 fv-row commercial_show">
            <label class="required fs-6 fw-bold mb-2">Property Name</label>
            <input class="form-control form-control-solid" placeholder="" name="commercial_property_name" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Address</label>
            <input class="form-control form-control-solid" placeholder="" name="address" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="fs-6 fw-bold mb-2">Unit</label>
            <input class="form-control form-control-solid" placeholder="" name="unit" value="" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row">

            <label class="required fs-6 fw-bold mb-2">Street number</label>


            <input class="form-control form-control-solid" placeholder="" name="street_no" />

        </div>
        <div class="d-flex flex-column mb-7 fv-row">

            <label class="required fs-6 fw-bold mb-2">Street name</label>


            <input class="form-control form-control-solid" placeholder="" name="street" />

        </div>
        <div class="row g-9 mb-8">

            <div class="col-md-4 fv-row fv-plugins-icon-container">
                <label class="required fs-6 fw-bold mb-2">Suburb</label>
                <input class="form-control form-control-solid" placeholder="" name="suburb" />
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="col-md-4 fv-row fv-plugins-icon-container">
                <label class="required fs-6 fw-bold mb-2">State</label>
                <input class="form-control form-control-solid" placeholder="" name="state" />
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="col-md-4 fv-row fv-plugins-icon-container">
                <label class="required fs-6 fw-bold mb-2">Postcode</label>
                <input class="form-control form-control-solid" placeholder="" name="postcode" />
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        <div class="d-flex flex-column mb-7 fv-row">

            <label class="fs-6 fw-bold mb-2">
                <span class="required">Display</span>
                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
            </label>

            <select class="form-control form-control-solid " name="address_display" data-control="select2" data-hide-search="true">
                <option value="Full Address">Full Address</option>
                <option value="Suburb Only">Suburb Only</option>
            </select>
        </div>
    </div>

    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#internal_notes" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Internal Notes
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="internal_notes" class="collapse show">

        <div class="d-flex flex-column mb-7 fv-row">

            <label class="required fs-6 fw-bold mb-2">Key Number</label>


            <input class="form-control form-control-solid" placeholder="" name="key_number" />

        </div>


        <div class="d-flex flex-column mb-7 fv-row">

            <label class="fs-6 fw-bold mb-2">Key Location</label>


            <input class="form-control form-control-solid" placeholder="" name="key_location" value="" />

        </div>


        <div class="d-flex flex-column mb-7 fv-row">

            <label class="required fs-6 fw-bold mb-2">Alarm Code</label>


            <input class="form-control form-control-solid" placeholder="" name="alarm_code" />

        </div>

        <div class="d-flex flex-column mb-7 fv-row">

            <label class="required fs-6 fw-bold mb-2">Internal Notes</label>


            <input class="form-control form-control-solid" placeholder="" name="internal_notes" />

        </div>
    </div>
    <button class="btn btn-primary">Save</button>
    </form>
</div>