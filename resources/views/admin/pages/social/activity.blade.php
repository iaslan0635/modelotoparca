@extends('admin.layout')
@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
	<!--begin::Social - Activity -->
	<div class="d-flex flex-row">
		<!--begin::Start sidebar-->
		<div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true" data-kt-drawer-name="start-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_social_start_sidebar_toggle">
			<!--begin::User menu-->
			<div class="card mb-5 mb-xl-8">
				<!--begin::Body-->
				<div class="card-body pt-15 px-0">
					<!--begin::Member-->
					<div class="d-flex flex-column text-center mb-9 px-9">
						<!--begin::Photo-->
						<div class="symbol symbol-80px symbol-lg-150px mb-4">
							<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
						</div>
						<!--end::Photo-->
						<!--begin::Info-->
						<div class="text-center">
							<!--begin::Name-->
							<a href="/admin/pages/user-profile/overview" class="text-gray-800 fw-bold text-hover-primary fs-4">Jerry Kane</a>
							<!--end::Name-->
							<!--begin::Position-->
							<span class="text-muted d-block fw-semibold">Grade 8, AE3 Student</span>
							<!--end::Position-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Member-->
					<!--begin::Row-->
					<div class="row px-9 mb-4">
						<!--begin::Col-->
						<div class="col-md-4 text-center">
							<div class="text-gray-800 fw-bold fs-3">
								<span class="m-0" data-kt-countup="true" data-kt-countup-value="642">0</span>
							</div>
							<span class="text-gray-500 fs-8 d-block fw-bold">POSTS</span>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 text-center">
							<div class="text-gray-800 fw-bold fs-3">
							<span class="m-0" data-kt-countup="true" data-kt-countup-value="24">0</span>K</div>
							<span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWERS</span>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 text-center">
							<div class="text-gray-800 fw-bold fs-3">
							<span class="m-0" data-kt-countup="true" data-kt-countup-value="12">0</span>K</div>
							<span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWING</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Navbar-->
					<div class="m-0">
						<!--begin::Navs-->
						<ul class="nav nav-pills nav-pills-custom flex-column border-transparent fs-5 fw-bold">
							<!--begin::Nav item-->
							<li class="nav-item mt-5">
								<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="/admin/pages/social/feeds">
								<!--begin::Svg Icon | path: icons/duotune/general/gen010.svg-->
								<span class="svg-icon svg-icon-3 svg-icon-muted me-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M2 21V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H3C2.4 22 2 21.6 2 21Z" fill="currentColor" />
										<path d="M2 10V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H3C2.4 11 2 10.6 2 10Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->Feeds
								<!--begin::Bullet-->
								<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
								<!--end::Bullet--></a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item mt-5">
								<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="/admin/pages/social/activity">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr070.svg-->
								<span class="svg-icon svg-icon-3 svg-icon-muted me-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
										<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
										<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
										<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->Activity
								<!--begin::Bullet-->
								<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
								<!--end::Bullet--></a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item mt-5">
								<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="/admin/pages/social/followers">
								<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
								<span class="svg-icon svg-icon-3 svg-icon-muted me-3">
									<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
										<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
										<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->Followers
								<!--begin::Bullet-->
								<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
								<!--end::Bullet--></a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item mt-5">
								<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="/admin/pages/social/settings">
								<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
								<span class="svg-icon svg-icon-3 svg-icon-muted me-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
										<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->Settings
								<!--begin::Bullet-->
								<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
								<!--end::Bullet--></a>
							</li>
							<!--end::Nav item-->
						</ul>
						<!--begin::Navs-->
					</div>
					<!--end::Navbar-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::User menu-->
			<!--begin::List widget 10-->
			<div class="card card-flush">
				<!--begin::Header-->
				<div class="card-header pt-7">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-gray-800">Shipment History</span>
						<span class="text-gray-400 mt-1 fw-semibold fs-6">59 Active Shipments</span>
					</h3>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse" title="Logistics App is coming soon">View All</a>
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin::Nav-->
					<ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
						<!--begin::Item-->
						<li class="nav-item col-4 mx-0 p-0">
							<!--begin::Link-->
							<a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_1">
								<!--begin::Subtitle-->
								<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Notable</span>
								<!--end::Subtitle-->
								<!--begin::Bullet-->
								<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
								<!--end::Bullet-->
							</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item col-4 mx-0 px-0">
							<!--begin::Link-->
							<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_2">
								<!--begin::Subtitle-->
								<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Delivered</span>
								<!--end::Subtitle-->
								<!--begin::Bullet-->
								<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
								<!--end::Bullet-->
							</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item col-4 mx-0 px-0">
							<!--begin::Link-->
							<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_3">
								<!--begin::Subtitle-->
								<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Shipping</span>
								<!--end::Subtitle-->
								<!--begin::Bullet-->
								<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
								<!--end::Bullet-->
							</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Bullet-->
						<span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
						<!--end::Bullet-->
					</ul>
					<!--end::Nav-->
					<!--begin::Tab Content-->
					<div class="tab-content">
						<!--begin::Tap pane-->
						<div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-ship"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Ship Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
										</div>
										<span class="badge badge-lg badge-light-success fw-bold my-2">Delivered</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Messina Harbor</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Hektor Container Hotel</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-truck"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Truck Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
										</div>
										<span class="badge badge-lg badge-light-primary fw-bold my-2">Shipping</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Haven van Rotterdam</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Forest-Midi</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-delivery"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Delivery Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
										</div>
										<span class="badge badge-lg badge-light-success fw-bold my-2">Delivered</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Mina St - Zayed Port</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">27 Drydock Boston</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-offline"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Plane Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
										</div>
										<span class="badge badge-lg badge-light-danger fw-bold my-2">Delayed</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">KLM Cargo</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Singapore Cargo</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Tap pane-->
						<!--begin::Tap pane-->
						<div class="tab-pane fade" id="kt_list_widget_10_tab_2">
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-offline"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Plane Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
										</div>
										<span class="badge badge-lg badge-light-success fw-bold my-2">Delivered</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">KLM Cargo</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Singapore Cargo</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-truck"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Truck Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
										</div>
										<span class="badge badge-lg badge-light-success fw-bold my-2">Delivered</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Haven van Rotterdam</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Forest-Midi</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-ship"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Ship Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
										</div>
										<span class="badge badge-lg badge-light-success fw-bold my-2">Delivered</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Mina St - Zayed Port</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">27 Drydock Boston</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-ship"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Ship Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
										</div>
										<span class="badge badge-lg badge-light-success fw-bold my-2">Delivered</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Messina Harbor</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Hektor Container Hotel</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Tap pane-->
						<!--begin::Tap pane-->
						<div class="tab-pane fade" id="kt_list_widget_10_tab_3">
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-ship"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Ship Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
										</div>
										<span class="badge badge-lg badge-light-primary fw-bold my-2">Shipping</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Mina St - Zayed Port</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">27 Drydock Boston</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-offline"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Plane Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
										</div>
										<span class="badge badge-lg badge-light-primary fw-bold my-2">Shipping</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">KLM Cargo</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Singapore Cargo</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-ship"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Ship Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
										</div>
										<span class="badge badge-lg badge-light-primary fw-bold my-2">Shipping</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Messina Harbor</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Hektor Container Hotel</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-sm-center mb-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px me-4">
										<span class="symbol-label bg-primary">
											<i class="text-inverse-primary fs-1 lh-0 fonticon-truck"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-row-fluid flex-wrap">
										<div class="flex-grow-1 me-2">
											<a href="#" class="text-gray-400 fs-6 fw-semibold">Truck Freight</a>
											<span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
										</div>
										<span class="badge badge-lg badge-light-primary fw-bold my-2">Shipping</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Timeline-->
								<div class="timeline">
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center mb-7">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px mt-6 mb-n12"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
													<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Haven van Rotterdam</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
									<!--begin::Timeline item-->
									<div class="timeline-item align-items-center">
										<!--begin::Timeline line-->
										<div class="timeline-line w-40px"></div>
										<!--end::Timeline line-->
										<!--begin::Timeline icon-->
										<div class="timeline-icon" style="margin-left: 11px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
													<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Timeline icon-->
										<!--begin::Timeline content-->
										<div class="timeline-content m-0">
											<!--begin::Title-->
											<span class="fs-6 text-gray-400 fw-semibold d-block">Forest-Midi</span>
											<!--end::Title-->
											<!--begin::Title-->
											<span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
											<!--end::Title-->
										</div>
										<!--end::Timeline content-->
									</div>
									<!--end::Timeline item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Tap pane-->
					</div>
					<!--end::Tab Content-->
				</div>
				<!--end: Card Body-->
			</div>
			<!--end::List widget 10-->
		</div>
		<!--end::Start sidebar-->
		<!--begin::Content-->
		<div class="w-100 flex-lg-row-fluid mx-lg-13">
			<!--begin::Mobile toolbar-->
			<div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
				<div class="d-flex align-items-center gap-2">
					<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_start_sidebar_toggle">
						<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
								<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
								<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_end_sidebar_toggle">
						<!--begin::Svg Icon | path: icons/duotune/coding/cod002.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3" d="M18 22C19.7 22 21 20.7 21 19C21 18.5 20.9 18.1 20.7 17.7L15.3 6.30005C15.1 5.90005 15 5.5 15 5C15 3.3 16.3 2 18 2H6C4.3 2 3 3.3 3 5C3 5.5 3.1 5.90005 3.3 6.30005L8.7 17.7C8.9 18.1 9 18.5 9 19C9 20.7 7.7 22 6 22H18Z" fill="currentColor" />
								<path d="M18 2C19.7 2 21 3.3 21 5H9C9 3.3 7.7 2 6 2H18Z" fill="currentColor" />
								<path d="M9 19C9 20.7 7.7 22 6 22C4.3 22 3 20.7 3 19H9Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
				</div>
			</div>
			<!--end::Mobile toolbar-->
			<!--begin::Timeline-->
			<div class="card">
				<!--begin::Card head-->
				<div class="card-header card-header-stretch">
					<!--begin::Title-->
					<div class="card-title d-flex align-items-center">
						<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
						<span class="svg-icon svg-icon-1 svg-icon-primary me-3 lh-0">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
								<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
								<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<h3 class="fw-bold m-0 text-gray-800">Jan 23, 2022</h3>
					</div>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar m-0">
						<!--begin::Tab nav-->
						<ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
							<li class="nav-item" role="presentation">
								<a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today">Today</a>
							</li>
							<li class="nav-item" role="presentation">
								<a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week">Week</a>
							</li>
							<li class="nav-item" role="presentation">
								<a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month">Month</a>
							</li>
							<li class="nav-item" role="presentation">
								<a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year">2022</a>
							</li>
						</ul>
						<!--end::Tab nav-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Card head-->
				<!--begin::Card body-->
				<div class="card-body">
					<!--begin::Tab Content-->
					<div class="tab-content">
						<!--begin::Tab panel-->
						<div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
							<!--begin::Timeline-->
							<div class="timeline">
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
													<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<!--begin::Record-->
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
												<!--begin::Title-->
												<a href="/admin/apps/projects/project" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
												<!--end::Title-->
												<!--begin::Label-->
												<div class="min-w-175px pe-2">
													<span class="badge badge-light text-muted">Application Design</span>
												</div>
												<!--end::Label-->
												<!--begin::Users-->
												<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
													<!--begin::User-->
													<div class="symbol symbol-circle symbol-25px">
														<img src="assets/media/avatars/300-2.jpg" alt="img" />
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-circle symbol-25px">
														<img src="assets/media/avatars/300-14.jpg" alt="img" />
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-circle symbol-25px">
														<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
													</div>
													<!--end::User-->
												</div>
												<!--end::Users-->
												<!--begin::Progress-->
												<div class="min-w-125px pe-2">
													<span class="badge badge-light-primary">In Progress</span>
												</div>
												<!--end::Progress-->
												<!--begin::Action-->
												<a href="/admin/apps/projects/project" class="btn btn-sm btn-light btn-active-light-primary">View</a>
												<!--end::Action-->
											</div>
											<!--end::Record-->
											<!--begin::Record-->
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
												<!--begin::Title-->
												<a href="/admin/apps/projects/project" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
												<!--end::Title-->
												<!--begin::Label-->
												<div class="min-w-175px">
													<span class="badge badge-light text-muted">CRM System Development</span>
												</div>
												<!--end::Label-->
												<!--begin::Users-->
												<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
													<!--begin::User-->
													<div class="symbol symbol-circle symbol-25px">
														<img src="assets/media/avatars/300-20.jpg" alt="img" />
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-circle symbol-25px">
														<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
													</div>
													<!--end::User-->
												</div>
												<!--end::Users-->
												<!--begin::Progress-->
												<div class="min-w-125px">
													<span class="badge badge-light-success">Completed</span>
												</div>
												<!--end::Progress-->
												<!--begin::Action-->
												<a href="/admin/apps/projects/project" class="btn btn-sm btn-light btn-active-light-primary">View</a>
												<!--end::Action-->
											</div>
											<!--end::Record-->
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
													<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n2">
										<!--begin::Timeline heading-->
										<div class="overflow-auto pe-3">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
													<img src="assets/media/avatars/300-1.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
													<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="mb-5 pe-3">
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
													<img src="assets/media/avatars/300-23.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
													<!--begin::Icon-->
													<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="/admin/apps/projects/project" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">1.9mb</div>
														<!--end::Number-->
													</div>
													<!--begin::Info-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
													<!--begin::Icon-->
													<img alt="/admin/apps/projects/project" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">18kb</div>
														<!--end::Number-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center">
													<!--begin::Icon-->
													<img alt="/admin/apps/projects/project" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">20mb</div>
														<!--end::Number-->
													</div>
													<!--end::Icon-->
												</div>
												<!--end::Item-->
											</div>
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">Task
											<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
											<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
													<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
												<!--begin::Item-->
												<div class="overlay me-10">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="overlay me-10">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="overlay">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
											</div>
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
													<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">New case
											<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="overflow-auto pb-5">
												<!--begin::Wrapper-->
												<div class="d-flex align-items-center mt-1 fs-6">
													<!--begin::Info-->
													<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
													<!--end::Info-->
													<!--begin::User-->
													<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
													<!--end::User-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
													<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
													<img src="assets/media/avatars/300-4.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
												<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="currentColor" />
														<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
													<!--begin::Content-->
													<div class="mb-3 mb-md-0 fw-semibold">
														<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
														<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
													</div>
													<!--end::Content-->
													<!--begin::Action-->
													<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
													<!--end::Action-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
													<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
													<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">New order
											<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
							</div>
							<!--end::Timeline-->
						</div>
						<!--end::Tab panel-->
						<!--begin::Tab panel-->
						<div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">
							<!--begin::Timeline-->
							<div class="timeline">
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
													<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n2">
										<!--begin::Timeline heading-->
										<div class="overflow-auto pe-3">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
													<img src="assets/media/avatars/300-1.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
													<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="mb-5 pe-3">
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
													<img src="assets/media/avatars/300-23.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
													<!--begin::Icon-->
													<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="/admin/apps/projects/project" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">1.9mb</div>
														<!--end::Number-->
													</div>
													<!--begin::Info-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
													<!--begin::Icon-->
													<img alt="/admin/apps/projects/project" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">18kb</div>
														<!--end::Number-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center">
													<!--begin::Icon-->
													<img alt="/admin/apps/projects/project" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">20mb</div>
														<!--end::Number-->
													</div>
													<!--end::Icon-->
												</div>
												<!--end::Item-->
											</div>
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">Task
											<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
											<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
													<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
												<!--begin::Item-->
												<div class="overlay me-10">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="overlay me-10">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="overlay">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
											</div>
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
													<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">New case
											<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="overflow-auto pb-5">
												<!--begin::Wrapper-->
												<div class="d-flex align-items-center mt-1 fs-6">
													<!--begin::Info-->
													<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
													<!--end::Info-->
													<!--begin::User-->
													<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
													<!--end::User-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
							</div>
							<!--end::Timeline-->
						</div>
						<!--end::Tab panel-->
						<!--begin::Tab panel-->
						<div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab">
							<!--begin::Timeline-->
							<div class="timeline">
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
													<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
												<!--begin::Item-->
												<div class="overlay me-10">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="overlay me-10">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="overlay">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
											</div>
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
													<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">New case
											<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="overflow-auto pb-5">
												<!--begin::Wrapper-->
												<div class="d-flex align-items-center mt-1 fs-6">
													<!--begin::Info-->
													<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
													<!--end::Info-->
													<!--begin::User-->
													<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
													<!--end::User-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
													<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
													<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">New order
											<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
													<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n2">
										<!--begin::Timeline heading-->
										<div class="overflow-auto pe-3">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
													<img src="assets/media/avatars/300-1.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
													<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="mb-5 pe-3">
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
													<img src="assets/media/avatars/300-23.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
													<!--begin::Icon-->
													<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="/admin/apps/projects/project" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">1.9mb</div>
														<!--end::Number-->
													</div>
													<!--begin::Info-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
													<!--begin::Icon-->
													<img alt="/admin/apps/projects/project" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">18kb</div>
														<!--end::Number-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center">
													<!--begin::Icon-->
													<img alt="/admin/apps/projects/project" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">20mb</div>
														<!--end::Number-->
													</div>
													<!--end::Icon-->
												</div>
												<!--end::Item-->
											</div>
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">Task
											<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
											<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
							</div>
							<!--end::Timeline-->
						</div>
						<!--end::Tab panel-->
						<!--begin::Tab panel-->
						<div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab">
							<!--begin::Timeline-->
							<div class="timeline">
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
													<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="mb-5 pe-3">
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
													<img src="assets/media/avatars/300-23.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
													<!--begin::Icon-->
													<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="/admin/apps/projects/project" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">1.9mb</div>
														<!--end::Number-->
													</div>
													<!--begin::Info-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
													<!--begin::Icon-->
													<img alt="/admin/apps/projects/project" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">18kb</div>
														<!--end::Number-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-aligns-center">
													<!--begin::Icon-->
													<img alt="/admin/apps/projects/project" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-1 fw-semibold">
														<!--begin::Desc-->
														<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
														<!--end::Desc-->
														<!--begin::Number-->
														<div class="text-gray-400">20mb</div>
														<!--end::Number-->
													</div>
													<!--end::Icon-->
												</div>
												<!--end::Item-->
											</div>
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">Task
											<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
											<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
													<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
										<!--begin::Timeline details-->
										<div class="overflow-auto pb-5">
											<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
												<!--begin::Item-->
												<div class="overlay me-10">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="overlay me-10">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="overlay">
													<!--begin::Image-->
													<div class="overlay-wrapper">
														<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
													</div>
													<!--end::Image-->
													<!--begin::Link-->
													<div class="overlay-layer bg-dark bg-opacity-10 rounded">
														<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
													</div>
													<!--end::Link-->
												</div>
												<!--end::Item-->
											</div>
										</div>
										<!--end::Timeline details-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
													<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mb-10 mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">New case
											<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="overflow-auto pb-5">
												<!--begin::Wrapper-->
												<div class="d-flex align-items-center mt-1 fs-6">
													<!--begin::Info-->
													<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
													<!--end::Info-->
													<!--begin::User-->
													<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
													<!--end::User-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
								<!--begin::Timeline item-->
								<div class="timeline-item">
									<!--begin::Timeline line-->
									<div class="timeline-line w-40px"></div>
									<!--end::Timeline line-->
									<!--begin::Timeline icon-->
									<div class="timeline-icon symbol symbol-circle symbol-40px">
										<div class="symbol-label bg-light">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-500">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
													<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
													<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Timeline icon-->
									<!--begin::Timeline content-->
									<div class="timeline-content mt-n1">
										<!--begin::Timeline heading-->
										<div class="pe-3 mb-5">
											<!--begin::Title-->
											<div class="fs-5 fw-semibold mb-2">New order
											<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
												<!--end::User-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Timeline heading-->
									</div>
									<!--end::Timeline content-->
								</div>
								<!--end::Timeline item-->
							</div>
							<!--end::Timeline-->
						</div>
						<!--end::Tab panel-->
					</div>
					<!--end::Tab Content-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Timeline-->
		</div>
		<!--end::Content-->
		<!--begin::End sidebar-->
		<div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true" data-kt-drawer-name="end-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_social_end_sidebar_toggle">
			<!--begin::Social widget 1-->
			<div class="card mb-5 mb-xl-8">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-dark">Suggestions for you</span>
						<span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
					</h3>
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
							<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
							<span class="svg-icon svg-icon-1">
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
				<div class="card-body pt-5">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-40px me-5">
							<img src="assets/media/avatars/300-11.jpg" class="h-50 align-self-center" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
								<span class="text-muted fw-semibold d-block fs-7">Barone LLC.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
							<!--end:Action-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-4"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-40px me-5">
							<img src="assets/media/avatars/300-2.jpg" class="h-50 align-self-center" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Annette Black</a>
								<span class="text-muted fw-semibold d-block fs-7">Binford Ltd.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
							<!--end:Action-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-4"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-40px me-5">
							<img src="assets/media/avatars/300-7.jpg" class="h-50 align-self-center" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Devon Lane</a>
								<span class="text-muted fw-semibold d-block fs-7">Acme Co.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
							<!--end:Action-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-4"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-40px me-5">
							<img src="assets/media/avatars/300-9.jpg" class="h-50 align-self-center" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Kristin Watson</a>
								<span class="text-muted fw-semibold d-block fs-7">Biffco Enterprises Ltd.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
							<!--end:Action-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-4"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-40px me-5">
							<img src="assets/media/avatars/300-12.jpg" class="h-50 align-self-center" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Eleanor Pena</a>
								<span class="text-muted fw-semibold d-block fs-7">Abstergo Ltd.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
							<!--end:Action-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Social widget 1-->
			<!--begin::Social widget 2-->
			<div class="card card-flush mb-5 mb-xl-8">
				<!--begin::Header-->
				<div class="card-header pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-dark">Trending Feeds</span>
						<span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
					</h3>
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<a href="/admin/pages/social/activity" class="btn btn-sm btn-light">View All</a>
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin::Row-->
					<div class="row g-3 g-lg-6">
						<!--begin::Col-->
						<div class="col-md-6">
							<!--begin::Img-->
							<a href="">
								<img src="assets/media/stock/600x600/img-33.jpg" class="rounded w-100" alt="" />
							</a>
							<!--end::Img-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6">
							<!--begin::Img-->
							<a href="">
								<img src="assets/media/stock/600x600/img-26.jpg" class="rounded w-100" alt="" />
							</a>
							<!--end::Img-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6">
							<!--begin::Img-->
							<a href="">
								<img src="assets/media/stock/600x600/img-25.jpg" class="rounded w-100" alt="" />
							</a>
							<!--end::Img-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6">
							<!--begin::Img-->
							<a href="">
								<img src="assets/media/stock/600x600/img-35.jpg" class="rounded w-100" alt="" />
							</a>
							<!--end::Img-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Social widget 2-->
		</div>
		<!--end::End sidebar-->
	</div>
	<!--end::Social - Activity-->
</div>
@endsection
