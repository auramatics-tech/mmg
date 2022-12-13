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
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Slider Images</h1>
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
										<div class="modal-body">
											<form action="{{route('admin.upload_slider_images')}}" method="post" enctype="multipart/form-data">
												@csrf
												<div>
													<input type="file" accept="image/*" name="imageFile" class="upload"  id="slider_file" required>
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">Submit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="text-end">
								<button href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#img_upload">
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
											<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
										</svg>
									</span>
									Add Image
									<span class="svg-icon svg-icon-5 m-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
										</svg>
									</span>
								</button>
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
															< name="avatar" accept=".png, .jpg, .jpeg" />
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
													</div>
												</div>
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
								<th class="min-w-125px">Sr No.</th>
								<th class="min-w-125px">File</th>
								<th class="min-w-125px">Actions</th>
							</tr>
						</thead>
						<tbody class="text-gray-600 fw-bold">
							@foreach($files as $key => $file)
							<tr>
								<td>
									{{++$key }}
								</td>
								<td class=" align-items-center">
									<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
										<a href="javascript:">
											<div class="symbol-label">
												<img src="{{asset('storage/sliders/'.$file->file_name)}}" alt="E" class="w-100" />
											</div>
										</a>
									</div>
								</td>
								<td class="align-items-center">
									<a href="javascript:" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#img_upload">Edit</a>
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
	var _URL = window.URL || window.webkitURL;
	$("#slider_file").change(function(e) {
		var file, img;
		if ((file = this.files[0])) {
			img = new Image();
			img.onload = function() {
				if(this.width < 1100 && this.height < 750){
					alert('Size of Image should be width = 1100 , Height = 750');
				}
			};
			img.onerror = function() {
				alert("not a valid file: " + file.type);
			};
			img.src = _URL.createObjectURL(file);
		}
	});
</script>
@endsection