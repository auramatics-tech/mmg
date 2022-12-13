@extends('frontend.layouts.master')
@section('css')
<style>
    .page-item.active .page-link {
        z-index: 3;
        background-color: var(--ltn__secondary-color);
        ;
        border: none !important;
    }

    .page-link {
        color: grey;
    }

    .page-link:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .ltn__pagination ul li a {
        line-height: 38px !important;
    }

    .si_link {
        padding: 0.375rem 0.75rem;
    }

    .page-item.active .si_link {
        z-index: 3;
        background-color: var(--ltn__secondary-color);
        border: none !important;
    }

    .extra_fetures {
        display: none;
    }

    .listcat {
        list-style: none;
    }

    .new_hi {
        height: 40px;
    }

    .su_modal_content {
        padding: 20px;
        border-radius: 15px;
    }

    .su_modal_dialog {
        max-width: 50%;
        margin-top: 50px;
    }

    .su_modal {
        z-index: 99999 !important;
    }

    .m_t_b_20 {
        margin: 20px 0px;
    }

    .su_listcat {
        list-style: none;
        margin-top: 2px;
    }

    .su_flex_block {
        display: flex;
    }

    .su_selector_input {
        width: 100%;
    }

    .su_selector_input:focus {
        border-color: #e8e8e8 !important;
    }

    .su_div_height {
        overflow-y: scroll;
        height: 50vh;
    }

    .su_input_style {
        color: var(--ltn__paragraph-color);
        font-weight: 400;
        font-style: normal;
        font-size: 16px;
        font-family: var(--ltn__body-font);
        line-height: 1.8;
    }

    .su_sub_heading {
        font-weight: 800 !important;
    }

    .su_hr {
        border-top: 1px solid #dee2e6 !important;
        margin: 15px 0px !important;
    }

    .m_t_b_10 {
        margin: 0px 0px 20px 0px;
    }

    .su_product_img>a {
        width: 100%;
        height: 230px;
    }

    .su_product_img_inside {
        width: 100%;
        height: 100%;
    }

    .cal {
        margin-right: 4px;
    }

    .ltn__product-item-4 .product-info {
        padding: 20px 16px 1px;
    }

    .custom_img {
        width: 95%;
        margin-right: auto;
        margin-left: auto;
        height: 100%;
        object-fit: cover;
        object-position: center center;
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
        background: #a5a139 !important;

    }

    .img_len a {
        height: calc(100vh - 155px) !important;
    }

    .ul_Residential_commercial {
        display: flex;
        width: 100%;
        list-style: none;
        margin-bottom: 20px;
    }

    .ul_Residential_commercial li {
        width: 50%;
        border-bottom: black 1px solid;
        text-align: center;
        margin: 0;
        padding: 10px 0px;
    }

    .su_res_com_btns {
        width: 100%;
        font-size: 18px;
        font-weight: 600;
        background: none;
        padding: 0.5rem 1rem;
    }

    .active_under_line {
        border-bottom: #ff5a3c 3px solid !important;
    }

    .su_on_click_clr.open,
    .su_on_click_clr:active,
    .su_on_click_clr:focus {
        border-color: var(--ltn__secondary-color) !important;
    }

    .nav-link {
        color: #495057 !important;
    }

    .su_img_list>a {
        height: 210px;
    }

    .su_img_list>a>img {
        width: 100%;
        height: 100%;
    }

    .su_circle_img>a {
        width: 50px;
        height: 50px;
    }

    .su_circle_img>a>img {
        width: 100%;
        height: 100%;
    }

    .su_circle_list_img>a {
        width: 40px;
        height: 40px;
    }

    .su_circle_list_img>a>img {
        width: 100%;
        height: 100%;
    }

    .su_circle_list_img {
        width: 50px !important;
        height: 50px !important;
    }


    @media screen and (max-width: 991px) {
        .su_flex_block {
            display: block;
        }
    }

    @media screen and (max-width: 650px) {
        .su_modal_dialog {
            max-width: 65%;
        }
    }

    @media screen and (max-width: 575px) {
        .su_modal_dialog {
            max-width: 100%;
        }
    }
