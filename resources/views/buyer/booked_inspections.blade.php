@extends('backend_layouts.master')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="toolbar" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Booked Inspections</h1>
			</div>
			<div class="d-flex align-items-center gap-2 gap-lg-3">
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
								<input type="text" name="q" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search property" value="{{isset(request()->q) ? request()->q : ''}}" />
							</div>
						</div>
					</form>
					<div class="card-toolbar">
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
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
									<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
										<form id="kt_modal_export_users_form" class="form" action="#">
											<div class="fv-row mb-10">
												<label class="fs-6 fw-bold form-label mb-2">Select Roles:</label>
												<select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
													<option></option>
													<option value="Administrator">Administrator</option>
													<option value="Analyst">Analyst</option>
													<option value="Developer">Developer</option>
													<option value="Support">Support</option>
													<option value="Trial">Trial</option>
												</select>
											</div>
											<div class="fv-row mb-10">
												<label class="required fs-6 fw-bold form-label mb-2">Select Export Format:</label>
												<select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bolder">
													<option></option>
													<option value="excel">Excel</option>
													<option value="pdf">PDF</option>
													<option value="cvs">CVS</option>
													<option value="zip">ZIP</option>
												</select>
											</div>
											<div class="text-center">
												<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
												<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered mw-650px">
								<div class="modal-content">
									<div class="modal-header" id="kt_modal_add_user_header">
										<h2 class="fw-bolder">Add User</h2>
										<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
													<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
												</svg>
											</span>
										</div>
									</div>
									<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
										<form id="kt_modal_add_user_form" class="form" action="#">
											<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
												<div class="fv-row mb-7">
													<label class="d-block fw-bold fs-6 mb-5">Avatar</label>
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
														<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg);"></div>
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="avatar_remove" />
														</label>
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
													</div>
													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
												</div>
												<div class="fv-row mb-7">
													<label class="required fw-bold fs-6 mb-2">Full Name</label>
													<input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith" />
												</div>
												<div class="fv-row mb-7">
													<label class="required fw-bold fs-6 mb-2">Email</label>
													<input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="smith@kpmg.com" />
												</div>
												<div class="mb-7">
													<label class="required fw-bold fs-6 mb-5">Role</label>
													<div class="d-flex fv-row">
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
															<label class="form-check-label" for="kt_modal_update_role_option_0">
																<div class="fw-bolder text-gray-800">Administrator</div>
																<div class="text-gray-600">Best for business owners and company administrators</div>
															</label>
														</div>
													</div>
													<div class='separator separator-dashed my-5'></div>
													<div class="d-flex fv-row">
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
															<label class="form-check-label" for="kt_modal_update_role_option_1">
																<div class="fw-bolder text-gray-800">Developer</div>
																<div class="text-gray-600">Best for developers or people primarily using the API</div>
															</label>
														</div>
													</div>
													<div class='separator separator-dashed my-5'></div>
													<div class="d-flex fv-row">
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
															<label class="form-check-label" for="kt_modal_update_role_option_2">
																<div class="fw-bolder text-gray-800">Analyst</div>
																<div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
															</label>
														</div>
													</div>
													<div class='separator separator-dashed my-5'></div>
													<div class="d-flex fv-row">
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
															<label class="form-check-label" for="kt_modal_update_role_option_3">
																<div class="fw-bolder text-gray-800">Support</div>
																<div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
															</label>
														</div>
													</div>
													<div class='separator separator-dashed my-5'></div>
													<div class="d-flex fv-row">
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
															<label class="form-check-label" for="kt_modal_update_role_option_4">
																<div class="fw-bolder text-gray-800">Trial</div>
																<div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="text-center pt-15">
												<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
												<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
										</form>
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
								<th class="w-10px pe-2">
									<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
										<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
									</div>
								</th>
								<th class="min-w-125px">Property</th>
								<th class="min-w-125px">Price</th>
								<th class="min-w-125px">Property Type</th>
								<th class="min-w-125px">Inspection Date</th>
								<th class="min-w-125px">Inspection Time</th>
								<th class="min-w-125px">Actions</th>
							</tr>
						</thead>
						<tbody class="text-gray-600 fw-bold">
							@foreach($booked_inspections as $book_inspection)
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td class="d-flex align-items-center">
									<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
										@if(isset($book_inspection->property->get_property_image))
										<a href="{{route('property_details',$book_inspection->property_id)}}">
											<div class="symbol-label">
												<img src="{{asset('storage/property_images/'.$book_inspection->property->get_property_image->document)}}" alt="E" class="w-100" />
											</div>
										</a>
										@endif
									</div>
								</td>
								<td>
										
									@if($book_inspection->property->form_type == 'residential_sale' || $book_inspection->property->commercial_listing_type == 'commercial_sale')
									${{isset($book_inspection->property->normal_price)?$book_inspection->property->normal_price:''}}
									@endif
									@if($book_inspection->property->commercial_listing_type == 'commercial_lease')
									${{isset($book_inspection->property->commercial_rental_per_annum)?$book_inspection->property->commercial_rental_per_annum:''}} per/year
									@elseif($book_inspection->property->form_type == 'residential_rental')
									${{isset($book_inspection->property->rental_per_month)?$book_inspection->property->rental_per_month:''}} per/month
									@endif
								</td>
								@if($book_inspection->property->form_type == 'commercial')
								<td>{{isset($book_inspection->property->commercial_listing_type)?$book_inspection->property->commercial_listing_type:''}}</td>
								@else
								<td>{{isset($book_inspection->property->form_type)?$book_inspection->property->form_type:''}}</td>
								@endif
								<td>{{isset($book_inspection->inspection_date)?date('d-m-Y',strtotime($book_inspection->inspection_date)):''}}</td>
								<td>{{isset($book_inspection->inspection_time)?date('g : i A',strtotime($book_inspection->inspection_time)):''}}</td>
								<td class="d-flex">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
									</a>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
										<div class="menu-item px-3">
											<a href="{{route('buyer.delete_inspection',$book_inspection->id)}}" class="menu-link px-3 copy_link">Delete Inspection</a>
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