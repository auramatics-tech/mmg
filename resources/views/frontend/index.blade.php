@extends('frontend.layouts.master')
@section('content')
<style>
.logo{
    display: flex;
    justify-content: center;
    height: 94vh;
    align-items: center;
}
.logo img{
    width: 150px;
    height: 150px;
    z-index: 9;
}
.home-bg-mask-img {
    background: #0507082b;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    z-index: 3;
    opacity: 0.1;
}
.home_main_img{
    background-repeat: no-repeat;
    background-image: url("{{asset('storage/sliders/'.$sliderimages->file_name)}}");
    height: 94vh;
    background-size: 100% 100%;
}
.small_screen_logo{
    width: 80px;
    height: 80px;
}
.small_screen_logo>a>img{
    width: 100%;
    height: 100%;
}

@media screen and (max-width: 991px) and (min-width: 768px){
    .home_main_img {
       height: 70vh;
    }
    .logo {
       height: 70vh;
    }
    .mt_size_480_30{
        margin-top: 30px;
    }
}
@media screen and (max-width: 768px) and (min-width: 500px){
    .home_main_img {
    height: 70vh;
}
.logo img {
    width: 90px;
    height: 90px;
}
.logo {
    height: 70vh;
}
.mt_size_480_30{
    margin-top: 20px;
}
}
@media screen and (max-width: 500px) and (min-width: 320px){
    .logo img {
        width: 75px;
        height: 75px;
    }
    .home_main_img {
        height: 45vh;
    }
    .logo {
        height: 45vh;
    }
    .mt_size_480_30{
        margin-top: 30px;
    }
}

</style>

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
            <div class="small_screen_logo">
                <a href=""><img src="{{asset('frontend/img/my_logo/png/MMG_Black_2.png')}}" alt="Logo"></a>
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
                        <li><a href="add-listing.html">Add Listing</a></li>
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

<!-- SLIDER AREA START (slider-3) -->
<div class="mb-50">
    <div class="container-fluid">
        <div class="row ">        
            <div class="col-lg-12 p-0">
                <div class="image" style="z-index: 1;">
                   <div class="home_main_img">
                       <div class="logo">
                          <img src="{{asset('frontend/img/my_logo/SVG/MMG_Black_2.svg')}}" alt="Logo">
                       </div>
                   </div>
                </div>
                <div class="home-bg-mask-img">
                    
                </div> 
                   
            </div>
          
        </div>
    </div>
</div>
{{--<div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                        <h1 class="slide-title animated ">Find Your Dream <br> House By Us</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="about.html" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                            <a class="ltn__video-play-btn bg-white" href="https://www.youtube.com/embed/HnbMYzdjuBs?autoplay=1&amp;showinfo=0" data-rel="lightcase">
                                                <i class="icon-play  ltn__secondary-color"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{asset('frontend/img/slider/21.png')}}" alt="#">
</div>
</div>
</div>
</div>
</div>
</div>
<!-- ltn__slide-item -->
<div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal ltn__slide-item-3">
    <div class="ltn__slide-item-inner  text-right text-end">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="slide-item-info">
                        <div class="slide-item-info-inner ltn__slide-animation">
                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                            <h1 class="slide-title animated ">The Right Place <br>of House Finding</h1>
                            <div class="slide-brief animated">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </div>
                            <div class="btn-wrapper animated">
                                <a href="service.html" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>
                                <a href="about.html" class="btn btn-transparent btn-effect-3">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item-img slide-img-left">
                        <img src="{{asset('frontend/img/slider/21.png')}}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
</div>
</div>--}}
<!-- SLIDER AREA END -->