</style>
@endsection
@section('content')

    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Wheel Bearing Retainer</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">3 Rooms Manhattan</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">OE Replica Wheels</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/4.png" alt="Image"></a>
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
                    <a href="" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href=""><img src="img/logo.png" alt="Logo"></a>
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
                            <li><a href="">Home Style 01</a></li>
                            <li><a href="">Home Style 02</a></li>
                            <li><a href="">Home Style 03</a></li>
                            <li><a href="">Home Style 04</a></li>
                            <li><a href="">Home Style 05 <span class="menu-item-badge">video</span></a></li>
                            <li><a href="">Home Style 06</a></li>
                            <li><a href="">Home Style 07</a></li>
                            <li><a href="">Home Style 08</a></li>
                            <li><a href="">Home Style 09</a></li>
                            <li><a href="">Home Style 10 <span class="menu-item-badge">Map</span></a></li>
                            <li><a href="">Home Style 11</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Service Details</a></li>
                            <li><a href="">Portfolio</a></li>
                            <li><a href="l">Portfolio - 02</a></li>
                            <li><a href="">Portfolio Details</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">Team Details</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Google Map Locations</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="">Shop</a></li>
                            <li><a href="">Shop Grid</a></li>
                            <li><a href="">Shop Left sidebar</a></li>
                            <li><a href="">Shop right sidebar</a></li>
                            <li><a href="">Shop details </a></li>
                            <li><a href="">Cart</a></li>
                            <li><a href="">Wishlist</a></li>
                            <li><a href="">Checkout</a></li>
                            <li><a href="">Order Tracking</a></li>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Sign in</a></li>
                            <li><a href="">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="#">News</a>
                        <ul class="sub-menu">
                            <li><a href="">News</a></li>
                            <li><a href="">News Grid</a></li>
                            <li><a href="">News Left sidebar</a></li>
                            <li><a href="">News Right sidebar</a></li>
                            <li><a href="">News details</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Service Details</a></li>
                            <li><a href="">Portfolio</a></li>
                            <li><a href="">Portfolio - 02</a></li>
                            <li><a href="">Portfolio Details</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">Team Details</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">History</a></li>
                            <li><a href="">Appointment</a></li>
                            <li><a href="">Google Map Locations</a></li>
                            <li><a href="">404</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="far fa-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="" title="Shoping Cart">
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
    <div class="ltn__utilize-overlay"></div>
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container mt-4">
            <div class="row">
                    <div class="col-lg-8">
                        <div class="ltn__shop-options">
                            <ul class="justify-content-start">
                                <li>
                                    <div class="ltn__grid-list-tab-menu ">
                                        <div class="nav">
                                            <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-none">
                                    <div class="showing-product-number text-right">
                                        <span>Showing 1–12 of 18 results</span>
                                    </div>
                                </li>
                                <li>
                                    <form id="sorting_form">
                                        <div class="short-by text-center">
                                            <select class="nice-select" name="sort" id="sortby">
                                                <option value="">Default Sorting</option>
                                                <option @if(isset(request()->sort) && request()->sort == 'o') selected @endif value="o">Sort by first arrivals</option>
                                                <option @if(isset(request()->sort) && request()->sort == 'n') selected @endif value="n">Sort by new arrivals</option>
                                                <option @if(isset(request()->sort) && request()->sort == 'l') selected @endif value="l">Sort by price: low to high</option>
                                                <option @if(isset(request()->sort) && request()->sort == 'h') selected @endif value="h">Sort by price: high to low</option>
                                            </select>
                                        </div>
                                    </form>
                                </li>
                                <li class="ms-auto">
                                    <button class="btn theme-btn-1" data-bs-toggle="modal" data-bs-target="#filter_model">Filter</button>
                                </li>
                            </ul>
                        </div>
                        <div class="property_listing">
                            @include('frontend.property._listing')
                        </div>
                    </div>
                    <div class="widget ltn__menu-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                        <ul>
                            <li><a href="#">Body <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Interior <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Lights <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Parts <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Tires <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Uncategorized <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Wheel <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                        </ul>
                    </div>
                    <div class="widget ltn__top-rated-product-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
                        <ul>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href=""><img src="" alt="#"></a>
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
                                        <h6><a href="">Mixel Solid Seat Cover</a></h6>
                                        <div class="product-price">
                                            <span>$49.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href=""><img src="" alt="#"></a>
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
                                        <h6><a href="">3 Rooms Manhattan</a></h6>
                                        <div class="product-price">
                                            <span>$49.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href=""><img src="" alt="#"></a>
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
                                        <h6><a href="">Coil Spring Conversion</a></h6>
                                        <div class="product-price">
                                            <span>$49.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget ltn__search-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search your keyword...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget ltn__tagcloud-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Popular Tags</h4>
                        <ul>
                            <li><a href="#">Popular</a></li>
                            <li><a href="#">desgin</a></li>
                            <li><a href="#">ux</a></li>
                            <li><a href="#">usability</a></li>
                            <li><a href="#">develop</a></li>
                            <li><a href="#">icon</a></li>
                            <li><a href="#">Car</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Repairs</a></li>
                            <li><a href="#">Auto Parts</a></li>
                            <li><a href="#">Oil</a></li>
                            <li><a href="#">Dealer</a></li>
                            <li><a href="#">Oil Change</a></li>
                            <li><a href="#">Body Color</a></li>
                        </ul>
                    </div>
                    <div class="widget ltn__tagcloud-widget ltn__size-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product Size</h4>
                        <ul>
                            <li><a href="#">S</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">XL</a></li>
                            <li><a href="#">XXL</a></li>
                        </ul>
                    </div>
                    <div class="widget ltn__color-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product Color</h4>
                        <ul>
                            <li class="black"><a href="#"></a></li>
                            <li class="white"><a href="#"></a></li>
                            <li class="red"><a href="#"></a></li>
                            <li class="silver"><a href="#"></a></li>
                            <li class="gray"><a href="#"></a></li>
                            <li class="maroon"><a href="#"></a></li>
                            <li class="yellow"><a href="#"></a></li>
                            <li class="olive"><a href="#"></a></li>
                            <li class="lime"><a href="#"></a></li>
                            <li class="green"><a href="#"></a></li>
                            <li class="aqua"><a href="#"></a></li>
                            <li class="teal"><a href="#"></a></li>
                            <li class="blue"><a href="#"></a></li>
                            <li class="navy"><a href="#"></a></li>
                            <li class="fuchsia"><a href="#"></a></li>
                            <li class="purple"><a href="#"></a></li>
                            <li class="pink"><a href="#"></a></li>
                            <li class="nude"><a href="#"></a></li>
                            <li class="orange"><a href="#"></a></li>
                            <li><a href="#" class="orange"></a></li>
                            <li><a href="#" class="orange"></a></li>
                        </ul>
                    </div>
                    <div class="widget ltn__banner-widget d-none">
                        <a href=""><img src="img/banner/banner-2.jpg" alt="#"></a>
                    </div>
                    </aside>
            </div>
        </div>
    </div>
    <div class="modal fade su_modal" id="filter_model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog su_modal_dialog">
            <div class="modal-content su_modal_content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Filter</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <ul class="nav nav-tabs justify-content-around" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active active_under_line filter_tab" id="residential-tab" data-bs-toggle="tab" data-bs-target="#residential" type="button" role="tab" aria-controls="home" aria-selected="true">Residential</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link filter_tab" id="commercial-tab" data-bs-toggle="tab" data-bs-target="#commercial" type="button" role="tab" aria-controls="profile" aria-selected="false">Commercial</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="residential" role="tabpanel" aria-labelledby="residential-tab">
                        <form>
                            <div class="modal-body p-0 mt-4">
                                <div class="row su_div_height">
                                    <h4 class="ltn__widget-title m_t_b_10">Property Type</h4>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <li class="su_listcat">
                                            <label class="checkbox-item">For Sale
                                                <input type="radio" class="all_checkbox" @if(isset(request()->form_type) && in_array("residential_sale", request()->form_type)) checked @endif value="residential_sale" name="form_type[]">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                        </li>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 commercial_hide">
                                        <li class="su_listcat">
                                            <label class="checkbox-item">For Rent
                                                <input type="radio" class="all_checkbox" @if(isset(request()->form_type) && in_array("residential_rental", request()->form_type)) checked @endif value="residentia_rental" name="form_type[]">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                        </li>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Residental</h4>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        @if(count($residentials))
                                        @foreach($residentials as $key => $residential)
                                        @if($key <(count($residentials) /2)) <li class="su_listcat">
                                            <label class="checkbox-item">{{$residential->value}}
                                                <input type="checkbox" class="all_checkbox" @if(isset(request()->property_type) && in_array($residential->value, request()->property_type)) checked @endif value="{{$residential->value}}" name="property_type[]">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                            </li>
                                            @endif
                                            @endforeach
                                            @endif
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        @if(count($residentials))
                                        @foreach($residentials as $key => $residential)
                                        @if($key >=(count($residentials) /2)) <li class="su_listcat">
                                            <label class="checkbox-item">{{$residential->value}}
                                                <input type="checkbox" class="all_checkbox" @if(isset(request()->property_type) && in_array($residential->value, request()->property_type)) checked @endif value="{{$residential->value}}" name="property_type[]">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">About the property</h4>
                                    <div class="row">
                                        <div class="ltn__widget-title m_t_b_10">Bedrooms</div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <label class="su_input_style">Min</label>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-12" bis_skin_checked="1">
                                                    <input type="text" name="bedroom_from" @if(isset(request()->bedroom_from)) value="{{request()->bedroom_from}}" @endif placeholder="From:" >
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12 pl_mt_4" bis_skin_checked="1">
                                                    <input type="text" name="bedroom_to" @if(isset(request()->bedroom_to)) value="{{request()->bedroom_to}}" @endif placeholder="To:" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Bathrooms</h4>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <select class="su_selector_input" id="" name="bathrooms">
                                                <option value="">Select</option>
                                                {!!number_dropdown(old('bathrooms') ?? isset(request()->bathrooms)?request()->bathrooms:'')!!}
                                            </select>
                                        </div>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Car spaces</h4>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <select class="su_selector_input" id="" name="open_car_spaces">
                                                <option value="">Select</option>
                                                {!!number_dropdown(old('open_car_spaces') ?? isset(request()->open_car_spaces)?request()->open_car_spaces:'')!!}
                                            </select>
                                        </div>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Price</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-12" bis_skin_checked="1">
                                            <input type="text" name="price_from" class="price_range" @if(isset(request()->price_from)) value="{{request()->price_from}}" @endif placeholder="From:" >
                                        </div>
                                        <div class="col-lg-6 col-md-4 pl_mt_4" bis_skin_checked="1">
                                            <input type="text" name="price_to" class="price_range" @if(isset(request()->price_to)) value="{{request()->price_to}}" @endif placeholder="To:" >
                                        </div>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Land size</h4>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <label class="su_input_style">Min</label>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-12" bis_skin_checked="1">
                                                    <input type="text" name="landsize_from" @if(isset(request()->landsize_from)) value="{{request()->landsize_from}}" @endif placeholder="From:" >
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12 pl_mt_4" bis_skin_checked="1">
                                                    <input type="text" name="landsize_to" @if(isset(request()->landsize_to)) value="{{request()->landsize_to}}" @endif placeholder="To:" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">New or established property</h4>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <li class="su_listcat">
                                            <label class="checkbox-item">New
                                                <input type="checkbox" class="all_checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                        </li>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <li class="su_listcat">
                                            <label class="checkbox-item">Established
                                                <input type="checkbox" class="all_checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                        </li>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Outdoor features</h4>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        @if(count($outdoors))
                                        @foreach($outdoors as $key => $feature)
                                        @if($key <(count($outdoors) /2)) <li class="su_listcat">
                                            <label class="checkbox-item">{{$feature->name}}
                                                <input type="checkbox" class="all_checkbox" @if(isset(request()->feature) && in_array($feature->name,request()->feature))checked @endif name="feature[]" value="{{$feature->name}}">
                                                <span class="checkmark"></span>
                                            </label>
                                            </li>
                                            @endif
                                            @endforeach
                                            @endif

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        @if(count($outdoors))
                                        @foreach($outdoors as $key => $feature)
                                        @if($key >=(count($outdoors)/2))
                                        <li class="su_listcat">
                                            <label class="checkbox-item">{{$feature->name}}
                                                <input type="checkbox" class="all_checkbox" @if(isset(request()->feature) && in_array($feature->name,request()->feature))checked @endif name="feature[]" value="{{$feature->name}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif

                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Indoor features</h4>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        @if(count($indoors))
                                        @foreach($indoors as $key => $indoor)
                                        @if($key < (count($indoors)/2)) <li class="su_listcat">
                                            <label class="checkbox-item">{{$indoor->name}}
                                                <input type="checkbox" class="all_checkbox" @if(isset(request()->indoor) && in_array($indoor->name,request()->indoor))checked @endif name="indoor[]" value="{{$indoor->name}}">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                            </li>
                                            @endif
                                            @endforeach
                                            @endif
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        @if(count($indoors))
                                        @foreach($indoors as $key => $indoor)
                                        @if($key >= (count($indoors)/2))
                                        <li class="su_listcat">
                                            <label class="checkbox-item">{{$indoor->name}}
                                                <input type="checkbox" class="all_checkbox" @if(isset(request()->indoor) && in_array($indoor->name,request()->indoor))checked @endif name="indoor[]" value="{{$indoor->name}}">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Climate control & energy</h4>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        @if(count($heating_coolings))
                                        @foreach($heating_coolings as $key => $heating_cooling)
                                        @if($key <(count($heating_coolings) /2)) <li class="su_listcat">
                                            <label class="checkbox-item">{{$heating_cooling->name}}
                                                <input type="checkbox" class="all_checkbox" @if(isset(request()->heating_cooling) && in_array($heating_cooling->name,request()->heating_cooling))checked @endif name="heating_cooling[]" value="{{$heating_cooling->name}}">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                            </li>
                                            @endif
                                            @endforeach
                                            @endif
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        @if(count($heating_coolings))
                                        @foreach($heating_coolings as $key => $heating_cooling)
                                        @if($key >(count($heating_coolings)/2))
                                        <li class="su_listcat">
                                            <label class="checkbox-item">{{$heating_cooling->name}}
                                                <input type="checkbox" class="all_checkbox" @if(isset(request()->heating_cooling) && in_array($heating_cooling->name,request()->heating_cooling))checked @endif name="heating_cooling[]" value="{{$heating_cooling->name}}">
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="categorey-no"></span>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer pt-4 pb-0">
                                <button type="submit" class="btn theme-btn-1">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="commercial" role="tabpanel" aria-labelledby="commercial-tab">
                        <form>
                            <div class="modal-body p-0 mt-4">
                                <div class="row su_div_height">
                                    <h4 class="ltn__widget-title m_t_b_10">Property Type</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <li class="su_listcat">
                                                <label class="checkbox-item">For Sale
                                                    <input type="radio" class="all_checkbox" @if(isset(request()->form_type) && in_array("commercial_sale", request()->form_type)) checked @endif value="commercial_sale" name="form_type[]">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="categorey-no"></span>
                                            </li>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-12 commercial_hide">
                                            <li class="su_listcat">
                                                <label class="checkbox-item">For Lease
                                                    <input type="radio" class="all_checkbox" @if(isset(request()->form_type) && in_array("commercial_lease", request()->form_type)) checked @endif value="commercial_rental" name="form_type[]">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="categorey-no"></span>
                                            </li>
                                        </div>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Commercial</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-12">
                                            @if(count($commercials))
                                            @foreach($commercials as $key => $commercial)
                                            @if($key <(count($commercials) /2)) <li class="su_listcat">
                                                <label class="checkbox-item">{{$commercial->value}}
                                                    <input type="checkbox" class="all_checkbox" @if(isset(request()->property_type) && in_array($commercial->value, request()->property_type)) checked @endif value="{{$commercial->value}}" name="property_type[]">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="categorey-no"></span>
                                                </li>
                                                @endif
                                                @endforeach
                                                @endif
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-12">
                                            @if(count($commercials))
                                            @foreach($commercials as $key => $commercial)
                                            @if($key >=(count($commercials) /2)) <li class="su_listcat">
                                                <label class="checkbox-item">{{$commercial->value}}
                                                    <input type="checkbox" class="all_checkbox" @if(isset(request()->property_type) && in_array($commercial->value, request()->property_type)) checked @endif value="{{$commercial->value}}" name="property_type[]">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="categorey-no"></span>
                                            </li>
                                            @endif
                                            @endforeach
                                            @endif

                                        </div>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Price</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 pl_mt_4" bis_skin_checked="1">
                                            <input type="text" name="lower_price" placeholder="From:">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12" bis_skin_checked="1">
                                            <input type="text" name="higher_price" placeholder="To:">
                                        </div>
                                    </div>
                                    <h4 class="ltn__widget-title m_t_b_10">Land</h4>
                                    <label class="su_input_style">Squares</label>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 pl_mt_4" bis_skin_checked="1">
                                            <input type="text" name="lower_Squares" placeholder="Min:">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12" bis_skin_checked="1">
                                            <input type="text" name="higher_Squares" placeholder="Max:">
                                        </div>
                                    </div>
                                    <hr class="su_hr">
                                    <h4 class="ltn__widget-title m_t_b_10">Rental Per Month</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12" bis_skin_checked="1">
                                            <input type="text" name="rent_from" @if(isset(request()->rent_from)) value="{{request()->rent_from}}" @endif placeholder="From:" >
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12" bis_skin_checked="1">
                                            <input type="text" name="rent_to" @if(isset(request()->rent_to)) value="{{request()->rent_to}}" @endif placeholder="To:" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer pt-4 pb-0">
                                <button type="submit" class="btn theme-btn-1">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection
