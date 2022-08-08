@php
    $options = "";
    for($i=1;$i<=50;$i++)
    {
        $options .= "<option value='".$i."'>".$i."</option>";
    }
@endphp
<div class="w-100">
    <form action="" method="POST">
        @csrf
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#about_property" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">About the property
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    
    <div id="about_property" class="collapse show">

        <div class="row g-9 mb-8">
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Bedrooms</label>
                <select name="bedrooms" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                    {!!$options!!}
                </select>
            <div class="fv-plugins-message-container invalid-feedback"></div></div>

            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Bathrooms</label>
                <select name="bathrooms" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                    {!!$options!!}
                </select>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Ensuites</label>
                <select name="ensuites" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                    {!!$options!!}
                </select>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Toilets</label>
                <select name="toilets" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                    {!!$options!!}
                </select>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Garage spaces</label>
                <select name="garage_spaces" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                    {!!$options!!}
                </select>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Carport spaces</label>
                <select name="carport_spaces" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                    {!!$options!!}
                </select>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Open car spaces</label>
                <select name="open_car_spaces" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                    {!!$options!!}
                </select>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Living areas</label>
                <select name="living_areas" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                    {!!$options!!}
                </select>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">House size</label>
                <div class="row">
                    <div class="col-6">
                        <input class="form-control form-control-solid" placeholder="" name="house_sizes" value="" />
                    </div>
                    <div class="col-6">
                        <select name="house_size_units" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                            <option value="Square metres">Square metres</option>
                            <option value="Squares">Squares</option>
                            <option value="Square feet">Square feet</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Land size</label>
                <div class="row">
                    <div class="col-6">
                        <input class="form-control form-control-solid" placeholder="" name="land_size" value="" />
                    </div>
                    <div class="col-6">
                        <select name="land_size_units" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                            <option value="Square metres">Square metres</option>
                            <option value="Squares">Squares</option>
                            <option value="Square feet">Square feet</option>
                            <option value="Hectares">Hectares</option>
                            <option value="Acres">Acres</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Energy efficiency rating</label>
                <select name="energy_efficiency_rating" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                    <option value=""></option>
                    <option value="0">0</option>
                    <option value="0.5">0.5</option>
                    <option value="1">1</option>
                    <option value="1.5">1.5</option>
                    <option value="2">2</option>
                    <option value="2.5">2.5</option>
                    <option value="3">3</option>
                    <option value="3.5">3.5</option>
                    <option value="4">4</option>
                    <option value="4.5">4.5</option>
                    <option value="5">5</option>
                    <option value="5.5">5.5</option>
                    <option value="6">6</option>
                    <option value="6.5">6.5</option>
                    <option value="7">7</option>
                    <option value="7.5">7.5</option>
                    <option value="8">8</option>
                    <option value="8.5">8.5</option>
                    <option value="9">9</option>
                    <option value="9.5">9.5</option>
                    <option value="10">10</option>
                </select>
            </div>  
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Municipality</label>
                <input class="form-control form-control-solid" placeholder="" name="municipality" value="" />
            </div>  
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Tags</label>
                <input class="form-control form-control-solid" placeholder="" name="tags" value="" />
            </div>  
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">SMS Code</label>
                <input class="form-control form-control-solid" placeholder="" name="sms_code" value="" />
            </div>  
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Test URL</label>
                <input class="form-control form-control-solid" placeholder="" name="test_url" value="" />
            </div>  
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Sample Test</label>
                <input class="form-control form-control-solid" placeholder="" name="sample_test" value="" />
            </div>  
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Utilities</label>
                <input class="form-control form-control-solid" placeholder="" name="utilities" value="" />
            </div>  
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">Rental</label>
                <input class="form-control form-control-solid" placeholder="" name="rental" value="" />
            </div>  
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">View Docs</label>
                <input class="form-control form-control-solid" placeholder="" name="view_docs" value="" />
            </div>  
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">RESO Offer Link</label>
                <input class="form-control form-control-solid" placeholder="" name="reso_offer_link" value="" />
            </div>  
        </div>
    </div>
    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#property_feature" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Property features
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>

    <div id="property_feature" class="collapse show">
        
   <div class="col-md-12 fv-row my-4">
        <label class="fs-5 fw-bolder form-label mb-2">ALLOWANCES</label>
        <div class="row">
            @foreach($allowances as $feature)
            <label class=" col-4 form-check form-check-solid mb-5">
                <input class="form-check-input" type="checkbox" value="{{$feature->name}}" name="rental_allowances[]">
                <span class="form-check-label">{{$feature->name}}</span>
            </label>
            @endforeach
        </div>
    </div>
    
   <div class="col-md-12 fv-row my-4">
        <label class="fs-5 fw-bolder form-label mb-2">OUTDOOR FEATURES</label>
        <div class="row">
            @foreach($outdoor as $feature)
            <label class=" col-4 form-check form-check-solid mb-5">
                <input class="form-check-input" type="checkbox" value="{{$feature->name}}" name="outdoor[]">
                <span class="form-check-label">{{$feature->name}}</span>
            </label>
            @endforeach
        </div>         
    </div>
    
    <div class="col-md-12 fv-row my-4">
        <label class="fs-5 fw-bolder form-label mb-2">INDOOR FEATURES</label>
        <div class="row">
            @foreach($indoor as $feature)
            <label class=" col-4 form-check form-check-solid mb-5">
                <input class="form-check-input" type="checkbox" value="{{$feature->name}}" name="indoor[]">
                <span class="form-check-label">{{$feature->name}}</span>
            </label>
            @endforeach
        </div>           
    </div>

    
    <div class="col-md-12 fv-row my-4">
        <label class="fs-5 fw-bolder form-label mb-2">HEATING / COOLING</label>
        <div class="row">
            @foreach($heating_cooling as $feature)
            <label class=" col-4 form-check form-check-solid mb-5">
                <input class="form-check-input" type="checkbox" value="{{$feature->name}}" name="heating_cooling[]">
                <span class="form-check-label">{{$feature->name}}</span>
            </label>
            @endforeach
        </div>          
    </div>
    
    <div class="col-md-12 fv-row my-4">
        <label class="fs-5 fw-bolder form-label mb-2">ECO FRIENDLY FEATURES</label>
        <div class="row">
            @foreach($eco_friendly as $feature)
            <label class=" col-4 form-check form-check-solid mb-5">
                <input class="form-check-input" type="checkbox" value="{{$feature->name}}" name="eco_friendly[]">
                <span class="form-check-label">{{$feature->name}}</span>
            </label>
            @endforeach
        </div>         
    </div>
    </div>
    <button class="btn btn-primary">save</button>
    </form>
</div>