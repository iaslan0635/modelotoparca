@extends('admin.layout')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Call Center</h1>
				<!--end::Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="admin/index" class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Dashboards</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Secondary button-->
				<a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn">Share & Earn</a>
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Start a Call</a>
				<!--end::Primary button-->
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Toolbar container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container container-xxl">
			<!--begin::Row-->
			<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
				<!--begin::Col-->
				<div class="col-xl-3">
					<!--begin::Card widget 3-->
					<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
						<!--begin::Header-->
						<div class="card-header pt-5 mb-3">
							<!--begin::Icon-->
							<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
								<i class="fonticon-incoming-call text-white fs-2qx lh-0"></i>
							</div>
							<!--end::Icon-->
						</div>
						<!--end::Header-->
						<!--begin::Card body-->
						<div class="card-body d-flex align-items-end mb-3">
							<!--begin::Info-->
							<div class="d-flex align-items-center">
								<span class="fs-4hx text-white fw-bold me-6">1.2k</span>
								<div class="fw-bold fs-6 text-white">
									<span class="d-block">Inbound</span>
									<span class="">Calls</span>
								</div>
							</div>
							<!--end::Info-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
							<!--begin::Progress-->
							<div class="fw-bold text-white py-2">
								<span class="fs-1 d-block">935</span>
								<span class="opacity-50">Problems Solved</span>
							</div>
							<!--end::Progress-->
						</div>
						<!--end::Card footer-->
					</div>
					<!--end::Card widget 3-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-3">
					<!--begin::Card widget 3-->
					<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">
						<!--begin::Header-->
						<div class="card-header pt-5 mb-3">
							<!--begin::Icon-->
							<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
								<i class="fonticon-outgoing-call text-white fs-2qx lh-0"></i>
							</div>
							<!--end::Icon-->
						</div>
						<!--end::Header-->
						<!--begin::Card body-->
						<div class="card-body d-flex align-items-end mb-3">
							<!--begin::Info-->
							<div class="d-flex align-items-center">
								<span class="fs-4hx text-white fw-bold me-6">427</span>
								<div class="fw-bold fs-6 text-white">
									<span class="d-block">Outbound</span>
									<span class="">Calls</span>
								</div>
							</div>
							<!--end::Info-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
							<!--begin::Progress-->
							<div class="fw-bold text-white py-2">
								<span class="fs-1 d-block">386</span>
								<span class="opacity-50">Generated Leads</span>
							</div>
							<!--end::Progress-->
						</div>
						<!--end::Card footer-->
					</div>
					<!--end::Card widget 3-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-6">
					<!--begin::Chart widget 36-->
					<div class="card card-flush overflow-hidden h-lg-100">
						<!--begin::Header-->
						<div class="card-header pt-5">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold text-dark">Performance</span>
								<span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
							</h3>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
								<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4">
									<!--begin::Display range-->
									<div class="text-gray-600 fw-bold">Loading date range...</div>
									<!--end::Display range-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
									<span class="svg-icon svg-icon-1 ms-2 me-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
											<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
											<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Daterangepicker-->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Card body-->
						<div class="card-body d-flex align-items-end p-0">
							<!--begin::Chart-->
							<div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Chart widget 36-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
				<!--begin::Col-->
				<div class="col-xl-6">
					<!--begin::Card widget 19-->
					<div class="card card-flush h-lg-100">
						<!--begin::Header-->
						<div class="card-header pt-5">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold text-dark">Performance</span>
								<span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
							</h3>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<!--begin::Label-->
								<span class="badge badge-light-danger fs-base mt-n3">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
								<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
										<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->7.4%</span>
								<!--end::Label-->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Card body-->
						<div class="card-body d-flex align-items-end pt-6">
							<!--begin::Row-->
							<div class="row align-items-center mx-0 w-100">
								<!--begin::Col-->
								<div class="col-7 px-0">
									<!--begin::Labels-->
									<div class="d-flex flex-column content-justify-center">
										<!--begin::Label-->
										<div class="d-flex fs-6 fw-semibold align-items-center">
											<!--begin::Bullet-->
											<div class="bullet bg-success me-3" style="border-radius: 3px;width: 12px;height: 12px"></div>
											<!--end::Bullet-->
											<!--begin::Label-->
											<div class="fs-5 fw-bold text-gray-600 me-5">CRM Team Performance:</div>
											<!--end::Label-->
											<!--begin::Stats-->
											<div class="ms-auto fw-bolder text-gray-700 text-end">72.56%</div>
											<!--end::Stats-->
										</div>
										<!--end::Label-->
										<!--begin::Label-->
										<div class="d-flex fs-6 fw-semibold align-items-center my-4">
											<!--begin::Bullet-->
											<div class="bullet bg-primary me-3" style="border-radius: 3px;width: 12px;height: 12px"></div>
											<!--end::Bullet-->
											<!--begin::Label-->
											<div class="fs-5 fw-bold text-gray-600 me-5">Recurring Calls:</div>
											<!--end::Label-->
											<!--begin::Stats-->
											<div class="ms-auto fw-bolder text-gray-700 text-end">29.34%</div>
											<!--end::Stats-->
										</div>
										<!--end::Label-->
										<!--begin::Label-->
										<div class="d-flex fs-6 fw-semibold align-items-center">
											<!--begin::Bullet-->
											<div class="bullet me-3" style="border-radius: 3px;background-color: #E4E6EF;width: 12px;height: 12px"></div>
											<!--end::Bullet-->
											<!--begin::Label-->
											<div class="fs-5 fw-bold text-gray-600 me-5">Tickets Raised:</div>
											<!--end::Label-->
											<!--begin::Stats-->
											<div class="ms-auto fw-bolder text-gray-700 text-end">17.83%</div>
											<!--end::Stats-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Labels-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-5 d-flex justify-content-end px-0">
									<!--begin::Chart-->
									<div id="kt_card_widget_19_chart" class="min-h-auto h-150px w-150px" data-kt-size="150" data-kt-line="25"></div>
									<!--end::Chart-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card widget 19-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-6">
					<!--begin::Engage widget 9-->
					<div class="card h-lg-100" style="background: linear-gradient(112.14deg, #FF8A00 0%, #E96922 100%)">
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Row-->
							<div class="row align-items-center">
								<!--begin::Col-->
								<div class="col-sm-7 pe-0 mb-5 mb-sm-0">
									<!--begin::Wrapper-->
									<div class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
										<!--begin::Container-->
										<div class="mb-7">
											<!--begin::Title-->
											<div class="mb-6">
												<h3 class="fs-2x fw-semibold text-white">Upgrade Your Plan</h3>
												<span class="fw-semibold text-white opacity-75">Flat cartoony and illustrations with vivid color</span>
											</div>
											<!--end::Title-->
											<!--begin::Items-->
											<div class="d-flex align-items-center flex-wrap d-grid gap-2">
												<!--begin::Item-->
												<div class="d-flex align-items-center me-5 me-xl-13">
													<!--begin::Symbol-->
													<div class="symbol symbol-30px symbol-circle me-3">
														<span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
															<span class="svg-icon svg-icon-4 svg-icon-white">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
																	<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Info-->
													<div class="m-0">
														<a href="admin/pages/user-profile/projects" class="text-white text-opacity-75 fs-8">Projects</a>
														<span class="fw-bold text-white fs-7 d-block">Up to 500</span>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-30px symbol-circle me-3">
														<span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
															<span class="svg-icon svg-icon-4 svg-icon-white">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Info-->
													<div class="m-0">
														<a href="admin/apps/user-management/users/list" class="text-white text-opacity-75 fs-8">Tasks</a>
														<span class="fw-bold text-white fs-7 d-block">Unlimited</span>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Container-->
										<!--begin::Action-->
										<div class="m-0">
											<a href="#" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
										</div>
										<!--begin::Action-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--begin::Col-->
								<!--begin::Col-->
								<div class="col-sm-5">
									<!--begin::Illustration-->
									<img src="assets/media/svg/illustrations/easy/7.svg" class="h-200px h-lg-250px my-n6" alt="" />
									<!--end::Illustration-->
								</div>
								<!--begin::Col-->
							</div>
							<!--begin::Row-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Engage widget 9-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Chart Widget 37-->
					<div class="card card-flush h-lg-100">
						<!--begin::Header-->
						<div class="card-header pt-5 mb-6">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column">
								<!--begin::Statistics-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Currency-->
									<span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
									<!--end::Currency-->
									<!--begin::Value-->
									<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
									<!--end::Value-->
									<!--begin::Label-->
									<span class="badge badge-light-success fs-base">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
									<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
											<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->9.2%</span>
									<!--end::Label-->
								</div>
								<!--end::Statistics-->
								<!--begin::Description-->
								<span class="fs-6 fw-semibold text-gray-400">Avg. Agent Earnings</span>
								<!--end::Description-->
							</h3>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
									<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
											<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
											<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
											<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 2-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator mb-3 opacity-75"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">New Ticket</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">New Customer</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
										<!--begin::Menu item-->
										<a href="#" class="menu-link px-3">
											<span class="menu-title">New Group</span>
											<span class="menu-arrow"></span>
										</a>
										<!--end::Menu item-->
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Admin Group</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Staff Group</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Member Group</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">New Contact</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator mt-3 opacity-75"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content px-3 py-3">
											<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
										</div>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 2-->
								<!--end::Menu-->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-0 px-0">
							<!--begin::Nav-->
							<ul class="nav d-flex justify-content-between mb-3 mx-9">
								<!--begin::Item-->
								<li class="nav-item mb-3">
									<!--begin::Link-->
									<a class="nav-link btn btn-flex flex-center btn-active-info btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_37_tab_1" href="#kt_charts_widget_37_tab_content_1">1d</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="nav-item mb-3">
									<!--begin::Link-->
									<a class="nav-link btn btn-flex flex-center btn-active-info btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_37_tab_2" href="#kt_charts_widget_37_tab_content_2">5d</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="nav-item mb-3">
									<!--begin::Link-->
									<a class="nav-link btn btn-flex flex-center btn-active-info btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_37_tab_3" href="#kt_charts_widget_37_tab_content_3">1m</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="nav-item mb-3">
									<!--begin::Link-->
									<a class="nav-link btn btn-flex flex-center btn-active-info btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_37_tab_4" href="#kt_charts_widget_37_tab_content_4">6m</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="nav-item mb-3">
									<!--begin::Link-->
									<a class="nav-link btn btn-flex flex-center btn-active-info btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_37_tab_5" href="#kt_charts_widget_37_tab_content_5">1y</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
							</ul>
							<!--end::Nav-->
							<!--begin::Tab Content-->
							<div class="tab-content mt-n6">
								<!--begin::Tap pane-->
								<div class="tab-pane fade active show" id="kt_charts_widget_37_tab_content_1">
									<!--begin::Chart-->
									<div id="kt_charts_widget_37_chart_1" data-kt-chart-color="danger" class="min-h-auto h-200px ps-3 pe-6"></div>
									<!--end::Chart-->
									<!--begin::Table container-->
									<div class="table-responsive mx-9 mt-n6">
										<!--begin::Table-->
										<table class="table align-middle gs-0 gy-4">
											<!--begin::Table head-->
											<thead>
												<tr>
													<th class="min-w-100px"></th>
													<th class="min-w-100px text-end pe-0"></th>
													<th class="text-end min-w-50px"></th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-danger">-139.34</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-success">+576.24</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-success">+124.03</span>
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table container-->
								</div>
								<!--end::Tap pane-->
								<!--begin::Tap pane-->
								<div class="tab-pane fade" id="kt_charts_widget_37_tab_content_2">
									<!--begin::Chart-->
									<div id="kt_charts_widget_37_chart_2" data-kt-chart-color="danger" class="min-h-auto h-200px ps-3 pe-6"></div>
									<!--end::Chart-->
									<!--begin::Table container-->
									<div class="table-responsive mx-9 mt-n6">
										<!--begin::Table-->
										<table class="table align-middle gs-0 gy-4">
											<!--begin::Table head-->
											<thead>
												<tr>
													<th class="min-w-100px"></th>
													<th class="min-w-100px text-end pe-0"></th>
													<th class="text-end min-w-50px"></th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-success">+231.01</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-primary">+233.07</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$2,145.55</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-danger">+134.06</span>
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table container-->
								</div>
								<!--end::Tap pane-->
								<!--begin::Tap pane-->
								<div class="tab-pane fade" id="kt_charts_widget_37_tab_content_3">
									<!--begin::Chart-->
									<div id="kt_charts_widget_37_chart_3" data-kt-chart-color="danger" class="min-h-auto h-200px ps-3 pe-6"></div>
									<!--end::Chart-->
									<!--begin::Table container-->
									<div class="table-responsive mx-9 mt-n6">
										<!--begin::Table-->
										<table class="table align-middle gs-0 gy-4">
											<!--begin::Table head-->
											<thead>
												<tr>
													<th class="min-w-100px"></th>
													<th class="min-w-100px text-end pe-0"></th>
													<th class="text-end min-w-50px"></th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">12:40 AM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$2,346.25</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-warning">+134.57</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">11:30 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$1,565.26</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-danger">+155.03</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">4:25 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-success">+124.03</span>
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table container-->
								</div>
								<!--end::Tap pane-->
								<!--begin::Tap pane-->
								<div class="tab-pane fade" id="kt_charts_widget_37_tab_content_4">
									<!--begin::Chart-->
									<div id="kt_charts_widget_37_chart_4" data-kt-chart-color="danger" class="min-h-auto h-200px ps-3 pe-6"></div>
									<!--end::Chart-->
									<!--begin::Table container-->
									<div class="table-responsive mx-9 mt-n6">
										<!--begin::Table-->
										<table class="table align-middle gs-0 gy-4">
											<!--begin::Table head-->
											<thead>
												<tr>
													<th class="min-w-100px"></th>
													<th class="min-w-100px text-end pe-0"></th>
													<th class="text-end min-w-50px"></th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">3:20 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-danger">+234.03</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">10:30 AM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$1,474.04</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-info">-134.03</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">1:30 AM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-primary">+124.03</span>
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table container-->
								</div>
								<!--end::Tap pane-->
								<!--begin::Tap pane-->
								<div class="tab-pane fade" id="kt_charts_widget_37_tab_content_5">
									<!--begin::Chart-->
									<div id="kt_charts_widget_37_chart_5" data-kt-chart-color="danger" class="min-h-auto h-200px ps-3 pe-6"></div>
									<!--end::Chart-->
									<!--begin::Table container-->
									<div class="table-responsive mx-9 mt-n6">
										<!--begin::Table-->
										<table class="table align-middle gs-0 gy-4">
											<!--begin::Table head-->
											<thead>
												<tr>
													<th class="min-w-100px"></th>
													<th class="min-w-100px text-end pe-0"></th>
													<th class="text-end min-w-50px"></th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$1,756.25</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-primary">+144.04</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-danger">+124.03</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
													</td>
													<td class="pe-0 text-end">
														<span class="text-gray-800 fw-bold fs-6 me-1">$2,034.65</span>
													</td>
													<td class="pe-0 text-end">
														<span class="fw-bold fs-6 text-success">+184.05</span>
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table container-->
								</div>
								<!--end::Tap pane-->
							</div>
							<!--end::Tab Content-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Chart Widget 37-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-8">
					<!--begin::Tables widget 15-->
					<div class="card card-flush h-lg-100">
						<!--begin::Header-->
						<div class="card-header pt-7">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold text-gray-800">Projects Stats</span>
								<span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
							</h3>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
								<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
									<!--begin::Display range-->
									<div class="text-gray-600 fw-bold">Loading date range...</div>
									<!--end::Display range-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
									<span class="svg-icon svg-icon-1 ms-2 me-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
											<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
											<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Daterangepicker-->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-6">
							<!--begin::Table container-->
							<div class="table-responsive">
								<!--begin::Table-->
								<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
									<!--begin::Table head-->
									<thead>
										<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
											<th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
											<th class="p-0 pb-3 min-w-100px text-end">CALLS</th>
											<th class="p-0 pb-3 min-w-100px text-end">CRP RANK</th>
											<th class="p-0 pb-3 min-w-150px text-end pe-12">PROGRESS</th>
											<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
											<th class="p-0 pb-3 w-50px text-end">VIEW</th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="symbol symbol-50px me-3">
														<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
													</div>
													<div class="d-flex justify-content-start flex-column">
														<a href="admin/apps/projects/users" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
														<span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
													</div>
												</div>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">245</span>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">$78.34%</span>
											</td>
											<td class="text-end pe-12">
												<!--begin::Label-->
												<span class="badge badge-light-success fs-base">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
														<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->9.2%</span>
												<!--end::Label-->
											</td>
											<td class="text-end pe-0">
												<div id="kt_table_widget_15_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-gray-700">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
															<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="symbol symbol-50px me-3">
														<img src="assets/media/avatars/300-10.jpg" class="" alt="" />
													</div>
													<div class="d-flex justify-content-start flex-column">
														<a href="admin/apps/projects/users" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
														<span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
													</div>
												</div>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">725</span>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">$63.83%</span>
											</td>
											<td class="text-end pe-12">
												<!--begin::Label-->
												<span class="badge badge-light-danger fs-base">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
														<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->0.4%</span>
												<!--end::Label-->
											</td>
											<td class="text-end pe-0">
												<div id="kt_table_widget_15_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-gray-700">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
															<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="symbol symbol-50px me-3">
														<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
													</div>
													<div class="d-flex justify-content-start flex-column">
														<a href="admin/apps/projects/users" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
														<span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
													</div>
												</div>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">173</span>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">$92.56%</span>
											</td>
											<td class="text-end pe-12">
												<!--begin::Label-->
												<span class="badge badge-light-success fs-base">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
														<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->9.2%</span>
												<!--end::Label-->
											</td>
											<td class="text-end pe-0">
												<div id="kt_table_widget_15_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-gray-700">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
															<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="symbol symbol-50px me-3">
														<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
													</div>
													<div class="d-flex justify-content-start flex-column">
														<a href="admin/apps/projects/users" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
														<span class="text-gray-400 fw-semibold d-block fs-7">Kiribatir</span>
													</div>
												</div>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">642</span>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">$64.02%</span>
											</td>
											<td class="text-end pe-12">
												<!--begin::Label-->
												<span class="badge badge-light-success fs-base">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
														<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->9.2%</span>
												<!--end::Label-->
											</td>
											<td class="text-end pe-0">
												<div id="kt_table_widget_15_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-gray-700">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
															<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="symbol symbol-50px me-3">
														<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
													</div>
													<div class="d-flex justify-content-start flex-column">
														<a href="admin/apps/projects/users" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
														<span class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
													</div>
												</div>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">329</span>
											</td>
											<td class="text-end pe-0">
												<span class="text-gray-600 fw-bold fs-6">$89.31%</span>
											</td>
											<td class="text-end pe-12">
												<!--begin::Label-->
												<span class="badge badge-light-danger fs-base">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
														<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->0.4%</span>
												<!--end::Label-->
											</td>
											<td class="text-end pe-0">
												<div id="kt_table_widget_15_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-gray-700">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
															<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
									</tbody>
									<!--end::Table body-->
								</table>
							</div>
							<!--end::Table-->
						</div>
						<!--end: Card Body-->
					</div>
					<!--end::Tables widget 15-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-10">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Chart widget 31-->
					<div class="card card-flush h-lg-100">
						<!--begin::Header-->
						<div class="card-header pt-7 mb-7">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold text-gray-800">Calls by Departments</span>
								<span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
							</h3>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<a href="admin/apps/ecommerce/catalog/add-product" class="btn btn-sm btn-light">PDF Report</a>
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex align-items-end pt-0">
							<!--begin::Chart-->
							<div id="kt_charts_widget_31_chart" class="w-100 h-300px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Chart widget 31-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-8">
					<!--begin::Maps widget 2-->
					<div class="card card-flush h-lg-100">
						<!--begin::Header-->
						<div class="card-header pt-7">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold text-dark">Calls Geography</span>
								<span class="text-gray-400 pt-2 fw-semibold fs-6">Updated 37 minutes ago</span>
							</h3>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<a href="admin/apps/ecommerce/catalog/add-product" class="btn btn-sm btn-light">PDF Report</a>
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-center">
							<!--begin::Map container-->
							<div id="kt_maps_widget_2_map" class="w-100 h-350px"></div>
							<!--end::Map container-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Maps widget 2-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('styles')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
@endpush
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
@endpush
@push('custom_scripts')
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/share-earn.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