@section('script')
<script>
    $(document).on('click', '#searchbtn', function() {
        $('#form2 :input').not(':submit').clone().hide().appendTo('#form1');
        $('#form3 :input').not(':submit').clone().hide().appendTo('#form1');
        $('#form4 :input').not(':submit').clone().hide().appendTo('#form1');
        $('#form1').submit();
    })
    $(document).on('click', '#view_more_fetures', function() {
        $(this).hide();
        $('.extra_fetures').show();
        $('#hide_more_fetures').show();
    })
    $(document).on('click', '#hide_more_fetures', function() {
        $(this).hide();
        $('.extra_fetures').hide();
        $('#view_more_fetures').show();
    })
</script>
<script>
    $("#myselect").change(function() {
        this.form.submit();
    });
</script>
<script>
    $(document).ready(function() {
        $('#sortby').change(function() {
            $('#sorting_form').submit();
        });
    });
</script>

<script>
    $(document).on('click', '.all_checkbox', function() {
        var formID = $(this).parents("form").attr("id");
        $('#' + formID + ' :input').not(':submit').clone().hide().appendTo('#form1');
        $.ajax({
            method: "get",
            url: '{{route("property_list")}}',
            data: $('#form1').serialize(),
            success: function(data) {
                $('.property_listing').html(data)
            }
        })
    });
</script>
<script>
    $(document).on('keypress', '.price_range', function() {
        var formID = $(this).parents("form").attr("id");
        $('#' + formID + ' :input').not(':submit').clone().hide().appendTo('#form1');
        $.ajax({
            method: "get",
            url: '{{route("property_list")}}',
            data: $('#form1').serialize(),
            success: function(data) {
                $('.property_listing').html(data)
            }
        })
    });
</script>
<script>
    $(document).on('click', '.filter_tab', function() {
        $('.filter_tab').removeClass('active_under_line')
        $(this).addClass('active_under_line')
    })
</script>

@endsection