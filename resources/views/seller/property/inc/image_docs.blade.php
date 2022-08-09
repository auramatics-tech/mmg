<div class="w-100">
    <form action="{{route('save_property_images')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="property_id" value="{{$property_id}}">
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#change_status" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">UPLOAD IMAGES
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="upload_images" class="collapse show">
        <input type="file" name="upload_images[]" multiple>
    </div>
    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#upload_floorplans" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">
            UPLOAD FLOORPLANS
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="upload_floorplans" class="collapse show">
        <input type="file" name="upload_floorplans[]" multiple>
    </div>
    
    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#upload_documents" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">
        UPLOAD DOCUMENTS
        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="upload_documents" class="collapse show">
        <input type="file" name="upload_documents[]" multiple>
    </div>
    
    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#listing_copy" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">
        Listing Copy

        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="listing_copy" class="collapse show">
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Headline</label>
            <input class="form-control form-control-solid" placeholder="" name="headline" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Description</label>
            <textarea name="description" class="form-control form-control-solid" cols="30" rows="5"></textarea>
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Small Description For Stocklists</label>
            <textarea name="brochure_small_description" class="form-control form-control-solid" cols="30" rows="5"></textarea>
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Description For Brochures</label>
            <textarea name="brochure_large_description" class="form-control form-control-solid" cols="30" rows="5"></textarea>
        </div>
    </div>
    
    <br>
    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#links" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">
        Links

        <span class="ms-2 rotate-180">

            <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
            </span>

        </span>
    </div>
    <div id="links" class="collapse show">
    
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Video URL</label>
            <input class="form-control form-control-solid" placeholder="" name="video_url" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Online Tour 1</label>
            <input class="form-control form-control-solid" placeholder="" name="online_tour_1_url" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Online Tour 2</label>
            <input class="form-control form-control-solid" placeholder="" name="online_tour_2_url" />
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="required fs-6 fw-bold mb-2">Third party website link</label>
            <input class="form-control form-control-solid" placeholder="" name="email_more_info_url" />
        </div>
    </div>
    <button class="btn btn-primary">Save</button>
    </form>
</div>