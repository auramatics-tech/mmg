@extends('backend_layouts.master')
@section('css')
<style>
	.w-180px{
		width:180px !important;
	}
</style>
@endsection
@section('content')

	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Appraisal Listing</h1>
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
										<li class="breadcrumb-item text-dark">Appraisal Listing</li>
									</ul>
								</div>
								<div class="d-flex align-items-center gap-2 gap-lg-3">
								</div>
							</div>
		</div>
		<div class="post d-flex flex-column-fluid" id="kt_post">
			<div id="kt_content_container" class="container-xxl">
				<div class="card">
				<form method="get" action="">
					<div class="card-header border-0 pt-6">
						<div class="card-title">
								<div class="d-flex align-items-center position-relative my-1">
									<span class="svg-icon svg-icon-1 position-absolute ms-6">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
										</svg>
									</span>
									<input type="text" name="q" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search property" value="{{isset(request()->q)?request()->q:''}}"/>
								</div>
						</div>
                    </div>
					</form>
					<div class="card-body py-4">
						@if(session()->has('success'))
						<div class="alert alert-success">
						{{ session()->get('success') }}
						</div>
						@endif
						<div class="table-responsive">
							<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
								<thead>
									<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
										<th class="min-w-125px">full Name</th>
										<th class="min-w-125px">Address</th>
										<th class="min-w-125px">Phone Number</th>
										<th class="min-w-125px">Email</th>
										<th class="min-w-125px">Last Time Sold Property</th>
										<th class="min-w-125px">Property Worth</th>
										<th class="min-w-125px">Our Agent</th>
										<th class="min-w-125px">Contact at Date</th>
										<th class="min-w-125px">Prefered Method of sale</th>
										<th class="min-w-125px">Hear About MMG</th>
									</tr>
								</thead>
								<tbody class="text-gray-600 fw-bold">
									@if(count($appraisal_data))
									@foreach($appraisal_data as $appraisal)
									<tr>
										<td>{{isset($appraisal->name)?$appraisal->name:''}}</td>
										<td>
											{{isset($appraisal->address)?$appraisal->address:''}}
										</td>
										<td>{{isset($appraisal->phone_no)?$appraisal->phone_no:''}}</td>
										<td>{{isset($appraisal->email)?$appraisal->email:''}}</td>
										<td>{{isset($appraisal->year)?$appraisal->year:''}}</td>
										@if($appraisal->property_worth == 0)
										<td><p>Less than 1000000</p></td>
										@elseif($appraisal->property_worth == 7000000)
										<td><p>More than 7000000</p></td>
										@else
										<td>{{isset($appraisal->property_worth)?$appraisal->property_worth:''}}</td>
										@endif
										<td>{{isset($appraisal->agent)?$appraisal->agent:''}}</td>
										<td>{{isset($appraisal->date)?$appraisal->date:''}}</td>
										<td>{{isset($appraisal->prefered_method)?$appraisal->prefered_method:''}}</td>
										<td>{{isset($appraisal->hear_about)?$appraisal->hear_about:''}}</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('script')
<script>
</script>
@endsection