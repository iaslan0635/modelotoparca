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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Overview</h1>
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
					<li class="breadcrumb-item text-muted">Support Center</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f08fc8aef7">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f08fc8aef7" data-allow-clear="true">
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
			<!--begin::Hero card-->
			<div class="card mb-12">
				<!--begin::Hero body-->
				<div class="card-body flex-column p-5">
					<!--begin::Hero content-->
					<div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
							<!--begin::Title-->
							<h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">How Can We Help You?</h1>
							<!--end::Title-->
							<!--begin::Input group-->
							<div class="position-relative w-100">
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-primary position-absolute top-50 translate-middle ms-8">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" name="search" value="" placeholder="Ask a question" />
							</div>
							<!--end::Input group-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Wrapper-->
						<div class="flex-equal d-flex justify-content-center align-items-end ms-5">
							<!--begin::Illustration-->
							<img src="assets/media/illustrations/sketchy-1/20.png" alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12" />
							<!--end::Illustration-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Hero content-->
					<!--begin::Hero nav-->
					<div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
						<!--begin::Nav-->
						<ul class="nav flex-wrap border-transparent fw-bold">
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="admin/apps/support-center/overview">Overview</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/tickets/list">tickets</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/tutorials/list">Tutorials</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/faq">FAQ</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/licenses">Licenses</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/contact">Contact US</a>
							</li>
							<!--end::Nav item-->
						</ul>
						<!--end::Nav-->
						<!--begin::Action-->
						<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-primary fw-bold fs-8 fs-lg-base">Create Ticket</a>
						<!--end::Action-->
					</div>
					<!--end::Hero nav-->
				</div>
				<!--end::Hero body-->
			</div>
			<!--end::Hero card-->
			<!--begin::Row-->
			<div class="row gy-0 mb-6 mb-xl-12">
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card card-md-stretch me-xl-3 mb-md-0 mb-6">
						<!--begin::Body-->
						<div class="card-body p-10 p-lg-15">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-7">
								<!--begin::Title-->
								<h1 class="fw-bold text-dark">Popular Tickets</h1>
								<!--end::Title-->
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Link-->
									<a href="https://keenthemes.com/support" class="text-primary fw-bold me-1">Support</a>
									<!--begin::Link-->
									<!--begin::Arrow-->
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-primary">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Arrow-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Header-->
							<!--begin::Accordion-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_1_1">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">What admin theme does?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-block">React</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_1_1" class="collapse show fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_1_2">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How Extended Licese works?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-block">Laravel</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_1_2" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_1_3">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How to install on a local machine?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-block">VueJS</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_1_3" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_1_4">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How can I import Google fonts?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-block">Angular 9</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_1_4" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_1_5">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How long the license is valid?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-block">Bootstrap 5</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_1_5" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_1_6">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How many end projects I can build?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-block">PHP</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_1_6" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--end::Accordion-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card card-md-stretch ms-xl-3">
						<!--begin::Body-->
						<div class="card-body p-10 p-lg-15">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-7">
								<!--begin::Title-->
								<h1 class="fw-bold text-dark">FAQ</h1>
								<!--end::Title-->
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Link-->
									<a href="https://keenthemes.com/faqs" class="text-primary fw-bold me-1">Full FAQ</a>
									<!--begin::Link-->
									<!--begin::Arrow-->
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-primary">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Arrow-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Header-->
							<!--begin::Accordion-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_1">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">What admin theme does?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">Bootstrap</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_2_1" class="collapse show fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="d-none"></a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_2">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How Extended Licese works?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">General</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_2_2" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="d-none"></a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_3">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How to install on a local machine?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">React</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_2_3" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="d-none"></a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_4">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How can I import Google fonts?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">Angular</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_2_4" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="d-none"></a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_5">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How long the license is valid?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">Webpack</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_2_5" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="d-none"></a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_6">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How many end projects I can build?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">Laravel</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_2_6" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="d-none"></a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--end::Accordion-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row gy-0 mb-6 mb-xl-12">
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card card-md-stretch me-xl-3 mb-md-0 mb-6">
						<!--begin::Body-->
						<div class="card-body p-10 p-lg-15">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-7">
								<!--begin::Title-->
								<h1 class="fw-bold text-dark">Tutorials</h1>
								<!--end::Title-->
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Link-->
									<a href="admin/apps/support-center/tutorials/list" class="text-primary fw-bold me-1">All Tutorials</a>
									<!--begin::Link-->
									<!--begin::Arrow-->
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-primary">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Arrow-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Header-->
							<!--begin::Accordion-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_3_1">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">What admin theme does?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">Bootstrap</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_3_1" class="collapse show fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_3_2">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How Extended Licese works?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">General</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_3_2" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_3_3">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How to install on a local machine?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">React</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_3_3" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_3_4">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How can I import Google fonts?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">VueJS</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_3_4" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--begin::Section-->
							<div class="m-0">
								<!--begin::Heading-->
								<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_3_5">
									<!--begin::Icon-->
									<div class="ms-n1 me-5">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
										<span class="svg-icon toggle-off svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Icon-->
									<!--begin::Section-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">How long the license is valid?</h3>
										<!--end::Title-->
										<!--begin::Label-->
										<span class="badge badge-light my-1 d-none">Angular</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div id="kt_support_3_5" class="collapse fs-6 ms-10">
									<!--begin::Block-->
									<div class="mb-4">
										<!--begin::Text-->
										<span class="text-muted fw-semibold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
										<!--end::Text-->
										<!--begin::Link-->
										<a href="#" class="fs-5 link-primary fw-semibold">Check Out</a>
										<!--end::Link-->
									</div>
									<!--end::Block-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Body-->
							<!--end::Accordion-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card card-md-stretch ms-xl-3">
						<!--begin::Body-->
						<div class="card-body pp-10 p-lg-15">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-7">
								<!--begin::Title-->
								<h1 class="fw-bold text-dark">Videos</h1>
								<!--end::Title-->
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Link-->
									<a href="https://www.youtube.com/c/KeenThemesTuts/videos" target="_blank" class="text-primary fw-bold me-1">All Videos</a>
									<!--begin::Link-->
									<!--begin::Arrow-->
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-primary">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Arrow-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Header-->
							<!--begin::Video-->
							<div class="mb-3">
								<iframe class="embed-responsive-item card-rounded h-275px w-100" src="https://www.youtube.com/embed/TWdDZYNqlg4" allowfullscreen="allowfullscreen"></iframe>
							</div>
							<!--end::Video-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Products Documentations-->
			<div class="card mb-2">
				<!--begin::Card body-->
				<div class="card-body p-10 p-lg-15">
					<!--begin::Title-->
					<h1 class="fw-bold text-dark mb-12 ps-0">Products Documentations</h1>
					<!--end::Title-->
					<!--begin::Row-->
					<div class="row">
						<!--begin::Col-->
						<div class="col-sm-4">
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
								<span class="svg-icon svg-icon-2 ms-n1 me-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Subtitle-->
								<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">Free Admin Dashboard</a>
								<!--end::Subtitle-->
							</div>
							<!--begin::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
								<span class="svg-icon svg-icon-2 ms-n1 me-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Subtitle-->
								<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">Bootstrap 5 Admin Template</a>
								<!--end::Subtitle-->
							</div>
							<!--begin::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
								<span class="svg-icon svg-icon-2 ms-n1 me-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Subtitle-->
								<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">Google Admin Dashboard</a>
								<!--end::Subtitle-->
							</div>
							<!--begin::Item-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-sm-4">
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
								<span class="svg-icon svg-icon-2 ms-n1 me-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Subtitle-->
								<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">Free Vector Laravel Starter Kit</a>
								<!--end::Subtitle-->
							</div>
							<!--begin::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
								<span class="svg-icon svg-icon-2 ms-n1 me-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Subtitle-->
								<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">React Admin Dashboard</a>
								<!--end::Subtitle-->
							</div>
							<!--begin::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
								<span class="svg-icon svg-icon-2 ms-n1 me-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Subtitle-->
								<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">HTML Admin Dashboard</a>
								<!--end::Subtitle-->
							</div>
							<!--begin::Item-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-sm-4">
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
								<span class="svg-icon svg-icon-2 ms-n1 me-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Subtitle-->
								<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">Best VueJS Admin Template</a>
								<!--end::Subtitle-->
							</div>
							<!--begin::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
								<span class="svg-icon svg-icon-2 ms-n1 me-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Subtitle-->
								<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">Forest Front-end Template</a>
								<!--end::Subtitle-->
							</div>
							<!--begin::Item-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Products Documentations-->
			<!--begin::Modal - Support Center - Create Ticket-->
			<div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-750px">
					<!--begin::Modal content-->
					<div class="modal-content rounded">
						<!--begin::Modal header-->
						<div class="modal-header pb-0 border-0 justify-content-end">
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--begin::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
							<!--begin:Form-->
							<form id="kt_modal_new_ticket_form" class="form" action="#">
								<!--begin::Heading-->
								<div class="mb-13 text-center">
									<!--begin::Title-->
									<h1 class="mb-3">Create Ticket</h1>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-gray-400 fw-semibold fs-5">If you need more info, please check
									<a href="" class="fw-bold link-primary">Support Guidelines</a>.</div>
									<!--end::Description-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-8 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
										<span class="required">Subject</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a subject for your issue"></i>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid" placeholder="Enter your ticket subject" name="subject" />
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-semibold mb-2">Product</label>
										<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a product" name="product">
											<option value="">Select a product...</option>
											<option value="1">HTML Theme</option>
											<option value="1">Angular App</option>
											<option value="1">Vue App</option>
											<option value="1">React Theme</option>
											<option value="1">Figma UI Kit</option>
											<option value="3">Laravel App</option>
											<option value="4">Blazor App</option>
											<option value="5">Django App</option>
										</select>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-semibold mb-2">Assign</label>
										<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="user">
											<option value="">Select a user...</option>
											<option value="1">Karina Clark</option>
											<option value="2">Robert Doe</option>
											<option value="3">Niel Owen</option>
											<option value="4">Olivia Wild</option>
											<option value="5">Sean Bean</option>
										</select>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-semibold mb-2">Status</label>
										<select class="form-select form-select-solid" data-control="select2" data-placeholder="Open" data-hide-search="true">
											<option value=""></option>
											<option value="1" selected="selected">Open</option>
											<option value="2">Pending</option>
											<option value="3">Resolved</option>
											<option value="3">Closed</option>
										</select>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-semibold mb-2">Due Date</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<div class="symbol symbol-20px me-4 position-absolute ms-4">
												<span class="symbol-label bg-secondary">
													<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
													<span class="svg-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
															<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
															<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
															<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-8 fv-row">
									<label class="fs-6 fw-semibold mb-2">Description</label>
									<textarea class="form-control form-control-solid" rows="4" name="description" placeholder="Type your ticket description"></textarea>
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-8">
									<label class="fs-6 fw-semibold mb-2">Attachments</label>
									<!--begin::Dropzone-->
									<div class="dropzone" id="kt_modal_create_ticket_attachments">
										<!--begin::Message-->
										<div class="dz-message needsclick align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
											<span class="svg-icon svg-icon-3hx svg-icon-primary">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z" fill="currentColor" />
													<path d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z" fill="currentColor" />
													<path d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z" fill="currentColor" />
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-4">
												<h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
												<span class="fw-semibold fs-7 text-gray-400">Upload up to 10 files</span>
											</div>
											<!--end::Info-->
										</div>
									</div>
									<!--end::Dropzone-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-15 fv-row">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="fw-semibold me-5">
											<label class="fs-6">Notifications</label>
											<div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
										</div>
										<!--end::Label-->
										<!--begin::Checkboxes-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-10">
												<input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked" />
												<span class="form-check-label fw-semibold">Email</span>
											</label>
											<!--end::Checkbox-->
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid">
												<input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone" />
												<span class="form-check-label fw-semibold">Phone</span>
											</label>
											<!--end::Checkbox-->
										</div>
										<!--end::Checkboxes-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center">
									<button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end:Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Support Center - Create Ticket-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('styles')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endpush
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
@push('custom_scripts')
<script src="assets/js/custom/apps/support-center/tickets/create.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
