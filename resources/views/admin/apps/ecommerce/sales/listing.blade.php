@extends('admin.layout')
@section('content')
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
					<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Order" />
				</div>
				<!--end::Search-->
			</div>
			<!--end::Card title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
				<!--begin::Flatpickr-->
				<div class="input-group w-250px">
					<input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
					<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
								<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
				<!--end::Flatpickr-->
				<div class="w-100 mw-150px">
					<!--begin::Select2-->
					<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
						<option></option>
						<option value="all">All</option>
						<option value="Cancelled">Cancelled</option>
						<option value="Completed">Completed</option>
						<option value="Denied">Denied</option>
						<option value="Expired">Expired</option>
						<option value="Failed">Failed</option>
						<option value="Pending">Pending</option>
						<option value="Processing">Processing</option>
						<option value="Refunded">Refunded</option>
						<option value="Delivered">Delivered</option>
						<option value="Delivering">Delivering</option>
					</select>
					<!--end::Select2-->
				</div>
				<!--begin::Add product-->
				<a href="/admin/apps/ecommerce/catalog/add-product" class="btn btn-primary">Add Order</a>
				<!--end::Add product-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body pt-0">
			<!--begin::Table-->
			<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
				<!--begin::Table head-->
				<thead>
					<!--begin::Table row-->
					<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
						<th class="w-10px pe-2">
							<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
								<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
							</div>
						</th>
						<th class="min-w-100px">Order ID</th>
						<th class="min-w-175px">Customer</th>
						<th class="text-end min-w-70px">Status</th>
						<th class="text-end min-w-100px">Total</th>
						<th class="text-end min-w-100px">Date Added</th>
						<th class="text-end min-w-100px">Date Modified</th>
						<th class="text-end min-w-100px">Actions</th>
					</tr>
					<!--end::Table row-->
				</thead>
				<!--end::Table head-->
				<!--begin::Table body-->
				<tbody class="fw-semibold text-gray-600">
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14258</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Denied">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Denied</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$419.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-09-09">
							<span class="fw-bold">09/09/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-11">
							<span class="fw-bold">11/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14259</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Delivering">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Delivering</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$309.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-09-03">
							<span class="fw-bold">03/09/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-10">
							<span class="fw-bold">10/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14260</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$338.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-09-08">
							<span class="fw-bold">08/09/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-09">
							<span class="fw-bold">09/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14261</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Delivering">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Delivering</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$492.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-09-07">
							<span class="fw-bold">07/09/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-08">
							<span class="fw-bold">08/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14262</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-info text-info">A</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Refunded">
							<!--begin::Badges-->
							<div class="badge badge-light-info">Refunded</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$426.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-31">
							<span class="fw-bold">31/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-07">
							<span class="fw-bold">07/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14263</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$342.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-09-01">
							<span class="fw-bold">01/09/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-06">
							<span class="fw-bold">06/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14264</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Refunded">
							<!--begin::Badges-->
							<div class="badge badge-light-info">Refunded</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$164.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-09-04">
							<span class="fw-bold">04/09/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-05">
							<span class="fw-bold">05/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14265</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$432.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-09-03">
							<span class="fw-bold">03/09/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-04">
							<span class="fw-bold">04/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14266</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Refunded">
							<!--begin::Badges-->
							<div class="badge badge-light-info">Refunded</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$401.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-30">
							<span class="fw-bold">30/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-03">
							<span class="fw-bold">03/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14267</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-info text-info">A</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Delivering">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Delivering</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$208.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-30">
							<span class="fw-bold">30/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-02">
							<span class="fw-bold">02/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14268</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$475.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-26">
							<span class="fw-bold">26/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-09-01">
							<span class="fw-bold">01/09/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14269</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-info text-info">A</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Denied">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Denied</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$124.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-29">
							<span class="fw-bold">29/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-31">
							<span class="fw-bold">31/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14270</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$98.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-24">
							<span class="fw-bold">24/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-30">
							<span class="fw-bold">30/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14271</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$243.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-24">
							<span class="fw-bold">24/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-29">
							<span class="fw-bold">29/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14272</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$160.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-23">
							<span class="fw-bold">23/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-28">
							<span class="fw-bold">28/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14273</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$295.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-21">
							<span class="fw-bold">21/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-27">
							<span class="fw-bold">27/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14274</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$140.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-22">
							<span class="fw-bold">22/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-26">
							<span class="fw-bold">26/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14275</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$78.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-19">
							<span class="fw-bold">19/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-25">
							<span class="fw-bold">25/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14276</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$456.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-22">
							<span class="fw-bold">22/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-24">
							<span class="fw-bold">24/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14277</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$95.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-21">
							<span class="fw-bold">21/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-23">
							<span class="fw-bold">23/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14278</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Delivering">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Delivering</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$344.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-15">
							<span class="fw-bold">15/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-22">
							<span class="fw-bold">22/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14279</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Denied">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Denied</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$465.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-19">
							<span class="fw-bold">19/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-21">
							<span class="fw-bold">21/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14280</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$244.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-15">
							<span class="fw-bold">15/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-20">
							<span class="fw-bold">20/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14281</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$320.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-14">
							<span class="fw-bold">14/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-19">
							<span class="fw-bold">19/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14282</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Processing">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Processing</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$309.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-16">
							<span class="fw-bold">16/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-18">
							<span class="fw-bold">18/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14283</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$75.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-12">
							<span class="fw-bold">12/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-17">
							<span class="fw-bold">17/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14284</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$382.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-09">
							<span class="fw-bold">09/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-16">
							<span class="fw-bold">16/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14285</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$89.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-12">
							<span class="fw-bold">12/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-15">
							<span class="fw-bold">15/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14286</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$104.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-10">
							<span class="fw-bold">10/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-14">
							<span class="fw-bold">14/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14287</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Denied">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Denied</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$24.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-09">
							<span class="fw-bold">09/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-13">
							<span class="fw-bold">13/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14288</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Delivering">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Delivering</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$296.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-09">
							<span class="fw-bold">09/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-12">
							<span class="fw-bold">12/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14289</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$135.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-07">
							<span class="fw-bold">07/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-11">
							<span class="fw-bold">11/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14290</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-info text-info">A</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Delivered">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Delivered</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$472.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-06">
							<span class="fw-bold">06/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-10">
							<span class="fw-bold">10/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14291</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Delivered">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Delivered</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$353.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-06">
							<span class="fw-bold">06/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-09">
							<span class="fw-bold">09/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14292</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$495.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-04">
							<span class="fw-bold">04/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-08">
							<span class="fw-bold">08/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14293</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Denied">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Denied</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$126.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-01">
							<span class="fw-bold">01/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-07">
							<span class="fw-bold">07/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14294</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$106.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-01">
							<span class="fw-bold">01/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-06">
							<span class="fw-bold">06/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14295</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$316.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-04">
							<span class="fw-bold">04/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-05">
							<span class="fw-bold">05/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14296</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-info text-info">A</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$185.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-08-03">
							<span class="fw-bold">03/08/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-04">
							<span class="fw-bold">04/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14297</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Pending">
							<!--begin::Badges-->
							<div class="badge badge-light-warning">Pending</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$339.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-27">
							<span class="fw-bold">27/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-03">
							<span class="fw-bold">03/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14298</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$456.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-26">
							<span class="fw-bold">26/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-02">
							<span class="fw-bold">02/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14299</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$150.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-29">
							<span class="fw-bold">29/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-08-01">
							<span class="fw-bold">01/08/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14300</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Delivering">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Delivering</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$191.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-24">
							<span class="fw-bold">24/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-07-31">
							<span class="fw-bold">31/07/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14301</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$231.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-28">
							<span class="fw-bold">28/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-07-30">
							<span class="fw-bold">30/07/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14302</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Processing">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Processing</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$369.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-22">
							<span class="fw-bold">22/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-07-29">
							<span class="fw-bold">29/07/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14303</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-info text-info">A</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$241.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-24">
							<span class="fw-bold">24/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-07-28">
							<span class="fw-bold">28/07/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14304</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$466.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-22">
							<span class="fw-bold">22/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-07-27">
							<span class="fw-bold">27/07/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14305</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Denied">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Denied</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$357.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-24">
							<span class="fw-bold">24/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-07-26">
							<span class="fw-bold">26/07/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14306</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Completed">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$479.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-19">
							<span class="fw-bold">19/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-07-25">
							<span class="fw-bold">25/07/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" />
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Order ID=-->
						<td data-kt-ecommerce-order-filter="order_id">
							<a href="/admin/apps/ecommerce/sales/details" class="text-gray-800 text-hover-primary fw-bold">14307</a>
						</td>
						<!--end::Order ID=-->
						<!--begin::Customer=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin:: Avatar -->
								<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
									<a href="/admin/apps/user-management/users/view">
										<div class="symbol-label">
											<img src="assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
										</div>
									</a>
								</div>
								<!--end::Avatar-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/apps/user-management/users/view" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Customer=-->
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Pending">
							<!--begin::Badges-->
							<div class="badge badge-light-warning">Pending</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Total=-->
						<td class="text-end pe-0">
							<span class="fw-bold">$403.00</span>
						</td>
						<!--end::Total=-->
						<!--begin::Date Added=-->
						<td class="text-end" data-order="2022-07-18">
							<span class="fw-bold">18/07/2022</span>
						</td>
						<!--end::Date Added=-->
						<!--begin::Date Modified=-->
						<td class="text-end" data-order="2022-07-24">
							<span class="fw-bold">24/07/2022</span>
						</td>
						<!--end::Date Modified=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-5 m-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/details" class="menu-link px-3">View</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
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
@endsection
