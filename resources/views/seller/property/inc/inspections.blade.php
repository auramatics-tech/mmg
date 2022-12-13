<div class="w-100">
    <form action="{{route('seller.save_inspections')}}" method="POST" onsubmit="setFormSubmitting()">
        @csrf

        <input type="hidden" name="property_id" value="{{$property_id}}">
        <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#inspection_time" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">
            NEW INSPECTION TIME
            <span class="ms-2 rotate-180">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                    </svg>
                </span>
            </span>
        </div>
        <div id="inspection" class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Inspection Day</label>
            @php
            if(isset($inspection->inspection_day)){
                $inspection_day = json_decode($inspection->inspection_day,true);
            }else{
                $inspection_day = array();
            }
            @endphp
            <select class="form-select form-select-solid " data-control="select2" data-hide-search="true"  name="inspection_day[]" multiple>
                <option @if(isset($inspection->inspection_day) && in_array('Sunday',$inspection_day)) selected @endif value="Sunday">Sunday</option>
                <option @if(isset($inspection->inspection_day) && in_array('Monday',$inspection_day))selected @endif value="Monday">Monday</option>
                <option @if(isset($inspection->inspection_day) && in_array('Tuesday',$inspection_day)) selected @endif value="Tuesday">Tuesday</option>
                <option @if(isset($inspection->inspection_day) && in_array('Wednesday',$inspection_day)) selected @endif value="Wednesday">Wednesday</option>
                <option @if(isset($inspection->inspection_day) && in_array('Thursday',$inspection_day)) selected @endif value="Thursday">Thursday</option>
                <option @if(isset($inspection->inspection_day) && in_array('Friday',$inspection_day)) selected @endif value="Friday">Friday</option>
                <option @if(isset($inspection->inspection_day) && in_array('Saturday',$inspection_day)) selected @endif value="Saturday">Saturday</option>
            </select>
            {{--<div id="" class="d-flex flex-column mb-7 fv-row">
                <label class="required fs-6 fw-bold mb-2">Date</label>
                <select class="nice-select Form-control col-md-6" name="inspections_date_time" id="inspections_date_time">
                <option @if(isset($inspection->inspections_date_time) &&  $inspection->inspections_date_time == 'mid_week1st') selected @endif value="mid_week1st">Mid Week 1st</option>
                <option @if(isset($inspection->inspections_date_time) &&  $inspection->inspections_date_time == 'weekend_1st') selected @endif value="weekend_1st">Weekend 1st</option>
                <option @if(isset($inspection->inspections_date_time) && $inspection->inspections_date_time == 'mid_week2nd') selected @endif value="mid_week2nd">Mid week 2nd</option>
                <option  @if(isset($inspection->inspections_date_time) && $inspection->inspections_date_time == 'weekend_2nd') selected @endif value="weekend_2nd">Weekend 2nd</option>
                <option  @if(isset($inspection->inspections_date_time) && $inspection->inspections_date_time == 'mid_week3rd') selected @endif value="mid_week3rd">Mid week 3rd</option>
                <option  @if(isset($inspection->inspections_date_time) && $inspection->inspections_date_time == 'weekend_3rd') selected @endif value="weekend_3rd">Weekend 3rd</option>
                <option  @if(isset($inspection->inspections_date_time) && $inspection->inspections_date_time == 'mid_week4th') selected @endif value="mid_week4th">Mid week 4th</option>
                <option  @if(isset($inspection->inspections_date_time) && $inspection->inspections_date_time == 'weekend_4th') selected @endif value="weekend_4th">Weekend 4th</option>
            </select>
            <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Date</label>
            <input type="date" class="form-control form-control-solid" placeholder="" name="inspection_date" value="{{old('inspection_date') ?? isset($inspection->inspection_date)?$inspection->inspection_date:''}}"/>
           </div>--}}
        </div>
        <div class="row g-9 mb-8">
            <div class="col-md-6 fv-row fv-plugins-icon-container">
                <label class="required fs-6 fw-bold mb-2">Start Time</label>
                <input type="text" id="timepicker" name="start_time" value="{{old('start_time') ?? isset($inspection->start_time)?$inspection->start_time:''}}">
                <!-- <input type="time" class="form-control form-control-solid" placeholder="" name="start_time" value="{{old('start_time') ?? isset($inspection->start_time)?$inspection->start_time:''}}" /> -->
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="col-md-6 fv-row fv-plugins-icon-container">
                <label class="required fs-6 fw-bold mb-2">End Time</label>
                <input type="text" id="timepicker2" name="end_time" value="{{old('end_time') ?? isset($inspection->end_time)?$inspection->end_time:''}}">
                <!-- <input type="time" class="form-control form-control-solid" placeholder="" name="end_time" value="{{old('end_time') ?? isset($inspection->end_time)?$inspection->end_time:''}}" /> -->
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        {{--<div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Inspection Type</label>
            <select class="form-control form-control-solid" name="inspection_type" id="inspection_inspection_type">
        <option {{((old('inspection_type') ?? isset($inspection->inspection_type)?$inspection->inspection_type:'')=='Open')?'selected':'' }} value="Open">Open</option>
        <option {{((old('inspection_type') ?? isset($inspection->inspection_type)?$inspection->inspection_type:'')=='Open')?'selected':'' }} value="Registration Required">Registration Required</option>
        <option {{((old('inspection_type') ?? isset($inspection->inspection_type)?$inspection->inspection_type:'')=='Open')?'selected':'' }} value="Private">Private</option>
        </select>
       </div>--}}

<br>
<button class="btn btn-primary">Save</button>
</form>
</div>