<div class="tab-content">
    <div class="tab-pane fade active show" id="liton_product_grid">
        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__search-widget mb-30">
                        <form action="#" id="form1">
                            <input type="text" name="search" placeholder="Search your keyword...">
                            <button type="button" id="searchbtn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                @if(isset($properties) && count($properties))
                @foreach($properties as $property)
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__grid-list-tab-menu ltn__product-item-5 text-center---">
                        <div class="product-img su_product_img">
                            <a href="{{route('property_details',$property->id)}}"><img class="su_product_img_inside" src="{{isset($property->get_property_image)?asset('storage/property_images/'.$property->get_property_image->document):''}}" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="w-100 agent-img su_circle_img">
                                    <a href=""><img src="{{isset($property->get_property_image)?asset('storage/property_images/'.$property->get_property_image->document):''}}" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                                @if($property->form_type == 'residential' ||$property->form_type == 'residential_rental' ||$property->form_type == 'residential_sale')
                                <h2 class="product-title"><a href="{{route('property_details',$property->id)}}">{{isset($property->property_type)?$property->property_type:''}}</a></h2>
                                @endif
                                @if($property->form_type == 'commercial' || $property->form_type == 'commercial_lease')
                                <h2 class="product-title"><a href="{{route('property_details',$property->id)}}">{{isset($property->commercial_property_type)?$property->commercial_property_type:''}}</a></h2>
                                @endif
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href=""><i class="flaticon-pin"></i> {{isset($property->address)?$property->address:''}}</a>
                                        </li>
                                    </ul>
                                </div>
                                @if($property->form_type == 'residential' ||$property->form_type == 'residential_rental' ||$property->form_type == 'residential_sale')
                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                    <li>
                                        <i class="fa-solid fa-bed su_icon_clr"></i>
                                        <span>{{isset($property->property_details)?$property->property_details->bedrooms:''}} </span>
                                        Bed
                                    </li>
                                    <li>
                                        <i class="fa-sharp fa-solid fa-shower su_icon_clr"></i>
                                        <span>{{isset($property->property_details)?$property->property_details->bathrooms:''}} </span>
                                        Bath
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-chart-area su_icon_clr"></i>
                                        <span>{{isset($property->property_details)?$property->property_details->land_size:''}} </span>
                                        {{isset($property->property_details)?$property->property_details->land_size_units:''}}
                                    </li>
                                </ul>
                                @endif
                                @if($property->form_type == 'commercial' || $property->form_type == 'commercial_lease')
                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief ">
                                    <li>
                                        <i class="fa-solid fa-car-side su_icon_clr"></i>
                                        <span>{{isset($property->property_details->total_car_spaces)?$property->property_details->total_car_spaces:''}} </span>
                                        Parking
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-chart-area su_icon_clr"></i>
                                        <span>{{isset($property->property_details)?$property->property_details->total_floor_area:''}} </span>
                                        Area
                                    </li>
                                </ul>
                                @endif

                                <div class="product-hover-action">
                                    <ul>
                                        <li class="su_fav_proporty_logo" data-property_id="{{$property->id}}">
                                            <a href="javascript:" data-property_id="{{$property->id}}" class="fav_property">
                                               {{-- <i class="{{check_favourite_property($property->id)?'fa':'far'}} fa-heart"></i>--}}
                                                <img  src="{{check_favourite_property($property->id)? asset('frontend/img/my_logo/png/MMG_Gold_1.png') : asset('frontend/img/my_logo/png/MMG_Black_2.png')}}" alt="Logo">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        @if($property->form_type == 'residential_sale' || $property->form_type == 'residential_rental')
                        <div class="product-info-bottom">
                            <div class="product-price">
                                @if($property->form_type == 'residential_sale')
                                <span>${{isset($property->normal_price)?$property->normal_price:''}}</span>
                                @elseif($property->form_type == 'residential_rental')
                                <span>${{isset($property->rental_per_month)?$property->rental_per_month:''}} per/mon</span>
                                @endif
                            </div>
                        </div>
                        @endif
                        @if($property->commercial_listing_type == 'commercial_sale' || $property->commercial_listing_type == 'commercial_lease')
                        <div class="product-info-bottom">
                            <div class="product-price">
                                @if( $property->commercial_listing_type == 'commercial_lease')
                                <span>${{isset($property->commercial_rental_per_annum)?$property->commercial_rental_per_annum:''}} per/year</span>
                                @elseif($property->commercial_listing_type == 'commercial_sale')
                                <span>${{isset($property->normal_price)?$property->normal_price:''}}</span>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="liton_product_list">
        <div class="ltn__product-tab-content-inner ltn__product-list-view">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__search-widget mb-30">
                        <form action="#" id="form1">
                            <input type="text" name="search" placeholder="Search your keyword...">
                            <button type="button" id="searchbtn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                @if(isset($properties) && count($properties))
                @foreach($properties as $property_list)
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                        <div class="product-img su_img_list">
                            <a href="{{route('property_details',$property_list->id)}}"><img src="{{isset($property_list->get_property_image)?asset('storage/property_images/'.$property_list->get_property_image->document):''}}" alt="#"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-badge-price">
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badg">{{isset($property_list->status)?$property_list->status:''}}</li>
                                    </ul>
                                </div>
                                @if($property_list->form_type == 'residential_sale' || $property_list->form_type == 'residential_rental')
                        <div class="product-info-bottom">
                            <div class="product-price">
                                @if($property_list->form_type == 'residential_sale')
                                <span>${{isset($property_list->normal_price)?$property_list->normal_price:''}}</span>
                                @elseif($property_list->form_type == 'residential_rental')
                                <span>${{isset($property_list->rental_per_month)?$property_list->rental_per_month:''}} per/mon</span>
                                @endif
                            </div>
                        </div>
                        @endif
                        @if($property_list->commercial_listing_type == 'commercial_sale' || $property_list->commercial_listing_type == 'commercial_lease')
                        <div class="product-info-bottom">
                            <div class="product-price">
                                @if( $property_list->commercial_listing_type == 'commercial_lease')
                                <span>${{isset($property_list->commercial_rental_per_annum)?$property_list->commercial_rental_per_annum:''}} per/year</span>
                                @elseif($property_list->commercial_listing_type == 'commercial_sale')
                                <span>${{isset($property_list->normal_price)?$property_list->normal_price:''}}</span>
                                @endif
                            </div>
                            </div>
                        @endif
                            </div>
                            <h2 class="product-title"><a href="{{isset($property_list->id) ? route('property_details', $property_list->id ) : 'javascript:'}}">{{isset($property_list->property_type)?$property_list->property_type:''}}</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="{{route('property_details',$property_list->id)}}"><i class="flaticon-pin"></i> {{isset($property_list->address)?$property_list->address:''}}</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>{{isset($property_list->property_details)?$property_list->property_details->bedrooms:''}} </span>
                                    Bed
                                </li>
                                <li><span>{{isset($property_list->property_details)?$property_list->property_details->bathrooms:''}} </span>
                                    Bath
                                </li>
                                <li><span>{{isset($property_list->property_details)?$property_list->property_details->land_size:''}} </span>
                                    {{isset($property_list->property_details)?$property_list->property_details->land_size_units:''}}
                                </li>
                            </ul>
                        </div>
                        <div class="product-info product-hover-action">
                            <ul>
                                <li class="su_fav_proporty_logo" data-property_id="{{$property_list->id}}">
                                    <a href="javascript:" data-property_id="{{$property_list->id}}" class="fav_property">
                                        <img  src="{{check_favourite_property($property_list->id)? asset('frontend/img/my_logo/png/MMG_Gold_1.png') : asset('frontend/img/my_logo/png/MMG_Black_2.png')}}" alt="Logo">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img su_circle_list_img">
                                    <a href=""><img src="{{isset($property->get_property_image)?asset('storage/property_images/'.$property->get_property_image->document):''}}" alt="#"></a>
                                </div>
                                <div class="agent-brief">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
{{ $properties->withQueryString()->onEachSide(0)->links('frontend.layouts.pagination') }}