<!-- CAR DEALER FORM AREA START -->
<div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115--- mt_size_480_30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__car-dealer-form-tab">
                    <div class="ltn__tab-menu  text-uppercase d-none">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#ltn__form_tab_1_1"><i class="fas fa-car"></i>Find A Car</a>
                            <a data-bs-toggle="tab" href="#ltn__form_tab_1_2" class=""><i class="far fa-user"></i>Get a Dealer</a>
                        </div>
                    </div>
                    <div class="tab-content bg-white box-shadow-1 ltn__border position-relative pb-10">
                        <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                            <div class="car-dealer-form-inner">
                                <form action="#" class="ltn__car-dealer-form-box row">
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Choose Area</option>
                                            <option>chicago</option>
                                            <option>London</option>
                                            <option>Los Angeles</option>
                                            <option>New York</option>
                                            <option>New Jersey</option>
                                        </select>
                                    </div>
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Property Status</option>
                                            <option>Open house</option>
                                            <option>Rent</option>
                                            <option>Sale</option>
                                            <option>Sold</option>
                                        </select>
                                    </div>
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Property Type</option>
                                            <option>Apartment</option>
                                            <option>Co-op</option>
                                            <option>Condo</option>
                                            <option>Single Family Home</option>
                                        </select>
                                    </div>
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                        <div class="btn-wrapper text-center mt-0">
                                            <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                            <a href="shop-right-sidebar.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Find Now</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ltn__form_tab_1_2">
                            <div class="car-dealer-form-inner">
                                <form action="#" class="ltn__car-dealer-form-box row">
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Choose Area</option>
                                            <option>chicago</option>
                                            <option>London</option>
                                            <option>Los Angeles</option>
                                            <option>New York</option>
                                            <option>New Jersey</option>
                                        </select>
                                    </div>
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Property Status</option>
                                            <option>Open house</option>
                                            <option>Rent</option>
                                            <option>Sale</option>
                                            <option>Sold</option>
                                        </select>
                                    </div>
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Property Type</option>
                                            <option>Apartment</option>
                                            <option>Co-op</option>
                                            <option>Condo</option>
                                            <option>Single Family Home</option>
                                        </select>
                                    </div>
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                        <div class="btn-wrapper text-center mt-0">
                                            <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                            <a href="shop-right-sidebar.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Properties</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CAR DEALER FORM AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-120 pb-90 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="{{asset('frontend/img/others/7.png')}}" alt="About Us Image">
                    <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">

                        <div class="ltn__video-img ltn__animation-pulse1">
                            <img src="{{asset('frontend/img/others/8.png')}}" alt="video popup bg image">
                            <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0" data-rel="">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-20">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                        <h1 class="section-title">The Leading Real Estate
                            Rental Marketplace<span>.</span></h1>
                        <p>Over 39,000 people work for us in more than 70 countries all over the
                            This breadth of global coverage, combined with specialist services</p>
                    </div>
                    <ul class="ltn__list-item-half clearfix">
                        <li>
                            <i class="flaticon-home-2"></i>
                            Smart Home Design
                        </li>
                        <li>
                            <i class="flaticon-mountain"></i>
                            Beautiful Scene Around
                        </li>
                        <li>
                            <i class="flaticon-heart"></i>
                            Exceptional Lifestyle
                        </li>
                        <li>
                            <i class="flaticon-secure"></i>
                            Complete 24/7 Security
                        </li>
                    </ul>
                    <div class="ltn__callout bg-overlay-theme-05  mt-30">
                        <p>"Enimad minim veniam quis nostrud exercitation <br>
                            llamco laboris. Lorem ipsum dolor sit amet" </p>
                    </div>
                    <div class="btn-wrapper animated">
                        <a href="service.html" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- COUNTER UP AREA START -->
