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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Invoice 3</h1>
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
					<li class="breadcrumb-item text-muted">Invoice Manager</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">View Invoices</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f092a4b207">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f092a4b207" data-allow-clear="true">
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
			<!-- begin::Invoice 3-->
			<div class="card">
				<!-- begin::Body-->
				<div class="card-body py-20">
					<!-- begin::Wrapper-->
					<div class="mw-lg-950px mx-auto w-100">
						<!-- begin::Header-->
						<div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
							<h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">INVOICE</h4>
							<!--end::Logo-->
							<div class="text-sm-end">
								<!--begin::Logo-->
								<a href="#" class="d-block mw-150px ms-sm-auto">
									<img alt="Logo" src="assets/media/svg/brand-logos/lloyds-of-london-logo.svg" class="w-100" />
								</a>
								<!--end::Logo-->
								<!--begin::Text-->
								<div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
									<div>Cecilia Chapman, 711-2880 Nulla St, Mankato</div>
									<div>Mississippi 96522</div>
								</div>
								<!--end::Text-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="pb-12">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column gap-7 gap-md-10">
								<!--begin::Message-->
								<div class="fw-bold fs-2">Dear Francis Mitcham
								<span class="fs-6">(f.mit@kpmg.com)</span>,
								<br />
								<span class="text-muted fs-5">Here are your order details. We thank you for your purchase.</span></div>
								<!--begin::Message-->
								<!--begin::Separator-->
								<div class="separator"></div>
								<!--begin::Separator-->
								<!--begin::Order details-->
								<div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
									<div class="flex-root d-flex flex-column">
										<span class="text-muted">Order ID</span>
										<span class="fs-5">#14534</span>
									</div>
									<div class="flex-root d-flex flex-column">
										<span class="text-muted">Date</span>
										<span class="fs-5">12 September, 2022</span>
									</div>
									<div class="flex-root d-flex flex-column">
										<span class="text-muted">Invoice ID</span>
										<span class="fs-5">#INV-000414</span>
									</div>
									<div class="flex-root d-flex flex-column">
										<span class="text-muted">Shipment ID</span>
										<span class="fs-5">#SHP-0025410</span>
									</div>
								</div>
								<!--end::Order details-->
								<!--begin::Billing & shipping-->
								<div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
									<div class="flex-root d-flex flex-column">
										<span class="text-muted">Billing Address</span>
										<span class="fs-6">Unit 1/23 Hastings Road,
										<br />Melbourne 3000,
										<br />Victoria,
										<br />Australia.</span>
									</div>
									<div class="flex-root d-flex flex-column">
										<span class="text-muted">Shipping Address</span>
										<span class="fs-6">Unit 1/23 Hastings Road,
										<br />Melbourne 3000,
										<br />Victoria,
										<br />Australia.</span>
									</div>
								</div>
								<!--end::Billing & shipping-->
								<!--begin:Order summary-->
								<div class="d-flex justify-content-between flex-column">
									<!--begin::Table-->
									<div class="table-responsive border-bottom mb-9">
										<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
											<thead>
												<tr class="border-bottom fs-6 fw-bold text-muted">
													<th class="min-w-175px pb-2">Products</th>
													<th class="min-w-70px text-end pb-2">SKU</th>
													<th class="min-w-80px text-end pb-2">QTY</th>
													<th class="min-w-100px text-end pb-2">Total</th>
												</tr>
											</thead>
											<tbody class="fw-semibold text-gray-600">
												<!--begin::Products-->
												<tr>
													<!--begin::Product-->
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="admin/dist/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<!--begin::Title-->
															<div class="ms-5">
																<div class="fw-bold">Product 1</div>
																<div class="fs-7 text-muted">Delivery Date: 12/09/2022</div>
															</div>
															<!--end::Title-->
														</div>
													</td>
													<!--end::Product-->
													<!--begin::SKU-->
													<td class="text-end">01881006</td>
													<!--end::SKU-->
													<!--begin::Quantity-->
													<td class="text-end">2</td>
													<!--end::Quantity-->
													<!--begin::Total-->
													<td class="text-end">$240.00</td>
													<!--end::Total-->
												</tr>
												<tr>
													<!--begin::Product-->
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="admin/dist/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/100.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<!--begin::Title-->
															<div class="ms-5">
																<div class="fw-bold">Footwear</div>
																<div class="fs-7 text-muted">Delivery Date: 12/09/2022</div>
															</div>
															<!--end::Title-->
														</div>
													</td>
													<!--end::Product-->
													<!--begin::SKU-->
													<td class="text-end">03803005</td>
													<!--end::SKU-->
													<!--begin::Quantity-->
													<td class="text-end">1</td>
													<!--end::Quantity-->
													<!--begin::Total-->
													<td class="text-end">$24.00</td>
													<!--end::Total-->
												</tr>
												<!--end::Products-->
												<!--begin::Subtotal-->
												<tr>
													<td colspan="3" class="text-end">Subtotal</td>
													<td class="text-end">$264.00</td>
												</tr>
												<!--end::Subtotal-->
												<!--begin::VAT-->
												<tr>
													<td colspan="3" class="text-end">VAT (0%)</td>
													<td class="text-end">$0.00</td>
												</tr>
												<!--end::VAT-->
												<!--begin::Shipping-->
												<tr>
													<td colspan="3" class="text-end">Shipping Rate</td>
													<td class="text-end">$5.00</td>
												</tr>
												<!--end::Shipping-->
												<!--begin::Grand total-->
												<tr>
													<td colspan="3" class="fs-3 text-dark fw-bold text-end">Grand Total</td>
													<td class="text-dark fs-3 fw-bolder text-end">$269.00</td>
												</tr>
												<!--end::Grand total-->
											</tbody>
										</table>
									</div>
									<!--end::Table-->
								</div>
								<!--end:Order summary-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Body-->
						<!-- begin::Footer-->
						<div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
							<!-- begin::Actions-->
							<div class="my-1 me-5">
								<!-- begin::Pint-->
								<button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
								<!-- end::Pint-->
								<!-- begin::Download-->
								<button type="button" class="btn btn-light-success my-1">Download</button>
								<!-- end::Download-->
							</div>
							<!-- end::Actions-->
							<!-- begin::Action-->
							<a href="admin/dist/apps/invoices/create" class="btn btn-primary my-1">Create Invoice</a>
							<!-- end::Action-->
						</div>
						<!-- end::Footer-->
					</div>
					<!-- end::Wrapper-->
				</div>
				<!-- end::Body-->
			</div>
			<!-- end::Invoice 1-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
