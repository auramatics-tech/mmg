<div class="w-100">

    <form action="{{route('seller.save_listing_details')}}" method="POST" onsubmit="setFormSubmitting()">
        @csrf
        <input type="hidden" name="form_type" value="{{isset(request()->listing_type) ? request()->listing_type : ''}}">
        <input type="hidden" name="id" value="{{isset(request()->property_id) ? request()->property_id : ''}}">

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
                    <option {{((old('status') ?? isset($property->status)?$property->status:'')=='Draft')?'selected':'' }} value="Draft">Draft</option>
                    <option {{((old('status') ?? isset($property->status)?$property->status:'')=='Active')?'selected':'' }} value="Active">Active</option>
                    <option {{((old('status') ?? isset($property->status)?$property->status:'')=='Off Market')?'selected':'' }} value="Off Market">Off Market</option>
                    <option {{((old('status') ?? isset($property->status)?$property->status:'')=='Withdrawn')?'selected':'' }} value="Withdrawn">Withdrawn</option>
                    <option {{((old('status') ?? isset($property->status)?$property->status:'')=='Sold')?'selected':'' }} value="Sold">Sold</option>
                    <option {{((old('status') ?? isset($property->status)?$property->status:'')=='Under Offer')?'selected':'' }} value="Under Offer">Under Offer</option>
                </select>
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="fv-row mb-7">

                <div class="d-flex flex-stack">

                    <div class="me-5">

                        <label class="fs-6 fw-bold">Featured Property</label>


                        <div class="fs-7 fw-bold text-muted">Tick this box to display this property in featured areas on your website</div>

                    </div>

                    <label class="form-check form-switch form-check-custom form-check-solid">

                        <input class="form-check-input" name="is_featured" type="checkbox" value="1" id="kt_modal_add_customer_billing" {{((old('is_featured') ?? isset($property->is_featured)?$property->is_featured:'')=='1')?'checked':'' }} />

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
                <input class="form-control form-control-solid" placeholder="" name="business_name" value="{{old('business_name') ?? isset($property->business_name)?$property->business_name:''}}" />
            </div>
            <div class="d-flex flex-column mb-7 fv-row business_show">
                <label class="fs-6 fw-bold mb-2">Sale or Tender</label>
                <select class="form-control form-control-solid " name="commercial_listing_type" data-control="select2" data-hide-search="true" data-placeholder="Select">
                    <option value="sale" {{((old('commercial_listing_type') ?? isset($property->commercial_listing_type)?$property->commercial_listing_type:'')=='sale')?'selected':'' }}>For Sale</option>
                    <option value="tender" {{((old('commercial_listing_type') ?? isset($property->commercial_listing_type)?$property->commercial_listing_type:'')=='tender')?'selected':'' }}>Tender</option>
                </select>
            </div>
            <div class="d-flex flex-column mb-7 fv-row land_hide commercial_hide business_hide ">
                <label class="required fs-6 fw-bold mb-2">Property Type</label>
                <select class="form-control form-control-solid " name="property_type" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                    <option value=""></option>
                    @foreach($property_types as $property_type)
                    <option value="{{$property_type->value}}" {{((old('property_type') ?? isset($property->property_type)?$property->property_type:'')==$property_type->value)?'selected':'' }}>{{$property_type->value}}</option>
                    @endforeach
                </select>
                @error('property_type')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {{-- <div class="d-flex flex-column mb-7 fv-row land_hide commercial_hide rural_hide business_hide">
            <label class="fs-6 fw-bold mb-2">Established or Development</label>

            <select class="form-control form-control-solid " name="new_construction" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value="0" {{((old('new_construction') ?? isset($property->new_construction)?$property->new_construction:'')=='0')?'selected':'' }}>Established Building</option>
            <option value="1" {{((old('new_construction') ?? isset($property->new_construction)?$property->new_construction:'')=='1')?'selected':'' }}>Under Development</option>
            </select>
        </div> --}}
        <div class="d-flex flex-column mb-7 fv-row residential_sale_show">

            <label class="required fs-6 fw-bold mb-2">Is Home and Land Package</label>

            <select class="form-control form-control-solid " name="home_and_land_package" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value="0" {{((old('home_and_land_package') ?? isset($property->home_and_land_package)?$property->home_and_land_package:'')=='0')?'selected':'' }}>No</option>
                <option value="1" {{((old('home_and_land_package') ?? isset($property->home_and_land_package)?$property->home_and_land_package:'')=='1')?'selected':'' }}>Yes</option>
            </select>
            @error('home_and_land_package')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="d-flex flex-column mb-7 fv-row commercial_show">
            <label class="required fs-6 fw-bold mb-2">Sale or Lease</label>
            <select class="form-control form-control-solid" name="commercial_listing_type" id="property_commercial_listing_type">
                <option value="commercial_sale" {{((old('commercial_listing_type') ?? isset($property->commercial_listing_type)?$property->commercial_listing_type:'')=='commercial_sale')?'selected':'' }}>For Sale</option>
                <option value="commercial_lease" {{((old('commercial_listing_type') ?? isset($property->commercial_listing_type)?$property->commercial_listing_type:'')=='commercial_lease')?'selected':'' }}>For Lease</option>
                <option value="commercial_sale_and_lease" {{((old('commercial_listing_type') ?? isset($property->commercial_listing_type)?$property->commercial_listing_type:'')=='commercial_sale_and_lease')?'selected':'' }}>For Sale and Lease</option>
            </select>


        </div>

        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">

            <label class="fs-6 fw-bold mb-2">Property Type (Primary) </label>


            <select class="form-control form-control-solid " name="commercial_property_type" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value=""></option>
                @foreach($property_types as $property_type)
                <option value="{{$property_type->value}}" {{((old('commercial_property_type') ?? isset($property->commercial_property_type)?$property->commercial_property_type:'')==$property_type->value)?'selected':'' }}>{{$property_type->value}}</option>
                @endforeach
            </select>

        </div>
        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">

            <label class="fs-6 fw-bold mb-2">Property Type 2 </label>


            <select class="form-control form-control-solid " name="commercial_property_type2" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value=""></option>
                @foreach($property_types as $property_type)
                <option value="{{$property_type->value}}" {{((old('commercial_property_type2') ?? isset($property->commercial_property_type2)?$property->commercial_property_type2:'')==$property_type->value)?'selected':'' }}>{{$property_type->value}}</option>
                @endforeach
            </select>


        </div>
        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">
            <label class="fs-6 fw-bold mb-2">Property Type 3 </label>

            <select class="form-control form-control-solid " name="commercial_property_type3" data-control="select2" data-hide-search="true" data-placeholder="Select a property type">
                <option value=""></option>
                @foreach($property_types as $property_type)
                <option value="{{$property_type->value}}" {{((old('commercial_property_type3') ?? isset($property->commercial_property_type3)?$property->commercial_property_type3:'')==$property_type->value)?'selected':'' }}>{{$property_type->value}}</option>
                @endforeach
            </select>


        </div>

        <div class="d-flex flex-column mb-7 fv-row residential_sale_show land_show commercial_sale_show rural_show">

            <label class="required fs-6 fw-bold mb-2">Authority</label>

            <select class="form-control form-control-solid " name="authority" data-control="select2" data-hide-search="true" data-placeholder="Select a Authority">
                <option value=""></option>
                <option value="Auction" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Auction')?'selected':'' }}>Auction</option>
                <option value="Exclusive" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Exclusive')?'selected':'' }}>Exclusive</option>
                <option value="Multi List" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Multi List')?'selected':'' }}>Multi List</option>
                <option value="Conjunctional" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Conjunctional')?'selected':'' }}>Conjunctional</option>
                <option value="Open" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Open')?'selected':'' }}>Open</option>
                <option value="Sale by Negotiation" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Sale by Negotiation')?'selected':'' }}>Sale by Negotiation</option>
            </select>
            @error('authority')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {{--<div class="d-flex flex-column mb-8 fv-row ">

            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Agents</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i>
            </label>

            <select class="form-control form-control-solid " name="agents" data-control="select2" data-hide-search="true" data-placeholder="Select a Agents">
                <option value=""></option>
                @if(count($agents))
                @foreach($agents as $agent)
                <option value="{{$agent->id}}">{{$agent->first_name}}</option>
                @endforeach
                @endif
            </select>
        </div>--}}
        <div class="d-flex flex-column mb-7 fv-row residential_rental_show">

            <label class="fs-6 fw-bold mb-2">Rental Per Week</label>

            <div class="position-relative me-md-2">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                    <i class="bi bi-currency-dollar"></i>
                </span>
                <!--end::Svg Icon-->
                <input type="number" class="form-control form-control-solid ps-10" name="rental_per_week" value="{{old('rental_per_week') ?? isset($property->rental_per_week)?$property->rental_per_week:''}}">
            </div>


        </div>
        <div class="d-flex flex-column mb-7 fv-row residential_rental_show">

            <label class="fs-6 fw-bold mb-2">Rental Per Calendar Month</label>


            <div class="position-relative me-md-2">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                    <i class="bi bi-currency-dollar"></i>
                </span>
                <!--end::Svg Icon-->
                <input type="number" class="form-control form-control-solid ps-10" name="rental_per_month" value="{{old('rental_per_month') ?? isset($property->rental_per_month)?$property->rental_per_month:''}}">
            </div>

        </div>
        <div class="d-flex flex-column mb-7 fv-row residential_rental_show">

            <label class="fs-6 fw-bold mb-2">Security Bond</label>



            <div class="position-relative me-md-2">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                    <i class="bi bi-currency-dollar"></i>
                </span>
                <!--end::Svg Icon-->
                <input type="number" class="form-control form-control-solid ps-10" name="rental_security_bond" value="{{old('rental_security_bond') ?? isset($property->rental_security_bond)?$property->rental_security_bond:''}}">
            </div>

        </div>
        <div class="row g-9 mb-7">
            @if (isset(get_user_roles()->role) && get_user_roles()->role == 4)
            <div class="col-md-6 fv-row">

                <label class="required fs-6 fw-bold mb-2">Listing Expiry Date</label>


                <input class="form-control form-control-solid" placeholder="" name="listing_expiry_date" type="date" value="{{old('listing_expiry_date') ?? isset($property->listing_expiry_date)?$property->listing_expiry_date:''}}" />

            </div>
            @endif
            <div class="col-md-6 fv-row residential_rental_hide residential_sale_show land_show commercial_sale_show rural_show business_show">
                <label class="required fs-6 fw-bold mb-2"> Normal Price</label>
                <div class="position-relative w-md-400px me-md-2">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                        <i class="bi bi-currency-dollar"></i>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="number" class="form-control form-control-solid ps-10" name="normal_price" value="{{old('normal_price') ?? isset($property->normal_price)?$property->normal_price:''}}">
                    @error('normal_price')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 fv-row residential_rental_hide residential_sale_show land_show commercial_sale_show rural_show business_show">

                <label class="required fs-6 fw-bold mb-2"> Desired Price</label>

                <div class="position-relative w-md-400px me-md-2">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                        <i class="bi bi-currency-dollar"></i>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="number" class="form-control form-control-solid ps-10" name="desired_price" value="{{old('desired_price') ?? isset($property->desired_price)?$property->desired_price:''}}">
                    @error('desired_price')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

            </div>

        </div>

        <div class="mb-10">
            @if (isset(get_user_roles()->role) && get_user_roles()->role == 4)
            <div class="mb-3">

                <label class="d-flex align-items-center fs-5 fw-bold">
                    <span class="required">Display Price</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i>
                </label>
            </div>

            <div class="fv-row">

                <div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">

                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success select_input {{((old('show_price') ?? isset($property->show_price)?$property->show_price:'')=='show')?'active':'' }}" data-kt-button="true">

                        <input class="btn-check" type="radio" name="show_price" value="show" {{((old('show_price') ?? isset($property->show_price)?$property->show_price:'')=='show')?'checked':'' }} />

                        Show actual price</label>


                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success select_input {{((old('show_price') ?? isset($property->show_price)?$property->show_price:'')=='text')?'active':'' }}" data-kt-button="true">

                        <input class="btn-check" type="radio" name="show_price" value="number" {{((old('show_price') ?? isset($property->show_price)?$property->show_price:'')=='number')?'checked':'' }} />

                        Show text instead of price</label>


                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success select_input {{((old('show_price') ?? isset($property->show_price)?$property->show_price:'')=='contact')?'active':'' }}" data-kt-button="true">

                        <input class="btn-check" type="radio" name="show_price" value="contact" {{((old('show_price') ?? isset($property->show_price)?$property->show_price:'')=='contact')?'checked':'' }} />

                        Hide the price and display 'Contact Agent'</label>
                </div>
                <br><br>
                <input class="form-control form-control-solid" placeholder="Priceing texts" name="alt_to_price" value="{{old('alt_to_price') ?? isset($property->alt_to_price)?$property->alt_to_price:''}}" />

            </div>
            @endif
        </div>


        <div class="d-flex flex-column mb-7 fv-row residential_rental_show">

            <label class="fs-6 fw-bold mb-2">Date Available</label>


            <input type="date" class="form-control form-control-solid" placeholder="" name="rental_date_available" value="{{old('rental_date_available') ?? isset($property->rental_date_available)?$property->rental_date_available:''}}" />

        </div>

        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">

            <label class="fs-6 fw-bold mb-2">Exclusivity</label>
            <select class="form-control form-control-solid" name="commercial_exclusivity" id="property_commercial_exclusivity">
                <option value="Exclusive" {{((old('commercial_exclusivity') ?? isset($property->commercial_exclusivity)?$property->commercial_exclusivity:'')=='Exclusive')?'selected':'' }}>Exclusive</option>
                <option value="Open" {{((old('commercial_exclusivity') ?? isset($property->commercial_exclusivity)?$property->commercial_exclusivity:'')=='Open')?'selected':'' }}>Open</option>
            </select>

        </div>


        <div class="d-flex flex-column mb-7 fv-row commercial_show business_show">

            <label class="fs-6 fw-bold mb-2">Tax</label>
            <select class="form-control form-control-solid" name="commercial_tax" id="property_commercial_tax">
                <option value="Exclusive" {{((old('commercial_tax') ?? isset($property->commercial_tax)?$property->commercial_tax:'')=='Exclusive')?'selected':'' }}>Exclusive</option>
                <option value="Inclusive" {{((old('commercial_tax') ?? isset($property->commercial_tax)?$property->commercial_tax:'')=='Inclusive')?'selected':'' }}>Inclusive</option>
                <option value="Not Applicable" {{((old('commercial_tax') ?? isset($property->commercial_tax)?$property->commercial_tax:'')=='Not Applicable')?'selected':'' }}>Not Applicable</option>
            </select>

        </div>

        <div class="d-flex flex-column mb-7 fv-row business_show">

            <label class="fs-6 fw-bold mb-2">Terms</label>


            <input class="form-control form-control-solid" placeholder="" name="terms" value="{{old('terms') ?? isset($property->terms)?$property->terms:''}}" />

        </div>

        <div class="d-flex flex-column mb-7 fv-row commercial_sale_show">

            <label class="fs-6 fw-bold mb-2">Return on Investment</label>


            <input class="form-control form-control-solid" placeholder="" name="commercial_roi" value="{{old('commercial_roi') ?? isset($property->commercial_roi)?$property->commercial_roi:''}}" />

        </div>
