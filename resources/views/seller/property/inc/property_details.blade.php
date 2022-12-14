<div class="w-100">
    <form action="{{route('seller.save_property_details')}}" method="POST" onsubmit="setFormSubmitting()">
        @csrf
        <input type="hidden" name="property_id" value="{{$property_id}}">
        <div class="fw-bolder fs-3 rotate collapsible mb-7  " data-bs-toggle="collapse" href="#about_property" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">About the property
            <span class="ms-2 rotate-180">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                    </svg>
                </span>
            </span>
        </div>

        <div id="about_property" class="collapse show">
            <div class="row g-9 mb-8 commercial_sale_hide commercial_hide commercial_lease_hide">
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-bold mb-2">Bedrooms</label>
                    <select name="bedrooms" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        {!!number_dropdown(old('bedrooms') ?? isset($property_details->bedrooms)?$property_details->bedrooms:'')!!}
                    </select>

                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-bold mb-2">Bathrooms</label>
                    <select name="bathrooms" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        {!!number_dropdown(old('bathrooms') ?? isset($property_details->bathrooms)?$property_details->bathrooms:'')!!}
                    </select>
                </div>
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-bold mb-2">Ensuites</label>
                    <select name="ensuites" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        {!!number_dropdown(old('ensuites') ?? isset($property_details->ensuites)?$property_details->ensuites:'')!!}
                    </select>
                </div>
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-bold mb-2">Toilets</label>
                    <select name="toilets" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        {!!number_dropdown(old('toilets') ?? isset($property_details->toilets)?$property_details->toilets:'')!!}
                    </select>
                </div>
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-bold mb-2">Garage spaces</label>
                    <select name="garage_spaces" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        {!!number_dropdown(old('garage_spaces') ?? isset($property_details->garage_spaces)?$property_details->garage_spaces:'')!!}
                    </select>
                </div>
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-bold mb-2">Carport spaces</label>
                    <select name="carport_spaces" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        {!!number_dropdown(old('carport_spaces') ?? isset($property_details->carport_spaces)?$property_details->carport_spaces:'')!!}
                    </select>
                </div>
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-bold mb-2">Open car spaces</label>
                    <select name="open_car_spaces" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        {!!number_dropdown(old('open_car_spaces') ?? isset($property_details->open_car_spaces)?$property_details->open_car_spaces:'')!!}
                    </select>
                </div>
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-bold mb-2">Living areas</label>
                    <select name="living_areas" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        {!!number_dropdown(old('living_areas') ?? isset($property_details->living_areas)?$property_details->living_areas:'')!!}
                    </select>
                </div>
                <div class="col-md-6 fv-row">
                    <label class=" fs-6 fw-bold mb-2">House size</label>
                    <div class="row">
                        <div class="col-6">
                            <input class="form-control form-control-solid" placeholder="" name="house_sizes" value="{{old('house_sizes') ?? isset($property_details->house_sizes)?$property_details->house_sizes:''}}" />
                        </div>
                        <div class="col-6">
                            <select name="house_size_units" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                <option value="Square metres" {{((old('house_size_units') ?? isset($property_details->house_size_units)?$property_details->house_size_units:'')=='Square metres')?'selected':'' }}>Square metres</option>
                                <option value="Squares" {{((old('house_size_units') ?? isset($property_details->house_size_units)?$property_details->house_size_units:'')=='Squares')?'selected':'' }}>Squares</option>
                                <option value="Square feet" {{((old('house_size_units') ?? isset($property_details->house_size_units)?$property_details->house_size_units:'')=='Square feet')?'selected':'' }}>Square feet</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-bold mb-2">Land size</label>
                    <div class="row">
                        <div class="col-6">
                            <input class="form-control form-control-solid" placeholder="" name="land_size" value="{{old('land_size') ?? isset($property_details->land_size)?$property_details->land_size:''}}" />
                        </div>
                        <div class="col-6">
                            <select name="land_size_units" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                <option value="Square metres" {{((old('land_size_units') ?? isset($property_details->land_size_units)?$property_details->land_size_units:'')=='Square metres')?'selected':'' }}>Square metres</option>
                                <option value="Squares" {{((old('land_size_units') ?? isset($property_details->land_size_units)?$property_details->land_size_units:'')=='Squares')?'selected':'' }}>Squares</option>
                                <option value="Square feet" {{((old('land_size_units') ?? isset($property_details->land_size_units)?$property_details->land_size_units:'')=='Square feet')?'selected':'' }}>Square feet</option>
                                <option value="Hectares" {{((old('land_size_units') ?? isset($property_details->land_size_units)?$property_details->land_size_units:'')=='Hectares')?'selected':'' }}>Hectares</option>
                                <option value="Acres" {{((old('land_size_units') ?? isset($property_details->land_size_units)?$property_details->land_size_units:'')=='Acres')?'selected':'' }}>Acres</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="fw-bolder fs-3 rotate collapsible mb-7 commercial_sale_hide commercial_hide commercial_lease_hide" data-bs-toggle="collapse" href="#property_feature" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Property features
                <span class="ms-2 rotate-180">

                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                        </svg>
                    </span>

                </span>
            </div>
            <div id="property_feature" class="collapse show ">

                <div class="col-md-12 fv-row my-4 commercial_sale_hide commercial_hide commercial_lease_hide">
                    <label class="fs-5 fw-bolder form-label mb-2">OUTDOOR FEATURES</label>
                    <div class="row">
                        @foreach($outdoor as $feature)
                        <label class=" col-4 form-check form-check-solid mb-5">
                            <input class="form-check-input" type="checkbox" value="{{$feature->name}}" {{in_array($feature->name,(old('outdoor') ?? (isset($property_details->outdoor) && $property_details->outdoor)?json_decode($property_details->outdoor):[]))?'checked':''}} name="outdoor[]">
                            <span class="form-check-label">{{$feature->name}}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-12 fv-row my-4 commercial_sale_hide commercial_hide commercial_lease_hide">
                    <label class="fs-5 fw-bolder form-label mb-2">INDOOR FEATURES</label>
                    <div class="row">
                        @foreach($indoor as $feature)
                        <label class=" col-4 form-check form-check-solid mb-5">
                            <input class="form-check-input" type="checkbox" value="{{$feature->name}}" {{in_array($feature->name,(old('indoor') ?? (isset($property_details->indoor) && $property_details->indoor)?json_decode($property_details->indoor):[]))?'checked':''}} name="indoor[]">
                            <span class="form-check-label">{{$feature->name}}</span>
                        </label>
                        @endforeach
                    </div>
                </div>


                <div class="col-md-12 fv-row my-4 commercial_sale_hide commercial_hide commercial_lease_hide">
                    <label class="fs-5 fw-bolder form-label mb-2">HEATING / COOLING</label>
                    <div class="row">
                        @foreach($heating_cooling as $feature)
                        <label class=" col-4 form-check form-check-solid mb-5">
                            <input class="form-check-input" type="checkbox" value="{{$feature->name}}" {{in_array($feature->name,(old('heating_cooling') ?? (isset($property_details->heating_cooling) && $property_details->heating_cooling)?json_decode($property_details->heating_cooling):[]))?'checked':''}} name="heating_cooling[]">
                            <span class="form-check-label">{{$feature->name}}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-12 fv-row my-4 commercial_sale_hide commercial_hide commercial_lease_hide">
                    <label class="fs-5 fw-bolder form-label mb-2">ECO FRIENDLY FEATURES</label>
                    <div class="row">
                        @foreach($eco_friendly as $feature)
                        <label class=" col-4 form-check form-check-solid mb-5">
                            <input class="form-check-input" type="checkbox" value="{{$feature->name}}" {{in_array($feature->name,(old('eco_friendly') ?? (isset($property_details->eco_friendly) && $property_details->eco_friendly)?json_decode($property_details->eco_friendly):[]))?'checked':''}} name="eco_friendly[]">
                            <span class="form-check-label">{{$feature->name}}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-12 fv-row mb-4 commercial_sale_hide commercial_hide commercial_lease_hide">
                    <label class=" fs-6 fw-bold mb-2">Other Features</label>
                    <textarea class="form-control form-control-solid" name="other_features" rows="5" cols="30">{{old('other_features') ?? (isset($property_details->other_features) && $property_details->other_features)?$property_details->other_features:''}} </textarea>
                </div>

            </div>
            <div class="row residential_sale_hide residential_rental_hide" id="">
                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class=" fs-6 fw-bold mb-2">Total Floor Area</label>
                    <div class="row">
                        <div class="col-6">
                            <input class="form-control form-control-solid" placeholder="" name="total_floor_area" value="{{old('total_floor_area') ?? isset($property_details->total_floor_area)?$property_details->total_floor_area:''}}" />
                        </div>
                        <div class="col-6">
                            <select name="floor_area_units" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                <option value="Square metres" {{((old('floor_area_units') ?? isset($property_details->floor_area_units)?$property_details->floor_area_units:'')=='Square metres')?'selected':'' }}>Square metres</option>
                                <option value="Squares" {{((old('floor_area_units') ?? isset($property_details->floor_area_units)?$property_details->floor_area_units:'')=='Squares')?'selected':'' }}>Squares</option>
                                <option value="Square feet" {{((old('floor_area_units') ?? isset($property_details->floor_area_units)?$property_details->floor_area_units:'')=='Square feet')?'selected':'' }}>Square feet</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class=" fs-6 fw-bold mb-2">Office Area</label>
                    <div class="row">
                        <div class="col-6">
                            <input class="form-control form-control-solid" placeholder="" name="office_area" value="{{old('office_area') ?? isset($property_details->office_area)?$property_details->office_area:''}}" />
                        </div>
                        <div class="col-6">
                            <select name="office_area_units" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                <option value="Square metres" {{((old('office_area_units') ?? isset($property_details->office_area_units)?$property_details->office_area_units:'')=='Square metres')?'selected':'' }}>Square metres</option>
                                <option value="Squares" {{((old('office_area_units') ?? isset($property_details->office_area_units)?$property_details->office_area_units:'')=='Squares')?'selected':'' }}>Squares</option>
                                <option value="Square feet" {{((old('office_area_units') ?? isset($property_details->office_area_units)?$property_details->office_area_units:'')=='Square feet')?'selected':'' }}>Square feet</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class=" fs-6 fw-bold mb-2">Warehouse Area</label>
                    <div class="row">
                        <div class="col-6">
                            <input class="form-control form-control-solid" placeholder="" name="warehouse_area" value="{{old('warehouse_area') ?? isset($property_details->warehouse_area)?$property_details->warehouse_area:''}}" />
                        </div>
                        <div class="col-6">
                            <select name="warehouse_units" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                <option value="Square metres" {{((old('warehouse_units') ?? isset($property_details->warehouse_units)?$property_details->warehouse_units:'')=='Square metres')?'selected':'' }}>Square metres</option>
                                <option value="Squares" {{((old('warehouse_units') ?? isset($property_details->warehouse_units)?$property_details->warehouse_units:'')=='Squares')?'selected':'' }}>Squares</option>
                                <option value="Square feet" {{((old('warehouse_units') ?? isset($property_details->warehouse_units)?$property_details->warehouse_units:'')=='Square feet')?'selected':'' }}>Square feet</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 fv-row">
                    <label class=" fs-6 fw-bold mb-2">Total Car Spaces</label>
                    <select name="total_car_spaces" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        {!!number_dropdown(old('total_car_spaces') ?? isset($property_details->total_car_spaces)?$property_details->total_car_spaces:'')!!}
                    </select>

                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class=" fs-6 fw-bold mb-2">Parking Comments</label>
                    <input class="form-control form-control-solid" placeholder="" name="parking_comments" value="{{old('warehouse_area') ?? isset($property_details->warehouse_area)?$property_details->warehouse_area:''}}" />
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class="fs-6 fw-bold mb-2">Occupancy Title</label>
                    <select name="" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        <option value="Whole Building">Whole Building</option>
                        <option value="Partial Building">Partial Building</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class=" fs-6 fw-bold mb-2">Tenancy</label>
                    <select name="" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        <option value="Vacant Posession">Vacant Posession</option>
                        <option value="Tenanted Investment">Tenanted Investment</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class=" fs-6 fw-bold mb-2">Tenancy</label>
                    <input class="form-control form-control-solid" placeholder="" name="tenancy" value="{{old('tenancy') ?? isset($property_details->tenancy)?$property_details->tenancy:''}}" />
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class=" fs-6 fw-bold mb-2">Zoning</label>
                    <input class="form-control form-control-solid" placeholder="" name="zoning" value="{{old('zoning') ?? isset($property_details->zoning)?$property_details->zoning:''}}" />
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class=" fs-6 fw-bold mb-2">Nabers rating</label>
                    <input class="form-control form-control-solid" placeholder="" name="nabers_rating" value="{{old('nabers_rating') ?? isset($property_details->nabers_rating)?$property_details->nabers_rating:''}}" />
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-7">
                    <label class=" fs-6 fw-bold mb-2">Energy efficiency rating</label>
                    <select name="" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                        <option value="0">0</option>
                        <option value="0.5">
                            <0.5 /option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <br>
            <button class="btn btn-primary">save</button>
        </div>

    </form>
</div>