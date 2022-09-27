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
            <form action="" method="">
            <script type="12066b611d5146334392687f-text/javascript">
				
				
				

															
                currentBid = Number("1850000");
    
                originalBid = Number("1850000");	
            

                
                    function numberWithCommas(x) {
return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


            function addAmount(amount){
            
            console.log("currentbid:"+currentBid);	
            currentBid = currentBid + Number(amount);
                
            document.getElementById("buynow").value = "$"+numberWithCommas(currentBid);
            document.getElementById("buynow2").value = currentBid;	
            }
            
            function clear(){
            
                currentBid = Number('1850000');
                document.getElementById("buynow").value = "";
                document.getElementById("buynow2").value = "";
                
            }
            
            
            function duplicateVal(){
                
                valofinput = document.getElementById("buynow").value;
                valofinput2 = valofinput.replace("$", "");
                valofinput3 = valofinput2.replace(/,/g, "");
                
                
            console.log("bidEntered:"+valofinput3);		
                
            
            document.getElementById("buynow2").value = valofinput3;
            
            }
            
            
        </script>
                <p><b>Quick Bid</b></p>
                <div class="d-flex justify-content-between si_bg_h4" bis_skin_checked="1">
                    <a href="javascript:addAmount('5000')" class="highlighted-category">
                        <h4>+$5,000</h4>
                    </a>

                    <a href="javascript:addAmount('10000')" class="highlighted-category">
                        <h4>+$10,000</h4>
                    </a>

                    <a href="javascript:addAmount('20000')" class="highlighted-category">
                        <h4>+$20,000</h4>
                    </a>

                    <a href="javascript:addAmount('30000')" class="highlighted-category">
                        <h4>+$30,000</h4>
                    </a>

                    <a href="javascript:clear()" class="highlighted-category">
                        <h4>Clear</h4>
                    </a>
                </div>
                <div class="si_custom_bid pt-2">
                    <label class="mb-2"><b>or Enter your custom bid $$</b></label>
                    <input type="text" name="" id="" required="1" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" onkeyup="if (!window.__cfRLUnblockHandlers) return false; duplicateVal()" data-type="currency" placeholder="$1,850,000" class="valid" aria-invalid="false">
                </div>
                <div>
                    <label for="conditions" class="mb-2"><b>Conditions</b></label><br>
                    <select name="conditions" id="conditions1" class="si_select">
                        <option value="Unconditional">Unconditional</option>
                        <option value="Subject to finance">Subject to finance</option>
                        <option value="Subject to building/pest inspection">Subject to building/pest inspection</option>
                    </select>
                </div>
                <div class="row pt-4">
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
                </div>
                <button type="submit" class="button si_btn_bid mt-2 mb-5" id="submitButton"><i class="fa fa-hand-paper" aria-hidden="true"></i> Bid Now!</button>
            </form>
            <div class="mb-5">
                <div class="p-5 si_current_bids" bis_skin_checked="1">
                    <h5 class="mb-0"><i class="fa fa-hand-paper me-2" aria-hidden="true"></i> No Current Bids</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="listing-item" bis_skin_checked="1">
                <img src="{{asset('frontend/img/blog/bid_img.jpg')}}" alt="">
                <div class="listing-item-content" bis_skin_checked="1">
                    <span>31 Hughes Cct<br>BUNDOORA</span>
                </div>
            </div>
            <div class="boxed-widget opening-hours summary margin-top-0" bis_skin_checked="1">
                <h3><i class="fa fa-home" style="font-size:23px"></i> Property Summary</h3>
                <ul>
                    <li><b>Property Type</b> <span>House</span></li>
                    <li><b>Price</b> <span>$1,850,000 - $2,000,000</span></li>
                    <li><b>Bedrooms</b> <span>4</span></li>
                    <li><b>Bathrooms</b> <span>4</span></li>
                    <li><b>Car Spaces</b> <span></span></li>
                    <li><b>Land Size</b> <span>658&nbsp;m<sup>2</sup> &nbsp;(Approx)</span></li>
                    <li style="text-align:center" class="pb-5 pt-5"><a href="details.asp?i=102050" class="button"><i class="fa fa-arrow-circle-left"></i> Back</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script type="12066b611d5146334392687f-text/javascript">
	
		 
		   var uniqueString3 = getById('avatarBook');

			var iSVGInspection = multiavatar('e5e8e6bcd9498ba619b7');
	     uniqueString3.innerHTML = iSVGInspection;
		 
		 
		 
		
		
		
$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});





function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
	
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}

	

$().ready(function() {
		// validate signup form on keyup and submit
		$("#form1").validate({
			rules: {
				buynow: {
					required: true,
					
					
				},
				buynow2: {
					required: true,
					number: true,
					min: 500
				},
				
			},
			messages: {
				
				buynow: "You must bid higher then the minimum or highest bid - $1850000",
				
			
			},
			submitHandler: function(form) {
				
    			event.preventDefault();
    

    			swal({
        		title: "Are you sure?",
        		text: "By clicking 'OK' you will place your bid and place a fully refundable $100 holding deposit.",
        		type: "success",
        		showCancelButton: true
    			},
	
			
	    function(){
				$('body').append('<div style="" id="loadingDiv"><div class="loader"><img src="images/spinner.svg" style="width:100px"/></div></div>');
				$("html").css("overflow","hidden");
				$("html").css("height","100%");
				$("body").css("overflow","hidden");
				$("body").css("height","100%");
				form.submit();
				
	
				
			
				
			    });
			}
		});

		
		
	});
	
	
	
	
	
</script>
@endsection