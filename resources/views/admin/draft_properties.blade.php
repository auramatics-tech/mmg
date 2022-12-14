@extends('backend_layouts.master')
@section('css')
<style>
	.w-180px {
		width: 180px !important;
	}
</style>
@endsection
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="toolbar" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Properties List</h1>
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<li class="breadcrumb-item text-muted">
						<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
					</li>
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<li class="breadcrumb-item text-muted">Property Management</li>
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<li class="breadcrumb-item text-muted">Properties</li>
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<li class="breadcrumb-item text-dark">Properties List</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<div id="kt_content_container" class="container-xxl">
			<div class="card">
				<div class="card-header border-0 pt-6">
					<form action="" method="get">
						<div class="card-title">
							<div class="d-flex align-items-center position-relative my-1">
								<span class="svg-icon svg-icon-1 position-absolute ms-6">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<input type="text" name="q" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search property" value="{{isset(request()->q) ? request()->q :''}}" />
							</div>
						</div>
					</form>
					<div class="card-toolbar">
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							<div class="text-end">
								<a href="{{route('seller.add_property_form')}}" class="btn btn-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
											<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
										</svg>
									</span>
									Add Property
									<span class="svg-icon svg-icon-5 m-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
										</svg>
									</span>
								</a>
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-180px py-4" data-kt-menu="true">
									<div class="menu-item px-3">
										<a href="{{route('seller.add_property_form',['listing_type'=>'residential_sale'])}}" class="menu-link px-3">Residential Sale</a>
									</div>
									<div class="menu-item px-3">
										<a href="{{route('seller.add_property_form',['listing_type'=>'commercial'])}}" class="menu-link px-3">Commercial</a>
									</div>
									<div class="menu-item px-3">
										<a href="{{route('seller.add_property_form',['listing_type'=>'residential_rental'])}}" class="menu-link px-3">Residential Rental</a>
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
								<th class="min-w-125px">Price</th>
								<th class="min-w-125px">Listed Date</th>
								<th class="min-w-125px">Expiry Date</th>
								<th class="text-end min-w-100px">Actions</th>
							</tr>
						</thead>
						<tbody class="text-gray-600 fw-bold">
							@foreach($properties as $property)
							<tr>
								<td class="d-flex align-items-center">
									<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
										@if(isset($property->get_property_image))
										<a href="{{route('property_details',$property->id)}}">
											<div class="symbol-label">
												<img src="{{asset('storage/property_images/'.$property->get_property_image->document)}}" alt="E" class="w-100" />
											</div>
										</a>
										@endif
									</div>
									<div class="d-flex flex-column">
										<a href="javascript:" class="text-gray-800 text-hover-primary mb-1">{{($property->address_display=='Full Address')?$property->address:$property->suburb}}</a>
										@if($property->form_type == 'commercial')
										<span>{{isset($property->commercial_listing_type)?str_replace('_',' ',$property->commercial_listing_type):''}}</span>
										@else
										<span>{{isset($property->form_type)? str_replace('_',' ', $property->form_type):''}}</span>
										@endif
									</div>
								</td>
								<td>
									@if($property->form_type == 'residential_sale' || $property->commercial_listing_type == 'commercial_sale')
									{{isset($property->normal_price)?$property->normal_price:''}}
									@endif
									@if($property->commercial_listing_type == 'commercial_lease')
									{{isset($property->commercial_rental_per_annum)?$property->commercial_rental_per_annum:''}} per/year
									@elseif($property->form_type == 'residential_rental')
									{{isset($property->rental_per_month)?$property->rental_per_month:''}} per/month
									@endif
								</td>
								<td>{{isset($property->created_at)?date('Y-m-d',strtotime($property->created_at)):''}}</td>
								<td>{{isset($property->end_expiry_date)?$property->end_expiry_date:''}}</td>
								<td class="d-flex">
									<div class="me-0">
										<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<i class="bi bi-share fs-3"></i>
										</button>
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true" style="">

											<div class="menu-item px-3">
												<a href="https://www.instagram.com/?url={{route('property_details',$property->id)}}" target="_blank" rel="noopener" class="menu-link px-3">
													Instagram
												</a>
											</div>
											<div class="menu-item px-3">
												<a href="http://www.facebook.com/sharer/sharer.php?u={{route('property_details',$property->id)}}" target="_blank" rel="noopener" class="menu-link px-3">Facebook</a>
											</div>
										</div>
									</div>
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
									</a>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
										@if(!$property->is_approved)
										<div class="menu-item px-3">
											<a href="{{route('admin.add_approval',$property->id)}}" class="menu-link px-3">Approve</a>
										</div>
										@else
										<div class="menu-item px-3">
											<a href="{{route('admin.remove_aprroval',$property->id)}}" class="menu-link px-3">Remove Approval</a>
										</div>
										@endif
										<div class="menu-item px-3">
											<a href="{{route('seller.add_property_form',['listing_type'=>$property->form_type,'property_id'=>$property->id])}}" class="menu-link px-3">Edit</a>
										</div>
										<div class="menu-item px-3">
											<a href="{{route('seller.property_delete',$property->id)}}" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
										</div>
										<div class="menu-item px-3">
											<a href="javascript:" data-id="{{$property->id}}" class="menu-link px-3 copy_link">Copy link</a>
										</div>
									</div>
								</td>
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
<script>
	$(document).on('click', '.copy_link', function() {
		var id = $(this).attr('data-id');
		var copyText = "{{route('property_details','')}}/" + id;
		navigator.clipboard.writeText(copyText);
	})
</script>
@endsection