@extends('admin.layout')
@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
	<!--begin::Navbar-->
	<div class="card">
		<div class="card-body pt-9 pb-0">
			<!--begin::Details-->
			<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
				<!--begin::Image-->
				<div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
					<img class="mw-50px mw-lg-75px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="image" />
				</div>
				<!--end::Image-->
				<!--begin::Wrapper-->
				<div class="flex-grow-1">
					<!--begin::Head-->
					<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
						<!--begin::Details-->
						<div class="d-flex flex-column">
							<!--begin::Status-->
							<div class="d-flex align-items-center mb-1">
								<a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">CRM Dashboard</a>
								<span class="badge badge-light-success me-auto">In Progress</span>
							</div>
							<!--end::Status-->
							<!--begin::Description-->
							<div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">#1 Tool to get started with Web Apps any Kind & size</div>
							<!--end::Description-->
						</div>
						<!--end::Details-->
						<!--begin::Actions-->
						<div class="d-flex mb-4">
							<a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
							<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
							<!--begin::Menu-->
							<div class="me-0">
								<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<i class="bi bi-three-dots fs-3"></i>
								</button>
								<!--begin::Menu 3-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
									</div>
									<!--end::Heading-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Create Invoice</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link flex-stack px-3">Create Payment
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Generate Bill</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-3">
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Plans</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<!--end::Input-->
														<!--end::Label-->
														<span class="form-check-label text-muted fs-6">Recuring</span>
														<!--end::Label-->
													</label>
													<!--end::Switch-->
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-1">
										<a href="#" class="menu-link px-3">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 3-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Head-->
					<!--begin::Info-->
					<div class="d-flex flex-wrap justify-content-start">
						<!--begin::Stats-->
						<div class="d-flex flex-wrap">
							<!--begin::Stat-->
							<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
								<!--begin::Number-->
								<div class="d-flex align-items-center">
									<div class="fs-4 fw-bold">29 Jan, 2022</div>
								</div>
								<!--end::Number-->
								<!--begin::Label-->
								<div class="fw-semibold fs-6 text-gray-400">Due Date</div>
								<!--end::Label-->
							</div>
							<!--end::Stat-->
							<!--begin::Stat-->
							<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
								<!--begin::Number-->
								<div class="d-flex align-items-center">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
									<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
											<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
								</div>
								<!--end::Number-->
								<!--begin::Label-->
								<div class="fw-semibold fs-6 text-gray-400">Open Tasks</div>
								<!--end::Label-->
							</div>
							<!--end::Stat-->
							<!--begin::Stat-->
							<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
								<!--begin::Number-->
								<div class="d-flex align-items-center">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
									<span class="svg-icon svg-icon-3 svg-icon-success me-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
											<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$">0</div>
								</div>
								<!--end::Number-->
								<!--begin::Label-->
								<div class="fw-semibold fs-6 text-gray-400">Budget Spent</div>
								<!--end::Label-->
							</div>
							<!--end::Stat-->
						</div>
						<!--end::Stats-->
						<!--begin::Users-->
						<div class="symbol-group symbol-hover mb-3">
							<!--begin::User-->
							<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
								<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
								<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
								<img alt="Pic" src="assets/media/avatars/300-7.jpg" />
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
								<img alt="Pic" src="assets/media/avatars/300-20.jpg" />
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
								<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
								<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
								<span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
								<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
							</div>
							<!--end::User-->
							<!--begin::All users-->
							<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
								<span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>
							</a>
							<!--end::All users-->
						</div>
						<!--end::Users-->
					</div>
					<!--end::Info-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Details-->
			<div class="separator"></div>
			<!--begin::Nav-->
			<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
				<!--begin::Nav item-->
				<li class="nav-item">
					<a class="nav-link text-active-primary py-5 me-6" href="/admin/apps/projects/project.html">Overview</a>
				</li>
				<!--end::Nav item-->
				<!--begin::Nav item-->
				<li class="nav-item">
					<a class="nav-link text-active-primary py-5 me-6 active" href="/admin/apps/projects/targets.html">Targets</a>
				</li>
				<!--end::Nav item-->
				<!--begin::Nav item-->
				<li class="nav-item">
					<a class="nav-link text-active-primary py-5 me-6" href="/admin/apps/projects/budget.html">Budget</a>
				</li>
				<!--end::Nav item-->
				<!--begin::Nav item-->
				<li class="nav-item">
					<a class="nav-link text-active-primary py-5 me-6" href="/admin/apps/projects/users.html">Users</a>
				</li>
				<!--end::Nav item-->
				<!--begin::Nav item-->
				<li class="nav-item">
					<a class="nav-link text-active-primary py-5 me-6" href="/admin/apps/projects/files.html">Files</a>
				</li>
				<!--end::Nav item-->
				<!--begin::Nav item-->
				<li class="nav-item">
					<a class="nav-link text-active-primary py-5 me-6" href="/admin/apps/projects/activity.html">Activity</a>
				</li>
				<!--end::Nav item-->
				<!--begin::Nav item-->
				<li class="nav-item">
					<a class="nav-link text-active-primary py-5 me-6" href="/admin/apps/projects/settings.html">Settings</a>
				</li>
				<!--end::Nav item-->
			</ul>
			<!--end::Nav-->
		</div>
	</div>
	<!--end::Navbar-->
	<!--begin::Toolbar-->
	<div class="d-flex flex-wrap flex-stack pt-10 pb-8">
		<!--begin::Heading-->
		<h3 class="fw-bold my-2">Project Targets
		<span class="fs-6 text-gray-400 fw-semibold ms-1">by Recent Updates ↓</span></h3>
		<!--end::Heading-->
		<!--begin::Controls-->
		<div class="d-flex flex-wrap my-1">
			<!--begin::Tab nav-->
			<ul class="nav nav-pills me-5">
				<li class="nav-item m-0">
					<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary active me-3" data-bs-toggle="tab" href="#kt_project_targets_card_pane">
						<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
									<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
									<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
									<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
								</g>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</a>
				</li>
				<li class="nav-item m-0">
					<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_targets_table_pane">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
								<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</a>
				</li>
			</ul>
			<!--end::Tab nav-->
			<!--begin::Wrapper-->
			<div class="my-0">
				<!--begin::Select-->
				<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm border-body bg-body w-150px">
					<option value="1" selected="selected">Recently Updated</option>
					<option value="2">Last Month</option>
					<option value="3">Last Quarter</option>
					<option value="4">Last Year</option>
				</select>
				<!--end::Select-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Controls-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Tab Content-->
	<div class="tab-content">
		<!--begin::Tab pane-->
		<div id="kt_project_targets_card_pane" class="tab-pane fade show active">
			<!--begin::Row-->
			<div class="row g-9">
				<!--begin::Col-->
				<div class="col-md-4 col-lg-12 col-xl-4">
					<!--begin::Col header-->
					<div class="mb-9">
						<div class="d-flex flex-stack">
							<div class="fw-bold fs-4">Yet to start
							<span class="fs-6 text-gray-400 ms-2">2</span></div>
							<!--begin::Menu-->
							<div>
								<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f08d56059d">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f08d56059d" data-allow-clear="true">
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
							<!--end::Menu-->
						</div>
						<div class="h-3px w-100 bg-warning"></div>
					</div>
					<!--end::Col header-->
					<!--begin::Card-->
					<div class="card mb-6 mb-xl-9">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-3">
								<!--begin::Badge-->
								<div class="badge badge-light">UI Design</div>
								<!--end::Badge-->
								<!--begin::Menu-->
								<div>
									<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Title-->
							<div class="mb-2">
								<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Meeting with customer</a>
							</div>
							<!--end::Title-->
							<!--begin::Content-->
							<div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>
							<!--end::Content-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrapr">
								<!--begin::Users-->
								<div class="symbol-group symbol-hover my-1">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
										<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
										<img alt="Pic" src="assets/media/avatars/300-19.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
										<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
									</div>
								</div>
								<!--end::Users-->
								<!--begin::Stats-->
								<div class="d-flex my-1">
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor" />
												<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">6</span>
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">2</span>
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<!--begin::Card-->
					<div class="card mb-6 mb-xl-9">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-3">
								<!--begin::Badge-->
								<div class="badge badge-light">Phase 2.6 QA</div>
								<!--end::Badge-->
								<!--begin::Menu-->
								<div>
									<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Title-->
							<div class="mb-2">
								<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
							</div>
							<!--end::Title-->
							<!--begin::Content-->
							<div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>
							<!--end::Content-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrapr">
								<!--begin::Users-->
								<div class="symbol-group symbol-hover my-1">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
										<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
										<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
									</div>
								</div>
								<!--end::Users-->
								<!--begin::Stats-->
								<div class="d-flex my-1">
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor" />
												<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">1</span>
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<a href="#" class="btn btn-primary er w-100 fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create New Target</a>
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-4 col-lg-12 col-xl-4">
					<!--begin::Col header-->
					<div class="mb-9">
						<div class="d-flex flex-stack">
							<div class="fw-bold fs-4">In Progress
							<span class="fs-6 text-gray-400 ms-2">4</span></div>
							<!--begin::Menu-->
							<div>
								<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f08d561afc">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f08d561afc" data-allow-clear="true">
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
							<!--end::Menu-->
						</div>
						<div class="h-3px w-100 bg-primary"></div>
					</div>
					<!--end::Col header-->
					<!--begin::Card-->
					<div class="card mb-6 mb-xl-9">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-3">
								<!--begin::Badge-->
								<div class="badge badge-light">Development</div>
								<!--end::Badge-->
								<!--begin::Menu-->
								<div>
									<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Title-->
							<div class="mb-2">
								<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Sales report page</a>
							</div>
							<!--end::Title-->
							<!--begin::Content-->
							<div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>
							<!--end::Content-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrapr">
								<!--begin::Users-->
								<div class="symbol-group symbol-hover my-1">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
										<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
										<img alt="Pic" src="assets/media/avatars/300-7.jpg" />
									</div>
								</div>
								<!--end::Users-->
								<!--begin::Stats-->
								<div class="d-flex my-1">
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor" />
												<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">5</span>
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">5</span>
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<!--begin::Card-->
					<div class="card mb-6 mb-xl-9">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-3">
								<!--begin::Badge-->
								<div class="badge badge-light">Testing</div>
								<!--end::Badge-->
								<!--begin::Menu-->
								<div>
									<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Title-->
							<div class="mb-2">
								<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Meeting with customer</a>
							</div>
							<!--end::Title-->
							<!--begin::Content-->
							<div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>
							<!--end::Content-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrapr">
								<!--begin::Users-->
								<div class="symbol-group symbol-hover my-1">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
										<img alt="Pic" src="assets/media/avatars/300-20.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
										<img alt="Pic" src="assets/media/avatars/300-19.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
										<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
									</div>
								</div>
								<!--end::Users-->
								<!--begin::Stats-->
								<div class="d-flex my-1">
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor" />
												<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">5</span>
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<!--begin::Card-->
					<div class="card mb-6 mb-xl-9">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-3">
								<!--begin::Badge-->
								<div class="badge badge-light">UI Design</div>
								<!--end::Badge-->
								<!--begin::Menu-->
								<div>
									<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Title-->
							<div class="mb-2">
								<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Design main Dashboard</a>
							</div>
							<!--end::Title-->
							<!--begin::Content-->
							<div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>
							<!--end::Content-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrapr">
								<!--begin::Users-->
								<div class="symbol-group symbol-hover my-1">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
										<img alt="Pic" src="assets/media/avatars/300-20.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
										<img alt="Pic" src="assets/media/avatars/300-7.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
										<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
									</div>
								</div>
								<!--end::Users-->
								<!--begin::Stats-->
								<div class="d-flex my-1">
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor" />
												<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">9</span>
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<!--begin::Card-->
					<div class="card mb-6 mb-xl-9">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-3">
								<!--begin::Badge-->
								<div class="badge badge-light">Phase 2.6 QA</div>
								<!--end::Badge-->
								<!--begin::Menu-->
								<div>
									<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Title-->
							<div class="mb-2">
								<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
							</div>
							<!--end::Title-->
							<!--begin::Content-->
							<div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>
							<!--end::Content-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrapr">
								<!--begin::Users-->
								<div class="symbol-group symbol-hover my-1">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
										<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
									</div>
								</div>
								<!--end::Users-->
								<!--begin::Stats-->
								<div class="d-flex my-1">
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor" />
												<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">5</span>
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">6</span>
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-4 col-lg-12 col-xl-4">
					<!--begin::Col header-->
					<div class="mb-9">
						<div class="d-flex flex-stack">
							<div class="fw-bold fs-4">Completed
							<span class="fs-6 text-gray-400 ms-2">3</span></div>
							<!--begin::Menu-->
							<div>
								<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f08d563a36">
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
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f08d563a36" data-allow-clear="true">
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
							<!--end::Menu-->
						</div>
						<div class="h-3px w-100 bg-success"></div>
					</div>
					<!--end::Col header-->
					<!--begin::Card-->
					<div class="card mb-6 mb-xl-9">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-3">
								<!--begin::Badge-->
								<div class="badge badge-light">UI Design</div>
								<!--end::Badge-->
								<!--begin::Menu-->
								<div>
									<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Title-->
							<div class="mb-2">
								<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Branding Logo</a>
							</div>
							<!--end::Title-->
							<!--begin::Content-->
							<div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>
							<!--end::Content-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrapr">
								<!--begin::Users-->
								<div class="symbol-group symbol-hover my-1">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
										<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
										<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
									</div>
								</div>
								<!--end::Users-->
								<!--begin::Stats-->
								<div class="d-flex my-1">
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor" />
												<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">9</span>
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">9</span>
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<!--begin::Card-->
					<div class="card mb-6 mb-xl-9">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-3">
								<!--begin::Badge-->
								<div class="badge badge-light">QA</div>
								<!--end::Badge-->
								<!--begin::Menu-->
								<div>
									<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Title-->
							<div class="mb-2">
								<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">To check User Management</a>
							</div>
							<!--end::Title-->
							<!--begin::Content-->
							<div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>
							<!--end::Content-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrapr">
								<!--begin::Users-->
								<div class="symbol-group symbol-hover my-1">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
										<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
										<span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
									</div>
								</div>
								<!--end::Users-->
								<!--begin::Stats-->
								<div class="d-flex my-1">
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor" />
												<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">7</span>
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">9</span>
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<!--begin::Card-->
					<div class="card mb-6 mb-xl-9">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Header-->
							<div class="d-flex flex-stack mb-3">
								<!--begin::Badge-->
								<div class="badge badge-light">Phase 2.6 QA</div>
								<!--end::Badge-->
								<!--begin::Menu-->
								<div>
									<button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-1">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Title-->
							<div class="mb-2">
								<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
							</div>
							<!--end::Title-->
							<!--begin::Content-->
							<div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>
							<!--end::Content-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrapr">
								<!--begin::Users-->
								<div class="symbol-group symbol-hover my-1">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
										<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
										<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
										<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
									</div>
								</div>
								<!--end::Users-->
								<!--begin::Stats-->
								<div class="d-flex my-1">
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="currentColor" />
												<path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">6</span>
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-dashed border-gray-300 rounded py-2 px-3 ms-3">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Tab pane-->
		<!--begin::Tab pane-->
		<div id="kt_project_targets_table_pane" class="tab-pane fade">
			<div class="card card-flush">
				<div class="card-body pt-3">
					<!--begin::Table-->
					<table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
						<!--begin::Table head-->
						<thead class="fs-7 text-gray-400 text-uppercase">
							<tr>
								<th class="min-w-250px">Target</th>
								<th class="min-w-90px">Section</th>
								<th class="min-w-150px">Due Date</th>
								<th class="min-w-90px">Members</th>
								<th class="min-w-90px">Status</th>
								<th class="min-w-50px"></th>
							</tr>
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fs-6">
							<!--begin::Table row-->
							<tr>
								<td class="fw-bold">
									<a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a>
								</td>
								<td>
									<span class="badge badge-light fw-semibold me-auto">UI Design</span>
								</td>
								<td>Sep 1, 2020</td>
								<td>
									<!--begin::Members-->
									<div class="symbol-group symbol-hover fs-8">
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
											<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="John Mixin">
											<img alt="Pic" src="assets/media/avatars/300-14.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
											<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
										</div>
									</div>
									<!--end::Members-->
								</td>
								<td>
									<span class="badge badge-light-primary fw-bold me-auto">In Progress</span>
								</td>
								<td class="text-end">
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
								</td>
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<td class="fw-bold">
									<a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a>
								</td>
								<td>
									<span class="badge badge-light fw-semibold me-auto">Phase 2.6 QA</span>
								</td>
								<td>Dec 19, 2020</td>
								<td>
									<!--begin::Members-->
									<div class="symbol-group symbol-hover fs-8">
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
											<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
											<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
										</div>
									</div>
									<!--end::Members-->
								</td>
								<td>
									<span class="badge badge-light-success fw-bold me-auto">Completed</span>
								</td>
								<td class="text-end">
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
								</td>
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<td class="fw-bold">
									<a href="#" class="text-gray-900 text-hover-primary">Sales report page</a>
								</td>
								<td>
									<span class="badge badge-light fw-semibold me-auto">QA</span>
								</td>
								<td>Nov 6, 2020</td>
								<td>
									<!--begin::Members-->
									<div class="symbol-group symbol-hover fs-8">
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
											<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Kristen Goodwin">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Mikaela Collins">
											<span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
										</div>
									</div>
									<!--end::Members-->
								</td>
								<td>
									<span class="badge badge-light fw-bold me-auto">Yet to start</span>
								</td>
								<td class="text-end">
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
								</td>
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<td class="fw-bold">
									<a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a>
								</td>
								<td>
									<span class="badge badge-light fw-semibold me-auto">Prototype</span>
								</td>
								<td>Jun 26, 2020</td>
								<td>
									<!--begin::Members-->
									<div class="symbol-group symbol-hover fs-8">
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
											<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
									</div>
									<!--end::Members-->
								</td>
								<td>
									<span class="badge badge-light-success fw-bold me-auto">Completed</span>
								</td>
								<td class="text-end">
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
								</td>
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<td class="fw-bold">
									<a href="#" class="text-gray-900 text-hover-primary">Design main Dashboard</a>
								</td>
								<td>
									<span class="badge badge-light fw-semibold me-auto">UI Design</span>
								</td>
								<td>Sep 16, 2020</td>
								<td>
									<!--begin::Members-->
									<div class="symbol-group symbol-hover fs-8">
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
											<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Lucy Matthews">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
									</div>
									<!--end::Members-->
								</td>
								<td>
									<span class="badge badge-light-success fw-bold me-auto">Completed</span>
								</td>
								<td class="text-end">
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
								</td>
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<td class="fw-bold">
									<a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a>
								</td>
								<td>
									<span class="badge badge-light fw-semibold me-auto">Development</span>
								</td>
								<td>Jun 11, 2020</td>
								<td>
									<!--begin::Members-->
									<div class="symbol-group symbol-hover fs-8">
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
											<img alt="Pic" src="assets/media/avatars/300-20.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Deanna Taylor">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Mikaela Collins">
											<span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
										</div>
									</div>
									<!--end::Members-->
								</td>
								<td>
									<span class="badge badge-light-primary fw-bold me-auto">In Progress</span>
								</td>
								<td class="text-end">
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
								</td>
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<td class="fw-bold">
									<a href="#" class="text-gray-900 text-hover-primary">To check User Management</a>
								</td>
								<td>
									<span class="badge badge-light fw-semibold me-auto">Pahse 3.2</span>
								</td>
								<td>Dec 26, 2020</td>
								<td>
									<!--begin::Members-->
									<div class="symbol-group symbol-hover fs-8">
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Lucy Matthews">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Kristen Goodwin">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
											<img alt="Pic" src="assets/media/avatars/300-7.jpg" />
										</div>
									</div>
									<!--end::Members-->
								</td>
								<td>
									<span class="badge badge-light fw-bold me-auto">Yet to start</span>
								</td>
								<td class="text-end">
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
								</td>
							</tr>
							<!--end::Table row-->
							<!--begin::Table row-->
							<tr>
								<td class="fw-bold">
									<a href="#" class="text-gray-900 text-hover-primary">Create Roles Module</a>
								</td>
								<td>
									<span class="badge badge-light fw-semibold me-auto">Branding</span>
								</td>
								<td>Jan 2, 2020</td>
								<td>
									<!--begin::Members-->
									<div class="symbol-group symbol-hover fs-8">
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
											<img alt="Pic" src="assets/media/avatars/300-7.jpg" />
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
											<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
										</div>
										<div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
											<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
										</div>
									</div>
									<!--end::Members-->
								</td>
								<td>
									<span class="badge badge-light fw-bold me-auto">Yet to start</span>
								</td>
								<td class="text-end">
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
								</td>
							</tr>
							<!--end::Table row-->
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
			</div>
		</div>
		<!--end::Tab pane-->
	</div>
	<!--end::Tab Content-->
</div>
@endsection
