@extends('frontend.layouts.master')
@section('css')
<style>
    .si_place_bid img {
        border: none;
        border-radius: 50%;
        max-width: 50px;
        margin-right: 15px;
    }

    .si_margin {
        margin-left: 10px;
    }

    .si_bg_h4 a h4 {
        background: black;
        color: white;
        padding: 14px 30px;
        border-radius: 6.5rem;
    }

    .si_custom_bid input {
        font-weight: bold;
        color: var(--ltn__secondary-color);
        font-size: 30px;
        text-align: center;
        border-color: var(--ltn__secondary-color);
        line-height: 26px;
    }

    .si_select {
        width: 100%;
        padding: 6px 20px;
        height: 50px;
    }

    .si_select_input input {
        width: 100%;
        padding: 6px 20px;
        border: 1px solid #e8e8e8 !important;
        border-radius: 4px;
    }

    .si_btn_bid {
        padding: 12px 35px;
        font-size: 20px !important;
        font-weight: 700 !important;
        background-color: var(--ltn__secondary-color);
        line-height: 26px;
        top: 0;
        color: #fff;
        position: relative;
        font-size: 15px;
        font-weight: 600;
        display: inline-block;
        transition: all .2s ease-in-out;
        cursor: pointer;
        margin-right: 6px;
        overflow: hidden;
        border: none;
        border-radius: 50px;
    }

    .si_current_bids {
        box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
        border-radius: 25px;
        background-color: #F9F9F9;
    }

    .si_crowd input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="submit"],
    textarea {
        border: none;
        height: 50px !important;
    }





    .listing-item-container.compact.order-summary-widget .listing-item {
        border-radius: 4px 4px 0 0;
        cursor: default;
        height: 240px;
    }

    .listing-item {
        overflow: hidden;
    }

    .listing-item {
        background: #ccc;
        border-radius: 4px 4px 0 0;
        height: 100%;
        display: block;
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50%;
        height: 265px;
        z-index: 100;
        cursor: pointer;
    }

    .listing-item:before {
        content: "";
        top: 0;
        position: absolute;
        height: 100%;
        width: 100%;
        z-index: 9;
        background: linear-gradient(to top, rgba(35, 35, 37, 0.9) 0%, rgba(35, 35, 37, 0.45) 35%, rgba(22, 22, 23, 0) 60%, rgba(0, 0, 0, 0) 100%);
        background-color: rgba(35, 35, 37, .2);
        border-radius: 4px 4px 0 0;
        opacity: 1;
    }

    .listing-item img {
        object-fit: cover;
        height: 100%;
        width: 100%;
        border-radius: 4px 4px 0 0;
    }

    .listing-item-content {
        position: absolute;
        bottom: 28px;
        left: 0;
        padding: 0 32px;
        padding-right: 90px;
        width: 100%;
        z-index: 50;
        box-sizing: border-box;
    }

    .listing-item-content span {
        font-size: 16px;
        font-weight: 300;
        display: inline-block;
        color: rgba(255, 255, 255, .7);
    }

    .boxed-widget {
        background-color: #f9f9f9;
        /* border-radius: 3px; */
        padding: 32px;
        transform: translate3d(0, 0, 0);
        z-index: 90;
        position: relative;
    }

    .boxed-widget {
        background-color: #f9f9f9;
        border-radius: 3px;
        padding: 32px;
        transform: translate3d(0, 0, 0);
        z-index: 90;
        position: relative;
    }

    .boxed-widget h3 i {
        margin-right: 4px;
    }

    .boxed-widget h3 {
        font-size: 20px;
        padding: 0 0 25px;
        margin: 0 0 25px;
        display: block;
        border-bottom: 1px solid #e8e8e8;
    }

    .opening-hours ul {
        list-style: none;
        padding: 0;
        margin: 0;
        font-size: 14px;
    }

    .opening-hours.summary li {
        color: #333;
    }

    .opening-hours ul li {
        width: 100%;
        font-weight: 600;
        color: #888;
        margin: 2px 0;
        transition: .2s;
        cursor: default;
    }

    .opening-hours ul li span {
        float: right;
        font-weight: 400;
    }

    a.button {
        font-size: 20px !important;
        background-color: var(--ltn__secondary-color);
        color: #fff;
        padding: 5px 20px;
        border-radius: 6.5rem;
        top: 0;
        color: #fff;
        position: relative;
        font-size: 16px;
        font-weight: 700;
        display: inline-block;
        transition: all .2s ease-in-out;
        cursor: pointer;
        margin-right: 6px;
        overflow: hidden;
        border: none;
        border-radius: 50px;
    }
