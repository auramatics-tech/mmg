<div class="w-100">
    <form action="{{route('seller.save_inspections')}}" method="POST">
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
    <div id="inspection_time" class="collapse show">
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Date</label>
            <input type="date" class="form-control form-control-solid" placeholder="" name="inspection_date" value="{{old('inspection_date') ?? isset($inspection->inspection_date)?$inspection->inspection_date:''}}"/>
        </div>
        
        <div class="row g-9 mb-8">

            <div class="col-md-6 fv-row fv-plugins-icon-container">
                <label class="required fs-6 fw-bold mb-2">Start Time</label>
                <input type="time" class="form-control form-control-solid" placeholder="" name="start_time" value="{{old('start_time') ?? isset($inspection->start_time)?$inspection->start_time:''}}"/>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="col-md-6 fv-row fv-plugins-icon-container">
                <label class="required fs-6 fw-bold mb-2">End Time</label>
                <input type="time" class="form-control form-control-solid" placeholder="" name="end_time" value="{{old('end_time') ?? isset($inspection->end_time)?$inspection->end_time:''}}"/>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Inspection Type</label>
            <select class="form-control form-control-solid" name="inspection_type" id="inspection_inspection_type">
                <option {{((old('inspection_type') ?? isset($inspection->inspection_type)?$inspection->inspection_type:'')=='Open')?'selected':'' }} value="Open">Open</option>
                <option {{((old('inspection_type') ?? isset($inspection->inspection_type)?$inspection->inspection_type:'')=='Open')?'selected':'' }} value="Registration Required">Registration Required</option>
                <option {{((old('inspection_type') ?? isset($inspection->inspection_type)?$inspection->inspection_type:'')=='Open')?'selected':'' }} value="Private">Private</option>
            </select>
        </div>
    </div>
    <br>
    <button class="btn btn-primary">Save</button>
    </form>
</div>