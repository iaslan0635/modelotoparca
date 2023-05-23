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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Returns Report</h1>
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
					<li class="breadcrumb-item text-muted">eCommerce</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Reports</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f08f6b0a17">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f08f6b0a17" data-allow-clear="true">
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
			<!--begin::Products-->
			<div class="card card-flush">
				<!--begin::Card header-->
				<div class="card-header align-items-center py-5 gap-2 gap-md-5">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-1 position-absolute ms-4">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
						</div>
						<!--end::Search-->
						<!--begin::Export buttons-->
						<div id="kt_ecommerce_report_returns_export" class="d-none"></div>
						<!--end::Export buttons-->
					</div>
					<!--end::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
						<!--begin::Daterangepicker-->
						<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_returns_daterangepicker" />
						<!--end::Daterangepicker-->
						<!--begin::Export dropdown-->
						<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
								<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
								<path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->Export Report</button>
						<!--begin::Menu-->
						<div id="kt_ecommerce_report_returns_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
						<!--end::Export dropdown-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_returns_table">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
								<th class="min-w-100px">Date</th>
								<th class="text-end min-w-75px">No. Orders Returned</th>
								<th class="text-end min-w-75px">No. Orders Refunded</th>
								<th class="text-end min-w-75px">No. Orders Replaced</th>
								<th class="text-end min-w-100px">Total Refunded</th>
								<th class="text-end min-w-100px">Total Replaced</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fw-semibold text-gray-600">
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Sep 22, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">4</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$43.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$128.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Nov 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">10</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">7</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$69.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$139.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Sep 22, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$85.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Jul 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">7</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">5</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$92.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$151.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Sep 22, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">3</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$82.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Oct 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">3</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$39.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Nov 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">8</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">6</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$93.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$183.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Jul 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">7</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">7</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$50.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Jun 20, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$75.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Sep 22, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">8</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">7</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$23.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$96.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>May 05, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">1</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$29.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Oct 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">6</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">5</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$62.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$140.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Apr 15, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">4</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$28.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$54.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Jul 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">9</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">6</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$42.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$101.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Jun 24, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">8</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">5</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$49.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$146.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Oct 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">10</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">10</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$19.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Sep 22, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$91.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Oct 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">1</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$39.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Jul 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">8</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">5</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$48.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$120.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>May 05, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">5</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$88.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$180.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Nov 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">6</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">5</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$73.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$111.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>May 05, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">10</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">7</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$48.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$143.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Apr 15, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$30.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Apr 15, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">10</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">9</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$51.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$75.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Oct 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$46.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Mar 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$92.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Jun 20, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">4</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$60.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$158.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Sep 22, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">7</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">5</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$88.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$105.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Nov 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">5</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$51.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$93.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Aug 19, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">9</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">8</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$23.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$122.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Nov 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">3</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$67.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$110.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Oct 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">3</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$47.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$64.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Oct 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">9</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">8</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$36.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$76.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Nov 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">3</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$19.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$117.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Feb 21, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">3</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$54.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$114.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Jun 20, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">10</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">10</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$35.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>May 05, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">1</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$44.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Dec 20, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">10</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">7</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$78.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$140.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Oct 25, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">3</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$94.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$170.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Dec 20, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">8</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">7</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$54.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$133.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Nov 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$85.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Feb 21, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">8</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">5</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$91.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$170.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Mar 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">9</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">8</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$61.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$78.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Feb 21, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">8</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">5</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$86.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$101.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Apr 15, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">7</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">5</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$15.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$113.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Mar 10, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$17.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Apr 15, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">1</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$88.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Feb 21, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">1</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$76.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Dec 20, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$48.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Date=-->
								<td>Aug 19, 2022</td>
								<!--end::Date=-->
								<!--begin::No products returned=-->
								<td class="text-end pe-0">2</td>
								<!--end::No products returned=-->
								<!--begin::No orders refunded=-->
								<td class="text-end pe-0">0</td>
								<!--end::No orders refunded=-->
								<!--begin::No orders replaced=-->
								<td class="text-end pe-0">2</td>
								<!--end::No orders replaced=-->
								<!--begin::Total refunded=-->
								<td class="text-end pe-0">$0.00</td>
								<!--end::Total refunded=-->
								<!--begin::Total replaced=-->
								<td class="text-end">$73.00</td>
								<!--end::Total replaced=-->
							</tr>
							<!--end::Table row-->
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Products-->
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
<script src="assets/js/custom/apps/ecommerce/reports/returns/returns.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
