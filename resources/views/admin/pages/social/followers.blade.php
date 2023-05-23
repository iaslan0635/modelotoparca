@extends('admin.layout')
@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
	<!--begin::Social - Followers -->
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
							<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-4">Jerry Kane</a>
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
								<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="/admin/pages/social/feeds.html">
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
								<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="/admin/pages/social/activity.html">
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
								<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="/admin/pages/social/followers.html">
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
								<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="/admin/pages/social/settings.html">
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
			<!--begin::List widget 14-->
			<div class="card card-flush">
				<!--begin::Header-->
				<div class="card-header pt-5">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-dark">Timeline</span>
						<span class="text-gray-400 pt-2 fw-semibold fs-6">Latest activities</span>
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
				<div class="card-body pt-6">
					<!--begin::Timeline-->
					<div class="timeline-label">
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-gray-600 fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="fw-semibold text-gray-700 ps-3 fs-7">Outlines keep you honest. Indulging in poorly driving and keep structure</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item d-flex align-items-center">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-success fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Content-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 px-3">AEOL meeting with</span>
								<!--begin::Avatar-->
								<div class="symbol symbol-35px me-3">
									<img src="assets/media/avatars/300-1.jpg" alt="" />
								</div>
								<!--end::Avatar-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px">
									<img src="assets/media/avatars/300-2.jpg" alt="" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-danger fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Desc-->
							<div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
							<a href="#" class="text-primary">USD 700</a>. to ESL</div>
							<!--end::Desc-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-primary fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="fw-semibold text-gray-700 ps-3 fs-7">Outlines keep you honest. Indulging in poorly driving and keep structure keep you honest great</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-warning fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Desc-->
							<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
							<a href="#" class="text-primary">#XF-2356</a>.</div>
							<!--end::Desc-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-info fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="fw-semibold text-gray-700 ps-3 fs-7">Outlines keep you honest. Indulging in poorly driving and keep structure</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-danger fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Desc-->
							<div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
							<a href="#" class="text-primary">USD 700</a>. to ESL</div>
							<!--end::Desc-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Timeline-->
				</div>
				<!--end: Card Body-->
			</div>
			<!--end: List widget 14-->
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
			<!--begin::Followers toolbar-->
			<div class="d-flex flex-wrap flex-stack mb-6">
				<!--begin::Title-->
				<h3 class="text-gray-800 fw-bold my-2">My Connections
				<span class="fs-6 text-gray-400 fw-semibold ms-1">(29)</span></h3>
				<!--end::Title-->
				<!--begin::Controls-->
				<div class="d-flex my-2">
					<!--begin::Select-->
					<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body w-125px">
						<option value="Active" selected="selected">Active</option>
						<option value="Approved">In Progress</option>
						<option value="Declined">To Do</option>
						<option value="In Progress">Completed</option>
					</select>
					<!--end::Select-->
				</div>
				<!--end::Controls-->
			</div>
			<!--end::Followers toolbar-->
			<!--begin::Row-->
			<div class="row g-6 mb-6 g-xl-9 mb-xl-9">
				<!--begin::Followers-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-11.jpg" alt="image" />
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Following</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-6.jpg" alt="image" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director at Seal Inc.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Follow</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">System Arcitect at Wolto Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Following</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Following</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Accountant at Numbers Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Follow</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Developer at Loop Inc</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Follow</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-1.jpg" alt="image" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Kitona Johnson</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Web Designer at Nextop Ltd.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Following</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-14.jpg" alt="image" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Robert Doe</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Marketing Analytic at Avito Ltd.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Follow</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-12.jpg" alt="image" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Soul Jacob</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Follow</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-7.jpg" alt="image" />
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Nina Strong</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">CTO at Kilp Ltd.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Following</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-11.jpg" alt="image" />
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Following</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-6.jpg" alt="image" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director at Seal Inc.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Follow</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--end::Followers-->
			</div>
			<!--end::Row-->
			<!--begin::Row(for show more)-->
			<div class="row g-6 mb-6 g-xl-9 mb-xl-9 d-none" id="kt_followers_show_more_cards">
				<!--begin::Followers-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-11.jpg" alt="image" />
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Following</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<img src="assets/media//avatars/300-6.jpg" alt="image" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director at Seal Inc.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Follow</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">System Arcitect at Wolto Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Following</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Following</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Accountant at Numbers Co.</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Follow</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column py-9 px-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-65px symbol-circle mb-5">
								<span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
								<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Developer at Loop Inc</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light" data-kt-follow-btn="true">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon follow svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
								<span class="svg-icon following svg-icon-3 d-none">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
										<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Indicator label-->
								<span class="indicator-label">Follow</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<!--end::Follow-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--end::Followers-->
			</div>
			<!--end::Row-->
			<!--begin::Show more-->
			<div class="d-flex flex-center">
				<button class="btn btn-primary" id="kt_followers_show_more_button">
					<!--begin::Indicator label-->
					<span class="indicator-label">Show more</span>
					<!--end::Indicator label-->
					<!--begin::Indicator progress-->
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					<!--end::Indicator progress-->
				</button>
			</div>
			<!--end::Show more-->
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
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
								<span class="text-muted fw-semibold d-block fs-7">Barone LLC.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Annette Black</a>
								<span class="text-muted fw-semibold d-block fs-7">Binford Ltd.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Devon Lane</a>
								<span class="text-muted fw-semibold d-block fs-7">Acme Co.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Kristin Watson</a>
								<span class="text-muted fw-semibold d-block fs-7">Biffco Enterprises Ltd.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Eleanor Pena</a>
								<span class="text-muted fw-semibold d-block fs-7">Abstergo Ltd.</span>
							</div>
							<!--end:Author-->
							<!--begin:Action-->
							<a href="/admin/pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
						<a href="/admin/pages/social/activity.html" class="btn btn-sm btn-light">View All</a>
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
	<!--end::Social - Followers-->
</div>
@endsection
