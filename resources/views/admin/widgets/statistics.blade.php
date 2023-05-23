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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Statistics</h1>
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09aa92771">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09aa92771" data-allow-clear="true">
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
					<div class="col-xl-4">
						<!--begin::Statistics Widget 1-->
						<div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg">
							<!--begin::Body-->
							<div class="card-body">
								<a href="#" class="card-title fw-bold text-muted text-hover-primary fs-4">Meeting Schedule</a>
								<div class="fw-bold text-primary my-6">3:30PM - 4:20PM</div>
								<p class="text-dark-75 fw-semibold fs-5 m-0">Create a headline that is informative
								<br />and will capture readers</p>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 1-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 1-->
						<div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-2.svg">
							<!--begin::Body-->
							<div class="card-body">
								<a href="#" class="card-title fw-bold text-muted text-hover-primary fs-4">Meeting Schedule</a>
								<div class="fw-bold text-primary my-6">03 May 2020</div>
								<p class="text-dark-75 fw-semibold fs-5 m-0">Great blog posts don’t just happen Even the best bloggers need it</p>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 1-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 1-->
						<div class="card bgi-no-repeat card-xl-stretch mb-5 mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg">
							<!--begin::Body-->
							<div class="card-body">
								<a href="#" class="card-title fw-bold text-muted text-hover-primary fs-4">UI Conference</a>
								<div class="fw-bold text-primary my-6">10AM Jan, 2021</div>
								<p class="text-dark-75 fw-semibold fs-5 m-0">AirWays - A Front-end solution for airlines build with ReactJS</p>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 1-->
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<div class="col-xl-4">
						<!--begin::Statistics Widget 2-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body d-flex align-items-center pt-3 pb-0">
								<div class="d-flex flex-column flex-grow-1 py-2 py-lg-13 me-2">
									<a href="#" class="fw-bold text-dark fs-4 mb-2 text-hover-primary">Arthur Goldstain</a>
									<span class="fw-semibold text-muted fs-5">System & Software Architect</span>
								</div>
								<img src="assets/media/svg/avatars/029-boy-11.svg" alt="" class="align-self-end h-100px" />
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 2-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 2-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body d-flex align-items-center pt-3 pb-0">
								<div class="d-flex flex-column flex-grow-1 py-2 py-lg-13 me-2">
									<a href="#" class="fw-bold text-dark fs-4 mb-2 text-hover-primary">Lisa Bold</a>
									<span class="fw-semibold text-muted fs-5">Marketing & Fanance Manager</span>
								</div>
								<img src="assets/media/svg/avatars/014-girl-7.svg" alt="" class="align-self-end h-100px" />
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 2-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 2-->
						<div class="card card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Body-->
							<div class="card-body d-flex align-items-center pt-3 pb-0">
								<div class="d-flex flex-column flex-grow-1 py-2 py-lg-13 me-2">
									<a href="#" class="fw-bold text-dark fs-4 mb-2 text-hover-primary">Nick Stone</a>
									<span class="fw-semibold text-muted fs-5">Customer Support Team</span>
								</div>
								<img src="assets/media/svg/avatars/004-boy-1.svg" alt="" class="align-self-end h-100px" />
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 2-->
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<div class="col-xl-4">
						<!--begin::Statistics Widget 3-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body d-flex flex-column p-0">
								<div class="d-flex flex-stack flex-grow-1 card-p">
									<div class="d-flex flex-column me-2">
										<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Weekly Sales</a>
										<span class="text-muted fw-semibold mt-1">Your Weekly Sales Chart</span>
									</div>
									<span class="symbol symbol-50px">
										<span class="symbol-label fs-5 fw-bold bg-light-success text-success">+100</span>
									</span>
								</div>
								<div class="statistics-widget-3-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 3-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 3-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body d-flex flex-column p-0">
								<div class="d-flex flex-stack flex-grow-1 card-p">
									<div class="d-flex flex-column me-2">
										<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Authors Progress</a>
										<span class="text-muted fw-semibold mt-1">Marketplace Authors Chart</span>
									</div>
									<span class="symbol symbol-50px">
										<span class="symbol-label fs-5 fw-bold bg-light-danger text-danger">-260</span>
									</span>
								</div>
								<div class="statistics-widget-3-chart card-rounded-bottom" data-kt-chart-color="danger" style="height: 150px"></div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 3-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 3-->
						<div class="card card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Body-->
							<div class="card-body d-flex flex-column p-0">
								<div class="d-flex flex-stack flex-grow-1 card-p">
									<div class="d-flex flex-column me-2">
										<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Sales Progress</a>
										<span class="text-muted fw-semibold mt-1">Marketplace Sales Chart</span>
									</div>
									<span class="symbol symbol-50px">
										<span class="symbol-label fs-5 fw-bold bg-light-primary text-primary">+180</span>
									</span>
								</div>
								<div class="statistics-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 3-->
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<div class="col-xl-4">
						<!--begin::Statistics Widget 4-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body p-0">
								<div class="d-flex flex-stack card-p flex-grow-1">
									<span class="symbol symbol-50px me-2">
										<span class="symbol-label bg-light-info">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
											<span class="svg-icon svg-icon-2x svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
													<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
													<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</span>
									<div class="d-flex flex-column text-end">
										<span class="text-dark fw-bold fs-2">+256</span>
										<span class="text-muted fw-semibold mt-1">Sales Change</span>
									</div>
								</div>
								<div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="info" style="height: 150px"></div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 4-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 4-->
						<div class="card card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body p-0">
								<div class="d-flex flex-stack card-p flex-grow-1">
									<span class="symbol symbol-50px me-2">
										<span class="symbol-label bg-light-success">
											<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
											<span class="svg-icon svg-icon-2x svg-icon-success">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
													<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</span>
									<div class="d-flex flex-column text-end">
										<span class="text-dark fw-bold fs-2">750$</span>
										<span class="text-muted fw-semibold mt-1">Weekly Income</span>
									</div>
								</div>
								<div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 4-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 4-->
						<div class="card card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Body-->
							<div class="card-body p-0">
								<div class="d-flex flex-stack card-p flex-grow-1">
									<span class="symbol symbol-50px me-2">
										<span class="symbol-label bg-light-primary">
											<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
											<span class="svg-icon svg-icon-2x svg-icon-primary">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</span>
									<div class="d-flex flex-column text-end">
										<span class="text-dark fw-bold fs-2">+6.6K</span>
										<span class="text-muted fw-semibold mt-1">New Users</span>
									</div>
								</div>
								<div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Statistics Widget 4-->
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<div class="col-xl-4">
						<!--begin::Statistics Widget 5-->
						<a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
								<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
										<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
										<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<div class="text-white fw-bold fs-2 mb-2 mt-5">Shopping Cart</div>
								<div class="fw-semibold text-white">Lands, Houses, Ranchos, Farms</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 5-->
						<a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
								<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor" />
										<path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor" />
										<path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<div class="text-white fw-bold fs-2 mb-2 mt-5">Appartments</div>
								<div class="fw-semibold text-white">Flats, Shared Rooms, Duplex</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
					<div class="col-xl-4">
						<!--begin::Statistics Widget 5-->
						<a href="#" class="card bg-success hoverable card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
								<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M14 12V21H10V12C10 11.4 10.4 11 11 11H13C13.6 11 14 11.4 14 12ZM7 2H5C4.4 2 4 2.4 4 3V21H8V3C8 2.4 7.6 2 7 2Z" fill="currentColor" />
										<path d="M21 20H20V16C20 15.4 19.6 15 19 15H17C16.4 15 16 15.4 16 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<div class="text-white fw-bold fs-2 mb-2 mt-5">Sales Stats</div>
								<div class="fw-semibold text-white">50% Increased for FY20</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<div class="col-xl-3">
						<!--begin::Statistics Widget 5-->
						<a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
								<span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
										<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
										<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
										<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">500M$</div>
								<div class="fw-semibold text-gray-400">SAP UI Progress</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
					<div class="col-xl-3">
						<!--begin::Statistics Widget 5-->
						<a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
								<span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor" />
										<path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor" />
										<path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">+3000</div>
								<div class="fw-semibold text-gray-100">New Customers</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
					<div class="col-xl-3">
						<!--begin::Statistics Widget 5-->
						<a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
								<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
										<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<div class="text-white fw-bold fs-2 mb-2 mt-5">$50,000</div>
								<div class="fw-semibold text-white">Milestone Reached</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
					<div class="col-xl-3">
						<!--begin::Statistics Widget 5-->
						<a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
								<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z" fill="currentColor" />
										<path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<div class="text-white fw-bold fs-2 mb-2 mt-5">$50,000</div>
								<div class="fw-semibold text-white">Milestone Reached</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<div class="col-xl-4">
						<!--begin: Statistics Widget 6-->
						<div class="card bg-light-success card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body my-3">
								<a href="#" class="card-title fw-bold text-success fs-5 mb-3 d-block">Project Progress</a>
								<div class="py-1">
									<span class="text-dark fs-1 fw-bold me-2">50%</span>
									<span class="fw-semibold text-muted fs-7">Avarage</span>
								</div>
								<div class="progress h-7px bg-success bg-opacity-50 mt-7">
									<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end:: Body-->
						</div>
						<!--end: Statistics Widget 6-->
					</div>
					<div class="col-xl-4">
						<!--begin: Statistics Widget 6-->
						<div class="card bg-light-warning card-xl-stretch mb-xl-8">
							<!--begin::Body-->
							<div class="card-body my-3">
								<a href="#" class="card-title fw-bold text-warning fs-5 mb-3 d-block">Company Finance</a>
								<div class="py-1">
									<span class="text-dark fs-1 fw-bold me-2">15%</span>
									<span class="fw-semibold text-muted fs-7">48k Goal</span>
								</div>
								<div class="progress h-7px bg-warning bg-opacity-50 mt-7">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end:: Body-->
						</div>
						<!--end: Statistics Widget 6-->
					</div>
					<div class="col-xl-4">
						<!--begin: Statistics Widget 6-->
						<div class="card bg-light-primary card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Body-->
							<div class="card-body my-3">
								<a href="#" class="card-title fw-bold text-primary fs-5 mb-3 d-block">Marketing Analysis</a>
								<div class="py-1">
									<span class="text-dark fs-1 fw-bold me-2">76%</span>
									<span class="fw-semibold text-muted fs-7">400k Impressions</span>
								</div>
								<div class="progress h-7px bg-primary bg-opacity-50 mt-7">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end:: Body-->
						</div>
						<!--end: Statistics Widget 6-->
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
