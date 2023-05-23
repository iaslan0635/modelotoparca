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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Contact Us</h1>
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
						<li class="breadcrumb-item text-muted">Corporate</li>
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f099a7ee25">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f099a7ee25" data-allow-clear="true">
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
				<!--begin::Contact-->
				<div class="card">
					<!--begin::Body-->
					<div class="card-body p-lg-17">
						<!--begin::Row-->
						<div class="row mb-3">
							<!--begin::Col-->
							<div class="col-md-6 pe-lg-10">
								<!--begin::Form-->
								<form action="" class="form mb-15" method="post" id="kt_contact_form">
									<h1 class="fw-bold text-dark mb-9">Send Us Email</h1>
									<!--begin::Input group-->
									<div class="row mb-5">
										<!--begin::Col-->
										<div class="col-md-6 fv-row">
											<!--begin::Label-->
											<label class="fs-5 fw-semibold mb-2">Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" placeholder="" name="name" />
											<!--end::Input-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 fv-row">
											<!--end::Label-->
											<label class="fs-5 fw-semibold mb-2">Email</label>
											<!--end::Label-->
											<!--end::Input-->
											<input type="text" class="form-control form-control-solid" placeholder="" name="email" />
											<!--end::Input-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-5 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-semibold mb-2">Subject</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control form-control-solid" placeholder="" name="subject" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-10 fv-row">
										<label class="fs-6 fw-semibold mb-2">Message</label>
										<textarea class="form-control form-control-solid" rows="6" name="message" placeholder=""></textarea>
									</div>
									<!--end::Input group-->
									<!--begin::Submit-->
									<button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
										<!--begin::Indicator label-->
										<span class="indicator-label">Send Feedback</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
									<!--end::Submit-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-6 ps-lg-10">
								<!--begin::Map-->
								<div id="kt_contact_map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px"></div>
								<!--end::Map-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row g-5 mb-5 mb-lg-15">
							<!--begin::Col-->
							<div class="col-sm-6 pe-lg-10">
								<!--begin::Phone-->
								<div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-100">
									<!--begin::Icon-->
									<!--SVG file not found: icons/duotune/finance/fin006.svgPhone.svg-->
									<!--end::Icon-->
									<!--begin::Subtitle-->
									<h1 class="text-dark fw-bold my-5">Let’s Speak</h1>
									<!--end::Subtitle-->
									<!--begin::Number-->
									<div class="text-gray-700 fw-semibold fs-2">1 (833) 597-7538</div>
									<!--end::Number-->
								</div>
								<!--end::Phone-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-sm-6 ps-lg-10">
								<!--begin::Address-->
								<div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-100">
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
									<span class="svg-icon svg-icon-3tx svg-icon-primary">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
											<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Icon-->
									<!--begin::Subtitle-->
									<h1 class="text-dark fw-bold my-5">Our Head Office</h1>
									<!--end::Subtitle-->
									<!--begin::Description-->
									<div class="text-gray-700 fs-3 fw-semibold">Churchill-laan 16 II, 1052 CD, Amsterdam</div>
									<!--end::Description-->
								</div>
								<!--end::Address-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Card-->
						<div class="card mb-4 bg-light text-center">
							<!--begin::Body-->
							<div class="card-body py-12">
								<!--begin::Icon-->
								<a href="#" class="mx-4">
									<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="" />
								</a>
								<!--end::Icon-->
								<!--begin::Icon-->
								<a href="#" class="mx-4">
									<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="" />
								</a>
								<!--end::Icon-->
								<!--begin::Icon-->
								<a href="#" class="mx-4">
									<img src="assets/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="" />
								</a>
								<!--end::Icon-->
								<!--begin::Icon-->
								<a href="#" class="mx-4">
									<img src="assets/media/svg/brand-logos/behance.svg" class="h-30px my-2" alt="" />
								</a>
								<!--end::Icon-->
								<!--begin::Icon-->
								<a href="#" class="mx-4">
									<img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-30px my-2" alt="" />
								</a>
								<!--end::Icon-->
								<!--begin::Icon-->
								<a href="#" class="mx-4">
									<img src="assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="" />
								</a>
								<!--end::Icon-->
								<!--begin::Icon-->
								<a href="#" class="mx-4">
									<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2" alt="" />
								</a>
								<!--end::Icon-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Contact-->
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
