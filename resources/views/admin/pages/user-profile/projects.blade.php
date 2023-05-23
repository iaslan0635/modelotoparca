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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Projects</h1>
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
					<li class="breadcrumb-item text-muted">User Profile</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f08c55e90e">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f08c55e90e" data-allow-clear="true">
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
			<!--begin::Navbar-->
			<div class="card mb-6">
				<div class="card-body pt-9 pb-0">
					<!--begin::Details-->
					<div class="d-flex flex-wrap flex-sm-nowrap">
						<!--begin: Pic-->
						<div class="me-7 mb-4">
							<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
								<img src="assets/media/avatars/300-1.jpg" alt="image" />
								<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
							</div>
						</div>
						<!--end::Pic-->
						<!--begin::Info-->
						<div class="flex-grow-1">
							<!--begin::Title-->
							<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
								<!--begin::User-->
								<div class="d-flex flex-column">
									<!--begin::Name-->
									<div class="d-flex align-items-center mb-2">
										<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
										<a href="#">
											<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
													<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
													<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</div>
									<!--end::Name-->
									<!--begin::Info-->
									<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
										<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
										<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
												<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
												<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Developer</a>
										<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
										<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
												<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->SF, Bay Area</a>
										<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
										<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
												<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->max@kt.com</a>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
								<!--begin::Actions-->
								<div class="d-flex my-4">
									<a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
										<span class="svg-icon svg-icon-3 d-none">
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
									</a>
									<a href="#" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
									<!--begin::Menu-->
									<div class="me-0">
										<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<i class="bi bi-three-dots fs-3"></i>
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
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Title-->
							<!--begin::Stats-->
							<div class="d-flex flex-wrap flex-stack">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column flex-grow-1 pe-8">
									<!--begin::Stats-->
									<div class="d-flex flex-wrap">
										<!--begin::Stat-->
										<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
											<!--begin::Number-->
											<div class="d-flex align-items-center">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
												<span class="svg-icon svg-icon-3 svg-icon-success me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
														<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
											</div>
											<!--end::Number-->
											<!--begin::Label-->
											<div class="fw-semibold fs-6 text-gray-400">Earnings</div>
											<!--end::Label-->
										</div>
										<!--end::Stat-->
										<!--begin::Stat-->
										<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
											<!--begin::Number-->
											<div class="d-flex align-items-center">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
												<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
														<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="80">0</div>
											</div>
											<!--end::Number-->
											<!--begin::Label-->
											<div class="fw-semibold fs-6 text-gray-400">Projects</div>
											<!--end::Label-->
										</div>
										<!--end::Stat-->
										<!--begin::Stat-->
										<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
											<!--begin::Number-->
											<div class="d-flex align-items-center">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
												<span class="svg-icon svg-icon-3 svg-icon-success me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
														<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
											</div>
											<!--end::Number-->
											<!--begin::Label-->
											<div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
											<!--end::Label-->
										</div>
										<!--end::Stat-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Progress-->
								<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
									<div class="d-flex justify-content-between w-100 mt-auto mb-2">
										<span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
										<span class="fw-bold fs-6">50%</span>
									</div>
									<div class="h-5px mx-3 w-100 bg-light mb-3">
										<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<!--end::Progress-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Details-->
					<!--begin::Navs-->
					<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
						<!--begin::Nav item-->
						<li class="nav-item mt-2">
							<a class="nav-link text-active-primary ms-0 me-10 py-5" href="admin/pages/user-profile/overview">Overview</a>
						</li>
						<!--end::Nav item-->
						<!--begin::Nav item-->
						<li class="nav-item mt-2">
							<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="admin/pages/user-profile/projects">Projects</a>
						</li>
						<!--end::Nav item-->
						<!--begin::Nav item-->
						<li class="nav-item mt-2">
							<a class="nav-link text-active-primary ms-0 me-10 py-5" href="admin/pages/user-profile/campaigns">Campaigns</a>
						</li>
						<!--end::Nav item-->
						<!--begin::Nav item-->
						<li class="nav-item mt-2">
							<a class="nav-link text-active-primary ms-0 me-10 py-5" href="admin/pages/user-profile/documents">Documents</a>
						</li>
						<!--end::Nav item-->
						<!--begin::Nav item-->
						<li class="nav-item mt-2">
							<a class="nav-link text-active-primary ms-0 me-10 py-5" href="admin/pages/user-profile/followers">Followers</a>
						</li>
						<!--end::Nav item-->
						<!--begin::Nav item-->
						<li class="nav-item mt-2">
							<a class="nav-link text-active-primary ms-0 me-10 py-5" href="admin/pages/user-profile/activity">Activity</a>
						</li>
						<!--end::Nav item-->
					</ul>
					<!--begin::Navs-->
				</div>
			</div>
			<!--end::Navbar-->
			<!--begin::Toolbar-->
			<div class="d-flex flex-wrap flex-stack mb-6">
				<!--begin::Heading-->
				<h3 class="fw-bold my-2">My Projects
				<span class="fs-6 text-gray-400 fw-semibold ms-1">Active</span></h3>
				<!--end::Heading-->
				<!--begin::Actions-->
				<div class="d-flex flex-wrap my-2">
					<div class="me-4">
						<!--begin::Select-->
						<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body w-125px">
							<option value="Active" selected="selected">Active</option>
							<option value="Approved">In Progress</option>
							<option value="Declined">To Do</option>
							<option value="In Progress">Completed</option>
						</select>
						<!--end::Select-->
					</div>
					<a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">New Project</a>
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Toolbar-->
			<!--begin::Row-->
			<div class="row g-6 g-xl-9">
				<!--begin::Col-->
				<div class="col-md-6 col-xl-4">
					<!--begin::Card-->
					<a href="admin/apps/projects/project" class="card border-hover-primary">
						<!--begin::Card header-->
						<div class="card-header border-0 pt-9">
							<!--begin::Card Title-->
							<div class="card-title m-0">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px w-50px bg-light">
									<img src="assets/media/svg/brand-logos/plurk.svg" alt="image" class="p-3" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Car Title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end:: Card header-->
						<!--begin:: Card body-->
						<div class="card-body p-9">
							<!--begin::Name-->
							<div class="fs-3 fw-bold text-dark">Fitnes App</div>
							<!--end::Name-->
							<!--begin::Description-->
							<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
							<!--end::Description-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap mb-5">
								<!--begin::Due-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">Jun 24, 2022</div>
									<div class="fw-semibold text-gray-400">Due Date</div>
								</div>
								<!--end::Due-->
								<!--begin::Budget-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
									<div class="fw-semibold text-gray-400">Budget</div>
								</div>
								<!--end::Budget-->
							</div>
							<!--end::Info-->
							<!--begin::Progress-->
							<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 50% completed">
								<div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!--end::Progress-->
							<!--begin::Users-->
							<div class="symbol-group symbol-hover">
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
									<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rudy Stone">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
									<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
								</div>
								<!--begin::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end:: Card body-->
					</a>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xl-4">
					<!--begin::Card-->
					<a href="admin/apps/projects/project" class="card border-hover-primary">
						<!--begin::Card header-->
						<div class="card-header border-0 pt-9">
							<!--begin::Card Title-->
							<div class="card-title m-0">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px w-50px bg-light">
									<img src="assets/media/svg/brand-logos/disqus.svg" alt="image" class="p-3" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Car Title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end:: Card header-->
						<!--begin:: Card body-->
						<div class="card-body p-9">
							<!--begin::Name-->
							<div class="fs-3 fw-bold text-dark">Leaf CRM</div>
							<!--end::Name-->
							<!--begin::Description-->
							<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
							<!--end::Description-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap mb-5">
								<!--begin::Due-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">May 10, 2021</div>
									<div class="fw-semibold text-gray-400">Due Date</div>
								</div>
								<!--end::Due-->
								<!--begin::Budget-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">$36,400.00</div>
									<div class="fw-semibold text-gray-400">Budget</div>
								</div>
								<!--end::Budget-->
							</div>
							<!--end::Info-->
							<!--begin::Progress-->
							<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 30% completed">
								<div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!--end::Progress-->
							<!--begin::Users-->
							<div class="symbol-group symbol-hover">
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
									<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
									<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
								</div>
								<!--begin::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end:: Card body-->
					</a>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xl-4">
					<!--begin::Card-->
					<a href="admin/apps/projects/project" class="card border-hover-primary">
						<!--begin::Card header-->
						<div class="card-header border-0 pt-9">
							<!--begin::Card Title-->
							<div class="card-title m-0">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px w-50px bg-light">
									<img src="assets/media/svg/brand-logos/figma-1.svg" alt="image" class="p-3" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Car Title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end:: Card header-->
						<!--begin:: Card body-->
						<div class="card-body p-9">
							<!--begin::Name-->
							<div class="fs-3 fw-bold text-dark">Atica Banking</div>
							<!--end::Name-->
							<!--begin::Description-->
							<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
							<!--end::Description-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap mb-5">
								<!--begin::Due-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">Mar 14, 2021</div>
									<div class="fw-semibold text-gray-400">Due Date</div>
								</div>
								<!--end::Due-->
								<!--begin::Budget-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">$605,100.00</div>
									<div class="fw-semibold text-gray-400">Budget</div>
								</div>
								<!--end::Budget-->
							</div>
							<!--end::Info-->
							<!--begin::Progress-->
							<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 100% completed">
								<div class="bg-success rounded h-4px" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!--end::Progress-->
							<!--begin::Users-->
							<div class="symbol-group symbol-hover">
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mad Macy">
									<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Cris Willson">
									<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mike Garcie">
									<span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
								</div>
								<!--begin::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end:: Card body-->
					</a>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xl-4">
					<!--begin::Card-->
					<a href="admin/apps/projects/project" class="card border-hover-primary">
						<!--begin::Card header-->
						<div class="card-header border-0 pt-9">
							<!--begin::Card Title-->
							<div class="card-title m-0">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px w-50px bg-light">
									<img src="assets/media/svg/brand-logos/sentry-3.svg" alt="image" class="p-3" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Car Title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end:: Card header-->
						<!--begin:: Card body-->
						<div class="card-body p-9">
							<!--begin::Name-->
							<div class="fs-3 fw-bold text-dark">Finance Dispatch</div>
							<!--end::Name-->
							<!--begin::Description-->
							<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
							<!--end::Description-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap mb-5">
								<!--begin::Due-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">Sep 22, 2022</div>
									<div class="fw-semibold text-gray-400">Due Date</div>
								</div>
								<!--end::Due-->
								<!--begin::Budget-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
									<div class="fw-semibold text-gray-400">Budget</div>
								</div>
								<!--end::Budget-->
							</div>
							<!--end::Info-->
							<!--begin::Progress-->
							<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 60% completed">
								<div class="bg-info rounded h-4px" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!--end::Progress-->
							<!--begin::Users-->
							<div class="symbol-group symbol-hover">
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Nich Warden">
									<span class="symbol-label bg-warning text-inverse-warning fw-bold">N</span>
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rob Otto">
									<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
								</div>
								<!--begin::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end:: Card body-->
					</a>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xl-4">
					<!--begin::Card-->
					<a href="admin/apps/projects/project" class="card border-hover-primary">
						<!--begin::Card header-->
						<div class="card-header border-0 pt-9">
							<!--begin::Card Title-->
							<div class="card-title m-0">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px w-50px bg-light">
									<img src="assets/media/svg/brand-logos/xing-icon.svg" alt="image" class="p-3" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Car Title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end:: Card header-->
						<!--begin:: Card body-->
						<div class="card-body p-9">
							<!--begin::Name-->
							<div class="fs-3 fw-bold text-dark">9 Degree</div>
							<!--end::Name-->
							<!--begin::Description-->
							<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
							<!--end::Description-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap mb-5">
								<!--begin::Due-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">Feb 21, 2022</div>
									<div class="fw-semibold text-gray-400">Due Date</div>
								</div>
								<!--end::Due-->
								<!--begin::Budget-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
									<div class="fw-semibold text-gray-400">Budget</div>
								</div>
								<!--end::Budget-->
							</div>
							<!--end::Info-->
							<!--begin::Progress-->
							<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 40% completed">
								<div class="bg-primary rounded h-4px" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!--end::Progress-->
							<!--begin::Users-->
							<div class="symbol-group symbol-hover">
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
									<img alt="Pic" src="assets/media/avatars/300-20.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
									<img alt="Pic" src="assets/media/avatars/300-7.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
									<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
								</div>
								<!--begin::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end:: Card body-->
					</a>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xl-4">
					<!--begin::Card-->
					<a href="admin/apps/projects/project" class="card border-hover-primary">
						<!--begin::Card header-->
						<div class="card-header border-0 pt-9">
							<!--begin::Card Title-->
							<div class="card-title m-0">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px w-50px bg-light">
									<img src="assets/media/svg/brand-logos/tvit.svg" alt="image" class="p-3" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Car Title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end:: Card header-->
						<!--begin:: Card body-->
						<div class="card-body p-9">
							<!--begin::Name-->
							<div class="fs-3 fw-bold text-dark">GoPro App</div>
							<!--end::Name-->
							<!--begin::Description-->
							<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
							<!--end::Description-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap mb-5">
								<!--begin::Due-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">Jul 25, 2022</div>
									<div class="fw-semibold text-gray-400">Due Date</div>
								</div>
								<!--end::Due-->
								<!--begin::Budget-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
									<div class="fw-semibold text-gray-400">Budget</div>
								</div>
								<!--end::Budget-->
							</div>
							<!--end::Info-->
							<!--begin::Progress-->
							<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 70% completed">
								<div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!--end::Progress-->
							<!--begin::Users-->
							<div class="symbol-group symbol-hover">
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
									<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
									<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
								</div>
								<!--begin::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end:: Card body-->
					</a>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xl-4">
					<!--begin::Card-->
					<a href="admin/apps/projects/project" class="card border-hover-primary">
						<!--begin::Card header-->
						<div class="card-header border-0 pt-9">
							<!--begin::Card Title-->
							<div class="card-title m-0">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px w-50px bg-light">
									<img src="assets/media/svg/brand-logos/aven.svg" alt="image" class="p-3" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Car Title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end:: Card header-->
						<!--begin:: Card body-->
						<div class="card-body p-9">
							<!--begin::Name-->
							<div class="fs-3 fw-bold text-dark">Buldozer CRM</div>
							<!--end::Name-->
							<!--begin::Description-->
							<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
							<!--end::Description-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap mb-5">
								<!--begin::Due-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">Apr 15, 2022</div>
									<div class="fw-semibold text-gray-400">Due Date</div>
								</div>
								<!--end::Due-->
								<!--begin::Budget-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
									<div class="fw-semibold text-gray-400">Budget</div>
								</div>
								<!--end::Budget-->
							</div>
							<!--end::Info-->
							<!--begin::Progress-->
							<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 70% completed">
								<div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!--end::Progress-->
							<!--begin::Users-->
							<div class="symbol-group symbol-hover">
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
									<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="John Mixin">
									<img alt="Pic" src="assets/media/avatars/300-14.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
									<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
								</div>
								<!--begin::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end:: Card body-->
					</a>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xl-4">
					<!--begin::Card-->
					<a href="admin/apps/projects/project" class="card border-hover-primary">
						<!--begin::Card header-->
						<div class="card-header border-0 pt-9">
							<!--begin::Card Title-->
							<div class="card-title m-0">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px w-50px bg-light">
									<img src="assets/media/svg/brand-logos/treva.svg" alt="image" class="p-3" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Car Title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<span class="badge badge-light-danger fw-bold me-auto px-4 py-3">Overdue</span>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end:: Card header-->
						<!--begin:: Card body-->
						<div class="card-body p-9">
							<!--begin::Name-->
							<div class="fs-3 fw-bold text-dark">Aviasales App</div>
							<!--end::Name-->
							<!--begin::Description-->
							<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
							<!--end::Description-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap mb-5">
								<!--begin::Due-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">Jul 25, 2022</div>
									<div class="fw-semibold text-gray-400">Due Date</div>
								</div>
								<!--end::Due-->
								<!--begin::Budget-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
									<div class="fw-semibold text-gray-400">Budget</div>
								</div>
								<!--end::Budget-->
							</div>
							<!--end::Info-->
							<!--begin::Progress-->
							<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 10% completed">
								<div class="bg-danger rounded h-4px" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!--end::Progress-->
							<!--begin::Users-->
							<div class="symbol-group symbol-hover">
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
									<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
									<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
								</div>
								<!--begin::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end:: Card body-->
					</a>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xl-4">
					<!--begin::Card-->
					<a href="admin/apps/projects/project" class="card border-hover-primary">
						<!--begin::Card header-->
						<div class="card-header border-0 pt-9">
							<!--begin::Card Title-->
							<div class="card-title m-0">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px w-50px bg-light">
									<img src="assets/media/svg/brand-logos/kanba.svg" alt="image" class="p-3" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Car Title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end:: Card header-->
						<!--begin:: Card body-->
						<div class="card-body p-9">
							<!--begin::Name-->
							<div class="fs-3 fw-bold text-dark">Oppo CRM</div>
							<!--end::Name-->
							<!--begin::Description-->
							<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
							<!--end::Description-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap mb-5">
								<!--begin::Due-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">Sep 22, 2022</div>
									<div class="fw-semibold text-gray-400">Due Date</div>
								</div>
								<!--end::Due-->
								<!--begin::Budget-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
									<div class="fw-semibold text-gray-400">Budget</div>
								</div>
								<!--end::Budget-->
							</div>
							<!--end::Info-->
							<!--begin::Progress-->
							<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 100% completed">
								<div class="bg-success rounded h-4px" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!--end::Progress-->
							<!--begin::Users-->
							<div class="symbol-group symbol-hover">
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Nick Macy">
									<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Sean Paul">
									<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
								</div>
								<!--begin::User-->
								<!--begin::User-->
								<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mike Collin">
									<span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
								</div>
								<!--begin::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end:: Card body-->
					</a>
					<!--end::Card-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Pagination-->
			<div class="d-flex flex-stack flex-wrap pt-10">
				<div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
				<!--begin::Pages-->
				<ul class="pagination">
					<li class="page-item previous">
						<a href="#" class="page-link">
							<i class="previous"></i>
						</a>
					</li>
					<li class="page-item active">
						<a href="#" class="page-link">1</a>
					</li>
					<li class="page-item">
						<a href="#" class="page-link">2</a>
					</li>
					<li class="page-item">
						<a href="#" class="page-link">3</a>
					</li>
					<li class="page-item">
						<a href="#" class="page-link">4</a>
					</li>
					<li class="page-item">
						<a href="#" class="page-link">5</a>
					</li>
					<li class="page-item">
						<a href="#" class="page-link">6</a>
					</li>
					<li class="page-item next">
						<a href="#" class="page-link">
							<i class="next"></i>
						</a>
					</li>
				</ul>
				<!--end::Pages-->
			</div>
			<!--end::Pagination-->
			<!--begin::Modals-->
			<!--begin::Modal - Create Project-->
			<div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-fullscreen p-9">
					<!--begin::Modal content-->
					<div class="modal-content modal-rounded">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2>Create Project</h2>
							<!--end::Modal title-->
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
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y m-5">
							<!--begin::Stepper-->
							<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
								<!--begin::Container-->
								<div class="container">
									<!--begin::Nav-->
									<div class="stepper-nav justify-content-center py-2">
										<!--begin::Step 1-->
										<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
											<h3 class="stepper-title">Project Type</h3>
										</div>
										<!--end::Step 1-->
										<!--begin::Step 2-->
										<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
											<h3 class="stepper-title">Project Settings</h3>
										</div>
										<!--end::Step 2-->
										<!--begin::Step 3-->
										<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
											<h3 class="stepper-title">Budget</h3>
										</div>
										<!--end::Step 3-->
										<!--begin::Step 4-->
										<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
											<h3 class="stepper-title">Build A Team</h3>
										</div>
										<!--end::Step 4-->
										<!--begin::Step 5-->
										<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
											<h3 class="stepper-title">Set First Target</h3>
										</div>
										<!--end::Step 5-->
										<!--begin::Step 6-->
										<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
											<h3 class="stepper-title">Upload Files</h3>
										</div>
										<!--end::Step 6-->
										<!--begin::Step 7-->
										<div class="stepper-item" data-kt-stepper-element="nav">
											<h3 class="stepper-title">Completed</h3>
										</div>
										<!--end::Step 7-->
									</div>
									<!--end::Nav-->
									<!--begin::Form-->
									<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_project_form" method="post">
										<!--begin::Type-->
										<div class="current" data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-7 pb-lg-12">
													<!--begin::Title-->
													<h1 class="fw-bold text-dark">Project Type</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-semibold fs-4">If you need more info, please check out
													<a href="#" class="link-primary fw-bold">FAQ Page</a></div>
													<!--end::Description-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="fv-row mb-15" data-kt-buttons="true">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
														<!--begin::Input-->
														<input class="btn-check" type="radio" checked="checked" name="project_type" value="1" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="d-flex">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
															<span class="svg-icon svg-icon-3hx">
																<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
																	<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
																	<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Info-->
															<span class="ms-4">
																<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal Project</span>
																<span class="fw-semibold fs-4 text-muted">If you need more info, please check it out</span>
															</span>
															<!--end::Info-->
														</span>
														<!--end::Label-->
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
														<!--begin::Input-->
														<input class="btn-check" type="radio" name="project_type" value="2" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="d-flex">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
															<span class="svg-icon svg-icon-3hx">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="currentColor" />
																	<path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Info-->
															<span class="ms-4">
																<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Team Project</span>
																<span class="fw-semibold fs-4 text-muted">Create corporate account to manage users</span>
															</span>
															<!--end::Info-->
														</span>
														<!--end::Label-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
														<span class="indicator-label">Project Settings</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Type-->
										<!--begin::Settings-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-12">
													<!--begin::Title-->
													<h1 class="fw-bold text-dark">Project Settings</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-semibold fs-4">If you need more info, please check
													<a href="#" class="link-primary">Project Guidelines</a></div>
													<!--end::Description-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Dropzone-->
													<div class="dropzone" id="kt_modal_create_project_settings_logo">
														<!--begin::Message-->
														<div class="dz-message needsclick">
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
																<h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
																<span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
															</div>
															<!--end::Info-->
														</div>
													</div>
													<!--end::Dropzone-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Label-->
													<label class="required fs-6 fw-semibold mb-2">Customer</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select..." name="settings_customer">
														<option></option>
														<option value="1">Keenthemes</option>
														<option value="2">CRM App</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
														<span class="required">Project Name</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify project name"></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Project Name" value="StockPro Mobile App" name="settings_name" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Label-->
													<label class="required fs-6 fw-semibold mb-2">Project Description</label>
													<!--end::Label-->
													<!--begin::Input-->
													<textarea class="form-control form-control-solid" rows="3" placeholder="Enter Project Description" name="settings_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Label-->
													<label class="required fs-6 fw-semibold mb-2">Release Date</label>
													<!--end::Label-->
													<!--begin::Wrapper-->
													<div class="position-relative d-flex align-items-center">
														<!--begin::Icon-->
														<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
														<span class="svg-icon svg-icon-2 position-absolute mx-4">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Icon-->
														<!--begin::Input-->
														<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="settings_release_date" />
														<!--end::Input-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-15">
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack">
														<!--begin::Label-->
														<div class="me-5">
															<label class="required fs-6 fw-semibold">Notifications</label>
															<div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
														</div>
														<!--end::Label-->
														<!--begin::Checkboxes-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<label class="form-check form-check-custom form-check-solid me-10">
																<!--begin::Input-->
																<input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="settings_notifications[]" />
																<!--end::Input-->
																<!--begin::Label-->
																<span class="form-check-label fw-semibold">Email</span>
																<!--end::Label-->
															</label>
															<!--end::Checkbox-->
															<!--begin::Checkbox-->
															<label class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="settings_notifications[]" />
																<!--end::Input-->
																<!--begin::Label-->
																<span class="form-check-label fw-semibold">Phone</span>
																<!--end::Label-->
															</label>
															<!--end::Checkbox-->
														</div>
														<!--end::Checkboxes-->
													</div>
													<!--begin::Wrapper-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex flex-stack">
													<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="settings-previous">Project Type</button>
													<button type="button" class="btn btn-lg btn-primary" data-kt-element="settings-next">
														<span class="indicator-label">Budget</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Settings-->
										<!--begin::Budget-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-10 pb-lg-12">
													<!--begin::Title-->
													<h1 class="fw-bold text-dark">Budget</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-semibold fs-4">If you need more info, please check
													<a href="#" class="link-primary">Project Guidelines</a></div>
													<!--end::Description-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
														<span class="required">Setup Budget</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-semibold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bold mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
													</label>
													<!--end::Label-->
													<!--begin::Dialer-->
													<div class="position-relative w-lg-250px" id="kt_modal_create_project_budget_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
														<!--begin::Decrease control-->
														<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
															<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
															<span class="svg-icon svg-icon-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																	<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--end::Decrease control-->
														<!--begin::Input control-->
														<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="budget_setup" readonly="readonly" value="$50" />
														<!--end::Input control-->
														<!--begin::Increase control-->
														<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
															<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
															<span class="svg-icon svg-icon-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																	<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																	<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--end::Increase control-->
													</div>
													<!--end::Dialer-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mb-2">Budget Usage</label>
													<!--end::Label-->
													<!--begin::Row-->
													<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
														<!--begin::Col-->
														<div class="col-md-6 col-lg-12 col-xxl-6">
															<!--begin::Option-->
															<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
																<!--begin::Radio-->
																<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																	<input class="form-check-input" type="radio" name="budget_usage" value="1" checked="checked" />
																</span>
																<!--end::Radio-->
																<!--begin::Info-->
																<span class="ms-5">
																	<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise Usage</span>
																	<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
																</span>
																<!--end::Info-->
															</label>
															<!--end::Option-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-6 col-lg-12 col-xxl-6">
															<!--begin::Option-->
															<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
																<!--begin::Radio-->
																<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																	<input class="form-check-input" type="radio" name="budget_usage" value="2" />
																</span>
																<!--end::Radio-->
																<!--begin::Info-->
																<span class="ms-5">
																	<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme Usage</span>
																	<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
																</span>
																<!--end::Info-->
															</label>
															<!--end::Option-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-15">
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack">
														<!--begin::Label-->
														<div class="me-5">
															<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
															<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
														</div>
														<!--end::Label-->
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" name="budget_allow" checked="checked" />
															<span class="form-check-label fw-semibold text-muted">Allowed</span>
														</label>
														<!--end::Switch-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex flex-stack">
													<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="budget-previous">Project Settings</button>
													<button type="button" class="btn btn-lg btn-primary" data-kt-element="budget-next">
														<span class="indicator-label">Build Team</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Budget-->
										<!--begin::Team-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-12">
													<!--begin::Title-->
													<h1 class="fw-bold text-dark">Build a Team</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-semibold fs-4">If you need more info, please check
													<a href="#" class="link-primary">Project Guidelines</a></div>
													<!--end::Description-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="mb-8">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mb-2">Invite Teammates</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Add project memnbers by name or email.." name="invite_teammates" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-8">
													<!--begin::Label-->
													<div class="fs-6 fw-semibold mb-2">Team Members</div>
													<!--end::Label-->
													<!--begin::Users-->
													<div class="mh-300px scroll-y me-n7 pe-7">
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
																	<div class="fw-semibold text-muted">smith@kpmg.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2" selected="selected">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
																	<div class="fw-semibold text-muted">melody@altbox.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1" selected="selected">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
																	<div class="fw-semibold text-muted">max@kt.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3" selected="selected">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
																	<div class="fw-semibold text-muted">sean@dellito.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2" selected="selected">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
																	<div class="fw-semibold text-muted">brian@exchange.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3" selected="selected">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
																	<div class="fw-semibold text-muted">mik@pex.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2" selected="selected">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
																	<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3" selected="selected">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
																	<div class="fw-semibold text-muted">olivia@corpmail.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2" selected="selected">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
																	<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1" selected="selected">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
																	<div class="fw-semibold text-muted">dam@consilting.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3" selected="selected">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
																	<div class="fw-semibold text-muted">emma@intenso.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2" selected="selected">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
																	<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1" selected="selected">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
																	<div class="fw-semibold text-muted">robert@benko.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3" selected="selected">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
																	<div class="fw-semibold text-muted">miller@mapple.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3" selected="selected">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
																	<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2" selected="selected">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
																	<div class="fw-semibold text-muted">ethan@loop.com.au</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1" selected="selected">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
														<!--begin::User-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Details-->
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
																	<div class="fw-semibold text-muted">ethan@loop.com.au</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Details-->
															<!--begin::Access menu-->
															<div class="ms-2 w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																	<option value="1">Guest</option>
																	<option value="2">Owner</option>
																	<option value="3" selected="selected">Can Edit</option>
																</select>
															</div>
															<!--end::Access menu-->
														</div>
														<!--end::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end::Input group-->
												<!--begin::Notice-->
												<div class="d-flex flex-stack mb-15">
													<!--begin::Label-->
													<div class="me-5 fw-semibold">
														<label class="fs-6">Adding Users by Team Members</label>
														<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
													</div>
													<!--end::Label-->
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" checked="checked" />
													</label>
													<!--end::Switch-->
												</div>
												<!--end::Notice-->
												<!--begin::Actions-->
												<div class="d-flex flex-stack">
													<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="team-previous">Budget</button>
													<button type="button" class="btn btn-lg btn-primary" data-kt-element="team-next">
														<span class="indicator-label">Set Target</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Team-->
										<!--begin::Targets-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-12">
													<!--begin::Title-->
													<h1 class="fw-bold text-dark">Set First Target</h1>
													<!--end::Title-->
													<!--begin::Title-->
													<div class="text-muted fw-semibold fs-4">If you need more info, please check
													<a href="#" class="link-primary">Project Guidelines</a></div>
													<!--end::Title-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<label class="fs-6 fw-semibold mb-2">Target Title</label>
													<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="Project Launch" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row g-9 mb-8">
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-semibold mb-2">Assign</label>
														<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
															<option></option>
															<option value="1">Karina Clark</option>
															<option value="2" selected="selected">Robert Doe</option>
															<option value="3">Niel Owen</option>
															<option value="4">Olivia Wild</option>
															<option value="5">Sean Bean</option>
														</select>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-semibold mb-2">Due Date</label>
														<div class="position-relative d-flex align-items-center">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
															<span class="svg-icon svg-icon-2 position-absolute mx-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																	<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																	<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Datepicker-->
															<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="target_due_date" />
															<!--end::Datepicker-->
														</div>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<label class="fs-6 fw-semibold mb-2">Target Details</label>
													<textarea class="form-control form-control-solid" rows="2" name="target_details" placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<label class="required fs-6 fw-semibold mb-2">Tags</label>
													<input class="form-control form-control-solid" value="Important, Urgent" name="target_tags" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack">
														<!--begin::Label-->
														<div class="me-5">
															<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
															<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
														</div>
														<!--end::Label-->
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
															<span class="form-check-label fw-semibold text-muted">Allowed</span>
														</label>
														<!--end::Switch-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-15">
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack">
														<!--begin::Label-->
														<div class="me-5">
															<label class="fs-6 fw-semibold">Notifications</label>
															<div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
														</div>
														<!--end::Label-->
														<!--begin::Checkboxes-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<label class="form-check form-check-custom form-check-solid me-10">
																<!--begin::Input-->
																<input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="target_notifications[]" />
																<!--end::Input-->
																<!--begin::Label-->
																<span class="form-check-label fw-semibold">Email</span>
																<!--end::Label-->
															</label>
															<!--end::Checkbox-->
															<!--begin::Checkbox-->
															<label class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="target_notifications[]" />
																<!--end::Input-->
																<!--begin::Label-->
																<span class="form-check-label fw-semibold">Phone</span>
																<!--end::Label-->
															</label>
															<!--end::Checkbox-->
														</div>
														<!--end::Checkboxes-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex flex-stack">
													<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="targets-previous">Build a Team</button>
													<button type="button" class="btn btn-lg btn-primary" data-kt-element="targets-next">
														<span class="indicator-label">Upload Files</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Targets-->
										<!--begin::Files-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-10 pb-lg-12">
													<!--begin::Title-->
													<h1 class="fw-bold text-dark">Upload Files</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-semibold fs-4">If you need more info, please check
													<a href="#" class="link-primary">Project Guidelines</a></div>
													<!--end::Description-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Dropzone-->
													<div class="dropzone" id="kt_modal_create_project_files_upload">
														<!--begin::Message-->
														<div class="dz-message needsclick">
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
																<h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
																<span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
															</div>
															<!--end::Info-->
														</div>
													</div>
													<!--end::Dropzone-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-8">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mb-2">Uploaded File</label>
													<!--End::Label-->
													<!--begin::Files-->
													<div class="mh-300px scroll-y me-n7 pe-7">
														<!--begin::File-->
														<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px">
																	<img src="assets/media/svg/files/pdf.svg" alt="icon" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-6">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Avionica Technical Requirements</a>
																	<div class="fw-semibold text-muted">230kb</div>
																</div>
																<!--end::Details-->
															</div>
															<!--begin::Menu-->
															<div class="min-w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																	<option></option>
																	<option value="1">Remove</option>
																	<option value="2">Modify</option>
																	<option value="3">Select</option>
																</select>
															</div>
															<!--end::Menu-->
														</div>
														<!--end::File-->
														<!--begin::File-->
														<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px">
																	<img src="assets/media/svg/files/doc.svg" alt="icon" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-6">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree CURD draftplan</a>
																	<div class="fw-semibold text-muted">3.6mb</div>
																</div>
																<!--end::Details-->
															</div>
															<!--begin::Menu-->
															<div class="min-w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																	<option></option>
																	<option value="1">Remove</option>
																	<option value="2">Modify</option>
																	<option value="3">Select</option>
																</select>
															</div>
															<!--end::Menu-->
														</div>
														<!--end::File-->
														<!--begin::File-->
														<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px">
																	<img src="assets/media/svg/files/css.svg" alt="icon" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-6">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">User CRUD Styles</a>
																	<div class="fw-semibold text-muted">85kb</div>
																</div>
																<!--end::Details-->
															</div>
															<!--begin::Menu-->
															<div class="min-w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																	<option></option>
																	<option value="1">Remove</option>
																	<option value="2">Modify</option>
																	<option value="3">Select</option>
																</select>
															</div>
															<!--end::Menu-->
														</div>
														<!--end::File-->
														<!--begin::File-->
														<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px">
																	<img src="assets/media/svg/files/ai.svg" alt="icon" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-6">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Initial Logo</a>
																	<div class="fw-semibold text-muted">40kb</div>
																</div>
																<!--end::Details-->
															</div>
															<!--begin::Menu-->
															<div class="min-w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																	<option></option>
																	<option value="1">Remove</option>
																	<option value="2">Modify</option>
																	<option value="3">Select</option>
																</select>
															</div>
															<!--end::Menu-->
														</div>
														<!--end::File-->
														<!--begin::File-->
														<div class="d-flex flex-stack py-4">
															<div class="d-flex align-items-center">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px">
																	<img src="assets/media/svg/files/tif.svg" alt="icon" />
																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-6">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Tower Hill Bilboard</a>
																	<div class="fw-semibold text-muted">27mb</div>
																</div>
																<!--end::Details-->
															</div>
															<!--begin::Menu-->
															<div class="min-w-100px">
																<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																	<option></option>
																	<option value="1">Remove</option>
																	<option value="2">Modify</option>
																	<option value="3">Select</option>
																</select>
															</div>
															<!--end::Menu-->
														</div>
														<!--end::File-->
													</div>
													<!--end::Files-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack">
														<!--begin::Label-->
														<div class="me-5">
															<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
															<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
														</div>
														<!--end::Label-->
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
															<span class="form-check-label fw-semibold text-muted">Allowed</span>
														</label>
														<!--end::Switch-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex flex-stack">
													<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="files-previous">Set First Target</button>
													<button type="button" class="btn btn-lg btn-primary" data-kt-element="files-next">
														<span class="indicator-label">Complete</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Files-->
										<!--begin::Complete-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-12 text-center">
													<!--begin::Title-->
													<h1 class="fw-bold text-dark">Project Created!</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-semibold fs-4">If you need more info, please check how to create project</div>
													<!--end::Description-->
												</div>
												<!--end::Heading-->
												<!--begin::Actions-->
												<div class="d-flex flex-center pb-20">
													<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Project</button>
													<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Project</a>
												</div>
												<!--end::Actions-->
												<!--begin::Illustration-->
												<div class="text-center px-4">
													<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px" />
												</div>
												<!--end::Illustration-->
											</div>
										</div>
										<!--end::Complete-->
									</form>
									<!--end::Form-->
								</div>
								<!--begin::Container-->
							</div>
							<!--end::Stepper-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Create Project-->
			<!--begin::Modal - Offer A Deal-->
			<div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-1000px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header py-7 d-flex justify-content-between">
							<!--begin::Modal title-->
							<h2>Offer a Deal</h2>
							<!--end::Modal title-->
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
						<div class="modal-body scroll-y m-5">
							<!--begin::Stepper-->
							<div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
								<!--begin::Nav-->
								<div class="stepper-nav justify-content-center py-2">
									<!--begin::Step 1-->
									<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Deal Type</h3>
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Deal Details</h3>
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Finance Settings</h3>
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Completed</h3>
									</div>
									<!--end::Step 4-->
								</div>
								<!--end::Nav-->
								<!--begin::Form-->
								<form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_modal_offer_a_deal_form">
									<!--begin::Type-->
									<div class="current" data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="mb-13">
												<!--begin::Title-->
												<h2 class="mb-3">Deal Type</h2>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-5">If you need more info, please check out
												<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="fv-row mb-15" data-kt-buttons="true">
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
													<!--begin::Input-->
													<input class="btn-check" type="radio" checked="checked" name="offer_type" value="1" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="d-flex">
														<!--begin::Icon-->
														<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
														<span class="svg-icon svg-icon-3hx">
															<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
																<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
																<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="ms-4">
															<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal Deal</span>
															<span class="fw-semibold fs-4 text-muted">If you need more info, please check it out</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
													<!--begin::Input-->
													<input class="btn-check" type="radio" name="offer_type" value="2" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="d-flex">
														<!--begin::Icon-->
														<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
														<span class="svg-icon svg-icon-3hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="ms-4">
															<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Corporate Deal</span>
															<span class="fw-semibold fs-4 text-muted">Create corporate account to manage users</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
													<span class="indicator-label">Offer Details</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Type-->
									<!--begin::Details-->
									<div data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="mb-13">
												<!--begin::Title-->
												<h2 class="mb-3">Deal Details</h2>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-5">If you need more info, please check out
												<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold mb-2">Customer</label>
												<!--end::Label-->
												<!--begin::Input-->
												<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" name="details_customer">
													<option></option>
													<option value="1" selected="selected">Keenthemes</option>
													<option value="2">CRM App</option>
												</select>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold mb-2">Deal Title</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid" placeholder="Enter Deal Title" name="details_title" value="Marketing Campaign" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2">Deal Description</label>
												<!--end::Label-->
												<!--begin::Label-->
												<textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description" name="details_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
												<!--end::Label-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<label class="required fs-6 fw-semibold mb-2">Activation Date</label>
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
															<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
															<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="details_activation_date" />
													<!--end::Datepicker-->
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-15">
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack">
													<!--begin::Label-->
													<div class="me-5">
														<label class="required fs-6 fw-semibold">Notifications</label>
														<div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
													</div>
													<!--end::Label-->
													<!--begin::Checkboxes-->
													<div class="d-flex">
														<!--begin::Checkbox-->
														<label class="form-check form-check-custom form-check-solid me-10">
															<!--begin::Input-->
															<input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="details_notifications[]" />
															<!--end::Input-->
															<!--begin::Label-->
															<span class="form-check-label fw-semibold">Email</span>
															<!--end::Label-->
														</label>
														<!--end::Checkbox-->
														<!--begin::Checkbox-->
														<label class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="details_notifications[]" />
															<!--end::Input-->
															<!--begin::Label-->
															<span class="form-check-label fw-semibold">Phone</span>
															<!--end::Label-->
														</label>
														<!--end::Checkbox-->
													</div>
													<!--end::Checkboxes-->
												</div>
												<!--begin::Wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex flex-stack">
												<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="details-previous">Deal Type</button>
												<button type="button" class="btn btn-lg btn-primary" data-kt-element="details-next">
													<span class="indicator-label">Financing</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Details-->
									<!--begin::Budget-->
									<div data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="mb-13">
												<!--begin::Title-->
												<h2 class="mb-3">Finance</h2>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-5">If you need more info, please check out
												<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
													<span class="required">Setup Budget</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-semibold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bold mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
												</label>
												<!--end::Label-->
												<!--begin::Dialer-->
												<div class="position-relative w-lg-250px" id="kt_modal_finance_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
													<!--begin::Decrease control-->
													<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
														<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
														<span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--end::Decrease control-->
													<!--begin::Input control-->
													<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="finance_setup" readonly="readonly" value="$50" />
													<!--end::Input control-->
													<!--begin::Increase control-->
													<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
														<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
														<span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--end::Increase control-->
												</div>
												<!--end::Dialer-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2">Budget Usage</label>
												<!--end::Label-->
												<!--begin::Row-->
												<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
													<!--begin::Col-->
													<div class="col-md-6 col-lg-12 col-xxl-6">
														<!--begin::Option-->
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
															<!--begin::Radio-->
															<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																<input class="form-check-input" type="radio" name="finance_usage" value="1" checked="checked" />
															</span>
															<!--end::Radio-->
															<!--begin::Info-->
															<span class="ms-5">
																<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise Usage</span>
																<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
															</span>
															<!--end::Info-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 col-lg-12 col-xxl-6">
														<!--begin::Option-->
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
															<!--begin::Radio-->
															<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																<input class="form-check-input" type="radio" name="finance_usage" value="2" />
															</span>
															<!--end::Radio-->
															<!--begin::Info-->
															<span class="ms-5">
																<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme Usage</span>
																<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
															</span>
															<!--end::Info-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-15">
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack">
													<!--begin::Label-->
													<div class="me-5">
														<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
														<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
													</div>
													<!--end::Label-->
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" name="finance_allow" checked="checked" />
														<span class="form-check-label fw-semibold text-muted">Allowed</span>
													</label>
													<!--end::Switch-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex flex-stack">
												<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="finance-previous">Project Settings</button>
												<button type="button" class="btn btn-lg btn-primary" data-kt-element="finance-next">
													<span class="indicator-label">Build Team</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Budget-->
									<!--begin::Complete-->
									<div data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="mb-13">
												<!--begin::Title-->
												<h2 class="mb-3">Deal Created!</h2>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-5">If you need more info, please check out
												<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Actions-->
											<div class="d-flex flex-center pb-20">
												<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Deal</button>
												<a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Deal</a>
											</div>
											<!--end::Actions-->
											<!--begin::Illustration-->
											<div class="text-center px-4">
												<img src="assets/media/illustrations/sketchy-1/20.png" alt="" class="mw-100 mh-300px" />
											</div>
											<!--end::Illustration-->
										</div>
									</div>
									<!--end::Complete-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Stepper-->
						</div>
						<!--begin::Modal body-->
					</div>
				</div>
			</div>
			<!--end::Modal - Offer A Deal-->
			<!--end::Modals-->
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
<script src="assets/js/custom/pages/user-profile/general.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
<script src="assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
