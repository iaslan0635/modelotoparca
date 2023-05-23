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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Table Pricing</h1>
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
					<li class="breadcrumb-item text-muted">Pricing</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09a4c6b42">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09a4c6b42" data-allow-clear="true">
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
			<!--begin::Pricing-->
			<div class="card">
				<!--begin::Card body-->
				<div class="card-body px-10 px-lg-20 pt-17 pb-10">
					<!--begin::Table container-->
					<div class="table-responsive">
						<!--begin::Table-->
						<table class="table align-middle table-striped gy-7">
							<!--begin::Table head-->
							<thead class="align-middle">
								<tr id="kt_pricing">
									<th>
										<!--begin::Nav group-->
										<div class="nav bg-light rounded-pill px-3 py-2 ms-9 mb-15 w-225px" data-kt-buttons="true">
											<!--begin::Nav link-->
											<button class="nav-link active btn btn-active btn-active-dark fw-bold btn-color-gray-600 active py-3 px-5 m-1 rounded-pill" data-kt-plan="month">Monthly</button>
											<!--end::Nav link-->
											<!--begin::Nav link-->
											<button class="nav-link btn btn-active btn-active-dark fw-bold btn-color-gray-600 py-3 px-5 m-1 rounded-pill" data-kt-plan="annual">Annually</button>
											<!--end::Nav link-->
										</div>
										<!--end::Nav group-->
									</th>
									<th class="text-center min-w-200px">
										<div class="min-w-200px mb-15">
											<div class="text-primary fs-3 fw-bold mb-7">Free</div>
											<div class="fs-5x fw-semibold d-flex justify-content-center align-items-start lh-sm">
											<span class="align-self-start fs-2 mt-3">$</span>0</div>
											<div class="text-muted fw-bold mb-7">Monthly</div>
											<a href="#" class="btn btn-light-primary fw-bold mx-auto">Start</a>
										</div>
									</th>
									<th class="text-center min-w-200px">
										<div class="min-w-200px bg-primary card-rounded py-12 mb-15">
											<div class="text-white fs-3 fw-bold mb-7">Pro</div>
											<div class="fs-5x text-white d-flex justify-content-center align-items-start">
												<span class="fs-2 mt-3">$</span>
												<span class="lh-sm fw-semibold" data-kt-plan-price-month="99" data-kt-plan-price-annual="399">99</span>
											</div>
											<div class="text-white fw-bold mb-7">Monthly</div>
											<a href="#" class="btn bg-white bg-opacity-20 bg-hover-white text-hover-primary text-white fw-bold mx-auto">Start</a>
										</div>
									</th>
									<th class="text-center min-w-200px">
										<div class="min-w-200px mb-15">
											<div class="text-primary fs-3 fw-bold mb-7">Lifetime</div>
											<div class="fs-5x d-flex justify-content-center align-items-start">
												<span class="fs-2 mt-3">$</span>
												<span class="lh-sm fw-semibold" data-kt-plan-price-month="199" data-kt-plan-price-annual="999">199</span>
											</div>
											<div class="text-muted fw-bold mb-7">Monthly</div>
											<a href="#" class="btn btn-light-primary fw-bold mx-auto">Select</a>
										</div>
									</th>
								</tr>
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody>
								<tr>
									<th class="card-rounded-start">
										<div class="fw-bold d-flex align-items-center ps-9 fs-3">Sublicense Visuals</div>
									</th>
									<td>
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td>
										<div class="px-7 flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td class="card-rounded-end">
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="card-rounded-start">
										<div class="fw-bold d-flex align-items-center ps-9 fs-3">Free Updates</div>
									</th>
									<td>
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td>
										<div class="px-7 flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td class="card-rounded-end">
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="card-rounded-start">
										<div class="fw-bold d-flex align-items-center ps-9 fs-3">Theme Support</div>
									</th>
									<td>
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td>
										<div class="px-7 flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td class="card-rounded-end">
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="card-rounded-start">
										<div class="fw-bold d-flex align-items-center ps-9 fs-3">Unlimited Websites</div>
									</th>
									<td>
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td>
										<div class="px-7 flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td class="card-rounded-end">
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="card-rounded-start">
										<div class="fw-bold d-flex align-items-center ps-9 fs-3">DDOS Protection</div>
									</th>
									<td>
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td>
										<div class="px-7 flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td class="card-rounded-end">
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<th class="card-rounded-start">
										<div class="fw-bold d-flex align-items-center ps-9 fs-3">Domain Reseller</div>
									</th>
									<td>
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td>
										<div class="px-7 flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
									<td class="card-rounded-end">
										<div class="flex-root d-flex justify-content-center">
											<span class="h-40px w-40px d-flex flex-center d-block">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="h-40px w-40px d-flex flex-center d-none">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-2x svg-icon-danger">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
									</td>
								</tr>
							</tbody>
							<!--end::Table body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Table container-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Pricing-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
