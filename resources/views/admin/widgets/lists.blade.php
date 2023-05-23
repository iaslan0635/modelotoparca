@extends('admin.layout')
@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
	<!--begin::Row-->
	<div class="row g-5 g-xl-8">
		<div class="col-xl-4">
			<!--begin::List Widget 1-->
			<div class="card card-xl-stretch mb-xl-8">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-dark">Tasks Overview</span>
						<span class="text-muted mt-1 fw-semibold fs-7">Pending 10 tasks</span>
					</h3>
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09a91ea5e">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09a91ea5e" data-allow-clear="true">
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
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-5">
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label bg-light-success">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
								<span class="svg-icon svg-icon-2x svg-icon-success">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
										<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Text-->
						<div class="d-flex flex-column">
							<a href="#" class="text-dark text-hover-primary fs-6 fw-bold">Project Briefing</a>
							<span class="text-muted fw-bold">Project Manager</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label bg-light-warning">
								<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
								<span class="svg-icon svg-icon-2x svg-icon-warning">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
										<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Text-->
						<div class="d-flex flex-column">
							<a href="#" class="text-dark text-hover-primary fs-6 fw-bold">Concept Design</a>
							<span class="text-muted fw-bold">Art Director</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label bg-light-primary">
								<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
								<span class="svg-icon svg-icon-2x svg-icon-primary">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
										<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
										<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Text-->
						<div class="d-flex flex-column">
							<a href="#" class="text-dark text-hover-primary fs-6 fw-bold">Functional Logics</a>
							<span class="text-muted fw-bold">Lead Developer</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label bg-light-danger">
								<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
								<span class="svg-icon svg-icon-2x svg-icon-danger">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
										<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Text-->
						<div class="d-flex flex-column">
							<a href="#" class="text-dark text-hover-primary fs-6 fw-bold">Development</a>
							<span class="text-muted fw-bold">DevOps</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label bg-light-info">
								<!--begin::Svg Icon | path: icons/duotune/general/gen049.svg-->
								<span class="svg-icon svg-icon-2x svg-icon-info">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
										<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="currentColor" />
										<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Text-->
						<div class="d-flex flex-column">
							<a href="#" class="text-dark text-hover-primary fs-6 fw-bold">Testing</a>
							<span class="text-muted fw-bold">QA Managers</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::List Widget 1-->
		</div>
		<div class="col-xl-4">
			<!--begin::List Widget 2-->
			<div class="card card-xl-stretch mb-xl-8">
				<!--begin::Header-->
				<div class="card-header border-0">
					<h3 class="card-title fw-bold text-dark">Authors</h3>
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
						<!--begin::Menu 2-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mb-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Ticket</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Customer</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
								<!--begin::Menu item-->
								<a href="#" class="menu-link px-3">
									<span class="menu-title">New Group</span>
									<span class="menu-arrow"></span>
								</a>
								<!--end::Menu item-->
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Admin Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Staff Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Member Group</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mt-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content px-3 py-3">
									<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
								</div>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 2-->
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Avatar-->
						<div class="symbol symbol-50px me-5">
							<img src="assets/media/avatars/300-6.jpg" class="" alt="" />
						</div>
						<!--end::Avatar-->
						<!--begin::Text-->
						<div class="flex-grow-1">
							<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Emma Smith</a>
							<span class="text-muted d-block fw-bold">Project Manager</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Avatar-->
						<div class="symbol symbol-50px me-5">
							<img src="assets/media/avatars/300-5.jpg" class="" alt="" />
						</div>
						<!--end::Avatar-->
						<!--begin::Text-->
						<div class="flex-grow-1">
							<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Sean Bean</a>
							<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Avatar-->
						<div class="symbol symbol-50px me-5">
							<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
						</div>
						<!--end::Avatar-->
						<!--begin::Text-->
						<div class="flex-grow-1">
							<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Brian Cox</a>
							<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Avatar-->
						<div class="symbol symbol-50px me-5">
							<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
						</div>
						<!--end::Avatar-->
						<!--begin::Text-->
						<div class="flex-grow-1">
							<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Francis Mitcham</a>
							<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center">
						<!--begin::Avatar-->
						<div class="symbol symbol-50px me-5">
							<img src="assets/media/avatars/300-23.jpg" class="" alt="" />
						</div>
						<!--end::Avatar-->
						<!--begin::Text-->
						<div class="flex-grow-1">
							<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Dan Wilson</a>
							<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::List Widget 2-->
		</div>
		<div class="col-xl-4">
			<!--begin::List Widget 3-->
			<div class="card card-xl-stretch mb-5 mb-xl-8">
				<!--begin::Header-->
				<div class="card-header border-0">
					<h3 class="card-title fw-bold text-dark">Todo</h3>
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-8">
						<!--begin::Bullet-->
						<span class="bullet bullet-vertical h-40px bg-success"></span>
						<!--end::Bullet-->
						<!--begin::Checkbox-->
						<div class="form-check form-check-custom form-check-solid mx-5">
							<input class="form-check-input" type="checkbox" value="" />
						</div>
						<!--end::Checkbox-->
						<!--begin::Description-->
						<div class="flex-grow-1">
							<a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Create FireStone Logo</a>
							<span class="text-muted fw-semibold d-block">Due in 2 Days</span>
						</div>
						<!--end::Description-->
						<span class="badge badge-light-success fs-8 fw-bold">New</span>
					</div>
					<!--end:Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-8">
						<!--begin::Bullet-->
						<span class="bullet bullet-vertical h-40px bg-primary"></span>
						<!--end::Bullet-->
						<!--begin::Checkbox-->
						<div class="form-check form-check-custom form-check-solid mx-5">
							<input class="form-check-input" type="checkbox" value="" />
						</div>
						<!--end::Checkbox-->
						<!--begin::Description-->
						<div class="flex-grow-1">
							<a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Stakeholder Meeting</a>
							<span class="text-muted fw-semibold d-block">Due in 3 Days</span>
						</div>
						<!--end::Description-->
						<span class="badge badge-light-primary fs-8 fw-bold">New</span>
					</div>
					<!--end:Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-8">
						<!--begin::Bullet-->
						<span class="bullet bullet-vertical h-40px bg-warning"></span>
						<!--end::Bullet-->
						<!--begin::Checkbox-->
						<div class="form-check form-check-custom form-check-solid mx-5">
							<input class="form-check-input" type="checkbox" value="" />
						</div>
						<!--end::Checkbox-->
						<!--begin::Description-->
						<div class="flex-grow-1">
							<a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Scoping & Estimations</a>
							<span class="text-muted fw-semibold d-block">Due in 5 Days</span>
						</div>
						<!--end::Description-->
						<span class="badge badge-light-warning fs-8 fw-bold">New</span>
					</div>
					<!--end:Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-8">
						<!--begin::Bullet-->
						<span class="bullet bullet-vertical h-40px bg-primary"></span>
						<!--end::Bullet-->
						<!--begin::Checkbox-->
						<div class="form-check form-check-custom form-check-solid mx-5">
							<input class="form-check-input" type="checkbox" value="" />
						</div>
						<!--end::Checkbox-->
						<!--begin::Description-->
						<div class="flex-grow-1">
							<a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">KPI App Showcase</a>
							<span class="text-muted fw-semibold d-block">Due in 2 Days</span>
						</div>
						<!--end::Description-->
						<span class="badge badge-light-primary fs-8 fw-bold">New</span>
					</div>
					<!--end:Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center mb-8">
						<!--begin::Bullet-->
						<span class="bullet bullet-vertical h-40px bg-danger"></span>
						<!--end::Bullet-->
						<!--begin::Checkbox-->
						<div class="form-check form-check-custom form-check-solid mx-5">
							<input class="form-check-input" type="checkbox" value="" />
						</div>
						<!--end::Checkbox-->
						<!--begin::Description-->
						<div class="flex-grow-1">
							<a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Project Meeting</a>
							<span class="text-muted fw-semibold d-block">Due in 12 Days</span>
						</div>
						<!--end::Description-->
						<span class="badge badge-light-danger fs-8 fw-bold">New</span>
					</div>
					<!--end:Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center">
						<!--begin::Bullet-->
						<span class="bullet bullet-vertical h-40px bg-success"></span>
						<!--end::Bullet-->
						<!--begin::Checkbox-->
						<div class="form-check form-check-custom form-check-solid mx-5">
							<input class="form-check-input" type="checkbox" value="" />
						</div>
						<!--end::Checkbox-->
						<!--begin::Description-->
						<div class="flex-grow-1">
							<a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Customers Update</a>
							<span class="text-muted fw-semibold d-block">Due in 1 week</span>
						</div>
						<!--end::Description-->
						<span class="badge badge-light-success fs-8 fw-bold">New</span>
					</div>
					<!--end:Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end:List Widget 3-->
		</div>
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-8">
		<div class="col-xl-4">
			<!--begin::List Widget 4-->
			<div class="card card-xl-stretch mb-xl-8">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-dark">Trends</span>
						<span class="text-muted mt-1 fw-semibold fs-7">Latest tech trends</span>
					</h3>
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-5">
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label">
								<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Top Authors</a>
								<span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
							</div>
							<span class="badge badge-light fw-bold my-2">+82$</span>
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label">
								<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Popular Authors</a>
								<span class="text-muted fw-semibold d-block fs-7">Randy, Steve, Mike</span>
							</div>
							<span class="badge badge-light fw-bold my-2">+280$</span>
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label">
								<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">New Users</a>
								<span class="text-muted fw-semibold d-block fs-7">John, Pat, Jimmy</span>
							</div>
							<span class="badge badge-light fw-bold my-2">+4500$</span>
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label">
								<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Active Customers</a>
								<span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
							</div>
							<span class="badge badge-light fw-bold my-2">+686$</span>
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label">
								<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Bestseller Theme</a>
								<span class="text-muted fw-semibold d-block fs-7">Disco, Retro, Sports</span>
							</div>
							<span class="badge badge-light fw-bold my-2">+726$</span>
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-5">
							<span class="symbol-label">
								<img src="assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="" />
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Fox Broker App</a>
								<span class="text-muted fw-semibold d-block fs-7">Finance, Corporate, Apps</span>
							</div>
							<span class="badge badge-light fw-bold my-2">+145$</span>
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::List Widget 4-->
		</div>
		<div class="col-xl-4">
			<!--begin::List Widget 5-->
			<div class="card card-xl-stretch mb-xl-8">
				<!--begin::Header-->
				<div class="card-header align-items-center border-0 mt-4">
					<h3 class="card-title align-items-start flex-column">
						<span class="fw-bold mb-2 text-dark">Activities</span>
						<span class="text-muted fw-semibold fs-7">890,344 Sales</span>
					</h3>
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09a92113e">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09a92113e" data-allow-clear="true">
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
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-5">
					<!--begin::Timeline-->
					<div class="timeline-label">
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-warning fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-success fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Content-->
							<div class="timeline-content d-flex">
								<span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
							</div>
							<!--end::Content-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-danger fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Desc-->
							<div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
							<a href="#" class="text-primary">USD 700</a>. to ESL</div>
							<!--end::Desc-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-primary fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-danger fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Desc-->
							<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
							<a href="#" class="text-primary">#XF-2356</a>.</div>
							<!--end::Desc-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-primary fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-danger fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Desc-->
							<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
							<a href="#" class="text-primary">#XF-2356</a>.</div>
							<!--end::Desc-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item mb-9">
							<!--begin::Label-->
							<div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-success fs-1"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Timeline-->
				</div>
				<!--end: Card Body-->
			</div>
			<!--end: List Widget 5-->
		</div>
		<div class="col-xl-4">
			<!--begin::List Widget 6-->
			<div class="card card-xl-stretch mb-5 mb-xl-8">
				<!--begin::Header-->
				<div class="card-header border-0">
					<h3 class="card-title fw-bold text-dark">Notifications</h3>
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-0">
					<!--begin::Item-->
					<div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
						<span class="svg-icon svg-icon-warning svg-icon-1 me-5">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
								<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<!--begin::Title-->
						<div class="flex-grow-1 me-2">
							<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
							<span class="text-muted fw-semibold d-block">Due in 2 Days</span>
						</div>
						<!--end::Title-->
						<!--begin::Lable-->
						<span class="fw-bold text-warning py-1">+28%</span>
						<!--end::Lable-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
						<span class="svg-icon svg-icon-success svg-icon-1 me-5">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
								<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<!--begin::Title-->
						<div class="flex-grow-1 me-2">
							<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
							<span class="text-muted fw-semibold d-block">Due in 2 Days</span>
						</div>
						<!--end::Title-->
						<!--begin::Lable-->
						<span class="fw-bold text-success py-1">+50%</span>
						<!--end::Lable-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
						<span class="svg-icon svg-icon-danger svg-icon-1 me-5">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
								<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<!--begin::Title-->
						<div class="flex-grow-1 me-2">
							<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Rebrand strategy planning</a>
							<span class="text-muted fw-semibold d-block">Due in 5 Days</span>
						</div>
						<!--end::Title-->
						<!--begin::Lable-->
						<span class="fw-bold text-danger py-1">-27%</span>
						<!--end::Lable-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center bg-light-info rounded p-5">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
						<span class="svg-icon svg-icon-info svg-icon-1 me-5">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
								<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<!--begin::Title-->
						<div class="flex-grow-1 me-2">
							<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Product goals strategy</a>
							<span class="text-muted fw-semibold d-block">Due in 7 Days</span>
						</div>
						<!--end::Title-->
						<!--begin::Lable-->
						<span class="fw-bold text-info py-1">+8%</span>
						<!--end::Lable-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::List Widget 6-->
		</div>
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-8">
		<div class="col-xl-6">
			<!--begin::List Widget 7-->
			<div class="card card-xl-stretch mb-xl-8">
				<!--begin::Header-->
				<div class="card-header align-items-center border-0 mt-4">
					<h3 class="card-title align-items-start flex-column">
						<span class="fw-bold text-dark">Latest Media</span>
						<span class="text-muted mt-1 fw-semibold fs-7">Articles and publications</span>
					</h3>
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09a922413">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09a922413" data-allow-clear="true">
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
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-3">
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 me-4">
							<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-20.jpg')"></div>
						</div>
						<!--end::Symbol-->
						<!--begin::Title-->
						<div class="d-flex flex-row-fluid flex-wrap align-items-center">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Cup & Green</a>
								<span class="text-muted fw-semibold d-block pt-1">Size: 87KB</span>
							</div>
							<span class="badge badge-light-success fs-8 fw-bold my-2">Approved</span>
						</div>
						<!--end::Title-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 me-4">
							<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-19.jpg')"></div>
						</div>
						<!--end::Symbol-->
						<!--begin::Title-->
						<div class="d-flex flex-row-fluid flex-wrap align-items-center">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Yellow Background</a>
								<span class="text-muted fw-semibold d-block pt-1">Size: 1.2MB</span>
							</div>
							<span class="badge badge-light-warning fs-8 fw-bold my-2">In Progress</span>
						</div>
						<!--end::Title-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 me-4">
							<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-25.jpg')"></div>
						</div>
						<!--end::Symbol-->
						<!--begin::Title-->
						<div class="d-flex flex-row-fluid flex-wrap align-items-center">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Nike & Blue</a>
								<span class="text-muted fw-semibold d-block pt-1">Size: 87KB</span>
							</div>
							<span class="badge badge-light-success fs-8 fw-bold my-2">Success</span>
						</div>
						<!--end::Title-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 me-4">
							<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-24.jpg')"></div>
						</div>
						<!--end::Symbol-->
						<!--begin::Title-->
						<div class="d-flex flex-row-fluid flex-wrap align-items-center">
							<div class="flex-grow-1 me-2">
								<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Red Boots</a>
								<span class="text-muted fw-semibold d-block pt-1">Size: 345KB</span>
							</div>
							<span class="badge badge-light-danger fs-8 fw-bold my-2">Rejected</span>
						</div>
						<!--end::Title-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::List Widget 7-->
		</div>
		<div class="col-xl-6">
			<!--begin::List Widget 8-->
			<div class="card card-xl-stretch mb-5 mb-xl-8">
				<!--begin::Header-->
				<div class="card-header align-items-center border-0 mt-4">
					<h3 class="card-title align-items-start flex-column">
						<span class="fw-bold text-dark">Latest Products</span>
						<span class="text-muted mt-1 fw-semibold fs-7">Gifts and more</span>
					</h3>
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-3">
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 me-4">
							<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-17.jpg')"></div>
						</div>
						<!--end::Symbol-->
						<!--begin::Content-->
						<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
							<!--begin::Title-->
							<div class="flex-grow-1 my-lg-0 my-2 me-2">
								<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Cup & Green</a>
								<span class="text-muted fw-semibold d-block pt-1">Visually stunning</span>
							</div>
							<!--end::Title-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<div class="me-6">
									<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
									<span class="text-gray-800 fw-bold">4.2</span>
								</div>
								<a href="#" class="btn btn-icon btn-light btn-sm border-0">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-primary">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 me-4">
							<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-10.jpg')"></div>
						</div>
						<!--end::Symbol-->
						<!--begin::Content-->
						<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
							<!--begin::Title-->
							<div class="flex-grow-1 my-lg-0 my-2 me-2">
								<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Pink Patterns</a>
								<span class="text-muted fw-semibold d-block pt-1">Feminine all around</span>
							</div>
							<!--end::Title-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<div class="me-6">
									<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
									<span class="text-gray-800 fw-bold">5.0</span>
								</div>
								<a href="#" class="btn btn-icon btn-light btn-sm border-0">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-primary">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 me-4">
							<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-1.jpg')"></div>
						</div>
						<!--end::Symbol-->
						<!--begin::Content-->
						<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
							<!--begin::Title-->
							<div class="flex-grow-1 my-lg-0 my-2 me-2">
								<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstract Art</a>
								<span class="text-muted fw-semibold d-block pt-1">The will to capture readers</span>
							</div>
							<!--end::Title-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<div class="me-6">
									<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
									<span class="text-gray-800 fw-bold">5.7</span>
								</div>
								<a href="#" class="btn btn-icon btn-light btn-sm border-0">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-primary">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-sm-center">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 me-4">
							<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-9.jpg')"></div>
						</div>
						<!--end::Symbol-->
						<!--begin::Content-->
						<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
							<!--begin::Title-->
							<div class="flex-grow-1 my-lg-0 my-2 me-2">
								<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Desserts platter</a>
								<span class="text-muted fw-semibold d-block pt-1">Food trends & inspirations</span>
							</div>
							<!--end::Title-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<div class="me-6">
									<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
									<span class="text-gray-800 fw-bold">3.7</span>
								</div>
								<a href="#" class="btn btn-icon btn-light btn-sm border-0">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-primary">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::List Widget 8-->
		</div>
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-8">
		<div class="col-xl-6">
			<!--begin::List Widget 9-->
			<div class="card card-xl-stretch mb-5 mb-xl-8">
				<!--begin::Header-->
				<div class="card-header align-items-center border-0 mt-3">
					<h3 class="card-title align-items-start flex-column">
						<span class="fw-bold text-dark fs-3">My Competitors</span>
						<span class="text-gray-400 mt-2 fw-semibold fs-6">More than 400+ new members</span>
					</h3>
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
							<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
							<span class="svg-icon svg-icon-3 svg-icon-primary">
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
						<!--begin::Menu 2-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mb-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Ticket</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Customer</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
								<!--begin::Menu item-->
								<a href="#" class="menu-link px-3">
									<span class="menu-title">New Group</span>
									<span class="menu-arrow"></span>
								</a>
								<!--end::Menu item-->
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Admin Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Staff Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Member Group</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mt-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content px-3 py-3">
									<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
								</div>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 2-->
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-5">
					<!--begin::Item-->
					<div class="d-flex mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
							<img src="assets/media/stock/600x400/img-3.jpg" class="mw-100" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
							<!--begin::Title-->
							<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
								<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Cup & Green</a>
								<span class="text-gray-400 fw-semibold fs-7 my-1">Study highway types</span>
								<span class="text-gray-400 fw-semibold fs-7">By:
								<a href="#" class="text-primary fw-bold">CoreAd</a></span>
							</div>
							<!--end::Title-->
							<!--begin::Info-->
							<div class="text-end py-lg-0 py-2">
								<span class="text-gray-800 fw-bolder fs-3">24,900</span>
								<span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
							<img src="assets/media/stock/600x400/img-4.jpg" class="mw-100" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
							<!--begin::Title-->
							<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
								<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Yellow Hearts</a>
								<span class="text-gray-400 fw-semibold fs-7 my-1">Study highway types</span>
								<span class="text-gray-400 fw-semibold fs-7">By:
								<a href="#" class="text-primary fw-bold">KeenThemes</a></span>
							</div>
							<!--end::Title-->
							<!--begin::Info-->
							<div class="text-end py-lg-0 py-2">
								<span class="text-gray-800 fw-bolder fs-3">70,380</span>
								<span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
							<img src="assets/media/stock/600x400/img-5.jpg" class="mw-100" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
							<!--begin::Title-->
							<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
								<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Nike & Blue</a>
								<span class="text-gray-400 fw-semibold fs-7 my-1">Study highway types</span>
								<span class="text-gray-400 fw-semibold fs-7">By:
								<a href="#" class="text-primary fw-bold">Invision Inc.</a></span>
							</div>
							<!--end::Title-->
							<!--begin::Info-->
							<div class="text-end py-lg-0 py-2">
								<span class="text-gray-800 fw-bolder fs-3">7,200</span>
								<span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex mb-7">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
							<img src="assets/media/stock/600x400/img-6.jpg" class="mw-100" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
							<!--begin::Title-->
							<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
								<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Red Boots</a>
								<span class="text-gray-400 fw-semibold fs-7 my-1">Study highway types</span>
								<span class="text-gray-400 fw-semibold fs-7">By:
								<a href="#" class="text-primary fw-bold">Figma Studio</a></span>
							</div>
							<!--end::Title-->
							<!--begin::Info-->
							<div class="text-end py-lg-0 py-2">
								<span class="text-gray-800 fw-bolder fs-3">36,450</span>
								<span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex">
						<!--begin::Symbol-->
						<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
							<img src="assets/media/stock/600x400/img-7.jpg" class="mw-100" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
							<!--begin::Title-->
							<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
								<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Desserts platter</a>
								<span class="text-gray-400 fw-semibold fs-7 my-1">Food trends & reviews</span>
								<span class="text-gray-400 fw-semibold fs-7">By:
								<a href="#" class="text-primary fw-bold">Figma Studio</a></span>
							</div>
							<!--end::Title-->
							<!--begin::Info-->
							<div class="text-end py-lg-0 py-2">
								<span class="text-gray-800 fw-bolder fs-3">64,753</span>
								<span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::List Widget 9-->
		</div>
	</div>
	<!--end::Row-->
</div>
@endsection
