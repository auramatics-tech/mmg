@extends('frontend.layouts.master')
@section('content')
<style>
    .cal {
        margin-right: 4px;
    }

    .ltn__product-item-4 .product-info {
        padding: 20px 16px 1px;
    }

    .custom_img {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    .checkamenties {
        padding-left: 0px !important;

    }

    .leave-rating label {
        color: #ffc107;
    }

    .leave-rating input {
        display: none;
    }

    .leave-rating .star_color {
        color: #ccc;
    }

    .agency_leave_a_review .btn {
        background: #00B3FF;
        cursor: pointer;
        font-size: 16px;
        border: none;
        transition: all .5s ease;
    }

    #lightcase-overlay {
        z-index: 9999;
        background: #6e6e6e75 !important;
    }

    #lightcase-info {
        color: #ff5a3c !important;
    }

    #lightcase-caption {
        color: #ff5a3c !important;
    }

    .img_len a {
        height: calc(100vh - 220px) !important;
    }

    .property-detail-feature-list .property-detail-feature-list-item i {
        min-width: 50px !important;
        height: 50px !important;
    }

    .su_img_height_at_detail {
        height: 230px;
        width: 100%;
    }
    .su_btn_position{
        position: inherit;
    }
    .related_property_fav:hover{
        background-color: white !important;
    }

    @media screen and (max-width: 1200px) {
        .su_mt_sm {
            margin: 5px 0px;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<!-- Utilize Cart Menu Start -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{asset('frontend/img/product/1.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Wheel Bearing Retainer</a></h6>
                    <span class="mini-cart-quantity">1 x $65.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{asset('frontend/img/product/2.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">3 Rooms Manhattan</a></h6>
                    <span class="mini-cart-quantity">1 x $85.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{asset('frontend/img/product/3.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">OE Replica Wheels</a></h6>
                    <span class="mini-cart-quantity">1 x $92.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{asset('frontend/img/product/4.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Shock Mount Insulator</a></h6>
                    <span class="mini-cart-quantity">1 x $68.00</span>
                </div>
            </div>
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$310.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div>
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index.html"><img src="{{asset('frontend/img/logo.png')}}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home Style 01</a></li>
                        <li><a href="index-2.html">Home Style 02</a></li>
                        <li><a href="index-3.html">Home Style 03</a></li>
                        <li><a href="index-4.html">Home Style 04</a></li>
                        <li><a href="index-5.html">Home Style 05 <span class="menu-item-badge">video</span></a></li>
                        <li><a href="index-6.html">Home Style 06</a></li>
                        <li><a href="index-7.html">Home Style 07</a></li>
                        <li><a href="index-8.html">Home Style 08</a></li>
                        <li><a href="index-9.html">Home Style 09</a></li>
                        <li><a href="index-10.html">Home Style 10 <span class="menu-item-badge">Map</span></a></li>
                        <li><a href="index-11.html">Home Style 11</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="locations.html">Google Map Locations</a></li>
                    </ul>
                </li>
                <li><a href="#">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-grid.html">Shop Grid</a></li>
                        <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                        <li><a href="product-details.html">Shop details </a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="order-tracking.html">Order Tracking</a></li>
                        <li><a href="account.html">My Account</a></li>
                        <li><a href="login.html">Sign in</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </li>
                <li><a href="#">News</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">News</a></li>
                        <li><a href="blog-grid.html">News Grid</a></li>
                        <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                        <li><a href="blog-details.html">News details</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="history.html">History</a></li>
                        <li><a href="appointment.html">Appointment</a></li>
                        <li><a href="locations.html">Google Map Locations</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                        My Account
                    </a>
                </li>
                <li>
                    <a href="wishlist.html" title="Wishlist">
                        <span class="utilize-btn-icon">
                            <i class="far fa-heart"></i>
                            <sup>3</sup>
                        </span>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="cart.html" title="Shoping Cart">
                        <span class="utilize-btn-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <sup>5</sup>
                        </span>
                        Shoping Cart
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
<!-- <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0" data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Property Details</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Property Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

<!-- IMAGE SLIDER AREA START (img-slider-3)  -->
{{--
<div class="ltn__img-slider-area mb-50">
    <div class="container-fluid">
        <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
            @if(isset($property->get_property_all_image) && count($property->get_property_all_image))
            @foreach($property->get_property_all_image as $property_image)
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-4 img_len">
                    <a href="{{asset('storage/property_images/'.$property_image->document)}}" data-rel="">
<img src="{{asset('storage/property_images/'.$property_image->document)}}" alt="Image" class="custom_img">
</a>
</div>
</div>
@endforeach
@endif
</div>
</div>
</div>
--}}
<!-- IMAGE SLIDER AREA END -->

<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-10 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-category">
                                <a href="#">Featured</a>
                            </li>
                            <li class="ltn__blog-category">
                                <a class="bg-orange" href="#">{{isset($property->status)?$property->status:''}}</a>
                            </li>
                            <li class="ltn__blog-date">
                                <i class="far fa-calendar-alt"></i>{{date('M d, Y', strtotime($property->created_at))}}
                            </li>
                            <li>
                                <a href="#"><i class="far fa-comments"></i>{{$comments_count}} Comments </a>
                            </li>
                        </ul>
                    </div>
                    <h1>{{isset($property->property_type)?$property->property_type:''}}</h1>
                  
                    {{-- <h4 class="title-2">Description</h4>  --}}
                    {{--<p>{{isset($property->property_links_listing)?$property->property_links_listing->description:''}}</p> --}}
                    <h4 class="title-2">Property Detail</h4>
                    <div class="property-detail-info-list section-bg-1 clearfix mb-60">
                        <ul>
                          {{--  <li><label>Floor Area: </label> <span>{{isset( $property_details->total_floor_area)?  $property_details->total_floor_area:''}} {{isset( $property_details->floor_area_units)?  $property_details->floor_area_units:''}}</span></li>
                            <li><label>Office Area:</label> <span>{{isset( $property_details->office_area)?  $property_details->office_area:''}} {{isset( $property_details->office_area_units)?  $property_details->office_area_units:''}}</span></li>  --}}
                            <?php $data = isset($property_inspections->inspection_day) ? json_decode($property_inspections->inspection_day, true) : array();
                            $property_inspections_date = implode(",", $data); ?>
                            @if($property_inspections->inspection_day && isset($property_inspections_date))
                            <li><label>Inspection Date:</label><span>{{$property_inspections_date}}</span></li>
                            @endif
                            @if($property_inspections->start_time && isset($property_inspections->start_time))
                            <li><label>Inspection Time:</label><span>{{$property_inspections->start_time}} - {{isset($property_inspections->end_time)?$property_inspections->end_time:''}}</span></li>
                            @endif
                            @if($property->property_links_listing->description && isset($property->property_links_listing->description))
                            <li><label>Description:</label> <span>{{$property->property_links_listing->description}}</span></li>
                            @endif
                            @if($property->form_type == 'residential_rental' && isset($property->rental_security_bond))
                            <li><label>Rental Security Bond:</label> <span>{{$property->rental_security_bond}}</span></li>
                            @elseif($property->commercial_listing_type == 'commercial_lease' && isset($property->rental_security_bond))
                            <li><label>Rental Security Bond:</label><span>{{$property->rental_security_bond}}</span></li>
                            @endif

                        </ul>
                       
                    </div>
                    <h4 class="title-2">Facts and Features</h4>
                    <div class="property-detail-feature-list clearfix mb-45">
                        @if($property->form_type == 'residential' ||$property->form_type == 'residential_rental' ||$property->form_type == 'residential_sale')
                        <ul>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="fa-solid fa-bed su_icon_clr"></i>
                                    <div>
                                        <h6>Living Room</h6>
                                        <small>{{isset($property_details->living_areas)? $property_details->living_areas:''}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="fa-solid fa-tree su_icon_clr"></i>
                                    <div>
                                        <h6>Garage</h6>
                                        <small>{{isset($property_details->garage_spaces)? $property_details->garage_spaces: ''}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="fa-solid fa-bed su_icon_clr"></i>
                                    <div>
                                        <h6>Bedroom</h6>
                                        <small>{{isset( $property_details->bedrooms)?  $property_details->bedrooms:''}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="fa-sharp fa-solid fa-shower su_icon_clr"></i>
                                    <div>
                                        <h6>Bathroom</h6>
                                        <small>{{isset( $property_details->bathrooms)?  $property_details->bathrooms:''}}</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endif
                        @if($property->form_type == 'commercial' ||$property->form_type == 'commercial_sale')
                        <ul>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="fa-solid fa-car-side su_icon_clr"></i>
                                    <div>
                                        <h6>Car Parking</h6>
                                        <small>{{isset($property_details->total_car_spaces)? $property_details->total_car_spaces:''}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="fa-solid fa-chart-area su_icon_clr"></i>
                                    <div>
                                        <h6>Area</h6>
                                        <small>{{isset($property_details->total_floor_area)? $property_details->total_floor_area:''}} {{isset($property_details->floor_area_units)? $property_details->floor_area_units:''}}</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endif
                    </div>
                    @if(Auth::check())
                    <a href="{{route('add_to_favourite',$property->id)}}" class="btn theme-btn-1 su_mt_sm">
                        @if(!check_favourite_property($property->id)) Add to Favourite @else Remove from Favourite @endif</a>

                    {{-- <a href="{{route('buyer.offer_form',$property->id)}}{{(request()->get('reference_id'))?'?reference_id='.request()->get('reference_id'):''}}" class="btn theme-btn-1"> Bid </a> --}}
                    <a href="{{route('buyer.property_bid',$property->id)}}{{(request()->get('reference_id'))?'?reference_id='.request()->get('reference_id'):''}}" class="btn theme-btn-1 su_mt_sm"> Make an Offer</a>

                    {{--<a href="{{route('buyer.book_inspection',$property->id)}}" class="btn theme-btn-1 su_mt_sm"> Book Inspection </a>--}}
                    @endif
                    <h4 class="title-2">View Our Gallery</h4>
                    <div class="ltn__property-details-gallery mb-30">
                        <div class="row">
                            <div class="col-md-6">
                                @if(isset($property->get_property_all_image[0]->document))
                                <a href="{{asset('storage/property_images/'.$property->get_property_all_image[0]->document)}}" data-rel="lightcase:myCollection">
                                    <img class="mb-30 su_img_height_at_detail" src="{{asset('storage/property_images/'.$property->get_property_all_image[0]->document)}}" alt="Image">
                                </a>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if(isset($property->get_property_all_image[2]->document))
                                <a href="{{asset('storage/property_images/'.$property->get_property_all_image[2]->document)}}" data-rel="lightcase:myCollection">
                                    <img class="mb-30 su_img_height_at_detail" src="{{asset('storage/property_images/'.$property->get_property_all_image[2]->document)}}" alt="Image">
                                </a>
                                @endif
                            </div>
                            @if(count($property->get_property_all_image))
                            <?php
                            unset($property->get_property_all_image[0]);
                            unset($property->get_property_all_image[1]);
                            ?>
                            @foreach($property->get_property_all_image as $image)
                            <a href="{{asset('storage/property_images/'.$image->document)}}" data-rel="lightcase:myCollection" style="width:100%;height:100%;"></a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    @if($property->form_type == 'residential_sale' || $property->form_type == 'residential_rental')
                    <div class="property-details-amenities mb-60">
                        <h4 class="title-2 mb-10">Amenities</h4>
                        <div class="row">
                            @php
                            if(isset($property_details->outdoor) && $property_details->outdoor != ''){
                            $property_features = json_decode($property_details->outdoor,true);
                            }else{
                            $property_features = array();
                            }
                            @endphp
                            @if(count($property_features))
                            <div class="col-lg-6 col-md-6">
                                <h4 class="title-2 mb-10">Outdoor</h4>
                                <div class="ltn__menu-widget">
                                    <ul>

                                        @foreach($property_features as $key => $property_feature)
                                        <li>
                                            <label class="checkbox-item checkamenties">{{$property_feature}}
                                                <input type="checkbox" checked="checked" disabled=true>
                                                <!-- <span class="checkmark"></span> -->
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @php
                            if(isset($property_details->indoor) && $property_details->indoor != ''){
                            $property_features = json_decode($property_details->indoor,true);
                            }else{
                            $property_features = array();
                            }
                            @endphp
                            @if(count($property_features))
                            <div class="col-lg-6 col-md-6">
                                <h4 class="title-2 mb-10">Indoor</h4>
                                <div class="ltn__menu-widget">
                                    <ul>

                                        @foreach($property_features as $key => $property_feature)
                                        <li>
                                            <label class="checkbox-item checkamenties">{{$property_feature}}
                                                <input type="checkbox" checked="checked" disabled=true>
                                                <!-- <span class="checkmark"></span> -->
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @php
                            if(isset($property_details->heating_cooling) && $property_details->heating_cooling != ''){
                            $property_features = json_decode($property_details->heating_cooling,true);
                            }else{
                            $property_features = array();
                            }
                            @endphp
                            @if(count($property_features))
                            <div class="col-lg-6 col-md-6">
                                <h4 class="title-2 mb-10">Heating Cooling</h4>
                                <div class="ltn__menu-widget">
                                    <ul>
                                        @foreach($property_features as $key => $property_feature)
                                        <li>
                                            <label class="checkbox-item checkamenties">{{$property_feature}}
                                                <input type="checkbox" checked="checked" disabled=true>
                                                <!-- <span class="checkmark"></span> -->
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @php
                            if(isset($property_details->eco_friendly) && $property_details->eco_friendly != ''){
                            $property_features = json_decode($property_details->eco_friendly,true);
                            }else{
                            $property_features = array();
                            }
                            @endphp
                            @if(count($property_features))
                            <div class="col-lg-6 col-md-6">
                                <h4 class="title-2 mb-10">Eco friendly</h4>
                                <div class="ltn__menu-widget">
                                    <ul>
                                        @foreach($property_features as $key => $property_feature)
                                        <li>
                                            <label class="checkbox-item checkamenties ">{{$property_feature}}
                                                <input type="checkbox" checked="checked" disabled=true>
                                                <!-- <span class="checkmark"></span> -->
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                    <h4 class="title-2">Location</h4>
                    <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> {{isset($property->address)?$property->address:''}}</label>
                    <div class="property-details-google-map mb-60">
                        <div id="map" style="height:380px;width:100%;"></div>
                    </div>
                    <h4 class="title-2">Floor Plans</h4>
                    <!-- APARTMENTS PLAN AREA START -->
                    <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60">
                        <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center---">
                            <div class="nav">
                                <a data-bs-toggle="tab" href="#liton_tab_3_1">First Floor</a>
                                <a class="active show" data-bs-toggle="tab" href="#liton_tab_3_2" class="">Second Floor</a>
                                <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Third Floor</a>
                                <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Top Garden</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="liton_tab_3_1">
                                <div class="ltn__apartments-tab-content-inner">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="apartments-plan-img">
                                                <img src="{{isset($property->get_property_floor_plan->document)?asset('storage/property_floorplans/'.$property->get_property_floor_plan->document):asset('frontend/img/others/10.png')}}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                <h2>First Floor</h2>
                                                <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                    Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                    eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                    sed ayd minim veniam.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="product-details-apartments-info-list  section-bg-1">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="liton_tab_3_2">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="apartments-plan-img">
                                                <img src="{{isset($property->get_property_floor_plan->document)?asset('storage/property_floorplans/'.$property->get_property_floor_plan->document):asset('frontend/img/others/10.png')}}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                <h2>Second Floor</h2>
                                                <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                    Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                    eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                    sed ayd minim veniam.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="product-details-apartments-info-list  section-bg-1">
                                                @if($property->form_type == 'residential' ||$property->form_type == 'residential_sale' ||$property->form_type == 'residential_rental')
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                @if($property_details->land_size && isset($property_details->land_size))
                                                                <li><label>Total land Area</label> <span>{{isset($property_details->land_size)? $property_details->land_size:''}} {{isset( $property_details->land_size_units)?  $property_details->land_size_units:''}}</span></li>
                                                                @endif
                                                                @if($property_details->house_sizes && isset($property_details->house_sizes))
                                                                <li><label>House Area</label> <span>{{isset($property_details->house_sizes)? $property_details->house_sizes:''}} {{isset( $property_details->house_size_units)?  $property_details->house_size_units:''}}</span></li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                @if($property_details->open_car_spaces && isset($property_details->open_car_spaces))
                                                                <li><label>Open Car Spaces</label> <span>{{isset($property_details->open_car_spaces) ? $property_details->open_car_spaces:''}}</span></li>
                                                                @endif
                                                                @if($property_details->living_areas && isset($property_details->living_areas))
                                                                <li><label>Living Areas</label> <span>{{isset($property_details->living_areas) ? $property_details->living_areas:''}} </span></li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if($property->form_type == 'commercial' ||$property->commercial_listing_type == 'commercial_sale' ||$property->commercial_listing_type == 'commercial_lease')
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                @if($property_details->total_floor_area && isset($property_details->total_floor_area))
                                                                <li><label>Total Floor Area</label> <span>{{isset($property_details->total_floor_area) ? $property_details->total_floor_area:''}} {{isset($property_details->floor_area_units) ? $property_details->floor_area_units:''}}</span></li>
                                                                @endif
                                                                @if( $property_details->office_area && isset( $property_details->office_area))
                                                                <li><label>Office Area</label> <span>{{isset($property_details->office_area) ? $property_details->office_area:''}} {{isset($property_details->office_area_units)? $property_details->office_area_units:''}}</span></li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                @if($property_details->land_size && isset($property_details->land_size))
                                                                <li><label>Land Size</label> <span>{{isset($property_details->land_size) ? $property_details->land_size:''}} {{isset($property_details->land_size_units) ? $property_details->land_size_units:''}}</span></li>
                                                                @endif
                                                                @if($property_details->warehouse_area && isset($property_details->warehouse_area))
                                                                <li><label>Warehouse Area</label> <span>{{isset($property_details->warehouse_area) ? $property_details->warehouse_area:''}} {{isset($property_details->warehouse_units) ? $property_details->warehouse_units:''}} </span></li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_3_3">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="apartments-plan-img">
                                                <img src="{{isset($property->get_property_floor_plan->document)?asset('storage/property_floorplans/'.$property->get_property_floor_plan->document):asset('frontend/img/others/10.png')}}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                <h2>Third Floor</h2>
                                                <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                    Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                    eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                    sed ayd minim veniam.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="product-details-apartments-info-list  section-bg-1">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_3_4">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="apartments-plan-img">
                                                <img src="{{isset($property->get_property_floor_plan->document)?asset('storage/property_floorplans/'.$property->get_property_floor_plan->document):asset('frontend/img/others/10.png')}}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                <h2>Top Garden</h2>
                                                <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                    Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                    eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                    sed ayd minim veniam.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="product-details-apartments-info-list  section-bg-1">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- APARTMENTS PLAN AREA END -->
                    @if(count($property_video_links))
                    @foreach($property_video_links as $property_video_link)
                    <h4 class="title-2">Property Video</h4>
                    <?php
                    $youtubeUrl = $property_video_link->video_url;
                    $youtubePattern = "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i";
                    function youtubeEmbedCallback($matches)
                    {
                        if (!isset($matches[2])) {
                            return '';
                        }
                        $videoId = $matches[2];
                        return 'https://www.youtube.com/embed/' . $videoId;
                    }
                    $youtubeEmbed = preg_replace_callback($youtubePattern, "youtubeEmbedCallback", $youtubeUrl);
                    ?>
                    {{-- <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60" data-bs-bg="img/others/5.jpg">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="{{$youtubeEmbed}}" data-rel="lightcase:myCollection">
                    <i class="fa fa-play"></i>
                    </a>
                </div> --}}
                <div width="560px" height="315px" style="position: static; clear: both; width: 560px; height: 315px;">&nbsp;<div style="position: relative"><img id="vidimg" width="560px" height="315px" src="URL_TO_PICTURE" style="position: absolute; top: 0; left: 0; cursor: pointer; pointer-events: none; z-index: 2;" /><iframe id="unlocked-video" style="position: absolute; top: 0; left: 0; z-index: 1;" src="{{$youtubeEmbed}}" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
                </div>
                @endforeach
                @endif
                <div class="ltn__shop-details-tab-content-inner--- ltn__shop-details-tab-inner-2 ltn__product-details-review-inner mb-60">
                    <h4 class="title-2">Customer Reviews</h4>
                    <div class="product-ratting" id="review">
                        <ul>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                            <li><a href="#"><i class="far fa-star"></i></a></li>
                            <li class="review-total"> <a href="#"> ( {{$comments_count}} Reviews )</a></li>
                        </ul>
                    </div>
                    <hr>
                    <!-- comment-area -->
                    <div class="ltn__comment-area mb-30">
                        <div class="ltn__comment-inner">
                            <ul>
                                @if(count($property_reviews))
                                @foreach($property_reviews as $property_review)
                                <li>
                                    <div class="ltn__comment-item clearfix">
                                        <div class="ltn__commenter-img">
                                            {{--<img src="{{asset('frontend/img/testimonial/1.png')}}" alt="Image"> --}}
                                            <img src="{{isset($property_review->profile_pic) ? asset('user_profile/'.$property_review->profile_pic) : asset('frontend/img/testimonial/1.png')}}" alt="user" />
                                        </div>
                                        <div class="ltn__commenter-comment">
                                            <h6><a href="#">{{$property_review->name}}</a></h6>
                                            <div class="product-ratting">
                                                <ul>
                                                    <?php
                                                    for ($x = 1; $x <= $property_review->rating; $x++) {
                                                        echo "<li><a href='javascript:'><i class='fas fa-star'></i></a></li>";
                                                    }
                                                    for ($y = 1; $y <= 5 - $property_review->rating; $y++) {
                                                        echo "<li><a href='javascript:'><i class='fas fa-star'
                                                                            style='color:#c8c8c5;'></i></a></li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <p>{{$property_review->comments}}</p>
                                            <span class="ltn__comment-reply-btn">{{date('M j,Y',strtotime($property_review->created_at))}}</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- comment-reply -->

                    <div class="ltn__comment-reply-area ltn__form-box mb-30">
                        <form action="{{route('property_reviews')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="property_id" value="{{isset(request()->id) ? request()->id : ''}}">
                            <h4>Add a Review</h4>
                            <div class="mb-30">
                                <div id="add-review" class="add-review-box" class="add-a-review">
                                    <h6>Your Ratings:</h6>
                                    <div class="product-ratting">
                                        <div class="clearfix"></div>
                                        <div class="leave-rating margin-bottom-30">
                                            <input type="radio" name="rating" id="rating-1" value="1">
                                            <label for="rating-1" count=1 class=" fa fa-star star_color" id="st1"></label>
                                            <input type="radio" name="rating" id="rating-2" value="2">
                                            <label for="rating-2" count=2 class=" fa fa-star star_color" id="st2"></label>
                                            <input type="radio" name="rating" id="rating-3" value="3">
                                            <label for="rating-3" count=3 class="  fa fa-star star_color" id="st3"></label>
                                            <input type="radio" name="rating" id="rating-4" value="4">
                                            <label for="rating-4" count=4 class="  fa fa-star star_color" id="st4"></label>
                                            <input type="radio" name="rating" id="rating-5" value="5">
                                            <label for="rating-5" count=5 class=" fa fa-star star_color" id="st5"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea placeholder="Type your comments...." name="comments" required></textarea>
                            </div>
                            <div class="input-item input-item-name ltn__custom-icon">
                                <input type="text" placeholder="Type your name...." name="name" required>
                            </div>
                            <div class="input-item input-item-email ltn__custom-icon">
                                <input type="email" placeholder="Type your email...." name="email" required>
                            </div>
                            <div>
                                <input type="file" placeholder="Review image...." name="upload_images[]" class="upload" multiple id="files" required>
                            </div>
                            <!-- <div class="input-item input-item-website ltn__custom-icon">
                                    <input type="text" name="website" placeholder="Type your website....">
                                </div> -->
                            <div class="btn-wrapper">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>

                <h4 class="title-2">Related Properties</h4>
                <div class="row">
                    <!-- ltn__product-item -->
                    @if(count($related_properties))
                    @foreach($related_properties as $key => $related_property)
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="{{route('property_details',$related_property->id)}}"><img src="{{isset($related_property->get_property_image)?asset('storage/property_images/'.$related_property->get_property_image->document):''}}" alt="#"></a>
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html"><img src="{{isset($related_property->get_property_image)?asset('storage/property_images/'.$related_property->get_property_image->document):''}}" alt="#"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badg">{{isset($related_property->status)?$related_property->status:''}}</li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="{{route('property_details',$property->id)}}">{{isset($related_property->property_type)?$related_property->property_type:''}}</a></h2>
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href="product-details.html"><i class="flaticon-pin"></i>{{isset($related_property->address)?$related_property->address:''}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                    <li><span>{{isset($related_property->property_details)?$related_property->property_details->bedrooms:''}} </span>
                                        Bed
                                    </li>
                                    <li><span>{{isset($related_property->property_details)?$related_property->property_details->bathrooms:''}} </span>
                                        Bath
                                    </li>
                                    <li><span>{{isset($related_property->property_details)?$related_property->property_details->land_size:''}} </span>
                                        {{isset($related_property->property_details)?$related_property->property_details->land_size_units:''}}
                                    </li>
                                </ul>
                                <div class="product-hover-action">
                                    <ul>
                                        <li class="related_property_fav" data-property_id="{{$property->id}}">
                                            <a href="javascript:" data-property_id="{{$property->id}}" class="fav_property">
                                               {{-- <i class="{{check_favourite_property($property->id)?'fa':'far'}} fa-heart"></i>--}}
                                                <img  src="{{check_favourite_property($property->id)? asset('frontend/img/my_logo/png/MMG_Gold_1.png') : asset('frontend/img/my_logo/png/MMG_Black_2.png')}}" alt="Logo">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info-bottom">
                                <div class="product-price">
                                    <span>${{isset($related_property->normal_price)?$related_property->normal_price:''}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                <!-- Author Widget -->
                {{--<div class="widget ltn__author-widget">
                    @if(count($property_reviews))
                    @foreach($property_reviews as $key => $property_review)
                    <div class="ltn__author-widget-inner text-center">
                        <img src="{{isset($property_review->profile_pic) ? asset('user_profile/'.$property_review->profile_pic) : asset('frontend/img/testimonial/1.png')}}" alt="user" />
                <h5>{{$property_review->name}}</h5>
                <small>{{$property_review->email}}</small>
                <div class="product-ratting">
                    <ul>
                        <?php
                        for ($x = 1; $x <= $property_review->rating; $x++) {
                            echo "<li><a href='javascript:'><i class='fas fa-star'></i></a></li>";
                        }
                        for ($y = 1; $y <= 5 - $property_review->rating; $y++) {
                            echo "<li><a href='javascript:'><i class='fas fa-star'
                                                                            style='color:#c8c8c5;'></i></a></li>";
                        }
                        ?>
                        <li class="review-total"> <a href="#"> ({{$comments_count}} Reviews)</a></li>
                    </ul>
                </div>
                <p>{{$property_review->comments}}</p>
                <div class="ltn__social-media">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>

                        <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
        </div>
        @endforeach
        @endif
    </div>--}}
    <!-- Search Widget -->
    <div class="widget ltn__search-widget">
        <h4 class="ltn__widget-title ltn__widget-title-border-2">Search Objects</h4>
        <form action="#">
            <input type="text" name="search" placeholder="Search your keyword...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <!-- Form Widget -->
    <div class="widget ltn__form-widget">
        <h4 class="ltn__widget-title ltn__widget-title-border-2"><i class="fa fa-calendar-check-o cal"></i>Book an Inspection</h4>
        <form action="{{route('inspection_books')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="hidden" name="property_id" value="{{isset(request()->id) ? request()->id : ''}}">
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <div style="margin-bottom:10px" bis_skin_checked="1">Select a Date by clicking below. </div>
                <input type="date" class="required date form-data form-control " id="inspection_date" name="inspection_date">
                @error('inspection_date')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div>
                <div>
                    <div style="margin-bottom:10px" bis_skin_checked="1">Select a Time by clicking below. </div>
                    <input type="text" id="timepicker" name="inspection_time" autocomplete="off">
                    @error('inspection_time')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <!-- <input type="text" name="youremail" placeholder="Your e-Mail*" name="email">
                            <textarea name="yourmessage" placeholder="Write Message..." name="comments"></textarea> -->
                <button type="submit" class="btn theme-btn-1 su_btn_position"><i class="fa fa-calendar-check-o mr-4 cal"></i>Book Now</button>
            </div>
        </form>
    </div>
    <!-- Top Rated Product Widget -->
    {{-- <div class="widget ltn__top-rated-product-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Rated Product</h4>
                        <ul>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.html"><img src="{{asset('frontend/img/product/1.png')}}" alt="#"></a>
</div>
<div class="top-rated-product-info">
    <div class="product-ratting">
        <ul>
            <li><a href="#"><i class="fas fa-star"></i></a></li>
            <li><a href="#"><i class="fas fa-star"></i></a></li>
            <li><a href="#"><i class="fas fa-star"></i></a></li>
            <li><a href="#"><i class="fas fa-star"></i></a></li>
            <li><a href="#"><i class="fas fa-star"></i></a></li>
        </ul>
    </div>
    <h6><a href="product-details.html">Luxury House In Greenville </a></h6>
    <div class="product-price">
        <span>$30,000.00</span>
        <del>$35,000.00</del>
    </div>
</div>
</div>
</li>
<li>
    <div class="top-rated-product-item clearfix">
        <div class="top-rated-product-img">
            <a href="product-details.html"><img src="{{asset('frontend/img/product/2.png')}}" alt="#"></a>
        </div>
        <div class="top-rated-product-info">
            <div class="product-ratting">
                <ul>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                </ul>
            </div>
            <h6><a href="product-details.html">Apartment with Subunits</a></h6>
            <div class="product-price">
                <span>$30,000.00</span>
                <del>$35,000.00</del>
            </div>
        </div>
    </div>
</li>
<li>
    <div class="top-rated-product-item clearfix">
        <div class="top-rated-product-img">
            <a href="product-details.html"><img src="{{asset('frontend/img/product/3.png')}}" alt="#"></a>
        </div>
        <div class="top-rated-product-info">
            <div class="product-ratting">
                <ul>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                    <li><a href="#"><i class="far fa-star"></i></a></li>
                </ul>
            </div>
            <h6><a href="product-details.html">3 Rooms Manhattan</a></h6>
            <div class="product-price">
                <span>$30,000.00</span>
                <del>$35,000.00</del>
            </div>
        </div>
    </div>
</li>
</ul>
</div> --}}
<!-- Menu Widget (Category) -->
<div class="widget ltn__menu-widget ltn__menu-widget-2--- ltn__menu-widget-2-color-2---">
    <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Categories</h4>
    @if(count($property_types))
    @foreach($property_types as $key => $property_type)
    <ul>
        <li><a href="#">{{$property_type->property_type}} <span></span></a></li>
    </ul>
    @endforeach
    @endif
</div>
<!-- Popular Product Widget -->
{{--<div class="widget ltn__popular-product-widget">
    <h4 class="ltn__widget-title ltn__widget-title-border-2">Related Properties</h4>
    <div class="row ltn__popular-product-widget-active slick-arrow-1">
        <!-- ltn__product-item -->
        @if(count($related_properties))
        @foreach($related_properties as $key => $related_property)
        <div class="col-12">
            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                <div class="product-img">
                    <a href="{{route('property_details',$property->id)}}"><img src="{{isset($related_property->get_property_image)?asset('storage/property_images/'.$related_property->get_property_image->document):''}}" alt="#"></a>
<div class="real-estate-agent">
    <div class="agent-img">
        <a href="team-details.html"><img src="{{isset($related_property->get_property_image)?asset('storage/property_images/'.$related_property->get_property_image->document):''}}" alt="#"></a>
    </div>
</div>
</div>
<div class="product-info">
    <div class="product-price">
        <span>${{isset($related_property->normal_price)?$related_property->normal_price:''}}</span>
    </div>
    <h2 class="product-title"><a href="{{route('property_details',$property->id)}}">{{isset($related_property->property_type)?$related_property->property_type:''}}</a></h2>
    <div class="product-img-location">
        <ul>
            <li>
                <a href="product-details.html"><i class="flaticon-pin"></i>{{isset($related_property->address)?$related_property->address:''}}</a>
            </li>
        </ul>
    </div>
    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
    @if($property_bid_summary->property_details->bedrooms > 0)
        <li><span>{{isset($property->property_details)?$property->property_details->bedrooms:''}} </span>
            Bed
        </li>
        @endif
        @if($property_bid_summary->property_details->bathrooms > 0)
        <li><span>{{isset($property->property_details)?$property->property_details->bathrooms:''}} </span>
            Bath
        </li>
        @endif
        @if($property_bid_summary->property_details->land_size && isset($property_bid_summary->property_details->land_size))
        <li><span>{{$property->property_details->land_size}} </span>
            {{isset($property->property_details)?$property->property_details->land_size_units:''}}
        </li>
        @endif
    </ul>
</div>
</div>
</div>
@endforeach
@endif
</div>
</div>--}}
<!-- Popular Post Widget -->
<div class="widget ltn__popular-post-widget">
    <h4 class="ltn__widget-title ltn__widget-title-border-2">Latest Property</h4>
    <ul>
        @if(count($latest_property))
        @foreach($latest_property as $key => $blog_property)
        <li>
            <div class="popular-post-widget-item clearfix">
                <div class="popular-post-widget-img">
                    <a href="{{route('property_details',$blog_property->id)}}"><img src="{{isset($blog_property->get_property_image)?asset('storage/property_images/'.$blog_property->get_property_image->document):''}}" alt="#"></a>
                </div>
                <div class="popular-post-widget-brief">
                    {{-- <h6><a href="blog-details.html">{{isset($blog_property->address)?$blog_property->address:''}}</a></h6> --}}
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-date">
                                <a href="{{route('property_details',$blog_property->id)}}"> @if($blog_property->form_type == 'commercial')
                                    <td>{{isset($blog_property->commercial_listing_type)?$blog_property->commercial_listing_type:''}}</td>
                                    @else
                                    <td>{{isset($blog_property->form_type)?$blog_property->form_type:''}}</td>
                                    @endif
                                </a>
                            </li>
                            <li class="ltn__blog-date">
                            <a href="#"><i class="far fa-calendar-alt"></i>{{date('M d, Y', strtotime($blog_property->created_at))}}</a>
                         </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
        @endif
    </ul>
</div>
<!-- Social Media Widget -->
<div class="widget ltn__social-media-widget">
    <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
    <div class="ltn__social-media-2">
        <ul>
            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

        </ul>
    </div>
</div>
<div class="widget ltn__banner-widget d-none">
    <a href="shop.html"><img src="{{asset('frontend/img/banner/2.jpg')}}" alt="#"></a>
</div>
</aside>
</div>
</div>
</div>
</div>
<!-- SHOP DETAILS AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pb-70 d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center---">
                    <h1 class="section-title">Related Properties</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__related-product-slider-two-active slick-arrow-1">
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{asset('frontend/img/product-3/1.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Rent</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                            <li><span>3 </span>
                                Bed
                            </li>
                            <li><span>2 </span>
                                Bath
                            </li>
                            <li><span>3450 </span>
                                Square Ft
                            </li>
                        </ul>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{asset('frontend/img/product-3/2.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Sale</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                            <li><span>3 </span>
                                Bed
                            </li>
                            <li><span>2 </span>
                                Bath
                            </li>
                            <li><span>3450 </span>
                                Square Ft
                            </li>
                        </ul>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{asset('frontend/img/product-3/3.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Rent</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                            <li><span>3 </span>
                                Bed
                            </li>
                            <li><span>2 </span>
                                Bath
                            </li>
                            <li><span>3450 </span>
                                Square Ft
                            </li>
                        </ul>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{asset('frontend/img/product-3/4.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Rent</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                            <li><span>3 </span>
                                Bed
                            </li>
                            <li><span>2 </span>
                                Bath
                            </li>
                            <li><span>3450 </span>
                                Square Ft
                            </li>
                        </ul>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{asset('frontend/img/product-3/5.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Rent</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                            <li><span>3 </span>
                                Bed
                            </li>
                            <li><span>2 </span>
                                Bath
                            </li>
                            <li><span>3450 </span>
                                Square Ft
                            </li>
                        </ul>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

<!-- CALL TO ACTION START (call-to-action-6) -->
<div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                    <div class="coll-to-info text-color-white">
                        <h1>Looking for a dream home?</h1>
                        <p>We can help you realize your dream of a new home</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-3 btn-white" href="{{route('property_list')}}">Explore Properties <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->

@endsection
@section('script')
<script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $('#timepicker').timepicker();
    });
    $('#timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 60,
        minTime: "{{$property_inspections->start_time}}",
        maxTime: "{{$property_inspections->end_time}}",
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });
</script>
<script>
    $(document).ready(function() {
        $("#st1").click(function() {
            $("#st1, #st2 ,#st3 ,#st4 ,#st5").addClass("star_color");
            $("#st1").removeClass("star_color");
        });
        $("#st2").click(function() {
            $("#st1, #st2 ,#st3 ,#st4 ,#st5").addClass("star_color");
            $("#st1, #st2").removeClass("star_color");

        });
        $("#st3").click(function() {
            $("#st1, #st2 ,#st3 ,#st4 ,#st5").addClass("star_color");
            $("#st1 ,#st2 ,#st3").removeClass("star_color");

        });
        $("#st4").click(function() {
            $("#st1, #st2 ,#st3 ,#st4 ,#st5").addClass("star_color");
            $("#st1 ,#st2 ,#st3, #st4").removeClass("star_color");
        });
        $("#st5").click(function() {
            $("#st1, #st2 ,#st3 ,#st4 ,#st5").addClass("star_color");
            $("#st1, #st2 ,#st3 ,#st4 ,#st5").removeClass("star_color");

        });
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" async defer></script>
<script type="text/javascript">
		var map;
		
		function initMap() {							
			var latitude = parseFloat("{{isset($property->lat) ? $property->lat : '' }}"); // YOUR LATITUDE VALUE
			var longitude = parseFloat("{{isset($property->lng) ? $property->lng : '' }}"); // YOUR LONGITUDE VALUE
			
			var myLatLng = {lat: latitude, lng: longitude};
			
			map = new google.maps.Map(document.getElementById('map'), {
			  center: myLatLng,
			  zoom: 13					
			});
					
			var marker = new google.maps.Marker({
			  position: myLatLng,
			  map: map,
			  //title: 'Hello World'
			  
			  // setting latitude & longitude as title of the marker
			  // title is shown when you hover over the marker
			  title: latitude + ', ' + longitude 
			});			
		}
		</script>
@endsection