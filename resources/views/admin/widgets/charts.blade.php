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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Charts</h1>
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09abccd14">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09abccd14" data-allow-clear="true">
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
					<div class="col-xl-6">
						<!--begin::Charts Widget 1-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<!--begin::Title-->
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
									<span class="text-muted fw-semibold fs-7">More than 400 new members</span>
								</h3>
								<!--end::Title-->
								<!--begin::Toolbar-->
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
									<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09abcdc46">
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
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09abcdc46" data-allow-clear="true">
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
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Chart-->
								<div id="kt_charts_widget_1_chart" style="height: 350px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Charts Widget 1-->
					</div>
					<div class="col-xl-6">
						<!--begin::Charts Widget 2-->
						<div class="card card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
									<span class="text-muted fw-semibold fs-7">More than 500 new orders</span>
								</h3>
								<!--begin::Toolbar-->
								<div class="card-toolbar" data-kt-buttons="true">
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_2_year_btn">Year</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_2_month_btn">Month</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_2_week_btn">Week</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Chart-->
								<div id="kt_charts_widget_2_chart" style="height: 350px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Charts Widget 2-->
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<div class="col-xl-6">
						<!--begin::Charts Widget 3-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold fs-3 mb-1">Recent Transactions</span>
									<span class="text-muted fw-semibold fs-7">More than 1000 new records</span>
								</h3>
								<!--begin::Toolbar-->
								<div class="card-toolbar" data-kt-buttons="true">
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_3_year_btn">Year</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_3_month_btn">Month</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_3_week_btn">Week</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Chart-->
								<div id="kt_charts_widget_3_chart" style="height: 350px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Charts Widget 3-->
					</div>
					<div class="col-xl-6">
						<!--begin::Charts Widget 4-->
						<div class="card card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold fs-3 mb-1">Recent Customers</span>
									<span class="text-muted fw-semibold fs-7">More than 500 new customers</span>
								</h3>
								<!--begin::Toolbar-->
								<div class="card-toolbar" data-kt-buttons="true">
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_4_year_btn">Year</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_4_month_btn">Month</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_4_week_btn">Week</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Chart-->
								<div id="kt_charts_widget_4_chart" style="height: 350px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Charts Widget 4-->
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<div class="col-xl-6">
						<!--begin::Charts Widget 5-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold fs-3 mb-1">Recent Customers</span>
									<span class="text-muted fw-semibold fs-7">More than 500 new customers</span>
								</h3>
								<!--begin::Toolbar-->
								<div class="card-toolbar" data-kt-buttons="true">
									<a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1" id="kt_charts_widget_5_year_btn">Year</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1" id="kt_charts_widget_5_month_btn">Month</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 active" id="kt_charts_widget_5_week_btn">Week</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Chart-->
								<div id="kt_charts_widget_5_chart" style="height: 350px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Charts Widget 5-->
					</div>
					<div class="col-xl-6">
						<!--begin::Charts Widget 5-->
						<div class="card card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
									<span class="text-muted fw-semibold fs-7">More than 500+ new orders</span>
								</h3>
								<!--begin::Toolbar-->
								<div class="card-toolbar" data-kt-buttons="true">
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_6_sales_btn">Sales</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_6_expenses_btn">Expenses</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Chart-->
								<div id="kt_charts_widget_6_chart" style="height: 350px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Charts Widget 5-->
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<div class="col-xl-6">
						<!--begin::Charts Widget 7-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold fs-3 mb-1">Recent Users</span>
									<span class="text-muted fw-semibold fs-7">More than 500 new users</span>
								</h3>
								<!--begin::Toolbar-->
								<div class="card-toolbar" data-kt-buttons="true">
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_7_year_btn">Year</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_7_month_btn">Month</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_7_week_btn">Week</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Chart-->
								<div id="kt_charts_widget_7_chart" style="height: 350px" class="card-rounded-bottom"></div>
								<!--end::Chart-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Charts Widget 7-->
					</div>
					<div class="col-xl-6">
						<!--begin::Charts Widget 8-->
						<div class="card card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
									<span class="text-muted fw-semibold fs-7">More than 500 new orders</span>
								</h3>
								<!--begin::Toolbar-->
								<div class="card-toolbar" data-kt-buttons="true">
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_8_year_btn">Year</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_8_month_btn">Month</a>
									<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_8_week_btn">Week</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Chart-->
								<div id="kt_charts_widget_8_chart" style="height: 350px" class="card-rounded-bottom"></div>
								<!--end::Chart-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Charts Widget 8-->
					</div>
				</div>
				<!--end::Row-->
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
