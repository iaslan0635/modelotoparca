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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Faq</h1>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09040d95a">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09040d95a" data-allow-clear="true">
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
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/overview">Overview</a>
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
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="admin/apps/support-center/faq">FAQ</a>
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
			<!--begin::FAQ card-->
			<div class="card">
				<!--begin::Body-->
				<div class="card-body p-10 p-lg-15">
					<!--begin::Classic content-->
					<div class="mb-13">
						<!--begin::Intro-->
						<div class="mb-15">
							<!--begin::Title-->
							<h4 class="fs-2x text-gray-800 w-bolder mb-6">Frequesntly Asked Questions</h4>
							<!--end::Title-->
							<!--begin::Text-->
							<p class="fw-semibold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
							<!--end::Text-->
						</div>
						<!--end::Intro-->
						<!--begin::Row-->
						<div class="row mb-12">
							<!--begin::Col-->
							<div class="col-md-6 pe-md-10 mb-10 mb-md-0">
								<!--begin::Title-->
								<h2 class="text-gray-800 fw-bold mb-4">Buying Product</h2>
								<!--end::Title-->
								<!--begin::Accordion-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How does it work?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_4_1" class="collapse show fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_2">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Do I need a designer to use Admin Theme ?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_4_2" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_3">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What do I need to do to start selling?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_4_3" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_4">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How much does Extended license cost?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_4_4" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--end::Accordion-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-6 ps-md-10">
								<!--begin::Title-->
								<h2 class="text-gray-800 fw-bold mb-4">Installation</h2>
								<!--end::Title-->
								<!--begin::Accordion-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_1">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What platforms are compatible?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_5_1" class="collapse show fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_2">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How many people can it support?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_5_2" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_3">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How long is the warrianty?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_5_3" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_4">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How fast is the installation?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_5_4" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--end::Accordion-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row">
							<!--begin::Col-->
							<div class="col-md-6 pe-md-10 mb-10 mb-md-0">
								<!--begin::Title-->
								<h2 class="text-gray-800 w-bolder mb-4">User Roles</h2>
								<!--end::Title-->
								<!--begin::Accordion-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_1">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How does it work?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_6_1" class="collapse show fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_2">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Do I need a designer to use this Admin Theme?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_6_2" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_3">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What do I need to do to start selling?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_6_3" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_4">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How much does Extended license cost?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_6_4" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--end::Accordion-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-6 ps-md-10">
								<!--begin::Title-->
								<h2 class="text-gray-800 fw-bold mb-4">Reports Generation</h2>
								<!--end::Title-->
								<!--begin::Accordion-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_1">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What platforms are compatible?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_7_1" class="collapse show fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_2">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How many people can it support?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_7_2" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_3">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How long is the warrianty?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_7_3" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_4">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How fast is the installation?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_7_4" class="collapse fs-6 ms-1">
										<!--begin::Text-->
										<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--end::Accordion-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Classic content-->
					<!--begin::Section-->
					<div class="mb-17">
						<!--begin::Content-->
						<div class="d-flex flex-stack mb-5">
							<!--begin::Title-->
							<h3 class="text-dark">Video Tutorials</h3>
							<!--end::Title-->
							<!--begin::Link-->
							<a href="#" class="fs-6 fw-semibold link-primary">View All Videos</a>
							<!--end::Link-->
						</div>
						<!--end::Content-->
						<!--begin::Separator-->
						<div class="separator separator-dashed mb-9"></div>
						<!--end::Separator-->
						<!--begin::Row-->
						<div class="row g-10">
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Feature post-->
								<div class="card-xl-stretch me-md-6">
									<!--begin::Image-->
									<a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
										<img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
									</a>
									<!--end::Image-->
									<!--begin::Body-->
									<div class="m-0">
										<!--begin::Title-->
										<a href="admin/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
										<!--end::Text-->
										<!--begin::Content-->
										<div class="fs-6 fw-bold">
											<!--begin::Author-->
											<a href="admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Jane Miller</a>
											<!--end::Author-->
											<!--begin::Date-->
											<span class="text-muted">on Mar 21 2021</span>
											<!--end::Date-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Feature post-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Feature post-->
								<div class="card-xl-stretch mx-md-3">
									<!--begin::Image-->
									<a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-74.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
										<img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
									</a>
									<!--end::Image-->
									<!--begin::Body-->
									<div class="m-0">
										<!--begin::Title-->
										<a href="admin/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
										<!--end::Text-->
										<!--begin::Content-->
										<div class="fs-6 fw-bold">
											<!--begin::Author-->
											<a href="admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Cris Morgan</a>
											<!--end::Author-->
											<!--begin::Date-->
											<span class="text-muted">on Apr 14 2021</span>
											<!--end::Date-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Feature post-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Feature post-->
								<div class="card-xl-stretch ms-md-6">
									<!--begin::Image-->
									<a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-47.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/TWdDZYNqlg4">
										<img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
									</a>
									<!--end::Image-->
									<!--begin::Body-->
									<div class="m-0">
										<!--begin::Title-->
										<a href="admin/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
										<!--end::Text-->
										<!--begin::Content-->
										<div class="fs-6 fw-bold">
											<!--begin::Author-->
											<a href="admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Carles Nilson</a>
											<!--end::Author-->
											<!--begin::Date-->
											<span class="text-muted">on May 14 2021</span>
											<!--end::Date-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Feature post-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Section-->
					<!--begin::Card-->
					<div class="card mb-4 bg-light text-center">
						<!--begin::Body-->
						<div class="card-body py-12">
							<!--begin::Icon-->
							<a href="#" class="mx-4">
								<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="" />
							</a>
							<!--end::Icon-->
							<!--begin::Icon-->
							<a href="#" class="mx-4">
								<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="" />
							</a>
							<!--end::Icon-->
							<!--begin::Icon-->
							<a href="#" class="mx-4">
								<img src="assets/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="" />
							</a>
							<!--end::Icon-->
							<!--begin::Icon-->
							<a href="#" class="mx-4">
								<img src="assets/media/svg/brand-logos/behance.svg" class="h-30px my-2" alt="" />
							</a>
							<!--end::Icon-->
							<!--begin::Icon-->
							<a href="#" class="mx-4">
								<img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-30px my-2" alt="" />
							</a>
							<!--end::Icon-->
							<!--begin::Icon-->
							<a href="#" class="mx-4">
								<img src="assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="" />
							</a>
							<!--end::Icon-->
							<!--begin::Icon-->
							<a href="#" class="mx-4">
								<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2" alt="" />
							</a>
							<!--end::Icon-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::FAQ card-->
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
<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
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