<div class="ltn__counterup-area section-bg-1 pt-120 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-select"></i>
                    </div>
                    <h1><span class="counter">560</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Total Area Sq</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-office"></i>
                    </div>
                    <h1><span class="counter">197</span><span class="counterUp-letter">K</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Apartments Sold</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-excavator"></i>
                    </div>
                    <h1><span class="counter">268</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Total Constructions</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-armchair"></i>
                    </div>
                    <h1><span class="counter">340</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Apartio Rooms</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTER UP AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-120 pb-90 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-30">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                        <h1 class="section-title">Today Sells Properties</h1>
                        <p>Houzez allow you to design unlimited panels and real estate custom
                            forms to capture leads and keep record of all information</p>
                    </div>
                    <ul class="ltn__list-item-1 ltn__list-item-1-before clearfix">
                        <li> Live Music Cocerts at Luviana</li>
                        <li>Our SecretIsland Boat Tour is Just for You</li>
                        <li>Live Music Cocerts at Luviana</li>
                        <li>Live Music Cocerts at Luviana</li>
                    </ul>
                    <ul class="ltn__list-item-2 ltn__list-item-2-before ltn__flat-info">
                        <li><span>3 <i class="flaticon-bed"></i></span>
                            Bedrooms
                        </li>
                        <li><span>2 <i class="flaticon-clean"></i></span>
                            Bathrooms
                        </li>
                        <li><span>2 <i class="flaticon-car"></i></span>
                            Car parking
                        </li>
                        <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                            square Ft
                        </li>
                    </ul>
                    <ul class="ltn__list-item-2 ltn__list-item-2-before--- ltn__list-item-2-img mb-50">
                        <li>
                            <a href="img/img-slide/11.jpg" data-rel="lightcase:myCollection">
                                <img src="{{asset('frontend/img/img-slide/11.jpg')}}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="img/img-slide/12.jpg" data-rel="">
                                <img src="{{asset('frontend/img/img-slide/12.jpg')}}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="img/img-slide/13.jpg" data-rel="lightcase:myCollection">
                                <img src="{{asset('frontend/img/img-slide/13.jpg')}}" alt="Image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-right">
                    <img src="{{asset('frontend/img/others/9.png')}}" alt="About Us Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                    <h1 class="section-title">Our Main Focus</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter--- justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house"></i></span> -->
                        <img src="{{asset('frontend/img/icons/icon-img/21.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Buy a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house-3"></i></span> -->
                        <img src="{{asset('frontend/img/icons/icon-img/22.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Rent a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-deal-1"></i></span> -->
                        <img src="{{asset('frontend/img/icons/icon-img/23.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Sell a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h6>
                    <h1 class="section-title">Featured Listings</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
            @if(isset($properties) && count($properties))
            @foreach($properties as $property)
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <a href="{{route('property_details',$property->id)}}"><img src="{{isset($property->get_property_image)?asset('storage/property_images/'.$property->get_property_image->document):''}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">{{isset($property->status)?$property->status:''}}</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="locations.html"><i class="flaticon-pin"></i> {{isset($property->address)?$property->address:''}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-img-gallery">
                                <ul>
                                    <li>
                                        <a href="{{route('property_details',$property->id)}}"><i class="fas fa-camera"></i> 4</a>
                                    </li>
                                    <li>
                                        <a href="{{route('property_details',$property->id)}}"><i class="fas fa-film"></i> 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-price">
                            <span>${{isset($property->price)?$property->price:''}}</span>
                        </div>
                        <h2 class="product-title"><a href="{{route('property_details',$property->id)}}"> {{isset($property->address)?$property->address:''}}</a></h2>
                        <div class="product-description">
                            <p>Beautiful Huge 1 Family House In Heart Of <br>
                                Westbury. Newly Renovated With New Wood</p>
                        </div>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>{{isset($property->property_details)?$property->property_details->bedrooms:''}} <i class="flaticon-bed"></i></span>
                                Bedrooms
                            </li>
                            <li><span>{{isset($property->property_details)?$property->property_details->bathrooms:''}} <i class="flaticon-clean"></i></span>
                                Bathrooms
                            </li>
                            <li><span>{{isset($property->property_details)?$property->property_details->land_size:''}} <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                {{isset($property->property_details)?$property->property_details->land_size_units:''}}
                            </li>
                        </ul>
                    </div>
                    <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                            <div class="agent-brief">
                                <h6><a href="team-details.html">William Seklo</a></h6>
                                <small>Estate Agents</small>
                            </div>
                        </div>
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
                                    <a href="product-details.html" title="Product Details">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

<!-- APARTMENTS PLAN AREA START -->
<div class="ltn__apartments-plan-area pt-115--- pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Apartment Sketch</h6>
                    <h1 class="section-title">Apartments Plan</h1>
                </div>
                <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center">
                    <div class="nav">
                        <a data-bs-toggle="tab" href="#liton_tab_3_1">The Studio</a>
                        <a class="active show" data-bs-toggle="tab" href="#liton_tab_3_2">Deluxe Portion</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Penthouse</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Top Garden</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_5" class="">Double Height</a>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade" id="liton_tab_3_1">
                        <div class="ltn__apartments-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                        <h2>The Studio</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{asset('frontend/img/others/10.png')}}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="liton_tab_3_2">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                        <h2>Deluxe Portion</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{asset('frontend/img/others/10.png')}}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_tab_3_3">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                        <h2>Penthouse</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{asset('frontend/img/others/10.png')}}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_tab_3_4">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                        <h2>Top Garden</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{asset('frontend/img/others/10.png')}}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_tab_3_5">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                        <h2>Double Height</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{asset('frontend/img/others/10.png')}}" alt="#">
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

<!-- VIDEO AREA START -->
<div class="ltn__video-popup-area ltn__video-popup-margin---">
    <div class="ltn__video-bg-img ltn__video-popup-height-600--- bg-overlay-black-30 bg-image bg-fixed ltn__animation-pulse1" data-bs-bg="img/bg/19.jpg">
        <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0" data-rel="">
            <i class="fa fa-play"></i>
        </a>
    </div>
</div>
<!-- VIDEO AREA END -->

<!-- CATEGORY AREA START -->
<div class="ltn__category-area section-bg-1-- ltn__primary-bg before-bg-1 bg-image bg-overlay-theme-black-5--0 pt-115 pb-90 d-none" data-bs-bg="img/bg/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title white-color">Top Categories</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__category-slider-active slick-arrow-1">
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CATEGORY AREA END -->

<!-- CATEGORY AREA START -->
<div class="ltn__category-area ltn__product-gutter section-bg-1--- pt-115 pb-90 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Aminities</h6>
                    <h1 class="section-title">Building Aminities</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__category-slider-active--- slick-arrow-1 justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-car"></i></span>
                        <span class="category-title">Parking Space</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-swimming"></i></span>
                        <span class="category-title">Swimming Pool</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-secure-shield"></i></span>
                        <span class="category-title">Private Security</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-stethoscope"></i></span>
                        <span class="category-title">Medical Center</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-book"></i></span>
                        <span class="category-title">Library Area</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-bed-1"></i></span>
                        <span class="category-title">King Size Beds</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-home-2"></i></span>
                        <span class="category-title">Smart Homes</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-slider"></i></span>
                        <span class="category-title">Kid’s Playland</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CATEGORY AREA END -->

<!-- TESTIMONIAL AREA START (testimonial-7) -->
<div class="ltn__testimonial-area section-bg-1--- bg-image-top pt-115 pb-70" data-bs-bg="img/bg/20.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonial</h6>
                    <h1 class="section-title">Clients Feedback</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__testimonial-slider-5-active slick-arrow-1">
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{asset('frontend/img/testimonial/1.jpg')}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Jacob William</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{asset('frontend/img/testimonial/2.jpg')}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Kelian Anderson</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{asset('frontend/img/testimonial/3.jpg')}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Adam Joseph</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{asset('frontend/img/testimonial/4.jpg')}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>James Carter</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

<!-- BRAND LOGO AREA START -->
<div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-290 pb-110 plr--9 d-none">
    <div class="container-fluid">
        <div class="row ltn__brand-logo-active">
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset('frontend/img/brand-logo/1.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset('frontend/img/brand-logo/2.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset('frontend/img/brand-logo/3.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset('frontend/img/brand-logo/4.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset('frontend/img/brand-logo/5.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset('frontend/img/brand-logo/3.png')}}" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BRAND LOGO AREA END -->

<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area pt-115--- pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h6>
                    <h1 class="section-title">Leatest News Feeds</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('frontend/img/blog/1.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">10 Brilliant Ways To Decorate Your Home</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('frontend/img/blog/2.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Interior</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">The Most Inspiring Interior Design Of 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('frontend/img/blog/3.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Estate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Recent Commercial Real Estate Transactions</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('frontend/img/blog/4.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Room</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('frontend/img/blog/5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Trends</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">7 home trends that will shape your house in 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- BLOG AREA END -->

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

<!-- MODAL AREA START (Quick View Modal) -->
<div class="ltn__modal-area ltn__quick-view-modal-area">
    <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-img">
                                        <img src="{{asset('frontend/img/product/4.png')}}" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">3 Rooms Manhattan</a></h3>
                                        <div class="product-price">
                                            <span>$34,900</span>
                                            <del>$36,500</del>
                                        </div>
                                        <hr>
                                        <div class="modal-product-brief">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus repudiandae incidunt quidem pariatur expedita, quo quis modi tempore non.</p>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1 d-none">
                                            <ul>
                                                <li>
                                                    <strong>Categories:</strong>
                                                    <span>
                                                        <a href="#">Parts</a>
                                                        <a href="#">Car</a>
                                                        <a href="#">Seat</a>
                                                        <a href="#">Cover</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2 d-none">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                        <span>ADD TO CART</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- <hr> -->
                                        <div class="ltn__product-details-menu-3">
                                            <ul>
                                                <li>
                                                    <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                        <i class="fas fa-exchange-alt"></i>
                                                        <span>Compare</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li>Share:</li>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                                            </ul>
                                        </div>
                                        <label class="float-end mb-0"><a class="text-decoration" href="product-details.html"><small>View Details</small></a></label>
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
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Add To Cart Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="{{asset('frontend/img/product/1.png')}}" alt="#">
                                    </div>
                                    <div class="modal-product-info">
                                        <h5><a href="product-details.html">3 Rooms Manhattan</a></h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Cart</p>
                                        <div class="btn-wrapper">
                                            <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                            <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                        </div>
                                    </div>
                                    <!-- additional-info -->
                                    <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="{{asset('frontend/img/icons/payment.png')}}" alt="#">
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
</div>
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Wishlist Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="{{asset('frontend/img/product/7.png')}}" alt="#">
                                    </div>
                                    <div class="modal-product-info">
                                        <h5><a href="product-details.html">3 Rooms Manhattan</a></h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Wishlist</p>
                                        <div class="btn-wrapper">
                                            <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                        </div>
                                    </div>
                                    <!-- additional-info -->
                                    <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="{{asset('frontend/img/icons/payment.png')}}" alt="#">
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
</div>
<!-- MODAL AREA END -->
@endsection