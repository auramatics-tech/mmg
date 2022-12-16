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
    .error_msg{
        color: red;
    }

    .su_select_style:focus {
        border-color: var(--ltn__secondary-color);
        box-shadow: none !important;
    }
    .text_field:focus{
        border-color: var(--ltn__secondary-color);
    }
    .su_select_style {
        height: 65px;
        padding: 12px 5px;
        border: 2px solid;
        border-color: var(--border-color-9);
    }
    .su_phone_input{
        height: 65px;
        padding: 12px 5px;
        border: 2px solid;
        border-color: var(--border-color-9);
    }
    .su_phone_input:focus{
        border-color: var(--ltn__secondary-color) !important;
    }
    .su_mb_30{
        margin-bottom: 30px;
    }
</style>
@endsection
@section('content')
<div class="container">
    <!-- Multistep Form -->
    <div class="main">
        <form action="{{route('save_appraisal')}}" class="regform" method="Post">
           @csrf
            <fieldset id="first">
                <p>Hi, interested in taking the first step on your selling journey and arranging a FREE property appraisal?</P>
                <p>We just need a few details from you so we can organise for one our licensed real estate agents to view your property and deliver a detailed property report with an accurate value estimate.</P>
                <p>This is a completely FREE and obligation-free appraisal.</p><br>
                <h1 class="title">Let’s start with your full name</h1>
                <input class="text_field" name="name" placeholder="Type Your Full Name.." type="text">
                <span class="error_msg"></span><br>
           
                <h2 class="title">Great! What's the property address you are considering selling?*</h2>
                <textarea class="text_field" name="address" placeholder="Type Your Property Address" placeholder="Address"></textarea>
                <span class="error_msg"></span><br>
            
                <h2 class="title">Fantastic, now we just need your phone number to arrange a date & time to meet you.</h2>
                <input class="text_field form-control su_phone_input" name="phone_no" placeholder="Type Your Phone No.." type="number">
                <span class="error_msg"></span><br>
            
                <h2 class="title">Last but not least! Enter your email address.</h2>
                <input class="text_field form-control" name="email" placeholder="Type Your Email.." type="email">
                <span class="error_msg"></span><br>
                
                <button type="submit" class="theme-btn-1 btn btn-effect-1" id="submit_from_btn" style="display: none;">Submit</button>
           
                <h2 class="title">What was the last time you sold.</h2>
                <div class="w-100">
                    <select class="nice-select su_select_style w-100 su_mb_30">
                        <option>Choose Area</option>
                        <option>chicago</option>
                        <option>London</option>
                        <option>Los Angeles</option>
                        <option>New York</option>
                        <option>New Jersey</option>
                    </select>
                </div>
                <h2 class="title">What you think your property worth is.</h2>
                <div class="w-100">
                    <select class="nice-select su_select_style w-100 su_mb_30">
                        <option>Choose Area</option>
                        <option>chicago</option>
                        <option>London</option>
                        <option>Los Angeles</option>
                        <option>New York</option>
                        <option>New Jersey</option>
                    </select>
                </div>
                <h2 class="title">Select agent in MMG you are working with or want to work with.</h2>
                <div class="w-100">
                    <select class="nice-select su_select_style w-100 su_mb_30">
                        <option>Choose Area</option>
                        <option>chicago</option>
                        <option>London</option>
                        <option>Los Angeles</option>
                        <option>New York</option>
                        <option>New Jersey</option>
                    </select>
                </div>
                <h2 class="title">Enter the date you wish to be contacted.</h2>
                <input class="form-control form-control-solid su_select_style su_mb_30" id="" placeholder="" name="" type="date" value="" />
            
                <h2 class="title">Your prefered method for sale.</h2>
                <div class="row su_mb_30">
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Off Market
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Private Sale
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Expression of Interest
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Need Advice
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                </div>
                <h2 class="title">Where did you hear about MMg.</h2>
                <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Social media
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Website
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Past client
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Friends/family
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <label class="checkbox-item checkamenties">Neighbor of recent result
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                </div>
                <input class="last_next_btn next_btn" name="next" type="button" value="Submit">
        </form>
    </div>
</div>
@endsection
@section('script')

@endsection