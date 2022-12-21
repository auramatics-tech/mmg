@extends('backend_layouts.master')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="toolbar" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard</h1>
			</div>
			@if(Session::has('success'))
			<div class="alert alert-success text-center">
				{{ Session::get('success') }}
			</div>
			@endif
		</div>
	</div>
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<div id="kt_content_container" class="container-xxl">
			@if(in_array(4,get_user_roles()))
			<div class="row g-5 g-xl-10 mb-xl-10">
				<h2 class="text-center">Admin Dashboard</h2>
				<div class="col-md-3 col-lg-12 col-xl-12 col-xxl-12 mb-md-5 mb-xl-10">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="card card-flush mb-5 mb-xl-10">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($admin['total_buyers'])?$admin['total_buyers']:'0'}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">Total Users</span>
									</div>
								</div>
								<div class="card-body pt-2 pb-4 d-flex align-items-center">
									<div class="d-flex flex-center me-5 pt-2">
										<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
									</div>
									<div class="d-flex flex-column content-justify-center w-100">
										<div class="d-flex fs-6 fw-bold align-items-center">
											<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Buyers</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_buyers'])?$admin['total_buyers']:'0'}}</div>
										</div>
										<div class="d-flex fs-6 fw-bold align-items-center my-3">
											<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Sellers</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_sellers'])?$admin['total_sellers']:'0'}}</div>
										</div>
										<div class="d-flex fs-6 fw-bold align-items-center">
											<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Crowd Sellers</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_crowd_sellers'])?$admin['total_crowd_sellers']:'0'}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="card card-flush h-md-50 mb-xl-10">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$admin['Draft_properties']}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">Draft Properties</span>
									</div>
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$admin['total_properties']}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">Approved Properties</span>
									</div>
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$admin['total_properties']+$admin['Draft_properties']}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">Total Properties</span>
									</div>
								</div>
							</div>
							<div class="card card-flush h-md-50 mb-xl-10">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$admin['total_appraisal']}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">Book Appraisal</span>
									</div>
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$admin['bid_through_link']}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">Bid Through Croud Seller</span>
									</div>
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$admin['total_bid']}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6"> Total Bid</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="card card-flush h-md-50 mb-xl-10">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$admin['requested_seller']}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">Request For Seller</span>
									</div>
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$admin['requested_croud_seller']}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">Request For Croud Seller</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			<div class="col-md-3 col-lg-12 col-xl-12 col-xxl-12 mb-md-5 mb-xl-10">
				@if(in_array(1,get_user_roles()))
				<h2 class="text-center mb-4">Seller Dashboard</h2>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="mb-md-5 mb-xl-10">
							<div class="card card-flush h-md-100 mb-5 mb-xl-10">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($seller['my_properties'])?$seller['my_properties']:'0'}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">My Total Properties</span>
									</div>
								</div>
								<div class="su_pl_12 su_pr_20 pt-2 pb-4 d-flex align-items-center">
									<div class="d-flex flex-center me-5 pt-2">
										<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
									</div>
									<div class="d-flex flex-column content-justify-center w-100">
										<div class="d-flex fs-6 fw-bold align-items-center">
											<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Wishlist</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($seller['my_property_wishlist'])?$seller['my_property_wishlist']:'0'}}</div>
										</div>
										<div class="d-flex fs-6 fw-bold align-items-center my-3">
											<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Inspections</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($seller['my_property_inspections'])?$seller['my_property_inspections']:'0'}}</div>
										</div>
										<div class="d-flex fs-6 fw-bold align-items-center">
											<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Bids</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($seller['total_bid'])?$seller['total_bid']:'0'}}</div>
										</div>
										<div class="d-flex fs-6 fw-bold align-items-center">
											<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Approved Property</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($seller['my_approved_properties'])?$seller['my_approved_properties']:'0'}}</div>
										</div>
										<div class="d-flex fs-6 fw-bold align-items-center">
											<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Pending Property</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($seller['pending_property'])?$seller['pending_property']:'0'}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="mb-md-5 mb-xl-10">
							<div class="card card-flush h-md-100 mb-xl-10">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($seller['my_properties'])?$seller['my_properties']:'0'}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">My Total Properties</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif

				@if(in_array(2,get_user_roles()))
				<h2 class="text-center mb-4">Crowd Seller Dashboard</h2>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="mb-md-5 mb-xl-10">
							<div class="card card-flush h-md-100 mb-5 mb-xl-10">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($crowd_seller['my_refer_offers'])?$crowd_seller['my_refer_offers']:'0'}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">Offer from My Reference</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
				@if(in_array(3,get_user_roles()))
				<h2 class="text-center mb-4">Buyer Dashboard</h2>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="mb-md-5 mb-xl-10">
							<div class="card card-flush h-md-100 mb-5 mb-xl-10">
								<div class="su_pl_12 su_pr_20 pt-2 pb-4 d-flex align-items-center">
									<div class="d-flex flex-center me-5 pt-2">
										<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
									</div>
									<div class="d-flex flex-column content-justify-center w-100">
										<div class="d-flex fs-6 fw-bold align-items-center">
											<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Wishlist</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($buyer['fav_properties'])?$buyer['fav_properties']:'0'}}</div>
										</div>
										<div class="d-flex fs-6 fw-bold align-items-center my-3">
											<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Inspections</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($buyer['inspection'])?$buyer['inspection']:'0'}}</div>
										</div>
										<div class="d-flex fs-6 fw-bold align-items-center">
											<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
											<div class="text-gray-500 flex-grow-1 me-4">Bids</div>
											<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($buyer['offers'])?$buyer['offers']:'0'}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="mb-md-5 mb-xl-10">
							<div class="card card-flush h-md-100 mb-xl-10">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<div class="d-flex align-items-center">
											<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($buyer['fav_properties'])?$buyer['fav_properties']:'0'}}</span>
										</div>
										<span class="text-gray-400 pt-1 fw-bold fs-6">My Favourite Properties</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection