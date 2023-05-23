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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Social Settings</h1>
				<!--end::Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="admin/dist/index" class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Social</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Filter menu-->
				<div class="m-0">
					<!--begin::Menu toggle-->
					<a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
					<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
					<span class="svg-icon svg-icon-6 svg-icon-muted me-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->Filter</a>
					<!--end::Menu toggle-->
					<!--begin::Menu 1-->
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f08d0ab94c">
						<!--begin::Header-->
						<div class="px-7 py-5">
							<div class="fs-5 text-dark fw-bold">Filter Options</div>
						</div>
						<!--end::Header-->
						<!--begin::Menu separator-->
						<div class="separator border-gray-200"></div>
						<!--end::Menu separator-->
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-semibold">Status:</label>
								<!--end::Label-->
								<!--begin::Input-->
								<div>
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f08d0ab94c" data-allow-clear="true">
										<option></option>
										<option value="1">Approved</option>
										<option value="2">Pending</option>
										<option value="2">In Process</option>
										<option value="2">Rejected</option>
									</select>
								</div>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-semibold">Member Type:</label>
								<!--end::Label-->
								<!--begin::Options-->
								<div class="d-flex">
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" value="1" />
										<span class="form-check-label">Author</span>
									</label>
									<!--end::Options-->
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="2" checked="checked" />
										<span class="form-check-label">Customer</span>
									</label>
									<!--end::Options-->
								</div>
								<!--end::Options-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-semibold">Notifications:</label>
								<!--end::Label-->
								<!--begin::Switch-->
								<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
									<label class="form-check-label">Enabled</label>
								</div>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end">
								<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
								<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Form-->
					</div>
					<!--end::Menu 1-->
				</div>
				<!--end::Filter menu-->
				<!--begin::Secondary button-->
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
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
			<!--begin::Social - Settings -->
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
									<a href="admin/dist/pages/user-profile/overview" class="text-gray-800 fw-bold text-hover-primary fs-4">Jerry Kane</a>
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
										<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="admin/dist/pages/social/feeds">
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
										<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="admin/dist/pages/social/activity">
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
										<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="admin/dist/pages/social/followers">
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
										<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="admin/dist/pages/social/settings">
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
					<!--begin::Connected Accounts-->
					<div class="card mb-5 mb-xl-10">
						<!--begin::Card header-->
						<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
							<div class="card-title m-0">
								<h3 class="fw-bold m-0">Connected Accounts</h3>
							</div>
						</div>
						<!--end::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_connected_accounts" class="collapse show">
							<!--begin::Card body-->
							<div class="card-body border-top p-9">
								<!--begin::Notice-->
								<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
									<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
											<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1">
										<!--begin::Content-->
										<div class="fw-semibold">
											<div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code.
											<a href="#" class="fw-bold">Learn More</a></div>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Notice-->
								<!--begin::Items-->
								<div class="py-2">
									<!--begin::Item-->
									<div class="d-flex flex-stack">
										<div class="d-flex">
											<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
											<div class="d-flex flex-column">
												<a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Google</a>
												<div class="fs-6 fw-semibold text-gray-400">Plan properly your workflow</div>
											</div>
										</div>
										<div class="d-flex justify-content-end">
											<div class="form-check form-check-solid form-check-custom form-switch">
												<input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />
												<label class="form-check-label" for="googleswitch"></label>
											</div>
										</div>
									</div>
									<!--end::Item-->
									<div class="separator separator-dashed my-5"></div>
									<!--begin::Item-->
									<div class="d-flex flex-stack">
										<div class="d-flex">
											<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
											<div class="d-flex flex-column">
												<a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>
												<div class="fs-6 fw-semibold text-gray-400">Keep eye on on your Repositories</div>
											</div>
										</div>
										<div class="d-flex justify-content-end">
											<div class="form-check form-check-solid form-check-custom form-switch">
												<input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked" />
												<label class="form-check-label" for="githubswitch"></label>
											</div>
										</div>
									</div>
									<!--end::Item-->
									<div class="separator separator-dashed my-5"></div>
									<!--begin::Item-->
									<div class="d-flex flex-stack">
										<div class="d-flex">
											<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
											<div class="d-flex flex-column">
												<a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Slack</a>
												<div class="fs-6 fw-semibold text-gray-400">Integrate Projects Discussions</div>
											</div>
										</div>
										<div class="d-flex justify-content-end">
											<div class="form-check form-check-solid form-check-custom form-switch">
												<input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" />
												<label class="form-check-label" for="slackswitch"></label>
											</div>
										</div>
									</div>
									<!--end::Item-->
								</div>
								<!--end::Items-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<div class="card-footer d-flex justify-content-end py-6 px-9">
								<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
								<button class="btn btn-primary">Save Changes</button>
							</div>
							<!--end::Card footer-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Connected Accounts-->
					<!--begin::Notifications-->
					<div class="card mb-5 mb-xl-10">
						<!--begin::Card header-->
						<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">
							<div class="card-title m-0">
								<h3 class="fw-bold m-0">Notifications</h3>
							</div>
						</div>
						<!--begin::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_notifications" class="collapse show">
							<!--begin::Form-->
							<form class="form">
								<!--begin::Card body-->
								<div class="card-body border-top px-9 pt-3 pb-4">
									<!--begin::Table-->
									<div class="table-responsive">
										<table class="table table-row-dashed border-gray-300 align-middle gy-6">
											<tbody class="fs-6 fw-semibold">
												<!--begin::Table row-->
												<tr>
													<td class="min-w-250px fs-4 fw-bold">Notifications</td>
													<td class="w-125px">
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
															<label class="form-check-label ps-2" for="kt_settings_notification_email">Email</label>
														</div>
													</td>
													<td class="w-125px">
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
															<label class="form-check-label ps-2" for="kt_settings_notification_phone">Phone</label>
														</div>
													</td>
												</tr>
												<!--begin::Table row-->
												<!--begin::Table row-->
												<tr>
													<td>Billing Updates</td>
													<td>
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" id="billing1" checked="checked" data-kt-settings-notification="email" />
															<label class="form-check-label ps-2" for="billing1"></label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="billing2" checked="checked" data-kt-settings-notification="phone" />
															<label class="form-check-label ps-2" for="billing2"></label>
														</div>
													</td>
												</tr>
												<!--begin::Table row-->
												<!--begin::Table row-->
												<tr>
													<td>New Team Members</td>
													<td>
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="team1" checked="checked" data-kt-settings-notification="email" />
															<label class="form-check-label ps-2" for="team1"></label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="team2" data-kt-settings-notification="phone" />
															<label class="form-check-label ps-2" for="team2"></label>
														</div>
													</td>
												</tr>
												<!--begin::Table row-->
												<!--begin::Table row-->
												<tr>
													<td>Completed Projects</td>
													<td>
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="project1" data-kt-settings-notification="email" />
															<label class="form-check-label ps-2" for="project1"></label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="project2" checked="checked" data-kt-settings-notification="phone" />
															<label class="form-check-label ps-2" for="project2"></label>
														</div>
													</td>
												</tr>
												<!--begin::Table row-->
												<!--begin::Table row-->
												<tr>
													<td class="border-bottom-0">Newsletters</td>
													<td class="border-bottom-0">
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="newsletter1" data-kt-settings-notification="email" />
															<label class="form-check-label ps-2" for="newsletter1"></label>
														</div>
													</td>
													<td class="border-bottom-0">
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="newsletter2" data-kt-settings-notification="phone" />
															<label class="form-check-label ps-2" for="newsletter2"></label>
														</div>
													</td>
												</tr>
												<!--begin::Table row-->
											</tbody>
										</table>
									</div>
									<!--end::Table-->
								</div>
								<!--end::Card body-->
								<!--begin::Card footer-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
									<button class="btn btn-primary px-6">Save Changes</button>
								</div>
								<!--end::Card footer-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Notifications-->
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
										<a href="admin/dist/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
										<span class="text-muted fw-semibold d-block fs-7">Barone LLC.</span>
									</div>
									<!--end:Author-->
									<!--begin:Action-->
									<a href="admin/dist/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
										<a href="admin/dist/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Annette Black</a>
										<span class="text-muted fw-semibold d-block fs-7">Binford Ltd.</span>
									</div>
									<!--end:Author-->
									<!--begin:Action-->
									<a href="admin/dist/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
										<a href="admin/dist/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Devon Lane</a>
										<span class="text-muted fw-semibold d-block fs-7">Acme Co.</span>
									</div>
									<!--end:Author-->
									<!--begin:Action-->
									<a href="admin/dist/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
										<a href="admin/dist/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Kristin Watson</a>
										<span class="text-muted fw-semibold d-block fs-7">Biffco Enterprises Ltd.</span>
									</div>
									<!--end:Author-->
									<!--begin:Action-->
									<a href="admin/dist/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
										<a href="admin/dist/pages/user-profile/overview" class="text-gray-800 text-hover-primary fs-6 fw-bold">Eleanor Pena</a>
										<span class="text-muted fw-semibold d-block fs-7">Abstergo Ltd.</span>
									</div>
									<!--end:Author-->
									<!--begin:Action-->
									<a href="admin/dist/pages/user-profile/overview" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
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
								<a href="admin/dist/pages/social/activity" class="btn btn-sm btn-light">View All</a>
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
			<!--end::Social - Settings-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
