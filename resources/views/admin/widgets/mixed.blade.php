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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Mixed</h1>
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
					<li class="breadcrumb-item text-muted">Widgets</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad296dd">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad296dd" data-allow-clear="true">
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
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 1-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Header-->
							<div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
								<!--begin::Heading-->
								<div class="d-flex flex-stack">
									<h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
									<div class="ms-1">
										<!--begin::Menu-->
										<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-primary border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
														<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
														<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
														<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													</g>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Menu 3-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="menu-item px-3">
												<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
											</div>
											<!--end::Heading-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Create Invoice</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Create Payment
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Generate Bill</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
												<a href="#" class="menu-link px-3">
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Plans</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Statements</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<!--end::Input-->
																<!--end::Label-->
																<span class="form-check-label text-muted fs-6">Recuring</span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-1">
												<a href="#" class="menu-link px-3">Settings</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 3-->
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Heading-->
								<!--begin::Balance-->
								<div class="d-flex text-center flex-column text-white pt-8">
									<span class="fw-semibold fs-7">You Balance</span>
									<span class="fw-bold fs-2x pt-1">$37,562.00</span>
								</div>
								<!--end::Balance-->
							</div>
							<!--end::Header-->
							<!--begin::Items-->
							<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-6">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
													<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
											<div class="text-gray-400 fw-semibold fs-7">100 Regions</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-6">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-1">
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
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
											<div class="text-gray-400 fw-semibold fs-7">Quarter 2/3</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-6">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/electronics/elc005.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M15 19H7C5.9 19 5 18.1 5 17V7C5 5.9 5.9 5 7 5H15C16.1 5 17 5.9 17 7V17C17 18.1 16.1 19 15 19Z" fill="currentColor" />
													<path d="M8.5 2H13.4C14 2 14.5 2.4 14.6 3L14.9 5H6.89999L7.2 3C7.4 2.4 7.9 2 8.5 2ZM7.3 21C7.4 21.6 7.9 22 8.5 22H13.4C14 22 14.5 21.6 14.6 21L14.9 19H6.89999L7.3 21ZM18.3 10.2C18.5 9.39995 18.5 8.49995 18.3 7.69995C18.2 7.29995 17.8 6.90002 17.3 6.90002H17V10.9H17.3C17.8 11 18.2 10.7 18.3 10.2Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
											<div class="text-gray-400 fw-semibold fs-7">80% Rate</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
													<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
													<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
													<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
											<div class="text-gray-400 fw-semibold fs-7">3090 Refunds</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 1-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 1-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Header-->
							<div class="px-9 pt-7 card-rounded h-275px w-100 bg-danger">
								<!--begin::Heading-->
								<div class="d-flex flex-stack">
									<h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
									<div class="ms-1">
										<!--begin::Menu-->
										<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-danger border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
														<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
														<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
														<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													</g>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Menu 3-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="menu-item px-3">
												<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
											</div>
											<!--end::Heading-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Create Invoice</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Create Payment
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Generate Bill</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
												<a href="#" class="menu-link px-3">
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Plans</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Statements</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<!--end::Input-->
																<!--end::Label-->
																<span class="form-check-label text-muted fs-6">Recuring</span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-1">
												<a href="#" class="menu-link px-3">Settings</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 3-->
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Heading-->
								<!--begin::Balance-->
								<div class="d-flex text-center flex-column text-white pt-8">
									<span class="fw-semibold fs-7">You Balance</span>
									<span class="fw-bold fs-2x pt-1">$37,562.00</span>
								</div>
								<!--end::Balance-->
							</div>
							<!--end::Header-->
							<!--begin::Items-->
							<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-6">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
													<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
											<div class="text-gray-400 fw-semibold fs-7">100 Regions</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-6">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-1">
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
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
											<div class="text-gray-400 fw-semibold fs-7">Quarter 2/3</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-6">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/electronics/elc005.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M15 19H7C5.9 19 5 18.1 5 17V7C5 5.9 5.9 5 7 5H15C16.1 5 17 5.9 17 7V17C17 18.1 16.1 19 15 19Z" fill="currentColor" />
													<path d="M8.5 2H13.4C14 2 14.5 2.4 14.6 3L14.9 5H6.89999L7.2 3C7.4 2.4 7.9 2 8.5 2ZM7.3 21C7.4 21.6 7.9 22 8.5 22H13.4C14 22 14.5 21.6 14.6 21L14.9 19H6.89999L7.3 21ZM18.3 10.2C18.5 9.39995 18.5 8.49995 18.3 7.69995C18.2 7.29995 17.8 6.90002 17.3 6.90002H17V10.9H17.3C17.8 11 18.2 10.7 18.3 10.2Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
											<div class="text-gray-400 fw-semibold fs-7">80% Rate</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
													<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
													<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
													<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
											<div class="text-gray-400 fw-semibold fs-7">3090 Refunds</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 1-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 1-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Header-->
							<div class="px-9 pt-7 card-rounded h-275px w-100 bg-success">
								<!--begin::Heading-->
								<div class="d-flex flex-stack">
									<h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
									<div class="ms-1">
										<!--begin::Menu-->
										<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-success border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
														<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
														<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
														<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													</g>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Menu 3-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="menu-item px-3">
												<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
											</div>
											<!--end::Heading-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Create Invoice</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Create Payment
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Generate Bill</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
												<a href="#" class="menu-link px-3">
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Plans</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Statements</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<!--end::Input-->
																<!--end::Label-->
																<span class="form-check-label text-muted fs-6">Recuring</span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-1">
												<a href="#" class="menu-link px-3">Settings</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 3-->
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Heading-->
								<!--begin::Balance-->
								<div class="d-flex text-center flex-column text-white pt-8">
									<span class="fw-semibold fs-7">You Balance</span>
									<span class="fw-bold fs-2x pt-1">$37,562.00</span>
								</div>
								<!--end::Balance-->
							</div>
							<!--end::Header-->
							<!--begin::Items-->
							<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-6">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
													<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
											<div class="text-gray-400 fw-semibold fs-7">100 Regions</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-6">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-1">
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
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
											<div class="text-gray-400 fw-semibold fs-7">Quarter 2/3</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center mb-6">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/electronics/elc005.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M15 19H7C5.9 19 5 18.1 5 17V7C5 5.9 5.9 5 7 5H15C16.1 5 17 5.9 17 7V17C17 18.1 16.1 19 15 19Z" fill="currentColor" />
													<path d="M8.5 2H13.4C14 2 14.5 2.4 14.6 3L14.9 5H6.89999L7.2 3C7.4 2.4 7.9 2 8.5 2ZM7.3 21C7.4 21.6 7.9 22 8.5 22H13.4C14 22 14.5 21.6 14.6 21L14.9 19H6.89999L7.3 21ZM18.3 10.2C18.5 9.39995 18.5 8.49995 18.3 7.69995C18.2 7.29995 17.8 6.90002 17.3 6.90002H17V10.9H17.3C17.8 11 18.2 10.7 18.3 10.2Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
											<div class="text-gray-400 fw-semibold fs-7">80% Rate</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-45px w-40px me-5">
										<span class="symbol-label bg-lighten">
											<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
													<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
													<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
													<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Description-->
									<div class="d-flex align-items-center flex-wrap w-100">
										<!--begin::Title-->
										<div class="mb-1 pe-3 flex-grow-1">
											<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
											<div class="text-gray-400 fw-semibold fs-7">3090 Refunds</div>
										</div>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="d-flex align-items-center">
											<div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Label-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 1-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 2-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 bg-info py-5">
							<h3 class="card-title fw-bold text-white">Sales Statistics</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Chart-->
							<div class="mixed-widget-2-chart card-rounded-bottom bg-info" data-kt-color="info" style="height: 200px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-p mt-n20 position-relative">
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
										<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
												<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
												<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
												<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
										<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
												<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
												<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col bg-light-success px-6 py-8 rounded-2">
										<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
												<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 2-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 2-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 bg-danger py-5">
							<h3 class="card-title fw-bold text-white">Sales Statistics</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Chart-->
							<div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-p mt-n20 position-relative">
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
										<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
												<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
												<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
												<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
										<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
												<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
												<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col bg-light-success px-6 py-8 rounded-2">
										<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
												<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 2-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 2-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 bg-primary py-5">
							<h3 class="card-title fw-bold text-white">Sales Statistics</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Chart-->
							<div class="mixed-widget-2-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 200px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-p mt-n20 position-relative">
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
										<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
												<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
												<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
												<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
										<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
												<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
												<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col bg-light-success px-6 py-8 rounded-2">
										<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
												<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 2-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 12-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 bg-info py-5">
							<h3 class="card-title fw-bold text-white">Sales Progress</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Chart-->
							<div class="mixed-widget-12-chart card-rounded-bottom bg-info" data-kt-color="info" style="height: 250px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
								<!--begin::Row-->
								<div class="row g-0 mb-7">
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Avarage Sale</div>
										<div class="fs-2 fw-bold text-gray-800">$650</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Comissions</div>
										<div class="fs-2 fw-bold text-gray-800">$29,500</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Revenue</div>
										<div class="fs-2 fw-bold text-gray-800">$55,000</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Expenses</div>
										<div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 12-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 12-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 bg-danger py-5">
							<h3 class="card-title fw-bold text-white">Sales Progress</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Chart-->
							<div class="mixed-widget-12-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 250px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
								<!--begin::Row-->
								<div class="row g-0 mb-7">
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Avarage Sale</div>
										<div class="fs-2 fw-bold text-gray-800">$650</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Comissions</div>
										<div class="fs-2 fw-bold text-gray-800">$29,500</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Revenue</div>
										<div class="fs-2 fw-bold text-gray-800">$55,000</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Expenses</div>
										<div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 12-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 12-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 bg-primary py-5">
							<h3 class="card-title fw-bold text-white">Sales Progress</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Chart-->
							<div class="mixed-widget-12-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 250px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
								<!--begin::Row-->
								<div class="row g-0 mb-7">
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Avarage Sale</div>
										<div class="fs-2 fw-bold text-gray-800">$650</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Comissions</div>
										<div class="fs-2 fw-bold text-gray-800">$29,500</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Revenue</div>
										<div class="fs-2 fw-bold text-gray-800">$55,000</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col mx-5">
										<div class="fs-6 text-gray-400">Expenses</div>
										<div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 12-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 8-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Heading-->
							<div class="d-flex flex-stack">
								<!--begin:Info-->
								<div class="d-flex align-items-center">
									<!--begin:Image-->
									<div class="symbol symbol-60px me-5">
										<span class="symbol-label bg-danger-light">
											<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
										</span>
									</div>
									<!--end:Image-->
									<!--begin:Title-->
									<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
										<a href="#" class="text-dark fw-bold text-hover-primary fs-5">Monthly Subscription</a>
										<span class="text-muted fw-bold">Due: 27 Apr 2020</span>
									</div>
									<!--end:Title-->
								</div>
								<!--begin:Info-->
								<!--begin:Menu-->
								<div class="ms-1">
									<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
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
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Heading-->
							<!--begin:Stats-->
							<div class="d-flex flex-column w-100 mt-12">
								<span class="text-dark me-2 fw-bold pb-3">Progress</span>
								<div class="progress h-5px w-100">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end:Stats-->
							<!--begin:Team-->
							<div class="d-flex flex-column mt-10">
								<div class="text-dark me-2 fw-bold pb-4">Team</div>
								<div class="d-flex">
									<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
										<img src="assets/media/avatars/300-6.jpg" alt="" />
									</a>
									<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
										<img src="assets/media/avatars/300-5.jpg" alt="" />
									</a>
									<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
										<img src="assets/media/avatars/300-9.jpg" alt="" />
									</a>
									<a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
										<img src="assets/media/avatars/300-10.jpg" alt="" />
									</a>
								</div>
							</div>
							<!--end:Team-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 8-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 8-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Heading-->
							<div class="d-flex flex-stack">
								<!--begin:Info-->
								<div class="d-flex align-items-center">
									<!--begin:Image-->
									<div class="symbol symbol-60px me-5">
										<span class="symbol-label bg-primary-light">
											<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
										</span>
									</div>
									<!--end:Image-->
									<!--begin:Title-->
									<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
										<a href="#" class="text-dark fw-bold text-hover-primary fs-5">Monthly Subscription</a>
										<span class="text-muted fw-bold">Due: 27 Apr 2020</span>
									</div>
									<!--end:Title-->
								</div>
								<!--begin:Info-->
								<!--begin:Menu-->
								<div class="ms-1">
									<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
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
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Heading-->
							<!--begin:Stats-->
							<div class="d-flex flex-column w-100 mt-12">
								<span class="text-dark me-2 fw-bold pb-3">Progress</span>
								<div class="progress h-5px w-100">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end:Stats-->
							<!--begin:Team-->
							<div class="d-flex flex-column mt-10">
								<div class="text-dark me-2 fw-bold pb-4">Team</div>
								<div class="d-flex">
									<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
										<img src="assets/media/avatars/300-6.jpg" alt="" />
									</a>
									<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
										<img src="assets/media/avatars/300-5.jpg" alt="" />
									</a>
									<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
										<img src="assets/media/avatars/300-9.jpg" alt="" />
									</a>
									<a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
										<img src="assets/media/avatars/300-10.jpg" alt="" />
									</a>
								</div>
							</div>
							<!--end:Team-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 8-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 8-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Heading-->
							<div class="d-flex flex-stack">
								<!--begin:Info-->
								<div class="d-flex align-items-center">
									<!--begin:Image-->
									<div class="symbol symbol-60px me-5">
										<span class="symbol-label bg-success-light">
											<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
										</span>
									</div>
									<!--end:Image-->
									<!--begin:Title-->
									<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
										<a href="#" class="text-dark fw-bold text-hover-primary fs-5">Monthly Subscription</a>
										<span class="text-muted fw-bold">Due: 27 Apr 2020</span>
									</div>
									<!--end:Title-->
								</div>
								<!--begin:Info-->
								<!--begin:Menu-->
								<div class="ms-1">
									<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
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
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Heading-->
							<!--begin:Stats-->
							<div class="d-flex flex-column w-100 mt-12">
								<span class="text-dark me-2 fw-bold pb-3">Progress</span>
								<div class="progress h-5px w-100">
									<div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end:Stats-->
							<!--begin:Team-->
							<div class="d-flex flex-column mt-10">
								<div class="text-dark me-2 fw-bold pb-4">Team</div>
								<div class="d-flex">
									<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
										<img src="assets/media/avatars/300-6.jpg" alt="" />
									</a>
									<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
										<img src="assets/media/avatars/300-5.jpg" alt="" />
									</a>
									<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
										<img src="assets/media/avatars/300-9.jpg" alt="" />
									</a>
									<a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
										<img src="assets/media/avatars/300-10.jpg" alt="" />
									</a>
								</div>
							</div>
							<!--end:Team-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 8-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 9-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column pb-10 pb-lg-15">
							<div class="flex-grow-1">
								<!--begin::Info-->
								<div class="d-flex align-items-center pe-2 mb-5">
									<span class="text-muted fw-bold fs-5 flex-grow-1">7 hours ago</span>
									<div class="symbol symbol-50px">
										<span class="symbol-label bg-light">
											<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
										</span>
									</div>
								</div>
								<!--end::Info-->
								<!--begin::Link-->
								<a href="#" class="text-dark fw-bold text-hover-primary fs-4">PitStop - Multiple Email Generator</a>
								<!--end::Link-->
								<!--begin::Desc-->
								<p class="py-3">Pitstop creates quick email campaigns.
								<br />We help to strengthen your brand
								<br />for your every purpose.</p>
								<!--end::Desc-->
							</div>
							<!--begin::Team-->
							<div class="d-flex align-items-center">
								<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
									<img src="assets/media/avatars/300-6.jpg" alt="" />
								</a>
								<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
									<img src="assets/media/avatars/300-5.jpg" alt="" />
								</a>
								<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
									<img src="assets/media/avatars/300-9.jpg" alt="" />
								</a>
							</div>
							<!--end::Team-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 9-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 9-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column pb-10 pb-lg-15">
							<div class="flex-grow-1">
								<!--begin::Info-->
								<div class="d-flex align-items-center pe-2 mb-5">
									<span class="text-muted fw-bold fs-5 flex-grow-1">10 days ago</span>
									<div class="symbol symbol-50px">
										<span class="symbol-label bg-light">
											<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
										</span>
									</div>
								</div>
								<!--end::Info-->
								<!--begin::Link-->
								<a href="#" class="text-dark fw-bold text-hover-primary fs-4">ReactJS Admin Theme</a>
								<!--end::Link-->
								<!--begin::Desc-->
								<p class="py-3">Keenthemes uses the latest and greatest frameworks
								<br />with ReactJS for complete modernization and
								<br />future.</p>
								<!--end::Desc-->
							</div>
							<!--begin::Team-->
							<div class="d-flex align-items-center">
								<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
									<img src="assets/media/avatars/300-6.jpg" alt="" />
								</a>
								<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
									<img src="assets/media/avatars/300-5.jpg" alt="" />
								</a>
								<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
									<img src="assets/media/avatars/300-9.jpg" alt="" />
								</a>
							</div>
							<!--end::Team-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 9-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 9-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column pb-10 pb-lg-15">
							<div class="flex-grow-1">
								<!--begin::Info-->
								<div class="d-flex align-items-center pe-2 mb-5">
									<span class="text-muted fw-bold fs-5 flex-grow-1">2 weeks ago</span>
									<div class="symbol symbol-50px">
										<span class="symbol-label bg-light">
											<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
										</span>
									</div>
								</div>
								<!--end::Info-->
								<!--begin::Link-->
								<a href="#" class="text-dark fw-bold text-hover-primary fs-4">KT.com - High Quality Templates</a>
								<!--end::Link-->
								<!--begin::Desc-->
								<p class="py-3">Easy to use, incredibly flexible and secure
								<br />with in-depth documentation that outlines
								<br />everything for you</p>
								<!--end::Desc-->
							</div>
							<!--begin::Team-->
							<div class="d-flex align-items-center">
								<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
									<img src="assets/media/avatars/300-6.jpg" alt="" />
								</a>
								<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
									<img src="assets/media/avatars/300-5.jpg" alt="" />
								</a>
								<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
									<img src="assets/media/avatars/300-9.jpg" alt="" />
								</a>
							</div>
							<!--end::Team-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 9-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 3-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
								<span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad2ffe1">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad2ffe1" data-allow-clear="true">
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
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 d-flex flex-column">
							<!--begin::Stats-->
							<div class="card-p pt-5 bg-body flex-grow-1">
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col mr-8">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Average Sale</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="d-flex align-items-center">
											<div class="fs-4 fw-bold">$650</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Commission</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="fs-4 fw-bold">$233,600</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0 mt-8">
									<!--begin::Col-->
									<div class="col mr-8">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="fs-4 fw-bold">$29,004</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Annual Income</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="d-flex align-items-center">
											<div class="fs-4 fw-bold">$1,480,00</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 3-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 3-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
								<span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad304cd">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad304cd" data-allow-clear="true">
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
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 d-flex flex-column">
							<!--begin::Stats-->
							<div class="card-p pt-5 bg-body flex-grow-1">
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col mr-8">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Average Sale</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="d-flex align-items-center">
											<div class="fs-4 fw-bold">$650</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Commission</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="fs-4 fw-bold">$233,600</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0 mt-8">
									<!--begin::Col-->
									<div class="col mr-8">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="fs-4 fw-bold">$29,004</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Annual Income</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="d-flex align-items-center">
											<div class="fs-4 fw-bold">$1,480,00</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="danger" style="height: 150px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 3-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 3-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
								<span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad3097b">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad3097b" data-allow-clear="true">
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
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 d-flex flex-column">
							<!--begin::Stats-->
							<div class="card-p pt-5 bg-body flex-grow-1">
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col mr-8">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Average Sale</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="d-flex align-items-center">
											<div class="fs-4 fw-bold">$650</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Commission</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="fs-4 fw-bold">$233,600</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0 mt-8">
									<!--begin::Col-->
									<div class="col mr-8">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="fs-4 fw-bold">$29,004</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<!--begin::Label-->
										<div class="fs-7 text-muted fw-bold">Annual Income</div>
										<!--end::Label-->
										<!--begin::Stat-->
										<div class="d-flex align-items-center">
											<div class="fs-4 fw-bold">$1,480,00</div>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Stat-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 3-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 4-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
								<span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad3105b">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad3105b" data-allow-clear="true">
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
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<div class="flex-grow-1">
								<div class="mixed-widget-4-chart" data-kt-chart-color="primary" style="height: 200px"></div>
							</div>
							<div class="pt-5">
								<p class="text-center fs-6 pb-5">
								<span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
								<br />to approve newly amended policies</p>
								<a href="#" class="btn btn-primary w-100 py-3">Take Action</a>
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 4-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 4-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
								<span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad31365">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad31365" data-allow-clear="true">
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
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<div class="flex-grow-1">
								<div class="mixed-widget-4-chart" data-kt-chart-color="success" style="height: 200px"></div>
							</div>
							<div class="pt-5">
								<p class="text-center fs-6 pb-5">
								<span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
								<br />to approve newly amended policies</p>
								<a href="#" class="btn btn-success w-100 py-3">Take Action</a>
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 4-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 4-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
								<span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad3166d">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad3166d" data-allow-clear="true">
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
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<div class="flex-grow-1">
								<div class="mixed-widget-4-chart" data-kt-chart-color="danger" style="height: 200px"></div>
							</div>
							<div class="pt-5">
								<p class="text-center fs-6 pb-5">
								<span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
								<br />to approve newly amended policies</p>
								<a href="#" class="btn btn-danger w-100 py-3">Take Action</a>
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 4-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 5-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Trends</span>
								<span class="text-muted fw-semibold fs-7">Latest trends</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Chart-->
							<div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="primary" style="height: 150px"></div>
							<!--end::Chart-->
							<!--begin::Items-->
							<div class="mt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack mb-5">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-light">
												<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
											<div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra Trepp</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack mb-5">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-light">
												<img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Sales</a>
											<div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-light">
												<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="py-1">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Engagement</a>
											<div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
									<!--end::Label-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 5-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 5-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Trends</span>
								<span class="text-muted fw-semibold fs-7">Latest trends</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Chart-->
							<div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success" style="height: 150px"></div>
							<!--end::Chart-->
							<!--begin::Items-->
							<div class="mt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack mb-5">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-light">
												<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
											<div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra Trepp</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack mb-5">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-light">
												<img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Sales</a>
											<div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-light">
												<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="py-1">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Engagement</a>
											<div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
									<!--end::Label-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 5-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 5-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Trends</span>
								<span class="text-muted fw-semibold fs-7">Latest trends</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Chart-->
							<div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="danger" style="height: 150px"></div>
							<!--end::Chart-->
							<!--begin::Items-->
							<div class="mt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack mb-5">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-light">
												<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
											<div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra Trepp</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack mb-5">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-light">
												<img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Sales</a>
											<div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
									<!--end::Label-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Section-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-light">
												<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="py-1">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Engagement</a>
											<div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Section-->
									<!--begin::Label-->
									<div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
									<!--end::Label-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 5-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 17-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body pt-5">
							<!--begin::Heading-->
							<div class="d-flex flex-stack">
								<!--begin::Title-->
								<h4 class="fw-bold text-gray-800 m-0">User Base</h4>
								<!--end::Title-->
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
							<!--end::Heading-->
							<!--begin::Chart-->
							<div class="d-flex flex-center w-100">
								<div class="mixed-widget-17-chart" data-kt-chart-color="primary" style="height: 300px"></div>
							</div>
							<!--end::Chart-->
							<!--begin::Content-->
							<div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
								<!--begin::Text-->
								<p class="fw-semibold fs-4 text-gray-400 mb-6">Long before you sit down to put the
								<br />make sure you breathe</p>
								<!--end::Text-->
								<!--begin::Action-->
								<div class="mb-9 mb-xxl-1">
									<a href='#' class="btn btn-danger fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
								</div>
								<!--ed::Action-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="card-footer d-flex flex-center py-5">
							<!--begin::Item-->
							<div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
								<!--begin::Bullet-->
								<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
								<!--end::Bullet-->
								<!--begin::Label-->
								<span class="fw-semibold text-gray-400 fs-6">Amount X</span>
								<!--end::Label-->
							</div>
							<!--ed::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center flex-shrink-0">
								<!--begin::Bullet-->
								<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
								<!--end::Bullet-->
								<!--begin::Label-->
								<span class="fw-semibold text-gray-400 fs-6">Amount Y</span>
								<!--end::Label-->
							</div>
							<!--ed::Item-->
						</div>
						<!--ed::Info-->
					</div>
					<!--end::Mixed Widget 17-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 17-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body pt-5">
							<!--begin::Heading-->
							<div class="d-flex flex-stack">
								<!--begin::Title-->
								<h4 class="fw-bold text-gray-800 m-0">User Base</h4>
								<!--end::Title-->
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
							<!--end::Heading-->
							<!--begin::Chart-->
							<div class="d-flex flex-center w-100">
								<div class="mixed-widget-17-chart" data-kt-chart-color="success" style="height: 300px"></div>
							</div>
							<!--end::Chart-->
							<!--begin::Content-->
							<div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
								<!--begin::Text-->
								<p class="fw-semibold fs-4 text-gray-400 mb-6">Long before you sit down to put the
								<br />make sure you breathe</p>
								<!--end::Text-->
								<!--begin::Action-->
								<div class="mb-9 mb-xxl-1">
									<a href='#' class="btn btn-info fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
								</div>
								<!--ed::Action-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="card-footer d-flex flex-center py-5">
							<!--begin::Item-->
							<div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
								<!--begin::Bullet-->
								<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
								<!--end::Bullet-->
								<!--begin::Label-->
								<span class="fw-semibold text-gray-400 fs-6">Amount X</span>
								<!--end::Label-->
							</div>
							<!--ed::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center flex-shrink-0">
								<!--begin::Bullet-->
								<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
								<!--end::Bullet-->
								<!--begin::Label-->
								<span class="fw-semibold text-gray-400 fs-6">Amount Y</span>
								<!--end::Label-->
							</div>
							<!--ed::Item-->
						</div>
						<!--ed::Info-->
					</div>
					<!--end::Mixed Widget 17-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 17-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Body-->
						<div class="card-body pt-5">
							<!--begin::Heading-->
							<div class="d-flex flex-stack">
								<!--begin::Title-->
								<h4 class="fw-bold text-gray-800 m-0">User Base</h4>
								<!--end::Title-->
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
								<!--end::Menu-->
							</div>
							<!--end::Heading-->
							<!--begin::Chart-->
							<div class="d-flex flex-center w-100">
								<div class="mixed-widget-17-chart" data-kt-chart-color="danger" style="height: 300px"></div>
							</div>
							<!--end::Chart-->
							<!--begin::Content-->
							<div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
								<!--begin::Text-->
								<p class="fw-semibold fs-4 text-gray-400 mb-6">Long before you sit down to put the
								<br />make sure you breathe</p>
								<!--end::Text-->
								<!--begin::Action-->
								<div class="mb-9 mb-xxl-1">
									<a href='#' class="btn btn-success fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
								</div>
								<!--ed::Action-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="card-footer d-flex flex-center py-5">
							<!--begin::Item-->
							<div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
								<!--begin::Bullet-->
								<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
								<!--end::Bullet-->
								<!--begin::Label-->
								<span class="fw-semibold text-gray-400 fs-6">Amount X</span>
								<!--end::Label-->
							</div>
							<!--ed::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center flex-shrink-0">
								<!--begin::Bullet-->
								<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
								<!--end::Bullet-->
								<!--begin::Label-->
								<span class="fw-semibold text-gray-400 fs-6">Amount Y</span>
								<!--end::Label-->
							</div>
							<!--ed::Item-->
						</div>
						<!--ed::Info-->
					</div>
					<!--end::Mixed Widget 17-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 6-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
								<span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad335a4">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad335a4" data-allow-clear="true">
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
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 d-flex flex-column">
							<!--begin::Stats-->
							<div class="card-px pt-5 pb-10 flex-grow-1">
								<!--begin::Row-->
								<div class="row g-0 mt-5 mb-10">
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-info">
													<!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-info">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.859 12.596L17.736 13.596L10.388 20.944C10.2915 21.0406 10.1769 21.1172 10.0508 21.1695C9.9247 21.2218 9.78953 21.2486 9.65302 21.2486C9.5165 21.2486 9.3813 21.2218 9.25519 21.1695C9.12907 21.1172 9.01449 21.0406 8.918 20.944L2.29999 14.3229C2.10543 14.1278 1.99619 13.8635 1.99619 13.588C1.99619 13.3124 2.10543 13.0481 2.29999 12.853L11.853 3.29999C11.9495 3.20341 12.0641 3.12679 12.1902 3.07452C12.3163 3.02225 12.4515 2.9953 12.588 2.9953C12.7245 2.9953 12.8597 3.02225 12.9858 3.07452C13.1119 3.12679 13.2265 3.20341 13.323 3.29999L21.199 11.176C21.3036 11.2791 21.3797 11.4075 21.4201 11.5486C21.4605 11.6898 21.4637 11.8391 21.4295 11.9819C21.3953 12.1247 21.3249 12.2562 21.2249 12.3638C21.125 12.4714 20.9989 12.5514 20.859 12.596Z" fill="currentColor" />
															<path d="M14.8 10.184C14.7447 10.1843 14.6895 10.1796 14.635 10.1699L5.816 8.69997C5.55436 8.65634 5.32077 8.51055 5.16661 8.29469C5.01246 8.07884 4.95035 7.8106 4.99397 7.54897C5.0376 7.28733 5.18339 7.05371 5.39925 6.89955C5.6151 6.7454 5.88334 6.68332 6.14498 6.72694L14.963 8.19692C15.2112 8.23733 15.435 8.36982 15.59 8.56789C15.7449 8.76596 15.8195 9.01502 15.7989 9.26564C15.7784 9.51626 15.6642 9.75001 15.479 9.92018C15.2939 10.0904 15.0514 10.1846 14.8 10.184ZM17 18.6229C17 19.0281 17.0985 19.4272 17.287 19.7859C17.4755 20.1446 17.7484 20.4521 18.0821 20.6819C18.4158 20.9117 18.8004 21.0571 19.2027 21.1052C19.605 21.1534 20.0131 21.103 20.3916 20.9585C20.7702 20.814 21.1079 20.5797 21.3758 20.2757C21.6437 19.9716 21.8336 19.607 21.9293 19.2133C22.025 18.8195 22.0235 18.4085 21.925 18.0154C21.8266 17.6223 21.634 17.259 21.364 16.9569L19.843 15.257C19.7999 15.2085 19.7471 15.1697 19.688 15.1432C19.6289 15.1167 19.5648 15.1029 19.5 15.1029C19.4352 15.1029 19.3711 15.1167 19.312 15.1432C19.2529 15.1697 19.2001 15.2085 19.157 15.257L17.636 16.9569C17.2254 17.4146 16.9988 18.0081 17 18.6229ZM10.388 20.9409L17.736 13.5929H1.99999C1.99921 13.7291 2.02532 13.8643 2.0768 13.9904C2.12828 14.1165 2.2041 14.2311 2.29997 14.3279L8.91399 20.9409C9.01055 21.0381 9.12539 21.1152 9.25188 21.1679C9.37836 21.2205 9.51399 21.2476 9.65099 21.2476C9.78798 21.2476 9.92361 21.2205 10.0501 21.1679C10.1766 21.1152 10.2914 21.0381 10.388 20.9409Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$2,034</div>
												<div class="fs-7 text-muted fw-bold">Author Sales</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-danger">
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-danger">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
															<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$706</div>
												<div class="fs-7 text-muted fw-bold">Commision</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-success">
													<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
															<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
															<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$49</div>
												<div class="fs-7 text-muted fw-bold">Average Bid</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-primary">
													<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-primary">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21Z" fill="currentColor" />
															<path d="M3 16C2.4 16 2 15.6 2 15V9C2 8.4 2.4 8 3 8C3.6 8 4 8.4 4 9V15C4 15.6 3.6 16 3 16ZM13 15V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V15C11 15.6 11.4 16 12 16C12.6 16 13 15.6 13 15ZM17 15V9C17 8.4 16.6 8 16 8C15.4 8 15 8.4 15 9V15C15 15.6 15.4 16 16 16C16.6 16 17 15.6 17 15ZM9 15V9C9 8.4 8.6 8 8 8H7C6.4 8 6 8.4 6 9V15C6 15.6 6.4 16 7 16H8C8.6 16 9 15.6 9 15ZM22 15V9C22 8.4 21.6 8 21 8H20C19.4 8 19 8.4 19 9V15C19 15.6 19.4 16 20 16H21C21.6 16 22 15.6 22 15Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$5.8M</div>
												<div class="fs-7 text-muted fw-bold">All Time Sales</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 6-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 6-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
								<span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad33d88">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad33d88" data-allow-clear="true">
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
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 d-flex flex-column">
							<!--begin::Stats-->
							<div class="card-px pt-5 pb-10 flex-grow-1">
								<!--begin::Row-->
								<div class="row g-0 mt-5 mb-10">
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-info">
													<!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-info">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.859 12.596L17.736 13.596L10.388 20.944C10.2915 21.0406 10.1769 21.1172 10.0508 21.1695C9.9247 21.2218 9.78953 21.2486 9.65302 21.2486C9.5165 21.2486 9.3813 21.2218 9.25519 21.1695C9.12907 21.1172 9.01449 21.0406 8.918 20.944L2.29999 14.3229C2.10543 14.1278 1.99619 13.8635 1.99619 13.588C1.99619 13.3124 2.10543 13.0481 2.29999 12.853L11.853 3.29999C11.9495 3.20341 12.0641 3.12679 12.1902 3.07452C12.3163 3.02225 12.4515 2.9953 12.588 2.9953C12.7245 2.9953 12.8597 3.02225 12.9858 3.07452C13.1119 3.12679 13.2265 3.20341 13.323 3.29999L21.199 11.176C21.3036 11.2791 21.3797 11.4075 21.4201 11.5486C21.4605 11.6898 21.4637 11.8391 21.4295 11.9819C21.3953 12.1247 21.3249 12.2562 21.2249 12.3638C21.125 12.4714 20.9989 12.5514 20.859 12.596Z" fill="currentColor" />
															<path d="M14.8 10.184C14.7447 10.1843 14.6895 10.1796 14.635 10.1699L5.816 8.69997C5.55436 8.65634 5.32077 8.51055 5.16661 8.29469C5.01246 8.07884 4.95035 7.8106 4.99397 7.54897C5.0376 7.28733 5.18339 7.05371 5.39925 6.89955C5.6151 6.7454 5.88334 6.68332 6.14498 6.72694L14.963 8.19692C15.2112 8.23733 15.435 8.36982 15.59 8.56789C15.7449 8.76596 15.8195 9.01502 15.7989 9.26564C15.7784 9.51626 15.6642 9.75001 15.479 9.92018C15.2939 10.0904 15.0514 10.1846 14.8 10.184ZM17 18.6229C17 19.0281 17.0985 19.4272 17.287 19.7859C17.4755 20.1446 17.7484 20.4521 18.0821 20.6819C18.4158 20.9117 18.8004 21.0571 19.2027 21.1052C19.605 21.1534 20.0131 21.103 20.3916 20.9585C20.7702 20.814 21.1079 20.5797 21.3758 20.2757C21.6437 19.9716 21.8336 19.607 21.9293 19.2133C22.025 18.8195 22.0235 18.4085 21.925 18.0154C21.8266 17.6223 21.634 17.259 21.364 16.9569L19.843 15.257C19.7999 15.2085 19.7471 15.1697 19.688 15.1432C19.6289 15.1167 19.5648 15.1029 19.5 15.1029C19.4352 15.1029 19.3711 15.1167 19.312 15.1432C19.2529 15.1697 19.2001 15.2085 19.157 15.257L17.636 16.9569C17.2254 17.4146 16.9988 18.0081 17 18.6229ZM10.388 20.9409L17.736 13.5929H1.99999C1.99921 13.7291 2.02532 13.8643 2.0768 13.9904C2.12828 14.1165 2.2041 14.2311 2.29997 14.3279L8.91399 20.9409C9.01055 21.0381 9.12539 21.1152 9.25188 21.1679C9.37836 21.2205 9.51399 21.2476 9.65099 21.2476C9.78798 21.2476 9.92361 21.2205 10.0501 21.1679C10.1766 21.1152 10.2914 21.0381 10.388 20.9409Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$2,034</div>
												<div class="fs-7 text-muted fw-bold">Author Sales</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-danger">
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-danger">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
															<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$706</div>
												<div class="fs-7 text-muted fw-bold">Commision</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-success">
													<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
															<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
															<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$49</div>
												<div class="fs-7 text-muted fw-bold">Average Bid</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-primary">
													<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-primary">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21Z" fill="currentColor" />
															<path d="M3 16C2.4 16 2 15.6 2 15V9C2 8.4 2.4 8 3 8C3.6 8 4 8.4 4 9V15C4 15.6 3.6 16 3 16ZM13 15V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V15C11 15.6 11.4 16 12 16C12.6 16 13 15.6 13 15ZM17 15V9C17 8.4 16.6 8 16 8C15.4 8 15 8.4 15 9V15C15 15.6 15.4 16 16 16C16.6 16 17 15.6 17 15ZM9 15V9C9 8.4 8.6 8 8 8H7C6.4 8 6 8.4 6 9V15C6 15.6 6.4 16 7 16H8C8.6 16 9 15.6 9 15ZM22 15V9C22 8.4 21.6 8 21 8H20C19.4 8 19 8.4 19 9V15C19 15.6 19.4 16 20 16H21C21.6 16 22 15.6 22 15Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$5.8M</div>
												<div class="fs-7 text-muted fw-bold">All Time Sales</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 6-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 6-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Beader-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
								<span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09ad343f9">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09ad343f9" data-allow-clear="true">
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
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 d-flex flex-column">
							<!--begin::Stats-->
							<div class="card-px pt-5 pb-10 flex-grow-1">
								<!--begin::Row-->
								<div class="row g-0 mt-5 mb-10">
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-info">
													<!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-info">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.859 12.596L17.736 13.596L10.388 20.944C10.2915 21.0406 10.1769 21.1172 10.0508 21.1695C9.9247 21.2218 9.78953 21.2486 9.65302 21.2486C9.5165 21.2486 9.3813 21.2218 9.25519 21.1695C9.12907 21.1172 9.01449 21.0406 8.918 20.944L2.29999 14.3229C2.10543 14.1278 1.99619 13.8635 1.99619 13.588C1.99619 13.3124 2.10543 13.0481 2.29999 12.853L11.853 3.29999C11.9495 3.20341 12.0641 3.12679 12.1902 3.07452C12.3163 3.02225 12.4515 2.9953 12.588 2.9953C12.7245 2.9953 12.8597 3.02225 12.9858 3.07452C13.1119 3.12679 13.2265 3.20341 13.323 3.29999L21.199 11.176C21.3036 11.2791 21.3797 11.4075 21.4201 11.5486C21.4605 11.6898 21.4637 11.8391 21.4295 11.9819C21.3953 12.1247 21.3249 12.2562 21.2249 12.3638C21.125 12.4714 20.9989 12.5514 20.859 12.596Z" fill="currentColor" />
															<path d="M14.8 10.184C14.7447 10.1843 14.6895 10.1796 14.635 10.1699L5.816 8.69997C5.55436 8.65634 5.32077 8.51055 5.16661 8.29469C5.01246 8.07884 4.95035 7.8106 4.99397 7.54897C5.0376 7.28733 5.18339 7.05371 5.39925 6.89955C5.6151 6.7454 5.88334 6.68332 6.14498 6.72694L14.963 8.19692C15.2112 8.23733 15.435 8.36982 15.59 8.56789C15.7449 8.76596 15.8195 9.01502 15.7989 9.26564C15.7784 9.51626 15.6642 9.75001 15.479 9.92018C15.2939 10.0904 15.0514 10.1846 14.8 10.184ZM17 18.6229C17 19.0281 17.0985 19.4272 17.287 19.7859C17.4755 20.1446 17.7484 20.4521 18.0821 20.6819C18.4158 20.9117 18.8004 21.0571 19.2027 21.1052C19.605 21.1534 20.0131 21.103 20.3916 20.9585C20.7702 20.814 21.1079 20.5797 21.3758 20.2757C21.6437 19.9716 21.8336 19.607 21.9293 19.2133C22.025 18.8195 22.0235 18.4085 21.925 18.0154C21.8266 17.6223 21.634 17.259 21.364 16.9569L19.843 15.257C19.7999 15.2085 19.7471 15.1697 19.688 15.1432C19.6289 15.1167 19.5648 15.1029 19.5 15.1029C19.4352 15.1029 19.3711 15.1167 19.312 15.1432C19.2529 15.1697 19.2001 15.2085 19.157 15.257L17.636 16.9569C17.2254 17.4146 16.9988 18.0081 17 18.6229ZM10.388 20.9409L17.736 13.5929H1.99999C1.99921 13.7291 2.02532 13.8643 2.0768 13.9904C2.12828 14.1165 2.2041 14.2311 2.29997 14.3279L8.91399 20.9409C9.01055 21.0381 9.12539 21.1152 9.25188 21.1679C9.37836 21.2205 9.51399 21.2476 9.65099 21.2476C9.78798 21.2476 9.92361 21.2205 10.0501 21.1679C10.1766 21.1152 10.2914 21.0381 10.388 20.9409Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$2,034</div>
												<div class="fs-7 text-muted fw-bold">Author Sales</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-danger">
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-danger">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
															<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$706</div>
												<div class="fs-7 text-muted fw-bold">Commision</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-success">
													<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
															<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
															<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$49</div>
												<div class="fs-7 text-muted fw-bold">Average Bid</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col">
										<div class="d-flex align-items-center me-2">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-3">
												<div class="symbol-label bg-light-primary">
													<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-primary">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21Z" fill="currentColor" />
															<path d="M3 16C2.4 16 2 15.6 2 15V9C2 8.4 2.4 8 3 8C3.6 8 4 8.4 4 9V15C4 15.6 3.6 16 3 16ZM13 15V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V15C11 15.6 11.4 16 12 16C12.6 16 13 15.6 13 15ZM17 15V9C17 8.4 16.6 8 16 8C15.4 8 15 8.4 15 9V15C15 15.6 15.4 16 16 16C16.6 16 17 15.6 17 15ZM9 15V9C9 8.4 8.6 8 8 8H7C6.4 8 6 8.4 6 9V15C6 15.6 6.4 16 7 16H8C8.6 16 9 15.6 9 15ZM22 15V9C22 8.4 21.6 8 21 8H20C19.4 8 19 8.4 19 9V15C19 15.6 19.4 16 20 16H21C21.6 16 22 15.6 22 15Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div>
												<div class="fs-4 text-dark fw-bold">$5.8M</div>
												<div class="fs-7 text-muted fw-bold">All Time Sales</div>
											</div>
											<!--end::Title-->
										</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="danger" style="height: 150px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 6-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 7-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column p-0">
							<!--begin::Stats-->
							<div class="flex-grow-1 card-p pb-0">
								<div class="d-flex flex-stack flex-wrap">
									<div class="me-2">
										<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Generate Reports</a>
										<div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
									</div>
									<div class="fw-bold fs-3 text-info">$24,500</div>
								</div>
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="info" style="height: 150px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 7-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 7-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column p-0">
							<!--begin::Stats-->
							<div class="flex-grow-1 card-p pb-0">
								<div class="d-flex flex-stack flex-wrap">
									<div class="me-2">
										<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Generate Reports</a>
										<div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
									</div>
									<div class="fw-bold fs-3 text-warning">$24,500</div>
								</div>
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="warning" style="height: 150px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 7-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 7-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column p-0">
							<!--begin::Stats-->
							<div class="flex-grow-1 card-p pb-0">
								<div class="d-flex flex-stack flex-wrap">
									<div class="me-2">
										<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Generate Reports</a>
										<div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
									</div>
									<div class="fw-bold fs-3 text-primary">$24,500</div>
								</div>
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 7-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 10-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
							<!--begin::Hidden-->
							<div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
								<div class="me-2">
									<span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
									<span class="text-gray-400 fw-bold">Oct 8 - Oct 26 22</span>
								</div>
								<div class="fw-bold fs-3 text-info">$15,300</div>
							</div>
							<!--end::Hidden-->
							<!--begin::Chart-->
							<div class="mixed-widget-10-chart" data-kt-color="info" style="height: 200px"></div>
							<!--end::Chart-->
						</div>
					</div>
					<!--end::Mixed Widget 10-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 10-->
					<div class="card card-xl-stretch mb-xl-8">
						<!--begin::Body-->
						<div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
							<!--begin::Hidden-->
							<div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
								<div class="me-2">
									<span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
									<span class="text-gray-400 fw-bold">Oct 8 - Oct 26 22</span>
								</div>
								<div class="fw-bold fs-3 text-warning">$15,300</div>
							</div>
							<!--end::Hidden-->
							<!--begin::Chart-->
							<div class="mixed-widget-10-chart" data-kt-color="warning" style="height: 200px"></div>
							<!--end::Chart-->
						</div>
					</div>
					<!--end::Mixed Widget 10-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 10-->
					<div class="card card-xl-stretch mb-5 mb-xl-8">
						<!--begin::Body-->
						<div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
							<!--begin::Hidden-->
							<div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
								<div class="me-2">
									<span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
									<span class="text-gray-400 fw-bold">Oct 8 - Oct 26 22</span>
								</div>
								<div class="fw-bold fs-3 text-primary">$15,300</div>
							</div>
							<!--end::Hidden-->
							<!--begin::Chart-->
							<div class="mixed-widget-10-chart" data-kt-color="primary" style="height: 200px"></div>
							<!--end::Chart-->
						</div>
					</div>
					<!--end::Mixed Widget 10-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 13-->
					<div class="card card-xl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column flex-grow-1">
								<!--begin::Title-->
								<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Earnings</a>
								<!--end::Title-->
								<!--begin::Chart-->
								<div class="mixed-widget-13-chart" style="height: 100px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Stats-->
							<div class="pt-5">
								<!--begin::Symbol-->
								<span class="text-dark fw-bold fs-2x lh-0">$</span>
								<!--end::Symbol-->
								<!--begin::Number-->
								<span class="text-dark fw-bold fs-3x me-2 lh-0">560</span>
								<!--end::Number-->
								<!--begin::Text-->
								<span class="text-dark fw-bold fs-6 lh-0">+ 28% this week</span>
								<!--end::Text-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 13-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 13-->
					<div class="card card-xl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBF0F4">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column flex-grow-1">
								<!--begin::Title-->
								<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Earnings</a>
								<!--end::Title-->
								<!--begin::Chart-->
								<div class="mixed-widget-13-chart" style="height: 100px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Stats-->
							<div class="pt-5">
								<!--begin::Symbol-->
								<span class="text-dark fw-bold fs-2x lh-0">$</span>
								<!--end::Symbol-->
								<!--begin::Number-->
								<span class="text-dark fw-bold fs-3x me-2 lh-0">560</span>
								<!--end::Number-->
								<!--begin::Text-->
								<span class="text-dark fw-bold fs-6 lh-0">+ 28% this week</span>
								<!--end::Text-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 13-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 13-->
					<div class="card card-xl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBD4F4">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column flex-grow-1">
								<!--begin::Title-->
								<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Earnings</a>
								<!--end::Title-->
								<!--begin::Chart-->
								<div class="mixed-widget-13-chart" style="height: 100px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Stats-->
							<div class="pt-5">
								<!--begin::Symbol-->
								<span class="text-dark fw-bold fs-2x lh-0">$</span>
								<!--end::Symbol-->
								<!--begin::Number-->
								<span class="text-dark fw-bold fs-3x me-2 lh-0">560</span>
								<!--end::Number-->
								<!--begin::Text-->
								<span class="text-dark fw-bold fs-6 lh-0">+ 28% this week</span>
								<!--end::Text-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 13-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 14-->
					<div class="card card-xxl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column flex-grow-1">
								<!--begin::Title-->
								<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Contributors</a>
								<!--end::Title-->
								<!--begin::Chart-->
								<div class="mixed-widget-14-chart" style="height: 125px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Stats-->
							<div class="pt-5">
								<!--begin::Number-->
								<span class="text-dark fw-bold fs-3x me-2 lh-0">47</span>
								<!--end::Number-->
								<!--begin::Text-->
								<span class="text-dark fw-bold fs-6 lh-0">- 12% this week</span>
								<!--end::Text-->
							</div>
							<!--end::Stats-->
						</div>
					</div>
					<!--end::Mixed Widget 14-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 14-->
					<div class="card card-xxl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #CBF0F4">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column flex-grow-1">
								<!--begin::Title-->
								<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Contributors</a>
								<!--end::Title-->
								<!--begin::Chart-->
								<div class="mixed-widget-14-chart" style="height: 125px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Stats-->
							<div class="pt-5">
								<!--begin::Number-->
								<span class="text-dark fw-bold fs-3x me-2 lh-0">47</span>
								<!--end::Number-->
								<!--begin::Text-->
								<span class="text-dark fw-bold fs-6 lh-0">- 12% this week</span>
								<!--end::Text-->
							</div>
							<!--end::Stats-->
						</div>
					</div>
					<!--end::Mixed Widget 14-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 14-->
					<div class="card card-xxl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #CBD4F4">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column flex-grow-1">
								<!--begin::Title-->
								<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Contributors</a>
								<!--end::Title-->
								<!--begin::Chart-->
								<div class="mixed-widget-14-chart" style="height: 125px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Stats-->
							<div class="pt-5">
								<!--begin::Number-->
								<span class="text-dark fw-bold fs-3x me-2 lh-0">47</span>
								<!--end::Number-->
								<!--begin::Text-->
								<span class="text-dark fw-bold fs-6 lh-0">- 12% this week</span>
								<!--end::Text-->
							</div>
							<!--end::Stats-->
						</div>
					</div>
					<!--end::Mixed Widget 14-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 14-->
					<div class="card card-xxl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column mb-7">
								<!--begin::Title-->
								<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Summary</a>
								<!--end::Title-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Row-->
							<div class="row g-0">
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center mb-9 me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="currentColor" />
														<path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">$50K</div>
											<div class="fs-7 text-gray-600 fw-bold">Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center mb-9 ms-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs046.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="currentColor" />
														<path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">$4,5K</div>
											<div class="fs-7 text-gray-600 fw-bold">Revenue</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs022.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="currentColor" />
														<path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">40</div>
											<div class="fs-7 text-gray-600 fw-bold">Tasks</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center ms-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs045.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z" fill="currentColor" />
														<path opacity="0.3" d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">$5.8M</div>
											<div class="fs-7 text-gray-600 fw-bold">Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
					</div>
					<!--end::Mixed Widget 14-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 14-->
					<div class="card card-xxl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #CBF0F4">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column mb-7">
								<!--begin::Title-->
								<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Summary</a>
								<!--end::Title-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Row-->
							<div class="row g-0">
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center mb-9 me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="currentColor" />
														<path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">$50K</div>
											<div class="fs-7 text-gray-600 fw-bold">Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center mb-9 ms-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs046.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="currentColor" />
														<path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">$4,5K</div>
											<div class="fs-7 text-gray-600 fw-bold">Revenue</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs022.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="currentColor" />
														<path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">40</div>
											<div class="fs-7 text-gray-600 fw-bold">Tasks</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center ms-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs045.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z" fill="currentColor" />
														<path opacity="0.3" d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">$5.8M</div>
											<div class="fs-7 text-gray-600 fw-bold">Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
					</div>
					<!--end::Mixed Widget 14-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-4">
					<!--begin::Mixed Widget 14-->
					<div class="card card-xxl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #CBD4F4">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column mb-7">
								<!--begin::Title-->
								<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Summary</a>
								<!--end::Title-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Row-->
							<div class="row g-0">
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center mb-9 me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="currentColor" />
														<path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">$50K</div>
											<div class="fs-7 text-gray-600 fw-bold">Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center mb-9 ms-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs046.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="currentColor" />
														<path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">$4,5K</div>
											<div class="fs-7 text-gray-600 fw-bold">Revenue</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs022.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="currentColor" />
														<path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">40</div>
											<div class="fs-7 text-gray-600 fw-bold">Tasks</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<div class="d-flex align-items-center ms-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<div class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs045.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z" fill="currentColor" />
														<path opacity="0.3" d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-5 text-dark fw-bold lh-1">$5.8M</div>
											<div class="fs-7 text-gray-600 fw-bold">Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
					</div>
					<!--end::Mixed Widget 14-->
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
@endpush
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
@push('custom_scripts')
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
