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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Customer Orders Report</h1>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f08f85fe9e">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f08f85fe9e" data-allow-clear="true">
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
						<div id="kt_ecommerce_report_customer_orders_export" class="d-none"></div>
						<!--end::Export buttons-->
					</div>
					<!--end::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
						<!--begin::Daterangepicker-->
						<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_customer_orders_daterangepicker" />
						<!--end::Daterangepicker-->
						<!--begin::Filter-->
						<div class="w-150px">
							<!--begin::Select2-->
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
								<option></option>
								<option value="all">All</option>
								<option value="active">Active</option>
								<option value="locked">Locked</option>
								<option value="disabled">Disabled</option>
								<option value="banned">Banned</option>
							</select>
							<!--end::Select2-->
						</div>
						<!--end::Filter-->
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
						<div id="kt_ecommerce_report_customer_orders_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_customer_orders_table">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
								<th class="min-w-100px">Customer Name</th>
								<th class="min-w-100px">Email</th>
								<th class="min-w-100px">Status</th>
								<th class="min-w-100px">Date Joined</th>
								<th class="text-end min-w-75px">No. Orders</th>
								<th class="text-end min-w-75px">No. Products</th>
								<th class="text-end min-w-100px">Total</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fw-semibold text-gray-600">
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Emma Smith</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">smith@kpmg.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-danger">Banned</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>22 Sep 2022, 2:40 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">35</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">45</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2780.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Melody Macy</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">melody@altbox.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>10 Mar 2022, 8:43 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">10</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">21</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2480.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Max Smith</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">max@kt.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>05 May 2022, 11:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">90</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">96</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$3929.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Sean Bean</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">sean@dellito.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>05 May 2022, 10:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">64</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">71</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$892.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Brian Cox</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">brian@exchange.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>19 Aug 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">23</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">35</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$392.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Mikaela Collins</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">mik@pex.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>10 Mar 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">34</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">45</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1416.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Francis Mitcham</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">f.mit@kpmg.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>20 Jun 2022, 10:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">84</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">89</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$3010.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Olivia Wild</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">olivia@corpmail.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>15 Apr 2022, 11:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">37</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">45</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2651.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Neil Owen</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">owen.neil@gmail.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Jul 2022, 11:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">72</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">80</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$4783.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Dan Wilson</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">dam@consilting.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>05 May 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">14</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">20</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$314.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Emma Bold</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">emma@intenso.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>19 Aug 2022, 6:43 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">18</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">33</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1398.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Ana Crown</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">ana.cf@limtel.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Oct 2022, 11:05 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">98</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">112</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1764.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Robert Doe</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">robert@benko.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>19 Aug 2022, 11:05 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">28</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">35</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2499.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">John Miller</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">miller@mapple.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Oct 2022, 9:23 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">35</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">44</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$3198.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Lucy Kunic</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">lucy.m@fentech.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>19 Aug 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">100</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">111</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$4788.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Ethan Wilder</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">ethan@loop.com.au</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-warning">Locked</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>15 Apr 2022, 6:43 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">98</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">104</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2748.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Ana Crown</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">ana.cf@limtel.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>21 Feb 2022, 2:40 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">96</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">105</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2534.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Emma Smith</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">smith@kpmg.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>22 Sep 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">48</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">56</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$4356.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Melody Macy</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">melody@altbox.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>21 Feb 2022, 10:10 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">1</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">12</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$3976.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Max Smith</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">max@kt.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Jul 2022, 6:43 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">82</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">89</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$3958.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Sean Bean</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">sean@dellito.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>10 Nov 2022, 9:23 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">9</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">21</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$3929.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Brian Cox</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">brian@exchange.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-info">Disabled</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>22 Sep 2022, 11:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">15</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">22</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1472.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Mikaela Collins</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">mik@pex.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-warning">Locked</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>24 Jun 2022, 5:20 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">30</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">36</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1207.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Francis Mitcham</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">f.mit@kpmg.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>21 Feb 2022, 11:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">45</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">60</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$5017.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Olivia Wild</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">olivia@corpmail.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>10 Mar 2022, 2:40 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">3</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">9</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1175.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Neil Owen</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">owen.neil@gmail.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>10 Mar 2022, 8:43 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">26</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">32</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1980.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Dan Wilson</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">dam@consilting.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>15 Apr 2022, 6:05 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">28</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">33</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$574.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Emma Bold</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">emma@intenso.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Jul 2022, 6:05 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">74</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">85</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$583.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Ana Crown</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">ana.cf@limtel.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>15 Apr 2022, 2:40 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">19</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">27</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1988.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Robert Doe</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">robert@benko.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>21 Feb 2022, 8:43 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">91</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">96</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$552.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">John Miller</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">miller@mapple.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>20 Jun 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">25</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">33</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$3185.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Lucy Kunic</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">lucy.m@fentech.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>24 Jun 2022, 9:23 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">62</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">75</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2918.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Ethan Wilder</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">ethan@loop.com.au</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>20 Jun 2022, 8:43 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">23</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">38</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$3811.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Lucy Kunic</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">lucy.m@fentech.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>19 Aug 2022, 8:43 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">49</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">59</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$4882.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Emma Smith</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">smith@kpmg.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-info">Disabled</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Jul 2022, 2:40 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">31</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">45</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$3095.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Melody Macy</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">melody@altbox.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>10 Nov 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">95</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">104</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$4171.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Max Smith</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">max@kt.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>24 Jun 2022, 6:43 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">19</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">29</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1599.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Sean Bean</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">sean@dellito.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>24 Jun 2022, 8:43 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">76</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">86</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$4595.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Brian Cox</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">brian@exchange.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-danger">Banned</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>24 Jun 2022, 11:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">97</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">105</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$4404.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Mikaela Collins</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">mik@pex.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>20 Dec 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">74</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">83</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2903.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Francis Mitcham</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">f.mit@kpmg.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>21 Feb 2022, 10:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">27</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">32</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$816.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Olivia Wild</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">olivia@corpmail.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Jul 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">48</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">59</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$1188.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Neil Owen</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">owen.neil@gmail.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Jul 2022, 10:10 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">55</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">61</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2182.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Dan Wilson</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">dam@consilting.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>20 Jun 2022, 5:30 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">32</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">39</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$922.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Emma Bold</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">emma@intenso.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>05 May 2022, 11:30 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">58</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">64</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2271.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Ana Crown</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">ana.cf@limtel.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Oct 2022, 6:43 am</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">17</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">24</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2224.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Robert Doe</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">robert@benko.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>20 Jun 2022, 9:23 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">69</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">84</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$4473.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">John Miller</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">miller@mapple.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>20 Jun 2022, 2:40 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">99</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">112</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2730.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Lucy Kunic</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">lucy.m@fentech.com</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>25 Oct 2022, 5:20 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">42</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">50</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$4838.00</td>
								<!--end::Total=-->
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<!--begin::Customer name=-->
								<td>
									<a href="admin/dist/apps/ecommerce/customers/details" class="text-dark text-hover-primary">Ethan Wilder</a>
								</td>
								<!--end::Customer name=-->
								<!--begin::Email=-->
								<td>
									<a href="#" class="text-dark text-hover-primary">ethan@loop.com.au</a>
								</td>
								<!--end::Email=-->
								<!--begin::Status=-->
								<td>
									<div class="badge badge-light-success">Active</div>
								</td>
								<!--begin::Status=-->
								<!--begin::Status=-->
								<td>20 Dec 2022, 2:40 pm</td>
								<!--begin::Status=-->
								<!--begin::No orders=-->
								<td class="text-end pe-0">80</td>
								<!--end::No orders=-->
								<!--begin::No products=-->
								<td class="text-end pe-0">90</td>
								<!--end::No products=-->
								<!--begin::Total=-->
								<td class="text-end">$2645.00</td>
								<!--end::Total=-->
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
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
