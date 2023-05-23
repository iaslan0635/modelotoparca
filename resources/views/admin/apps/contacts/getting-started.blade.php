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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Getting Started</h1>
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
						<li class="breadcrumb-item text-muted">Contacts</li>
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f090e717a8">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f090e717a8" data-allow-clear="true">
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
				<!--begin::Contacts App- Getting Started-->
				<div class="row g-7">
					<!--begin::Contact groups-->
					<div class="col-lg-6 col-xl-3">
						<!--begin::Contact group wrapper-->
						<div class="card card-flush">
							<!--begin::Card header-->
							<div class="card-header pt-7" id="kt_chat_contacts_header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Groups</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-5">
								<!--begin::Contact groups-->
								<div class="d-flex flex-column gap-5">
									<!--begin::Contact group-->
									<div class="d-flex flex-stack">
										<a href="admin/dist/apps/contacts/getting-started" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary active">All Contacts</a>
										<div class="badge badge-light-primary">9</div>
									</div>
									<!--begin::Contact group-->
									<!--begin::Contact group-->
									<div class="d-flex flex-stack">
										<a href="admin/dist/apps/contacts/getting-started" class="fs-6 fw-bold text-gray-800 text-hover-primary">Subscribed</a>
										<div class="badge badge-light-primary">3</div>
									</div>
									<!--begin::Contact group-->
									<!--begin::Contact group-->
									<div class="d-flex flex-stack">
										<a href="admin/dist/apps/contacts/getting-started" class="fs-6 fw-bold text-gray-800 text-hover-primary">Tier 1 Member</a>
										<div class="badge badge-light-primary">1</div>
									</div>
									<!--begin::Contact group-->
									<!--begin::Contact group-->
									<div class="d-flex flex-stack">
										<a href="admin/dist/apps/contacts/getting-started" class="fs-6 fw-bold text-gray-800 text-hover-primary">Pending Approval</a>
										<div class="badge badge-light-primary">3</div>
									</div>
									<!--begin::Contact group-->
									<!--begin::Contact group-->
									<div class="d-flex flex-stack">
										<a href="admin/dist/apps/contacts/getting-started" class="fs-6 fw-bold text-danger text-hover-primary">Blocked</a>
										<div class="badge badge-light-danger">2</div>
									</div>
									<!--begin::Contact group-->
								</div>
								<!--end::Contact groups-->
								<!--begin::Separator-->
								<div class="separator my-7"></div>
								<!--begin::Separator-->
								<!--begin::Add contact group-->
								<label class="fs-6 fw-semibold form-label">Add new group</label>
								<div class="input-group">
									<input type="text" class="form-control form-control-solid" placeholder="Group name" />
									<button type="button" class="btn btn-icon btn-light">
										<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
										<span class="svg-icon svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
												<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
												<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
								</div>
								<!--end::Add contact group-->
								<!--begin::Separator-->
								<div class="separator my-7"></div>
								<!--begin::Separator-->
								<!--begin::Add new contact-->
								<a href="admin/dist/apps/contacts/add-contact" class="btn btn-primary w-100">
								<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
								<span class="svg-icon svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->Add new contact</a>
								<!--end::Add new contact-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Contact group wrapper-->
					</div>
					<!--end::Contact groups-->
					<!--begin::Search-->
					<div class="col-lg-6 col-xl-3">
						<!--begin::Contacts-->
						<div class="card card-flush" id="kt_contacts_list">
							<!--begin::Card header-->
							<div class="card-header pt-7" id="kt_contacts_list_header">
								<!--begin::Form-->
								<form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off">
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
									<span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Icon-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid ps-13" name="search" value="" placeholder="Search contacts" />
									<!--end::Input-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-5" id="kt_contacts_list_body">
								<!--begin::List-->
								<div class="scroll-y me-n5 pe-5 h-300px h-xl-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header" data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body" data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" data-kt-scroll-offset="5px">
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
												<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
												<div class="fw-semibold fs-7 text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
												<div class="fw-semibold fs-7 text-muted">melody@altbox.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
												<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
												<div class="fw-semibold fs-7 text-muted">max@kt.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
												<div class="fw-semibold fs-7 text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
												<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
												<div class="fw-semibold fs-7 text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<span class="symbol-label bg-light-warning text-warning fs-6 fw-bolder">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
												<div class="fw-semibold fs-7 text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
												<div class="fw-semibold fs-7 text-muted">f.mit@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">O</span>
												<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
												<div class="fw-semibold fs-7 text-muted">olivia@corpmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">N</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
												<div class="fw-semibold fs-7 text-muted">owen.neil@gmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
												<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
												<div class="fw-semibold fs-7 text-muted">dam@consilting.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">E</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
												<div class="fw-semibold fs-7 text-muted">emma@intenso.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
												<div class="fw-semibold fs-7 text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<span class="symbol-label bg-light-info text-info fs-6 fw-bolder">A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
												<div class="fw-semibold fs-7 text-muted">robert@benko.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
												<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
												<div class="fw-semibold fs-7 text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<span class="symbol-label bg-light-success text-success fs-6 fw-bolder">L</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
												<div class="fw-semibold fs-7 text-muted">lucy.m@fentech.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="separator separator-dashed d-none"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Avatar-->
											<div class="symbol symbol-40px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-4">
												<a href="admin/dist/apps/contacts/view-contact" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
												<div class="fw-semibold fs-7 text-muted">ethan@loop.com.au</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::User-->
								</div>
								<!--end::List-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Contacts-->
					</div>
					<!--end::Search-->
					<!--begin::Content-->
					<div class="col-xl-6">
						<!--begin::Card-->
						<div class="card card-flush h-lg-100" id="kt_contacts_main">
							<!--begin::Card body-->
							<div class="card-body p-0">
								<!--begin::Wrapper-->
								<div class="card-px text-center py-20 my-10">
									<!--begin::Title-->
									<h2 class="fs-2x fw-bold mb-10">Welcome to the Contacts App</h2>
									<!--end::Title-->
									<!--begin::Description-->
									<p class="text-gray-400 fs-4 fw-semibold mb-10">It's time to expand our contacts.
									<br />Kickstart your contacts growth by adding a your next contact.</p>
									<!--end::Description-->
									<!--begin::Action-->
									<a href="admin/dist/apps/contacts/add-contact" class="btn btn-primary">Add New Contact</a>
									<!--end::Action-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Illustration-->
								<div class="text-center px-4">
									<img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sketchy-1/5.png" />
								</div>
								<!--end::Illustration-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Contacts App- Getting Started-->
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
