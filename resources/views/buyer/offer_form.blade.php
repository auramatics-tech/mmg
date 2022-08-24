@extends('backend_layouts.master')
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Property offer</h1>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body">
                    <div class="w-100">
                        <form action="{{route('buyer.save_offer')}}" method="POST">
                            <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#inspection_time" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">
                                Offer
                                <span class="ms-2 rotate-180">

                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>

                                </span>
                            </div>
                            <div id="inspection_time" class="collapse show">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                <input type="hidden" name="reference_id" value="{{request()->get('reference_id')}}">
                                @if($property_id)
                                <input type="hidden" name="property_id" value="{{$property_id}}">
                                @else
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Property</label>
                                    <select name="property_id" data-control="select2" data-placeholder="Select a Property" required data-hide-search="true" class="form-select form-select-solid fw-bolder check_offer">
                                        <option value=""></option>
                                        @foreach($properties as $property)
                                            <option value="{{$property->id}}">{{$property->address}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Price</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="" name="offer_price" value="{{old('offer_price') ?? isset($property_offer->offer_price)?$property_offer->offer_price:''}}" />
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Note</label>
                                    <textarea name="note" class="form-control form-control-solid" id="" cols="30" rows="5">{{old('note') ?? isset($property_offer->note)?$property_offer->note:''}}</textarea>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection