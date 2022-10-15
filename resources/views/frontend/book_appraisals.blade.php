@extends('frontend.layouts.master')
@section('css')
<style>
    fieldset {
        display: none;
    }

    #first {
        display: block;
    }

    .container {
        margin-bottom: 50px;
    }

    input[type=submit],
    input[type=button] {
        width: 120px;
        margin: 15px 25px;
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
                <input class="next_btn" name="next" type="button" value="Next">
            </fieldset>
            <fieldset>
                <h2 class="title">Great! What's the property address you are considering selling?*</h2>
                <textarea class="text_field" name="address" placeholder="Type Your Property Address" placeholder="Address"></textarea>
                <span class="error_msg"></span><br>
                <input class="next_btn" name="next" type="button" value="Next">
            </fieldset>
            <fieldset>
                <h2 class="title">Fantastic, now we just need your phone number to arrange a date & time to meet you.</h2>
                <input class="text_field form-control" name="phone_no" placeholder="Type Your Phone No.." type="number">
                <span class="error_msg"></span><br>
                <input class="next_btn" name="next" type="button" value="Next">
            </fieldset>
            <fieldset>
                <h2 class="title">Last but not least! Do you have an email address? If not, just leave it blank.</h2>
                <input class="text_field form-control" name="email" placeholder="Type Your Email.." type="email">
                <span class="error_msg"></span><br>
                <input class="last_next_btn next_btn" name="next" type="button" value="Next">
                <button type="submit" class="theme-btn-1 btn btn-effect-1" id="submit_from_btn" style="display: none;">Submit</button>
            </fieldset>
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        var count = 0; // To Count Blank Fields
        /*------------ Validation Function-----------------*/
        $(".submit_btn").click(function(event) {
            var radio_check = $('.rad'); // Fetching Radio Button By Class Name
            var input_field = $('.text_field'); // Fetching All Inputs With Same Class Name text_field & An HTML Tag textarea
            var text_area = $('textarea');
            // Validating Radio Button
            if (radio_check[0].checked == false && radio_check[1].checked == false) {
                var y = 0;
            } else {
                var y = 1;
            }
            // For Loop To Count Blank Inputs
            for (var i = input_field.length; i > count; i--) {
                if (input_field[i - 1].value == '' || text_area.value == '') {
                    count = count + 1;
                } else {
                    count = 0;
                }
            }
            // Notifying Validation
            if (count != 0 || y == 0) {
                alert("*All Fields are mandatory*");
                event.preventDefault();
            } else {
                return true;
            }
        });
        /*---------------------------------------------------------*/
        $(".next_btn").click(function() { // Function Runs On NEXT Button Click
            // console.log($(this).closest('fieldset').find(".text_field").val())
            $(".error_msg").html('');
            if($(this).parent().find(".text_field").val() == ''){
                $(this).parent().find(".error_msg").html('This field is required')
                return false;
            }else{
                $(this).parent().find(".error_msg").html('');
            }
            $(this).parent().next().fadeIn('slow');
            $(this).parent().css({
                'display': 'none'
            });
            // Adding Class Active To Show Steps Forward;
            $('.active').next().addClass('active');
        });
        $(".pre_btn").click(function() { // Function Runs On PREVIOUS Button Click
            $(this).parent().prev().fadeIn('slow');
            $(this).parent().css({
                'display': 'none'
            });
            // Removing Class Active To Show Steps Backward;
            $('.active:last').removeClass('active');
        });
        // Validating All Input And Textarea Fields
        $(".submit_btn").click(function(e) {
            if ($('input').val() == "" || $('textarea').val() == "") {
                alert("*All Fields are mandatory*");
                return false;
            } else {
                return true;
            }
        });
    });
    $(document).on('click','.last_next_btn',function(){
        $('.next_btn').hide();
        $('.last_next_btn').hide();
        $('fieldset').show();
        $('#submit_from_btn').show();
    })
</script>
@endsection