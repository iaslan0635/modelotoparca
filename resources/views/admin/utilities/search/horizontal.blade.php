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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Horizontal</h1>
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
					<li class="breadcrumb-item text-muted">Utilities</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Search</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f096ac93b1">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f096ac93b1" data-allow-clear="true">
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
			<!--begin::Form-->
			<form action="#">
				<!--begin::Card-->
				<div class="card mb-7">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Compact form-->
						<div class="d-flex align-items-center">
							<!--begin::Input group-->
							<div class="position-relative w-md-400px me-md-2">
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
							</div>
							<!--end::Input group-->
							<!--begin:Action-->
							<div class="d-flex align-items-center">
								<button type="submit" class="btn btn-primary me-5">Search</button>
								<a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse" href="#kt_advanced_search_form">Advanced Search</a>
							</div>
							<!--end:Action-->
						</div>
						<!--end::Compact form-->
						<!--begin::Advance form-->
						<div class="collapse" id="kt_advanced_search_form">
							<!--begin::Separator-->
							<div class="separator separator-dashed mt-9 mb-6"></div>
							<!--end::Separator-->
							<!--begin::Row-->
							<div class="row g-8 mb-8">
								<!--begin::Col-->
								<div class="col-xxl-7">
									<label class="fs-6 form-label fw-bold text-dark">Tags</label>
									<input type="text" class="form-control form-control form-control-solid" name="tags" value="products, users, events" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-5">
									<!--begin::Row-->
									<div class="row g-8">
										<!--begin::Col-->
										<div class="col-lg-6">
											<label class="fs-6 form-label fw-bold text-dark">Team Type</label>
											<!--begin::Select-->
											<select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
												<option value=""></option>
												<option value="1">Not started</option>
												<option value="2" selected="selected">In Progress</option>
												<option value="3">Done</option>
											</select>
											<!--end::Select-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6">
											<label class="fs-6 form-label fw-bold text-dark">Select Group</label>
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">All</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="users" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">Users</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="orders" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">Orders</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row g-8">
								<!--begin::Col-->
								<div class="col-xxl-7">
									<!--begin::Row-->
									<div class="row g-8">
										<!--begin::Col-->
										<div class="col-lg-4">
											<label class="fs-6 form-label fw-bold text-dark">Min. Amount</label>
											<!--begin::Dialer-->
											<div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
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
												<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$50" />
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
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-4">
											<label class="fs-6 form-label fw-bold text-dark">Max. Amount</label>
											<!--begin::Dialer-->
											<div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
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
												<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$100" />
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
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-4">
											<label class="fs-6 form-label fw-bold text-dark">Team Size</label>
											<input type="text" class="form-control form-control form-control-solid" name="city" />
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-5">
									<!--begin::Row-->
									<div class="row g-8">
										<!--begin::Col-->
										<div class="col-lg-6">
											<label class="fs-6 form-label fw-bold text-dark">Category</label>
											<!--begin::Select-->
											<select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
												<option value=""></option>
												<option value="1">Not started</option>
												<option value="2" selected="selected">Select</option>
												<option value="3">Done</option>
											</select>
											<!--end::Select-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6">
											<label class="fs-6 form-label fw-bold text-dark">Status</label>
											<div class="form-check form-switch form-check-custom form-check-solid mt-1">
												<input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
												<label class="form-check-label" for="flexSwitchChecked">Active</label>
											</div>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Advance form-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</form>
			<!--end::Form-->
			<!--begin::Toolbar-->
			<div class="d-flex flex-wrap flex-stack pb-7">
				<!--begin::Title-->
				<div class="d-flex flex-wrap align-items-center my-1">
					<h3 class="fw-bold me-5 my-1">57 Items Found
					<span class="text-gray-400 fs-6">by Recent Updates ↓</span></h3>
				</div>
				<!--end::Title-->
				<!--begin::Controls-->
				<div class="d-flex flex-wrap my-1">
					<!--begin::Tab nav-->
					<ul class="nav nav-pills me-6 mb-2 mb-sm-0">
						<li class="nav-item m-0">
							<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_project_users_card_pane">
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
							</a>
						</li>
						<li class="nav-item m-0">
							<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_users_table_pane">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</li>
					</ul>
					<!--end::Tab nav-->
					<!--begin::Actions-->
					<div class="d-flex my-0">
						<!--begin::Select-->
						<select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter" class="form-select form-select-sm border-body bg-body w-150px me-5">
							<option value="1">Recently Updated</option>
							<option value="2">Last Month</option>
							<option value="3">Last Quarter</option>
							<option value="4">Last Year</option>
						</select>
						<!--end::Select-->
						<!--begin::Select-->
						<select name="status" data-control="select2" data-hide-search="true" data-placeholder="Export" class="form-select form-select-sm border-body bg-body w-100px">
							<option value="1">Excel</option>
							<option value="1">PDF</option>
							<option value="2">Print</option>
						</select>
						<!--end::Select-->
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Controls-->
			</div>
			<!--end::Toolbar-->
			<!--begin::Tab Content-->
			<div class="tab-content">
				<!--begin::Tab pane-->
				<div id="kt_project_users_card_pane" class="tab-pane fade show active">
					<!--begin::Row-->
					<div class="row g-6 g-xl-9">
						<!--begin::Col-->
						<div class="col-md-6 col-xxl-4">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body d-flex flex-center flex-column pt-12 p-9">
									<!--begin::Avatar-->
									<div class="symbol symbol-65px symbol-circle mb-5">
										<img src="assets/media//avatars/300-2.jpg" alt="image" />
										<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Karina Clark</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
									<!--end::Position-->
									<!--begin::Info-->
									<div class="d-flex flex-center flex-wrap">
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$14,560</div>
											<div class="fw-semibold text-gray-400">Earnings</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">23</div>
											<div class="fw-semibold text-gray-400">Tasks</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$236,400</div>
											<div class="fw-semibold text-gray-400">Sales</div>
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-xxl-4">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body d-flex flex-center flex-column pt-12 p-9">
									<!--begin::Avatar-->
									<div class="symbol symbol-65px symbol-circle mb-5">
										<span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
										<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Bean</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="fw-semibold text-gray-400 mb-6">Developer at Loop Inc</div>
									<!--end::Position-->
									<!--begin::Info-->
									<div class="d-flex flex-center flex-wrap">
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$14,560</div>
											<div class="fw-semibold text-gray-400">Earnings</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">23</div>
											<div class="fw-semibold text-gray-400">Tasks</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$236,400</div>
											<div class="fw-semibold text-gray-400">Sales</div>
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-xxl-4">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body d-flex flex-center flex-column pt-12 p-9">
									<!--begin::Avatar-->
									<div class="symbol symbol-65px symbol-circle mb-5">
										<img src="assets/media//avatars/300-1.jpg" alt="image" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Alan Johnson</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="fw-semibold text-gray-400 mb-6">Web Designer at Nextop Ltd.</div>
									<!--end::Position-->
									<!--begin::Info-->
									<div class="d-flex flex-center flex-wrap">
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$14,560</div>
											<div class="fw-semibold text-gray-400">Earnings</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">23</div>
											<div class="fw-semibold text-gray-400">Tasks</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$236,400</div>
											<div class="fw-semibold text-gray-400">Sales</div>
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-xxl-4">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body d-flex flex-center flex-column pt-12 p-9">
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
									<div class="d-flex flex-center flex-wrap">
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$14,560</div>
											<div class="fw-semibold text-gray-400">Earnings</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">23</div>
											<div class="fw-semibold text-gray-400">Tasks</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$236,400</div>
											<div class="fw-semibold text-gray-400">Sales</div>
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-xxl-4">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body d-flex flex-center flex-column pt-12 p-9">
									<!--begin::Avatar-->
									<div class="symbol symbol-65px symbol-circle mb-5">
										<img src="assets/media//avatars/300-6.jpg" alt="image" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Wild</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="fw-semibold text-gray-400 mb-6">Art Director at Seal Inc.</div>
									<!--end::Position-->
									<!--begin::Info-->
									<div class="d-flex flex-center flex-wrap">
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$14,560</div>
											<div class="fw-semibold text-gray-400">Earnings</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">23</div>
											<div class="fw-semibold text-gray-400">Tasks</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$236,400</div>
											<div class="fw-semibold text-gray-400">Sales</div>
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-xxl-4">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body d-flex flex-center flex-column pt-12 p-9">
									<!--begin::Avatar-->
									<div class="symbol symbol-65px symbol-circle mb-5">
										<span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
										<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="fw-semibold text-gray-400 mb-6">System Arcitect at Wolto Co.</div>
									<!--end::Position-->
									<!--begin::Info-->
									<div class="d-flex flex-center flex-wrap">
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$14,560</div>
											<div class="fw-semibold text-gray-400">Earnings</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">23</div>
											<div class="fw-semibold text-gray-400">Tasks</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$236,400</div>
											<div class="fw-semibold text-gray-400">Sales</div>
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-xxl-4">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body d-flex flex-center flex-column pt-12 p-9">
									<!--begin::Avatar-->
									<div class="symbol symbol-65px symbol-circle mb-5">
										<span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
										<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Peter Marcus</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
									<!--end::Position-->
									<!--begin::Info-->
									<div class="d-flex flex-center flex-wrap">
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$14,560</div>
											<div class="fw-semibold text-gray-400">Earnings</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">23</div>
											<div class="fw-semibold text-gray-400">Tasks</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$236,400</div>
											<div class="fw-semibold text-gray-400">Sales</div>
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-xxl-4">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body d-flex flex-center flex-column pt-12 p-9">
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
									<div class="d-flex flex-center flex-wrap">
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$14,560</div>
											<div class="fw-semibold text-gray-400">Earnings</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">23</div>
											<div class="fw-semibold text-gray-400">Tasks</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$236,400</div>
											<div class="fw-semibold text-gray-400">Sales</div>
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-xxl-4">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body d-flex flex-center flex-column pt-12 p-9">
									<!--begin::Avatar-->
									<div class="symbol symbol-65px symbol-circle mb-5">
										<img src="assets/media//avatars/300-12.jpg" alt="image" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Benjamin Jacob</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
									<!--end::Position-->
									<!--begin::Info-->
									<div class="d-flex flex-center flex-wrap">
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$14,560</div>
											<div class="fw-semibold text-gray-400">Earnings</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">23</div>
											<div class="fw-semibold text-gray-400">Tasks</div>
										</div>
										<!--end::Stats-->
										<!--begin::Stats-->
										<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
											<div class="fs-6 fw-bold text-gray-700">$236,400</div>
											<div class="fw-semibold text-gray-400">Sales</div>
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Card body-->
							</div>
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
				</div>
				<!--end::Tab pane-->
				<!--begin::Tab pane-->
				<div id="kt_project_users_table_pane" class="tab-pane fade">
					<!--begin::Card-->
					<div class="card card-flush">
						<!--begin::Card body-->
						<div class="card-body pt-0">
							<!--begin::Table container-->
							<div class="table-responsive">
								<!--begin::Table-->
								<table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
									<!--begin::Head-->
									<thead class="fs-7 text-gray-400 text-uppercase">
										<tr>
											<th class="min-w-250px">Manager</th>
											<th class="min-w-150px">Date</th>
											<th class="min-w-90px">Amount</th>
											<th class="min-w-90px">Status</th>
											<th class="min-w-50px text-end">Details</th>
										</tr>
									</thead>
									<!--end::Head-->
									<!--begin::Body-->
									<tbody class="fs-6">
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Smith</a>
														<div class="fw-semibold fs-6 text-gray-400">smith@kpmg.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Feb 21, 2022</td>
											<td>$487.00</td>
											<td>
												<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Melody Macy</a>
														<div class="fw-semibold fs-6 text-gray-400">melody@altbox.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Nov 10, 2022</td>
											<td>$880.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Max Smith</a>
														<div class="fw-semibold fs-6 text-gray-400">max@kt.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Jun 20, 2022</td>
											<td>$834.00</td>
											<td>
												<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Sean Bean</a>
														<div class="fw-semibold fs-6 text-gray-400">sean@dellito.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Apr 15, 2022</td>
											<td>$476.00</td>
											<td>
												<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>
														<div class="fw-semibold fs-6 text-gray-400">brian@exchange.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Oct 25, 2022</td>
											<td>$770.00</td>
											<td>
												<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Mikaela Collins</a>
														<div class="fw-semibold fs-6 text-gray-400">mik@pex.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Oct 25, 2022</td>
											<td>$742.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Francis Mitcham</a>
														<div class="fw-semibold fs-6 text-gray-400">f.mit@kpmg.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Sep 22, 2022</td>
											<td>$640.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Olivia Wild</a>
														<div class="fw-semibold fs-6 text-gray-400">olivia@corpmail.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Nov 10, 2022</td>
											<td>$653.00</td>
											<td>
												<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>
														<div class="fw-semibold fs-6 text-gray-400">owen.neil@gmail.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Jun 20, 2022</td>
											<td>$704.00</td>
											<td>
												<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Dan Wilson</a>
														<div class="fw-semibold fs-6 text-gray-400">dam@consilting.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Mar 10, 2022</td>
											<td>$899.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Bold</a>
														<div class="fw-semibold fs-6 text-gray-400">emma@intenso.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>May 05, 2022</td>
											<td>$563.00</td>
											<td>
												<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Ana Crown</a>
														<div class="fw-semibold fs-6 text-gray-400">ana.cf@limtel.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Mar 10, 2022</td>
											<td>$910.00</td>
											<td>
												<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>
														<div class="fw-semibold fs-6 text-gray-400">robert@benko.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Feb 21, 2022</td>
											<td>$515.00</td>
											<td>
												<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">John Miller</a>
														<div class="fw-semibold fs-6 text-gray-400">miller@mapple.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Jun 20, 2022</td>
											<td>$605.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Lucy Kunic</a>
														<div class="fw-semibold fs-6 text-gray-400">lucy.m@fentech.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Jul 25, 2022</td>
											<td>$524.00</td>
											<td>
												<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Ethan Wilder</a>
														<div class="fw-semibold fs-6 text-gray-400">ethan@loop.com.au</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>May 05, 2022</td>
											<td>$723.00</td>
											<td>
												<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Ethan Wilder</a>
														<div class="fw-semibold fs-6 text-gray-400">ethan@loop.com.au</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Jun 20, 2022</td>
											<td>$780.00</td>
											<td>
												<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>
														<div class="fw-semibold fs-6 text-gray-400">owen.neil@gmail.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Jun 20, 2022</td>
											<td>$595.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Francis Mitcham</a>
														<div class="fw-semibold fs-6 text-gray-400">f.mit@kpmg.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Apr 15, 2022</td>
											<td>$484.00</td>
											<td>
												<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Dan Wilson</a>
														<div class="fw-semibold fs-6 text-gray-400">dam@consilting.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Nov 10, 2022</td>
											<td>$532.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Max Smith</a>
														<div class="fw-semibold fs-6 text-gray-400">max@kt.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Dec 20, 2022</td>
											<td>$704.00</td>
											<td>
												<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>
														<div class="fw-semibold fs-6 text-gray-400">brian@exchange.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>May 05, 2022</td>
											<td>$927.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Ana Crown</a>
														<div class="fw-semibold fs-6 text-gray-400">ana.cf@limtel.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Oct 25, 2022</td>
											<td>$793.00</td>
											<td>
												<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Olivia Wild</a>
														<div class="fw-semibold fs-6 text-gray-400">olivia@corpmail.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Aug 19, 2022</td>
											<td>$921.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Mikaela Collins</a>
														<div class="fw-semibold fs-6 text-gray-400">mik@pex.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Oct 25, 2022</td>
											<td>$551.00</td>
											<td>
												<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Melody Macy</a>
														<div class="fw-semibold fs-6 text-gray-400">melody@altbox.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Mar 10, 2022</td>
											<td>$976.00</td>
											<td>
												<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Francis Mitcham</a>
														<div class="fw-semibold fs-6 text-gray-400">f.mit@kpmg.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Aug 19, 2022</td>
											<td>$421.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Online-->
														<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
														<!--end::Online-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>
														<div class="fw-semibold fs-6 text-gray-400">owen.neil@gmail.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Jun 24, 2022</td>
											<td>$458.00</td>
											<td>
												<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>
														<div class="fw-semibold fs-6 text-gray-400">brian@exchange.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Jul 25, 2022</td>
											<td>$924.00</td>
											<td>
												<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
										<tr>
											<td>
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<!--begin::Wrapper-->
													<div class="me-5 position-relative">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Info-->
													<div class="d-flex flex-column justify-content-center">
														<a href="" class="mb-1 text-gray-800 text-hover-primary">Ana Crown</a>
														<div class="fw-semibold fs-6 text-gray-400">ana.cf@limtel.com</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											</td>
											<td>Mar 10, 2022</td>
											<td>$903.00</td>
											<td>
												<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-light btn-sm">View</a>
											</td>
										</tr>
									</tbody>
									<!--end::Body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Tab pane-->
			</div>
			<!--end::Tab Content-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
