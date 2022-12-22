@extends('backend_layouts.master')
@section('css')
<style>
	.w-180px {
		width: 180px !important;
	}
</style>
@endsection
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Bid Through Croud Seller Link </h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->

			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Filter menu-->

				<!--end::Filter menu-->
				<!--begin::Secondary button-->
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<!--end::Primary button-->
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<div class="card">
				<div class="card-header border-0">
				<form action="" method="get" id="search_form">
					<div class="card-title">
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->

							<span class="svg-icon svg-icon-1 position-absolute ms-6">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<input type="text" name="q" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Croud Seller Name" value="{{isset(request()->q) ? request()->q : ''}}" />

						</div>
						<!--end::Search-->
					</div>
					</form>
					<div class="card-title">
					</div>
					<div class="card-toolbar">
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							<div class="modal fade" id="img_upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Slider Image</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
							<div class="fw-bolder me-5">
								<span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
							</div>
							<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
						</div>
						<div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered mw-650px">
								<div class="modal-content">
									<div class="modal-header">
										<h2 class="fw-bolder">Export Users</h2>
										<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
													<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
												</svg>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered mw-650px">
								<div class="modal-content">
									<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body py-4">
					@if(session()->has('success'))
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
					@endif
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
						<thead>
							<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
								<th class="min-w-125px">Property</th>
								<th class="min-w-125px">Buyer Name</th>
								<th class="min-w-125px">Croud Seller Name</th>
								<th class="min-w-125px">Property Type</th>
								<th class="min-w-125px">Normol Price</th>
								<th class="min-w-125px">Bid Price</th>
								<th class="min-w-125px">Notes</th>
							</tr>
						</thead>
						<tbody class="text-gray-600 fw-bold">
							@foreach($bid_through_links as $bid_through_link)
							<!--begin::Table row-->
							<tr>
								<td class="d-flex align-items-center">
									<!--begin:: Avatar -->
									<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
										@if(isset($bid_through_link->property->get_property_image))
										<a href="{{route('property_details',$bid_through_link->property_id)}}">
											<div class="symbol-label">
												<img src="{{asset('storage/property_images/'.$bid_through_link->property->get_property_image->document)}}" alt="E" class="w-100" />
											</div>
										</a>
										@endif
									</div>
								</td>
								<td>{{isset($bid_through_link->user_data) ? $bid_through_link->user_data : ''}}</td>
								<td>{{isset($bid_through_link->croud_seller_name) ? $bid_through_link->croud_seller_name : ''}}</td>
								@if($bid_through_link->form_type == 'commercial')
								<td>{{isset($bid_through_link->commercial_listing_type)?str_replace('_',' ',$bid_through_link->commercial_listing_type):''}}</td>
								@else
								<td>{{isset($bid_through_link->form_type)? str_replace('_',' ', $bid_through_link->form_type):''}}</td>
								@endif
								<td>@if($bid_through_link->form_type == 'residential_sale' || $bid_through_link->commercial_listing_type == 'commercial_sale')
									{{isset($bid_through_link->normal_price)?$bid_through_link->normal_price:''}}
									@endif
									@if($bid_through_link->commercial_listing_type == 'commercial_lease')
									{{isset($bid_through_link->commercial_rental_per_annum)?$bid_through_link->commercial_rental_per_annum:''}} per/year
									@elseif($bid_through_link->form_type == 'residential_rental')
									{{isset($bid_through_link->rental_per_month)?$bid_through_link->rental_per_month:''}} per/month
									@endif
								</td>
								<td>{{isset($bid_through_link->offer_price) ? $bid_through_link->offer_price : ''}}</td>
								<td>{{isset($bid_through_link->note) ? $bid_through_link->note : ''}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
@endsection