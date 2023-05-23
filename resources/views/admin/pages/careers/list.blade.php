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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Careers List</h1>
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
					<li class="breadcrumb-item text-muted">Careers</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09a636d9b">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09a636d9b" data-allow-clear="true">
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
			<!--begin::Careers - List-->
			<div class="card">
				<!--begin::Body-->
				<div class="card-body p-lg-17">
					<!--begin::Hero-->
					<div class="position-relative mb-17">
						<!--begin::Overlay-->
						<div class="overlay overlay-show">
							<!--begin::Image-->
							<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px" style="background-image:url('assets/media/stock/1600x800/img-1.jpg')"></div>
							<!--end::Image-->
							<!--begin::layer-->
							<div class="overlay-layer rounded bg-black" style="opacity: 0.4"></div>
							<!--end::layer-->
						</div>
						<!--end::Overlay-->
						<!--begin::Heading-->
						<div class="position-absolute text-white mb-8 ms-10 bottom-0">
							<!--begin::Title-->
							<h3 class="text-white fs-2qx fw-bold mb-3 m">Careers at KeenThemes</h3>
							<!--end::Title-->
							<!--begin::Text-->
							<div class="fs-5 fw-semibold">You sit down. You stare at your screen. The cursor blinks.</div>
							<!--end::Text-->
						</div>
						<!--end::Heading-->
					</div>
					<!--end::-->
					<!--begin::Layout-->
					<div class="d-flex flex-column flex-lg-row mb-17">
						<!--begin::Content-->
						<div class="flex-lg-row-fluid me-0 me-lg-20">
							<!--begin::Job-->
							<div class="mb-17">
								<!--begin::Description-->
								<div class="m-0">
									<!--begin::Title-->
									<h4 class="fs-1 text-gray-800 w-bolder mb-6">Junior React Developer</h4>
									<!--end::Title-->
									<!--begin::Text-->
									<p class="fw-semibold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
									<!--end::Text-->
								</div>
								<!--end::Description-->
								<!--begin::Accordion-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_1">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Requirements</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_1_1" class="collapse show fs-6 ms-1">
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_2">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What is your job role?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_1_2" class="collapse fs-6 ms-1">
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_3">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Job Candidate Benefits</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_1_3" class="collapse fs-6 ms-1">
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_4">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Application Terms</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_1_4" class="collapse fs-6 ms-1">
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--end::Accordion-->
								<!--begin::Apply-->
								<a href="admin/dist/pages/careers/apply" class="btn btn-sm btn-primary mt-5">Apply Now</a>
								<!--end::Apply-->
							</div>
							<!--end::Job-->
							<!--begin::Job-->
							<div class="mb-10 mb-lg-0">
								<!--begin::Description-->
								<div class="m-0">
									<!--begin::Title-->
									<h4 class="fs-1 text-gray-800 w-bolder mb-6">UI/UX Designer</h4>
									<!--end::Title-->
									<!--begin::Text-->
									<p class="fw-semibold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
									<!--end::Text-->
								</div>
								<!--end::Description-->
								<!--begin::Accordion-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_1">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Requirements</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_2_1" class="collapse show fs-6 ms-1">
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_2">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What is your job role?</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_2_2" class="collapse fs-6 ms-1">
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_3">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Job Candidate Benefits</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_2_3" class="collapse fs-6 ms-1">
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Content-->
									<!--begin::Separator-->
									<div class="separator separator-dashed"></div>
									<!--end::Separator-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="m-0">
									<!--begin::Heading-->
									<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_4">
										<!--begin::Icon-->
										<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
											<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
											<span class="svg-icon toggle-off svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Application Terms</h4>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div id="kt_job_2_4" class="collapse fs-6 ms-1">
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10 mb-n1">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-4">
											<!--begin::Item-->
											<div class="d-flex align-items-center ps-10">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--end::Accordion-->
								<!--begin::Apply-->
								<a href="admin/dist/pages/careers/apply" class="btn btn-sm btn-primary mt-5">Apply Now</a>
								<!--end::Apply-->
							</div>
							<!--end::Job-->
						</div>
						<!--end::Content-->
						<!--begin::Sidebar-->
						<div class="flex-lg-row-auto w-100 w-lg-275px w-xxl-350px">
							<!--begin::Careers about-->
							<div class="card bg-light">
								<!--begin::Body-->
								<div class="card-body">
									<!--begin::Top-->
									<div class="mb-7">
										<!--begin::Title-->
										<h2 class="fs-1 text-gray-800 w-bolder mb-6">About Us</h2>
										<!--end::Title-->
										<!--begin::Text-->
										<p class="fw-semibold fs-6 text-gray-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
										<!--end::Text-->
									</div>
									<!--end::Top-->
									<!--begin::Item-->
									<div class="mb-8">
										<!--begin::Title-->
										<h4 class="text-gray-700 w-bolder mb-0">Requirements</h4>
										<!--end::Title-->
										<!--begin::Section-->
										<div class="my-2">
											<!--begin::Row-->
											<div class="d-flex align-items-center mb-3">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="d-flex align-items-center mb-3">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="d-flex align-items-center mb-3">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="d-flex align-items-center">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Section-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="mb-8">
										<!--begin::Title-->
										<h4 class="text-gray-700 w-bolder mb-0">Our Achievements</h4>
										<!--end::Title-->
										<!--begin::Section-->
										<div class="my-2">
											<!--begin::Row-->
											<div class="d-flex align-items-center mb-3">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
												<!--end::Label-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="d-flex align-items-center mb-3">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
												<!--end::Label-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="d-flex align-items-center mb-3">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
												<!--end::Label-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="d-flex align-items-center">
												<!--begin::Bullet-->
												<span class="bullet me-3"></span>
												<!--end::Bullet-->
												<!--begin::Label-->
												<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
												<!--end::Label-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Section-->
									</div>
									<!--end::Item-->
									<!--begin::Link-->
									<a href="admin/dist/pages/blog/post" class="link-primary fs-6 fw-semibold">Explore More</a>
									<!--end::Link-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Careers about-->
						</div>
						<!--end::Sidebar-->
					</div>
					<!--end::Layout-->
					<!--begin::Section-->
					<div class="mb-19">
						<!--begin::Top-->
						<div class="text-center mb-12">
							<!--begin::Title-->
							<h3 class="fs-2hx text-dark mb-5">Publications</h3>
							<!--end::Title-->
							<!--begin::Text-->
							<div class="fs-5 text-muted fw-semibold">Our goal is to provide a complete and robust theme solution
							<br />to boost all of our customer’s project deployments</div>
							<!--end::Text-->
						</div>
						<!--end::Top-->
						<!--begin::Row-->
						<div class="row g-10">
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Publications post-->
								<div class="card-xl-stretch me-md-6">
									<!--begin::Overlay-->
									<a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-73.jpg">
										<!--begin::Image-->
										<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-73.jpg')"></div>
										<!--end::Image-->
										<!--begin::Action-->
										<div class="overlay-layer bg-dark card-rounded bg-opacity-25">
											<i class="bi bi-eye-fill fs-2x text-white"></i>
										</div>
										<!--end::Action-->
									</a>
									<!--end::Overlay-->
									<!--begin::Body-->
									<div class="m-0">
										<!--begin::Title-->
										<a href="admin/dist/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark mt-3 mb-5">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
										<!--end::Text-->
										<!--begin::Content-->
										<div class="fs-6 fw-bold">
											<!--begin::Author-->
											<a href="admin/dist/apps/projects/users" class="text-gray-700 text-hover-primary">Jane Miller</a>
											<!--end::Author-->
											<!--begin::Date-->
											<span class="text-muted">on Mar 21 2021</span>
											<!--end::Date-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Publications post-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Publications post-->
								<div class="card-xl-stretch mx-md-3">
									<!--begin::Overlay-->
									<a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-74.jpg">
										<!--begin::Image-->
										<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-74.jpg')"></div>
										<!--end::Image-->
										<!--begin::Action-->
										<div class="overlay-layer bg-dark card-rounded bg-opacity-25">
											<i class="bi bi-eye-fill fs-2x text-white"></i>
										</div>
										<!--end::Action-->
									</a>
									<!--end::Overlay-->
									<!--begin::Body-->
									<div class="m-0">
										<!--begin::Title-->
										<a href="admin/dist/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark mt-3 mb-5">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
										<!--end::Text-->
										<!--begin::Content-->
										<div class="fs-6 fw-bold">
											<!--begin::Author-->
											<a href="admin/dist/apps/projects/users" class="text-gray-700 text-hover-primary">Cris Morgan</a>
											<!--end::Author-->
											<!--begin::Date-->
											<span class="text-muted">on Apr 14 2021</span>
											<!--end::Date-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Publications post-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Publications post-->
								<div class="card-xl-stretch ms-md-6">
									<!--begin::Overlay-->
									<a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-47.jpg">
										<!--begin::Image-->
										<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-47.jpg')"></div>
										<!--end::Image-->
										<!--begin::Action-->
										<div class="overlay-layer bg-dark card-rounded bg-opacity-25">
											<i class="bi bi-eye-fill fs-2x text-white"></i>
										</div>
										<!--end::Action-->
									</a>
									<!--end::Overlay-->
									<!--begin::Body-->
									<div class="m-0">
										<!--begin::Title-->
										<a href="admin/dist/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark mt-3 mb-5">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
										<!--end::Text-->
										<!--begin::Content-->
										<div class="fs-6 fw-bold">
											<!--begin::Author-->
											<a href="admin/dist/apps/projects/users" class="text-gray-700 text-hover-primary">Carles Nilson</a>
											<!--end::Author-->
											<!--begin::Date-->
											<span class="text-muted">on May 14 2021</span>
											<!--end::Date-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Publications post-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Section-->
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
			<!--end::Careers - List-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
