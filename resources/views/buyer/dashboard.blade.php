@extends('backend_layouts.master')
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard</h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								{{--<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Secondary button-->
									<a href="../../demo1/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">Manage Sales</a>
									<!--end::Secondary button-->
									<!--begin::Primary button-->
									<a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-primary">Add Product</a>
									<!--end::Primary button-->
								</div>--}}
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Row-->
								<div class="row g-5 g-xl-10 mb-xl-10">
									
									@if(in_array(4,get_user_roles()))
										<h2 class="text-center">Admin Dashboard</h2>
										<div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 4-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($admin['total_buyers'])?$admin['total_buyers']:'0'}}</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">Total Users</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex align-items-center">
													<!--begin::Chart-->
													<div class="d-flex flex-center me-5 pt-2">
														<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center w-100">
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Buyers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_buyers'])?$admin['total_buyers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center my-3">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Sellers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_sellers'])?$admin['total_sellers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Crowd Sellers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_crowd_sellers'])?$admin['total_crowd_sellers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 4-->
											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-50 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$admin['total_properties']}}</span>
															<!--end::Amount-->
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">Total Properties</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												{{--<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
												<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
															<span class="fw-bolder fs-6 text-gray-400">62%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div> --}}
													<!--end::Progress-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
										</div>
										<div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 6-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($admin['total_offers'])?$admin['total_offers']:'0'}}</span>
															<!--end::Amount-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">Total Properties offers</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end px-0 pb-0">
													<!--begin::Chart-->
													<div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 6-->
											<!--begin::Card widget 7-->
											<div class="card card-flush h-md-50 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($admin['total_views'])?$admin['total_views']:'0'}}</span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">Total Properties Views</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
											{{--	<div class="card-body d-flex flex-column justify-content-end pe-0">
													<!--begin::Title-->
													<span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
													<!--end::Title-->
													<!--begin::Users group-->
													<div class="symbol-group symbol-hover flex-nowrap">
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
															<img alt="Pic" src="{{asset('backend/media/avatars/300-11.jpg')}}" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
															<span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
															<img alt="Pic" src="{{asset('backend/media/avatars/300-2.jpg')}}" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
															<span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
															<img alt="Pic" src="{{asset('backend/media/avatars/300-12.jpg')}}" />
														</div>
														<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
															<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
														</a>
													</div>
													<!--end::Users group-->
												</div>
												<!--end::Card body-->
											</div> --}}
											<!--end::Card widget 7-->
										</div>
									@endif
									
									@if(in_array(1,get_user_roles()))
										<h2 class="text-center">Seller Dashboard</h2>
										<div class="col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 4-->
											<div class="card card-flush h-md-100 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($seller['my_property_inspections'])?$seller['my_property_inspections']:'0'}}</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">My Total Properties Inspections</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex align-items-center">
													<!--begin::Chart-->
													<div class="d-flex flex-center me-5 pt-2">
														<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center w-100">
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Buyers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_buyers'])?$admin['total_buyers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center my-3">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Sellers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_sellers'])?$admin['total_sellers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Crowd Sellers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_crowd_sellers'])?$admin['total_crowd_sellers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 4-->
										</div>
										<div class="col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-100 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{count($seller['my_properties_ids'])?count($seller['my_properties_ids']):'0'}}</span>
															<!--end::Amount-->
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">My Total Properties</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
											{{--<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
															<span class="fw-bolder fs-6 text-gray-400">62%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>--}}
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
										</div>
										<div class="col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 6-->
											<div class="card card-flush h-md-100 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($seller['my_property_offers'])?$seller['my_property_offers']:'0'}}</span>
															<!--end::Amount-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">My Total Properties offers</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end px-0 pb-0">
													<!--begin::Chart-->
													<div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 6-->
										</div>
									@endif
									
									@if(in_array(2,get_user_roles()))
										<h2 class="text-center">Crowd Seller Dashboard</h2>
										<div class="col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 4-->
											<div class="card card-flush h-md-100 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($crowd_seller['my_refer_offers'])?$crowd_seller['my_refer_offers']:'0'}}</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">Offer from My Reference</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex align-items-center">
													<!--begin::Chart-->
													<div class="d-flex flex-center me-5 pt-2">
														<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center w-100">
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Buyers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_buyers'])?$admin['total_buyers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center my-3">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Sellers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_sellers'])?$admin['total_sellers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Crowd Sellers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_crowd_sellers'])?$admin['total_crowd_sellers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 4-->
											
										</div>
										<div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											
											<!--begin::Card widget 7-->
											<div class="card card-flush h-md-100 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($buyer['total_properties'])?$buyer['total_properties']:'0'}}</span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">Total Properties</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												{{--<div class="card-body d-flex flex-column justify-content-end pe-0">
													<!--begin::Title-->
													<span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
													<!--end::Title-->
													<!--begin::Users group-->
													<div class="symbol-group symbol-hover flex-nowrap">
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
															<img alt="Pic" src="{{asset('backend/media/avatars/300-11.jpg')}}" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
															<span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
															<img alt="Pic" src="{{asset('backend/media/avatars/300-2.jpg')}}" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
															<span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
															<img alt="Pic" src="{{asset('backend/media/avatars/300-12.jpg')}}" />
														</div>
														<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
															<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
														</a>
													</div>
													<!--end::Users group-->
												</div> --}}
												<!--end::Card body-->
											</div>
											<!--end::Card widget 7-->
										</div>
										<div class="col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 6-->
											<div class="card card-flush h-md-100 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($admin['total_offers'])? $admin['total_offers']:'0'}}</span>
															<!--end::Amount-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">Total Offers</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end px-0 pb-0">
													<!--begin::Chart-->
													<div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 6-->
										</div>
									@endif

									@if(in_array(3,get_user_roles()))
										<h2 class="text-center">Buyer Dashboard</h2>
										<div class="col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 4-->
											<div class="card card-flush h-md-100 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($buyer['inspection'])?$buyer['inspection']:'0'}}</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">My Total Inspections</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex align-items-center">
													<!--begin::Chart-->
													<div class="d-flex flex-center me-5 pt-2">
														<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center w-100">
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Buyers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_buyers'])?$admin['total_buyers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center my-3">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Sellers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_sellers'])?$admin['total_sellers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Crowd Sellers</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-boldest text-gray-700 text-xxl-end">{{isset($admin['total_crowd_sellers'])?$admin['total_crowd_sellers']:'0'}}</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 4-->
											
										</div>
										<div class="col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-100 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($buyer['fav_properties'])?$buyer['fav_properties']:'0'}}</span>
															<!--end::Amount-->
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">My Favourite Properties</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												{{--<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
															<span class="fw-bolder fs-6 text-gray-400">62%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>--}}
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
										</div>
										<div class="col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-100 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{isset($buyer['fav_properties'])?$buyer['fav_properties']:'0'}}</span>
															<!--end::Amount-->
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-bold fs-6">My Favourite Properties</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												{{--<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
															<span class="fw-bolder fs-6 text-gray-400">62%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>--}}
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
										</div>
									@endif
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
@endsection