</style>
@endsection
@section('content')
<section class="container py-5">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="si_place_bid d-flex pb-3">
                <img src="{{asset('frontend/img/blog/bid-logo-1.png')}}" alt="">
                <h5 class="text-dark mt-3">Place Bid</h5>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{ Session::get('success') }}
            </div>
            @endif
            <form action="{{route('buyer.save_offer')}}" method="post">
                <p><b>Quick Bid</b></p>
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="reference_id" value="{{request()->get('reference_id')}}">
                <input type="hidden" name="property_id" value="{{isset(request()->property_id) ? request()->property_id :''}}">
                <div class="d-flex justify-content-between si_bg_h4" bis_skin_checked="1">
                    <a href="javascript:" data-amount="5000" class="highlighted-category add_price_bid">
                        <h4>+$5,000</h4>
                    </a>

                    <a href="javascript:" data-amount="10000" class="highlighted-category add_price_bid">
                        <h4>+$10,000</h4>
                    </a>

                    <a href="javascript:" data-amount="15000" class="highlighted-category add_price_bid">
                        <h4>+$15,000</h4>
                    </a>

                    <a href="javascript:" data-amount="20000" class="highlighted-category add_price_bid">
                        <h4>+$20,000</h4>
                    </a>

                    <a href="javascript:" class="highlighted-category Clear_bid_price">
                        <h4>Clear</h4>
                    </a>
                </div>
                @if(count($property_summary))
                @foreach($property_summary as $bid_placeholder)
                <div class="si_custom_bid pt-2">
                    <label class="mb-2"><b> Enter Your Custom Bid $</b></label>
                    <input type="number" name="offer_price" id="offer_price_input" value="${{isset($bid_placeholder->desired_price)?$bid_placeholder->desired_price:old('offer_price')}}" class="valid" aria-invalid="false">
                </div>
                @endforeach
                @endif
                {{-- <div>
                    <label for="conditions" class="mb-2"><b>Conditions</b></label><br>
                    <select name="conditions" id="conditions1" class="si_select">
                        <option value="Unconditional">Unconditional</option>
                        <option value="Subject to finance">Subject to finance</option>
                        <option value="Subject to building/pest inspection">Subject to building/pest inspection</option>
                    </select>
                </div>
                --}}
                {{-- <div class="row pt-4">
                   <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="settlement" class="mb-2"><b>Settlement</b></label><br>
                        <select name="settlement" id="settlement1" class="si_select">
                            <option value="60"><b>60 Days</b></option>
                            <option value="120"><b>120 Days</b></option>
                            <option value="90"><b>90 Days (Recommended)</b></option>
                            <option value="30"><b>30 Days</b></option>
                        </select>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 si_crowd si_select_input">
                        <label for="settlement" class="mb-2"><b>Crowd Seller Code (If Applicable)</b></label><br>
                        <input type="text" name="" id="">
                    </div> 
                </div>--}}
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="required fs-6 fw-bold mb-2">Note</label>
                    <textarea name="note" class="form-control form-control-solid" id="" cols="30" rows="5">{{old('note') ?? isset($property_offer->note)?$property_offer->note:''}}</textarea>
                </div>
                <button type="submit" class="button si_btn_bid mt-2 mb-5" id="submitButton"><i class="fa fa-hand-paper" aria-hidden="true"></i> My Offer</button>
            </form>
            <div class="mb-5">
                <div class="p-5 si_current_bids" bis_skin_checked="1">
                    <h5 class="mb-0"><i class="fa fa-hand-paper me-2" aria-hidden="true"></i> @if($bid_count > 0) {{$bid_count}} Bid @else No Current Bids @endif</h5>
                </div>
            </div>
        </div>
        @if(count($property_summary))
        @foreach($property_summary as $property_bid_summary)
        <div class="col-lg-4 col-md-4 col-12">
            <div class="listing-item" bis_skin_checked="1">
                <img src="{{isset($property_bid_summary->get_property_image)?asset('storage/property_images/'.$property_bid_summary->get_property_image->document):''}}" alt="">
                <div class="listing-item-content" bis_skin_checked="1">
                    <span>{{isset($property_bid_summary->address)?$property_bid_summary->address:''}}</span>
                </div>
            </div>
            <div class="boxed-widget opening-hours summary margin-top-0" bis_skin_checked="1">
                <h3><i class="fa fa-home" style="font-size:23px"></i> Property Summary</h3>
                <ul>
                    <li><b>PROPERTY TYPE</b> <span>{{isset($property_bid_summary->property_type)?$property_bid_summary->property_type:''}}</span></li>
                    <li><b>PRICE</b> <span>${{isset($property_bid_summary->desired_price)?$property_bid_summary->desired_price:''}} - ${{isset($property_bid_summary->normal_price)?$property_bid_summary->normal_price:''}}</span></li>
                    <li><b>BEDROOMS</b> <span>{{isset($property_bid_summary->property_details)?$property_bid_summary->property_details->bedrooms:''}}</span></li>
                    <li><b>BATHROOMS</b> <span>{{isset($property_bid_summary->property_details)?$property_bid_summary->property_details->bathrooms:''}} </span></li>
                    <li><b>LAND SIZE</b> <span>{{isset($property_bid_summary->property_details)?$property_bid_summary->property_details->land_size:''}}&nbsp;{{isset($property_bid_summary->property_details)?$property_bid_summary->property_details->land_size_units:''}}</span></li>
                    <li style="text-align:center" class="pb-5 pt-5"><a href="{{route('property_details',$property_bid_summary->id)}}" class="button"><i class="fa fa-arrow-circle-left"></i> Back</a></li>
                </ul>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(document).on('click', '.add_price_bid', function() {
        var price = parseFloat($(this).attr('data-amount'));
        if ($('#offer_price_input').val() == '') {
            var total_price = 0;
        } else {
            var total_price = parseFloat($('#offer_price_input').val());
        }

        $('#offer_price_input').val(price + total_price)
    })
    $(document).on('click', '.Clear_bid_price', function() {
        $('#offer_price_input').val('')
    })
</script>

@endsection