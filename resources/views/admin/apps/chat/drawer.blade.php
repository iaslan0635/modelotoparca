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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Drawer Chat</h1>
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
					<li class="breadcrumb-item text-muted">Chat</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f093659b1d">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f093659b1d" data-allow-clear="true">
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
			<!--begin::Heading-->
			<div class="d-flex flex-wrap flex-stack mb-6">
				<!--begin::Title-->
				<h3 class="fw-bold my-2">My Contacts
				<span class="fs-6 fw-semibold ms-1">(59)</span></h3>
				<!--end::Title-->
				<!--begin::Controls-->
				<div class="d-flex my-2">
					<!--begin::Select-->
					<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm border-body bg-body w-125px">
						<option value="Online" selected="selected">Online</option>
						<option value="Pending">Pending</option>
						<option value="Declined">Declined</option>
						<option value="Accepted">Accepted</option>
					</select>
					<!--end::Select-->
				</div>
				<!--end::Controls-->
			</div>
			<!--end::Heading-->
			<!--begin::Contacts-->
			<div class="row g-6 g-xl-9">
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Emma Smith</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Art Director</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fs-5 fw-bolder">M</span>
									<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Melody Macy</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Marketing Analytic</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Max Smith</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Software Enginer</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Bean</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Web Developer</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Brian Cox</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">UI/UX Designer</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fs-5 fw-bolder">C</span>
									<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Mikaela Collins</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Head Of Marketing</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Francis Mitcham</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Software Arcitect</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fs-5 fw-bolder">O</span>
									<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Wild</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">System Admin</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fs-5 fw-bolder">N</span>
									<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Account Manager</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Dan Wilson</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Web Desinger</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fs-5 fw-bolder">E</span>
									<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Emma Bold</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Corporate Finance</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-6 col-xxl-4">
					<!--begin::Card-->
					<div class="card">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center flex-column p-9">
							<!--begin::Wrapper-->
							<div class="mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-75px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Name-->
							<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Ana Crown</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fw-semibold text-gray-400 mb-6">Customer Relationship</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-center flex-wrap mb-5">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$14,560</div>
									<div class="fw-semibold text-gray-400">Avg. Earnings</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
									<div class="fs-6 fw-bold text-gray-700">$236,400</div>
									<div class="fw-semibold text-gray-400">Total Sales</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<button class="btn btn-sm btn-light-primary fw-bold" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
							<!--end::Link-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Contacts-->
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
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
