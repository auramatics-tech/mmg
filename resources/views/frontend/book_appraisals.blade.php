@extends('frontend.layouts.master')
@section('css')
<style>
    #first {
        display: block;
    }

    /* .container {
        margin-bottom: 50px;
    } */

    input[type=submit],
    input[type=button] {
        width: 120px;
        margin: 25px 25px 15px 0px;
        padding: 5px;
        height: 40px;
        background-color: var(--ltn__secondary-color);
        border: none;
        border-radius: 4px;
        color: white;
        font-family: 'Droid Serif', serif;
    }

    .error_msg {
        color: red;
    }

    .su_select_style:focus {
        border-color: var(--ltn__secondary-color);
        box-shadow: none !important;
    }

    .text_field:focus {
        border-color: var(--ltn__secondary-color);
    }

    .su_select_style {
        height: 65px;
        padding: 12px 5px;
        border: 2px solid;
        border-color: var(--border-color-9);
    }

    .su_phone_input {
        height: 65px;
        padding: 12px 5px;
        border: 2px solid;
        border-color: var(--border-color-9);
    }

    .su_phone_input:focus {
        border-color: var(--ltn__secondary-color) !important;
    }

    .su_mb_30 {
        margin-bottom: 30px;
    }

    /* .su_scroll_y_axis{
        overflow-y: scroll;
        height: 250px;
    } */

    .nice-select.open .list {
        height: 250px;
        overflow-y: scroll;
    }
    .nice-select .list{
        height: 250px;
    }

</style>
@endsection
@section('content')
<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="main">
            <form action="{{route('save_appraisal')}}" class="regform" method="Post">
                    @csrf
                    <p>Hi, interested in taking the first step on your selling journey and arranging a FREE property appraisal?</P>
                    <p>We just need a few details from you so we can organise for one our licensed real estate agents to view your property and deliver a detailed property report with an accurate value estimate.</P>
                    <p>This is a completely FREE and obligation-free appraisal.</p><br>
                    <h1 class="title">Let’s start with your full name*</h1>
                    <input class="text_field su_mb_30" name="name" placeholder="Type Your Full Name.." type="text" value="">
                    <span class="error_msg"></span>
                    @error('name')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <h2 class="title">Great! What's the property address you are considering selling?*</h2>
                    <textarea class="text_field su_mb_30" name="address" placeholder="Type Your Property Address" placeholder="Address"></textarea>
                    <span class="error_msg"></span>
                    @error('address')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <h2 class="title">Fantastic, now we just need your phone number to arrange a date & time to meet you*.</h2>
                    <input class="text_field form-control su_phone_input su_mb_30" name="phone_no" placeholder="Type Your Phone No.." type="number">
                    <span class="error_msg"></span>
                    @error('phone_no')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <h2 class="title">Last but not least! Enter your email address*.</h2>
                    <input class="text_field form-control su_mb_30" name="email" placeholder="Type Your Email.." type="email">
                    <span class="error_msg"></span>
                    @error('email')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <h2 class="title">What was the last time you sold*.</h2>
                    <div class="w-100">
                        <select id="year" class="nice-select su_select_style w-100 su_mb_30 su_scroll_y_axis" name="year">
                            <option value="">Never</option>
                            {{ $year = date('Y') }}
                            @for ($year = 2022; $year >= 1950; $year--) <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                    @error('year')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <h2 class="title">What you think your property worth is*.</h2>
                    <div class="w-100">
                        <select class="nice-select su_select_style w-100 su_mb_30" name="property_worth">
                            <option value="0">Less then 1000000</option>
                            @for($property_worth = 1000000; $property_worth <= 7000000; $property_worth=$property_worth+ 1000000 ) <option value="{{$property_worth }}">@if($property_worth == 7000000){{$property_worth.'+' }}@else{{$property_worth }}@endif</option>
                                @endfor
                        </select>
                    </div>
                    @error('property_worth')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <h2 class="title">Select agent in MMG you are working with or want to work with.</h2>
                    <div class="w-100">
                        <select class="nice-select su_select_style w-100 su_mb_30" name="agent">
                        <option value="no_agent">No Agenet</option>
                            @if(count($croud_sellers))
                            @foreach($croud_sellers as $croud_seller)
                            <option value="{{$croud_seller->user_data}}">{{$croud_seller->user_data}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <h2 class="title">Enter the date you wish to be contacted*.</h2>
                    <input class="form-control form-control-solid su_select_style su_mb_30" id="" placeholder="" name="date" type="date" value="" />
                    @error('date')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <h2 class="title">Your prefered method for sale*.</h2>
                    <div class="row su_mb_30">
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Off Market
                                <input type="checkbox" name="prefered_method[]" value="off_market">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Private Sale
                                <input type="checkbox" name="prefered_method[]" value="private_sale">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Expression of Interest
                                <input type="checkbox" name="prefered_method[]" value="expression_of_Interest">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Need Advice
                                <input type="checkbox" name="prefered_method[]" value="need_advice">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    @error('prefered_method')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <h2 class="title">Where did you hear about MMg.</h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Social media
                                <input type="checkbox" name="hear_about[]" value="social_media">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Website
                                <input type="checkbox" name="hear_about[]" value="website">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Past client
                                <input type="checkbox" name="hear_about[]" value="past_client">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Friends/family
                                <input type="checkbox" name="hear_about[]" value="friends_family">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Neighbor of recent result
                                <input type="checkbox" name="hear_about[]" value="neighbor_of_recent_result">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <input class="last_next_btn next_btn" type="Submit">
            </form>
    </div>
</div>
@endsection
@section('script')
@endsection