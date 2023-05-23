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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Invoice 2</h1>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f0928f4138">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f0928f4138" data-allow-clear="true">
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
			<!-- begin::Invoice 1-->
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
								<a href="#">
									<img alt="Logo" src="assets/media/svg/brand-logos/duolingo.svg" />
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
						<div class="border-bottom pb-12">
							<!--begin::Image-->
							<div class="d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center bgi-size-cover card-rounded h-150px h-lg-250px mb-lg-20" style="background-image: url(assets/media/misc/pattern-4.jpg)"></div>
							<!--end::Image-->
							<!--begin::Wrapper-->
							<div class="d-flex justify-content-between flex-column flex-md-row">
								<!--begin::Content-->
								<div class="flex-grow-1 pt-8 mb-13">
									<!--begin::Table-->
									<div class="table-responsive border-bottom mb-14">
										<table class="table">
											<thead>
												<tr class="border-bottom fs-6 fw-bold text-muted text-uppercase">
													<th class="min-w-175px pb-9">Description</th>
													<th class="min-w-70px pb-9 text-end">Hours</th>
													<th class="min-w-80px pb-9 text-end">Rate</th>
													<th class="min-w-100px pe-lg-6 pb-9 text-end">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr class="fw-bold text-gray-700 fs-5 text-end">
													<td class="d-flex align-items-center pt-11">
													<i class="fa fa-genderless text-danger fs-1 me-2"></i>Creative Design</td>
													<td class="pt-11">80</td>
													<td class="pt-11">$40.00</td>
													<td class="pt-11 fs-5 pe-lg-6 text-dark fw-bolder">$3200.00</td>
												</tr>
												<tr class="fw-bold text-gray-700 fs-5 text-end">
													<td class="d-flex align-items-center">
													<i class="fa fa-genderless text-success fs-1 me-2"></i>Logo Design</td>
													<td>120</td>
													<td>$40.00</td>
													<td class="fs-5 text-dark fw-bolder pe-lg-6">$4800.00</td>
												</tr>
												<tr class="fw-bold text-gray-700 fs-5 text-end">
													<td class="d-flex align-items-center pb-10">
													<i class="fa fa-genderless text-primary fs-1 me-2"></i>Web Development</td>
													<td>210</td>
													<td>$60.00</td>
													<td class="fs-5 text-dark fw-bolder pe-lg-6">$12600.00</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--end::Table-->
									<!--begin::Section-->
									<div class="d-flex flex-column mw-md-300px w-100">
										<!--begin::Label-->
										<div class="fw-semibold fs-5 mb-3 text-dark00">BANK TRANSFER</div>
										<!--end::Label-->
										<!--begin::Item-->
										<div class="d-flex flex-stack text-gray-800 mb-3 fs-6">
											<!--begin::Accountname-->
											<div class="fw-semibold pe-5">Account Name:</div>
											<!--end::Accountname-->
											<!--begin::Label-->
											<div class="text-end fw-norma">Barclays UK</div>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack text-gray-800 mb-3 fs-6">
											<!--begin::Accountnumber-->
											<div class="fw-semibold pe-5">Account Number:</div>
											<!--end::Accountnumber-->
											<!--begin::Number-->
											<div class="text-end fw-norma">1234567890934</div>
											<!--end::Number-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-stack text-gray-800 fs-6">
											<!--begin::Code-->
											<div class="fw-semibold pe-5">Code:</div>
											<!--end::Code-->
											<!--begin::Label-->
											<div class="text-end fw-norma">BARC0032UK</div>
											<!--end::Label-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
								<!--begin::Separator-->
								<div class="border-end d-none d-md-block mh-450px mx-9"></div>
								<!--end::Separator-->
								<!--begin::Content-->
								<div class="text-end pt-10">
									<!--begin::Total Amount-->
									<div class="fs-3 fw-bold text-muted mb-3">TOTAL AMOUNT</div>
									<div class="fs-xl-2x fs-2 fw-bolder">$20,600.00</div>
									<div class="text-muted fw-semibold">Taxes included</div>
									<!--end::Total Amount-->
									<div class="border-bottom w-100 my-7 my-lg-16"></div>
									<!--begin::Invoice To-->
									<div class="text-gray-600 fs-6 fw-semibold mb-3">INVOICE TO.</div>
									<div class="fs-6 text-gray-800 fw-semibold mb-8">Iris Watson.
									<br />Fredrick Nebraska 20620</div>
									<!--end::Invoice To-->
									<!--begin::Invoice No-->
									<div class="text-gray-600 fs-6 fw-semibold mb-3">INVOICE NO.</div>
									<div class="fs-6 text-gray-800 fw-semibold mb-8">56758</div>
									<!--end::Invoice No-->
									<!--begin::Invoice Date-->
									<div class="text-gray-600 fs-6 fw-semibold mb-3">DATE</div>
									<div class="fs-6 text-gray-800 fw-semibold">12 May, 2020</div>
									<!--end::Invoice Date-->
								</div>
								<!--end::Content-->
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
							<button type="button" class="btn btn-primary my-1">Create Invoice</button>
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
