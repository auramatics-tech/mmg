@extends('backend_layouts.master')
@section('content')
<style>
    .content {
        width: 960px;
        margin: 20px auto;
    }

    .main {
        float: left;
        width: 650px;
        margin-top: 80px;
    }

    #progressbar {
        margin: 0;
        padding: 0;
        font-size: 18px;
    }

    .active {
        color: red;
    }

    fieldset {
        display: none;
        width: 350px;
        padding: 20px;
        margin-top: 50px;
        margin-left: 85px;
        border-radius: 5px;
        box-shadow: 3px 3px 25px 1px gray;
    }

    #first {
        display: block;
        width: 350px;
        padding: 20px;
        margin-top: 50px;
        border-radius: 5px;
        margin-left: 85px;
        box-shadow: 3px 3px 25px 1px gray;
    }

    input[type=text],
    input[type=password],
    select {
        width: 100%;
        margin: 10px 0;
        height: 40px;
        padding: 5px;
        border: 3px solid rgb(236, 176, 220);
        border-radius: 4px;
    }

    textarea {
        width: 100%;
        margin: 10px 0;
        height: 70px;
        padding: 5px;
        border: 3px solid rgb(236, 176, 220);
        border-radius: 4px;
    }

    input[type=submit],
    input[type=button] {
        width: 120px;
        margin: 15px 25px;
        padding: 5px;
        height: 40px;
        background-color: sienna;
        border: none;
        border-radius: 4px;
        color: white;
        font-family: 'Droid Serif', serif;
    }

    h2,
    p {
        text-align: center;
        font-family: 'Droid Serif', serif;
    }

    li {
        margin-right: 52px;
        display: inline;
        color: #c1c5cc;
        font-family: 'Droid Serif', serif;
    }
</style>

<!DOCTYPE html>
<html>

<head>
    <title>Multistep Registration Form- Demo Preview</title>
    <meta content="noindex, nofollow" name="robots">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="multi_step_form.js"></script>
</head>

<body>
    <div class="content">
        <!-- Multistep Form -->
        <div class="main">
            <form action="" class="regform" method="get">
                <!-- Progress Bar -->
                <ul id="progressbar">
                    <li class="active">Create Account</li>
                    <li>Educational Profiles</li>
                    <li>Personal Details</li>
                </ul>
                <!-- Fieldsets -->
                <fieldset id="first">
                    <h2 class="title">Create your account</h2>
                    <p class="subtitle">Step 1</p>
                    <input class="text_field" name="email" placeholder="Email" type="text">
                    <input class="text_field" name="pass" placeholder="Password" type="password">
                    <input class="text_field" name="cpass" placeholder="Confirm Password" type="password">
                    <input class="next_btn" name="next" type="button" value="Next">
                </fieldset>
                <fieldset>
                    <h2 class="title">Educational Profiles</h2>
                    <p class="subtitle">Step 2</p>
                    <select class="options">
                        <option>--Select Education--</option>
                        <option>Post Graduate</option>
                        <option>Graduate</option>
                        <option>HSC</option>
                        <option>SSC</option>
                    </select>
                    <input class="text_field" name="marks" placeholder="Marks Obtained" type="text">
                    <input class="text_field" name="pyear" placeholder="Passing Year" type="text">
                    <input class="text_field" name="univ" placeholder="University" type="text">
                    <input class="pre_btn" name="previous" type="button" value="Previous">
                    <input class="next_btn" name="next" type="button" value="Next">
                </fieldset>
                <fieldset>
                    <h2 class="title">Personal Details</h2>
                    <p class="subtitle">Step 3</p>
                    <input class="text_field" name="fname" placeholder="First Name" type="text">
                    <input class="text_field" name="lname" placeholder="Last Name" type="text">
                    <input class="text_field" name="cont" placeholder="Contact" type="text">
                    <label>Gender</label>
                    <input class="rad" name="gender" type="radio">Male
                    <input class="rad" name="gender" type="radio">Female
                    <textarea name="address" placeholder="Address"></textarea>
                    <input class="pre_btn" type="button" value="Previous">
                    <input class="submit_btn" type="submit" value="Submit">
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>

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
</script>
@endsection