</div>

<br>
<div class="fw-bolder fs-3 rotate collapsible mb-7 commercial_lease_show" data-bs-toggle="collapse" href="#lease_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details" style="display: none;">Lease Details
    <span class="ms-2 rotate-180">

        <span class="svg-icon svg-icon-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
            </svg>
        </span>

    </span>
</div>
<div id="" class="collapse show commercial_lease_show" style="display: none;">
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="required fs-6 fw-bold mb-2">Rental Per Annum</label>
        <input class="form-control form-control-solid" placeholder="" type="number" name="commercial_rental_per_annum" value="{{old('commercial_rental_per_annum') ?? isset($property->commercial_rental_per_annum)?$property->commercial_rental_per_annum:''}}" />
        @error('commercial_rental_per_annum')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="row g-9 mb-7">
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-bold mb-2">PSM/PA Min</label>
            <input class="form-control form-control-solid" placeholder="" name="commercial_psm_pa_min" type="date" value="{{old('commercial_psm_pa_min') ?? isset($property->commercial_psm_pa_min)?$property->commercial_psm_pa_min:''}}" />
            @error('commercial_psm_pa_min')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 fv-row residential_rental_hide commercial_sale_show">
            <label class="required fs-6 fw-bold mb-2">PSM/PA Max</label>
            <input type="date" class="form-control form-control-solid" placeholder="" name="commercial_psm_pa_max" value="{{old('commercial_psm_pa_max') ?? isset($property->commercial_psm_pa_max)?$property->commercial_psm_pa_max:''}}" />
            @error('commercial_psm_pa_max')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

    </div>
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="required fs-6 fw-bold mb-2">Current Lease Expiry</label>
        <input type="date" class="form-control form-control-solid" placeholder="" name="commercial_lease_expiry_date" value="{{old('commercial_lease_expiry_date') ?? isset($property->commercial_lease_expiry_date)?$property->commercial_lease_expiry_date:''}}" />
        @error('commercial_lease_expiry_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="required fs-6 fw-bold mb-2">Outgoings</label>
        <input class="form-control form-control-solid" placeholder="" name="commercial_outgoings" value="{{old('commercial_outgoings') ?? isset($property->commercial_outgoings)?$property->commercial_outgoings:''}}" />
        @error('commercial_outgoings')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="required fs-6 fw-bold mb-2">Lease Term</label>
        <input class="form-control form-control-solid" placeholder="" name="commercial_lease_term" value="{{old('commercial_lease_term') ?? isset($property->commercial_lease_term)?$property->commercial_lease_term:''}}" />
        @error('commercial_lease_term')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>
<div class="fw-bolder fs-3 rotate collapsible mb-7 commercial_sale_show" data-bs-toggle="collapse" href="#sale_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Sale Details
    <span class="ms-2 rotate-180">
        <span class="svg-icon svg-icon-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
            </svg>
        </span>

    </span>
</div>
<div id="" class="collapse show commercial_sale_show">

    <div class="d-flex flex-column mb-7 fv-row commercial_sale_show ">

        <label class="required fs-6 fw-bold mb-2">Authority</label>

        <select class="form-control form-control-solid " name="authority" data-control="select2" data-hide-search="true" data-placeholder="Select a Authority">
            <option value=""></option>
            <option value="Auction" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Auction')?'selected':'' }}>Auction</option>
            <option value="Exclusive" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Exclusive')?'selected':'' }}>Exclusive</option>
            <option value="Multi List" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Multi List')?'selected':'' }}>Multi List</option>
            <option value="Conjunctional" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Conjunctional')?'selected':'' }}>Conjunctional</option>
            <option value="Open" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Open')?'selected':'' }}>Open</option>
            <option value="Sale by Negotiation" {{((old('authority') ?? isset($property->authority)?$property->authority:'')=='Sale by Negotiation')?'selected':'' }}>Sale by Negotiation</option>
        </select>
        @error('authority')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-6 fv-row commercial_sale_show ">
        <label class="required fs-6 fw-bold mb-2"> Normal Price</label>
        <div class="position-relative w-md-400px me-md-2">
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                <i class="bi bi-currency-dollar"></i>
            </span>
            <!--end::Svg Icon-->
            <input type="number" class="form-control form-control-solid ps-10" name="normal_price" value="{{old('normal_price') ?? isset($property->normal_price)?$property->normal_price:''}}">
            @error('normal_price')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="d-flex flex-column mb-7 fv-row commercial_sale_show">
        <label class="fs-6 fw-bold mb-2">Return on Investment</label>
        <input class="form-control form-control-solid" placeholder="" name="commercial_roi" value="{{old('commercial_roi') ?? isset($property->commercial_roi)?$property->commercial_roi:''}}" />
    </div>

</div>
<div class="fw-bolder fs-3 rotate collapsible mb-7 d-none" data-bs-toggle="collapse" href="#vender_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Vendor details
    <span class="ms-2 rotate-180">

        <span class="svg-icon svg-icon-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
            </svg>
        </span>

    </span>
</div>
<div id="vender_details" class="collapse show d-none">
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
        <input class="form-control form-control-solid" placeholder="" name="commercial_property_name" value="{{old('commercial_property_name') ?? isset($property->commercial_property_name)?$property->commercial_property_name:''}}" />
        @error('commercial_property_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="required fs-6 fw-bold mb-2">Address</label>
        <input type="hidden" name="lat" id="lat">
        <input type="hidden" name="lng" id="lng">
        <input class="form-control form-control-solid" placeholder="" id="address_filed" name="address" value="{{old('address') ?? isset($property->address)?$property->address:''}}" />
        @error('address')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="fs-6 fw-bold mb-2">Unit</label>
        <input class="form-control form-control-solid" placeholder="" id="unit" name="unit" value="{{old('unit') ?? isset($property->unit)?$property->unit:''}}" />
    </div>
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="required fs-6 fw-bold mb-2">Street number</label>
        <input class="form-control form-control-solid" placeholder="" id="street_no" name="street_no" value="{{old('street_no') ?? isset($property->street_no)?$property->street_no:''}}" />
        @error('street_no')
        <span class="text-danger">{{$message}}</span>
        @enderror

    </div>
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="required fs-6 fw-bold mb-2">Street name</label>
        <input class="form-control form-control-solid" placeholder="" id="street" name="street" value="{{old('street') ?? isset($property->street)?$property->street:''}}" />
        @error('street')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="row g-9 mb-8">

        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label class="required fs-6 fw-bold mb-2">Suburb</label>
            <input class="form-control form-control-solid" id="suburb" placeholder="" name="suburb" value="{{old('suburb') ?? isset($property->suburb)?$property->suburb:''}}" />
            @error('suburb')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label class="required fs-6 fw-bold mb-2">State</label>
            <input class="form-control form-control-solid" placeholder="" id="state" name="state" value="{{old('state') ?? isset($property->state)?$property->state:''}}" />
            @error('state')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label class="required fs-6 fw-bold mb-2">Postcode</label>
            <input class="form-control form-control-solid" placeholder="" id="postcode" name="postcode" value="{{old('postcode') ?? isset($property->postcode)?$property->postcode:''}}" />
            @error('postcode')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
    <div class="d-flex flex-column mb-7 fv-row">

        <label class="fs-6 fw-bold mb-2">
            <span class="required">Display</span>
        </label>

        <select class="form-control form-control-solid " name="address_display" data-control="select2" data-hide-search="true">
            <option value="Full Address" {{((old('address_display') ?? isset($property->address_display)?$property->address_display:'')=='Full Address')?'selected':'' }}>Full Address</option>
            <option value="Suburb Only" {{((old('address_display') ?? isset($property->address_display)?$property->address_display:'')=='Suburb Only')?'selected':'' }}>Suburb Only</option>
        </select>
        @error('address_display')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<br>
{{--<div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#internal_notes" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Internal Notes:
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
        <label class="required fs-6 fw-bold mb-2">What are the three things that you love most about your home ?</label>
        <textarea name="about_home" class="form-control" id="">{{ isset($property->about_home) ? $property->about_home: old('about_home') }}</textarea>
        @error('about_home')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="fs-6 fw-bold mb-2">What are the three things you love most about your home's location ?</label>
        <textarea name="about_location" class="form-control" id="">{{ isset($property->about_location) ? $property->about_location : old('about_location') }}</textarea>
    </div>
    <div class="d-flex flex-column mb-7 fv-row">
        <label class="required fs-6 fw-bold mb-2">If applicable , since being in the home what improvments have you made ? </label>
        <textarea name="about_improvements" class="form-control" id="">{{ isset($property->about_improvements) ? $property->about_improvements: old('about_improvements') }}</textarea>
        @error('about_improvements')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  <div class="d-flex flex-column mb-7 fv-row">
        <label class="required fs-6 fw-bold mb-2">Internal Notes</label>
        <input class="form-control form-control-solid" placeholder="" name="internal_notes" value="{{old('internal_notes') ?? isset($property->internal_notes)?$property->internal_notes:''}}" />
</div>
</div> --}}

<br>
<button class="btn btn-primary">Save</button>
</form>
</div>

