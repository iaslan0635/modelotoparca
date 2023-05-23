@extends('admin.layout')
@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Faq Classic</h1>
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
						<li class="breadcrumb-item text-muted">FAQ</li>
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09a0dc3ca">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09a0dc3ca" data-allow-clear="true">
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
				<!--begin::FAQ card-->
				<div class="card">
					<!--begin::Body-->
					<div class="card-body p-lg-15">
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
											<a href="admin/dist/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
											<!--end::Title-->
											<!--begin::Text-->
											<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
											<!--end::Text-->
											<!--begin::Content-->
											<div class="fs-6 fw-bold">
												<!--begin::Author-->
												<a href="admin/dist/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Jane Miller</a>
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
											<a href="admin/dist/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
											<!--end::Title-->
											<!--begin::Text-->
											<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
											<!--end::Text-->
											<!--begin::Content-->
											<div class="fs-6 fw-bold">
												<!--begin::Author-->
												<a href="admin/dist/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Cris Morgan</a>
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
											<a href="admin/dist/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
											<!--end::Title-->
											<!--begin::Text-->
											<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
											<!--end::Text-->
											<!--begin::Content-->
											<div class="fs-6 fw-bold">
												<!--begin::Author-->
												<a href="admin/dist/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Carles Nilson</a>
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
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<!--begin::Footer-->
	<div id="kt_app_footer" class="app-footer">
		<!--begin::Footer container-->
		<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-muted fw-semibold me-1">2022&copy;</span>
				<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
			</div>
			<!--end::Copyright-->
			<!--begin::Menu-->
			<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
				<li class="menu-item">
					<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
				</li>
				<li class="menu-item">
					<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
				</li>
				<li class="menu-item">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
				</li>
			</ul>
			<!--end::Menu-->
		</div>
		<!--end::Footer container-->
	</div>
	<!--end::Footer-->
</div>
@endsection
