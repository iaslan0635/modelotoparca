@extends('admin.layout')
@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
	<!--begin::Row-->
	<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
		<!--begin::Col-->
		<div class="col-xxl-6">
			<!--begin::Card widget 15-->
			<div class="card card-flush h-xl-100">
				<!--begin::Body-->
				<div class="card-body py-9">
					<!--begin::Row-->
					<div class="row gx-9 h-100">
						<!--begin::Col-->
						<div class="col-sm-6 mb-10 mb-sm-0">
							<!--begin::Overlay-->
							<a class="d-block overlay h-100" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-42.jpg">
								<!--begin::Image-->
								<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-200px h-100" style="background-image:url('assets/media/stock/600x600/img-42.jpg')"></div>
								<!--end::Image-->
								<!--begin::Action-->
								<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
									<i class="bi bi-eye-fill fs-2x text-white"></i>
								</div>
								<!--end::Action-->
							</a>
							<!--end::Overlay-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-sm-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column h-100">
								<!--begin::Header-->
								<div class="mb-7">
									<!--begin::Title-->
									<div class="mb-6">
										<span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">NFT ID: 34356776</span>
										<a href="/admin/apps/projects/users.html" class="text-gray-800 text-hover-primary fs-1 fw-bold">California Art</a>
									</div>
									<!--end::Title-->
									<!--begin::Items-->
									<div class="d-flex align-items-center flex-wrap d-grid gap-2">
										<!--begin::Item-->
										<div class="d-flex align-items-center me-5 me-xl-13">
											<!--begin::Symbol-->
											<div class="symbol symbol-30px symbol-circle me-3">
												<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
											</div>
											<!--end::Symbol-->
											<!--begin::Info-->
											<div class="m-0">
												<span class="fw-semibold text-gray-400 d-block fs-8">Creator</span>
												<a href="/admin/apps/projects/users.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-30px symbol-circle me-3">
												<span class="symbol-label bg-success">
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-white">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
															<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Info-->
											<div class="m-0">
												<span class="fw-semibold text-gray-400 d-block fs-8">Instant Price</span>
												<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-7">4.2 ETH</a>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Items-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="d-flex flex-column border border-1 border-gray-300 text-center pt-5 pb-7 mb-8 card-rounded">
									<span class="fw-semibold text-gray-600 fs-7 pb-1">Last Bid</span>
									<span class="fw-bold text-gray-800 fs-2hx lh-1 pb-1">2.48 ETH</span>
									<span class="fw-bold text-gray-600 fs-4 pb-5">$6,047.84</span>
									<span class="fw-semibold text-gray-600 fs-7 pb-1">Ending in</span>
									<span class="fw-bold text-gray-800 fs-3">06h 52m 47s</span>
								</div>
								<!--end::Body-->
								<!--begin::Footer-->
								<div class="d-flex flex-stack mt-auto bd-highlight">
									<!--begin::Actions-->
									<a href="#" class="btn btn-primary btn-sm flex-shrink-0 me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_bidding">Place a Bid</a>
									<a href="#" class="btn btn-light btn-sm flex-shrink-0" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">View Item</a>
									<!--end::Actions-->
								</div>
								<!--end::Footer-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Card widget 15-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-sm-6 col-xxl-3">
			<!--begin::Card widget 14-->
			<div class="card card-flush h-xl-100">
				<!--begin::Body-->
				<div class="card-body text-center pb-5">
					<!--begin::Overlay-->
					<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-39.jpg">
						<!--begin::Image-->
						<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-39.jpg"></div>
						<!--end::Image-->
						<!--begin::Action-->
						<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
							<i class="bi bi-eye-fill fs-2x text-white"></i>
						</div>
						<!--end::Action-->
					</a>
					<!--end::Overlay-->
					<!--begin::Info-->
					<div class="d-flex align-items-end flex-stack mb-1">
						<!--begin::Title-->
						<div class="text-start">
							<span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Wavy Curved Art</span>
							<span class="text-gray-400 mt-1 fw-bold fs-6">Last Bid: 1.07 ETH</span>
						</div>
						<!--end::Title-->
						<!--begin::Total-->
						<span class="text-gray-600 text-end fw-bold fs-6">$2,630</span>
						<!--end::Total-->
					</div>
					<!--end::Info-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer d-flex flex-stack pt-0">
					<!--begin::Link-->
					<a class="btn btn-sm btn-primary flex-shrink-0 me-2" data-bs-target="#kt_modal_bidding" data-bs-toggle="modal">Place a Bid</a>
					<!--end::Link-->
					<!--begin::Link-->
					<a class="btn btn-sm btn-light flex-shrink-0" href="/admin/apps/ecommerce/sales/listing.html">View Item</a>
					<!--end::Link-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Card widget 14-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-sm-6 col-xxl-3">
			<!--begin::Card widget 14-->
			<div class="card card-flush h-xl-100">
				<!--begin::Body-->
				<div class="card-body text-center pb-5">
					<!--begin::Overlay-->
					<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-47.jpg">
						<!--begin::Image-->
						<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('assets/media/stock/600x600/img-47.jpg"></div>
						<!--end::Image-->
						<!--begin::Action-->
						<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
							<i class="bi bi-eye-fill fs-2x text-white"></i>
						</div>
						<!--end::Action-->
					</a>
					<!--end::Overlay-->
					<!--begin::Info-->
					<div class="d-flex align-items-end flex-stack mb-1">
						<!--begin::Title-->
						<div class="text-start">
							<span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Happy Kitty Art</span>
							<span class="text-gray-400 mt-1 fw-bold fs-6">Last Bid: 7.83 ETH</span>
						</div>
						<!--end::Title-->
						<!--begin::Total-->
						<span class="text-gray-600 text-end fw-bold fs-6">$17,035</span>
						<!--end::Total-->
					</div>
					<!--end::Info-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer d-flex flex-stack pt-0">
					<!--begin::Link-->
					<a class="btn btn-sm btn-primary flex-shrink-0 me-2" data-bs-target="#kt_modal_bidding" data-bs-toggle="modal">Place a Bid</a>
					<!--end::Link-->
					<!--begin::Link-->
					<a class="btn btn-sm btn-light flex-shrink-0" href="/admin/apps/ecommerce/sales/listing.html">View Item</a>
					<!--end::Link-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Card widget 14-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
		<!--begin::Col-->
		<div class="col-xl-4">
			<!--begin::Chart Widget 33-->
			<div class="card card-flush h-xl-100">
				<!--begin::Header-->
				<div class="card-header pt-5 mb-6">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column">
						<!--begin::Statistics-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Currency-->
							<span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
							<!--end::Currency-->
							<!--begin::Value-->
							<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
							<!--end::Value-->
							<!--begin::Label-->
							<span class="badge badge-light-success fs-base">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
							<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
									<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->9.2%</span>
							<!--end::Label-->
						</div>
						<!--end::Statistics-->
						<!--begin::Description-->
						<span class="fs-6 fw-semibold text-gray-400">Etherium rate</span>
						<!--end::Description-->
					</h3>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
							<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
							<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
									<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
									<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
									<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
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
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body py-0 px-0">
					<!--begin::Nav-->
					<ul class="nav d-flex justify-content-between mb-3 mx-9">
						<!--begin::Item-->
						<li class="nav-item mb-3">
							<!--begin::Link-->
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_33_tab_1" href="#kt_charts_widget_33_tab_content_1">1d</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item mb-3">
							<!--begin::Link-->
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_33_tab_2" href="#kt_charts_widget_33_tab_content_2">5d</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item mb-3">
							<!--begin::Link-->
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_33_tab_3" href="#kt_charts_widget_33_tab_content_3">1m</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item mb-3">
							<!--begin::Link-->
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_33_tab_4" href="#kt_charts_widget_33_tab_content_4">6m</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item mb-3">
							<!--begin::Link-->
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_33_tab_5" href="#kt_charts_widget_33_tab_content_5">1y</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
					</ul>
					<!--end::Nav-->
					<!--begin::Tab Content-->
					<div class="tab-content mt-n6">
						<!--begin::Tap pane-->
						<div class="tab-pane fade active show" id="kt_charts_widget_33_tab_content_1">
							<!--begin::Chart-->
							<div id="kt_charts_widget_33_chart_1" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
							<!--end::Chart-->
							<!--begin::Table container-->
							<div class="table-responsive mx-9 mt-n6">
								<!--begin::Table-->
								<table class="table align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr>
											<th class="min-w-100px"></th>
											<th class="min-w-100px text-end pe-0"></th>
											<th class="text-end min-w-50px"></th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-danger">-139.34</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-success">+576.24</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-success">+124.03</span>
											</td>
										</tr>
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--end::Tap pane-->
						<!--begin::Tap pane-->
						<div class="tab-pane fade" id="kt_charts_widget_33_tab_content_2">
							<!--begin::Chart-->
							<div id="kt_charts_widget_33_chart_2" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
							<!--end::Chart-->
							<!--begin::Table container-->
							<div class="table-responsive mx-9 mt-n6">
								<!--begin::Table-->
								<table class="table align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr>
											<th class="min-w-100px"></th>
											<th class="min-w-100px text-end pe-0"></th>
											<th class="text-end min-w-50px"></th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-success">+231.01</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-primary">+233.07</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,145.55</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-danger">+134.06</span>
											</td>
										</tr>
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--end::Tap pane-->
						<!--begin::Tap pane-->
						<div class="tab-pane fade" id="kt_charts_widget_33_tab_content_3">
							<!--begin::Chart-->
							<div id="kt_charts_widget_33_chart_3" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
							<!--end::Chart-->
							<!--begin::Table container-->
							<div class="table-responsive mx-9 mt-n6">
								<!--begin::Table-->
								<table class="table align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr>
											<th class="min-w-100px"></th>
											<th class="min-w-100px text-end pe-0"></th>
											<th class="text-end min-w-50px"></th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">12:40 AM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,346.25</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-warning">+134.57</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">11:30 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$1,565.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-danger">+155.03</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">4:25 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-success">+124.03</span>
											</td>
										</tr>
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--end::Tap pane-->
						<!--begin::Tap pane-->
						<div class="tab-pane fade" id="kt_charts_widget_33_tab_content_4">
							<!--begin::Chart-->
							<div id="kt_charts_widget_33_chart_4" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
							<!--end::Chart-->
							<!--begin::Table container-->
							<div class="table-responsive mx-9 mt-n6">
								<!--begin::Table-->
								<table class="table align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr>
											<th class="min-w-100px"></th>
											<th class="min-w-100px text-end pe-0"></th>
											<th class="text-end min-w-50px"></th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">3:20 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-danger">+234.03</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">10:30 AM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$1,474.04</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-info">-134.03</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">1:30 AM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-primary">+124.03</span>
											</td>
										</tr>
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--end::Tap pane-->
						<!--begin::Tap pane-->
						<div class="tab-pane fade" id="kt_charts_widget_33_tab_content_5">
							<!--begin::Chart-->
							<div id="kt_charts_widget_33_chart_5" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
							<!--end::Chart-->
							<!--begin::Table container-->
							<div class="table-responsive mx-9 mt-n6">
								<!--begin::Table-->
								<table class="table align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr>
											<th class="min-w-100px"></th>
											<th class="min-w-100px text-end pe-0"></th>
											<th class="text-end min-w-50px"></th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$1,756.25</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-primary">+144.04</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-danger">+124.03</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,034.65</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-success">+184.05</span>
											</td>
										</tr>
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--end::Tap pane-->
					</div>
					<!--end::Tab Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Chart Widget 33-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-xl-8">
			<!--begin::Tables widget 12-->
			<div class="card card-flush h-xl-100">
				<!--begin::Header-->
				<div class="card-header pt-7">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-gray-800">Active Auctions</span>
						<span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
					</h3>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<a href="/admin/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin::Table container-->
					<div class="table-responsive">
						<!--begin::Table-->
						<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
							<!--begin::Table head-->
							<thead>
								<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
									<th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
									<th class="p-0 pb-3 min-w-100px text-end">OPEN PRICE</th>
									<th class="p-0 pb-3 min-w-100px text-end">YOUR OFFER</th>
									<th class="p-0 pb-3 min-w-125px text-end">RECENT OFFER</th>
									<th class="p-0 pb-3 min-w-100px text-end">TIME LEFT</th>
									<th class="p-0 pb-3 w-80px text-end">VIEW</th>
								</tr>
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-50px me-3">
												<img src="assets/media/stock/600x600/img-49.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">The Art</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Jenny Wilson</span>
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">0.054 ETH</span>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">0.089 ETH</span>
									</td>
									<td class="pe-0">
										<div class="d-flex align-items-center justify-content-end">
											<div class="symbol symbol-30px me-3">
												<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
											</div>
											<span class="text-gray-600 fw-bold d-block fs-6">0.089 ETH</span>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">1h 43m 52s</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-50px me-3">
												<img src="assets/media/stock/600x600/img-43.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Blue Bubble Art</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Guy Hawkins</span>
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">1.830 ETH</span>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">2.451 ETH</span>
									</td>
									<td class="pe-0">
										<div class="d-flex align-items-center justify-content-end">
											<div class="symbol symbol-30px me-3">
												<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
											</div>
											<span class="text-gray-600 fw-bold d-block fs-6">3.083 ETH</span>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">4h 28m 07s</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-50px me-3">
												<img src="assets/media/stock/600x600/img-46.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Color Face Art</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Wade Warren</span>
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">0.043 ETH</span>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">0.124 ETH</span>
									</td>
									<td class="pe-0">
										<div class="d-flex align-items-center justify-content-end">
											<div class="symbol symbol-30px me-3">
												<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
											</div>
											<span class="text-gray-600 fw-bold d-block fs-6">1.058 ETH</span>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">5h 09m 23s</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-50px me-3">
												<img src="assets/media/stock/600x600/img-54.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Blue to Orange Art</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Jane Cooper</span>
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">0.092 ETH</span>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">0.158 ETH</span>
									</td>
									<td class="pe-0">
										<div class="d-flex align-items-center justify-content-end">
											<div class="symbol symbol-30px me-3">
												<img src="assets/media/avatars/300-10.jpg" class="" alt="" />
											</div>
											<span class="text-gray-600 fw-bold d-block fs-6">0.403 ETH</span>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">7h 23m 16s</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-50px me-3">
												<img src="assets/media/stock/600x600/img-45.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Awesome Bird Art</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Jacob Jones</span>
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">0.824 ETH</span>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">1.072 ETH</span>
									</td>
									<td class="pe-0">
										<div class="d-flex align-items-center justify-content-end">
											<div class="symbol symbol-30px me-3">
												<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
											</div>
											<span class="text-gray-600 fw-bold d-block fs-6">1.094 ETH</span>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="text-gray-600 fw-bold fs-6">36h 18m 42s</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
							</tbody>
							<!--end::Table body-->
						</table>
					</div>
					<!--end::Table-->
				</div>
				<!--end: Card Body-->
			</div>
			<!--end::Tables widget 12-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
		<!--begin::Col-->
		<div class="col-xl-4">
			<!--begin::List widget 23-->
			<div class="card card-flush h-xl-100">
				<!--begin::Header-->
				<div class="card-header pt-7">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-gray-800">Lading Teams</span>
						<span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
					</h3>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar"></div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<!--begin::Items-->
					<div class="">
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-5">
								<!--begin::Flag-->
								<img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
								<!--end::Flag-->
								<!--begin::Content-->
								<div class="me-5">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
									<!--end::Title-->
									<!--begin::Desc-->
									<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
									<!--end::Desc-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Section-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center">
								<!--begin::Number-->
								<span class="text-gray-800 fw-bold fs-4 me-3">579</span>
								<!--end::Number-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Label-->
									<span class="badge badge-light-success fs-base">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
									<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
											<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->2.6%</span>
									<!--end::Label-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-5">
								<!--begin::Flag-->
								<img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
								<!--end::Flag-->
								<!--begin::Content-->
								<div class="me-5">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
									<!--end::Title-->
									<!--begin::Desc-->
									<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
									<!--end::Desc-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Section-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center">
								<!--begin::Number-->
								<span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
								<!--end::Number-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Label-->
									<span class="badge badge-light-danger fs-base">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
									<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
											<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->0.4%</span>
									<!--end::Label-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-5">
								<!--begin::Flag-->
								<img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
								<!--end::Flag-->
								<!--begin::Content-->
								<div class="me-5">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
									<!--end::Title-->
									<!--begin::Desc-->
									<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
									<!--end::Desc-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Section-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center">
								<!--begin::Number-->
								<span class="text-gray-800 fw-bold fs-4 me-3">794</span>
								<!--end::Number-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Label-->
									<span class="badge badge-light-success fs-base">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
									<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
											<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->0.2%</span>
									<!--end::Label-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-5">
								<!--begin::Flag-->
								<img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
								<!--end::Flag-->
								<!--begin::Content-->
								<div class="me-5">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
									<!--end::Title-->
									<!--begin::Desc-->
									<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
									<!--end::Desc-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Section-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center">
								<!--begin::Number-->
								<span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
								<!--end::Number-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Label-->
									<span class="badge badge-light-success fs-base">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
									<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
											<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->4.1%</span>
									<!--end::Label-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-5">
								<!--begin::Flag-->
								<img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
								<!--end::Flag-->
								<!--begin::Content-->
								<div class="me-5">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
									<!--end::Title-->
									<!--begin::Desc-->
									<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
									<!--end::Desc-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Section-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center">
								<!--begin::Number-->
								<span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
								<!--end::Number-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Label-->
									<span class="badge badge-light-success fs-base">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
									<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
											<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->8.3%</span>
									<!--end::Label-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-5">
								<!--begin::Flag-->
								<img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
								<!--end::Flag-->
								<!--begin::Content-->
								<div class="me-5">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
									<!--end::Title-->
									<!--begin::Desc-->
									<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
									<!--end::Desc-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Section-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center">
								<!--begin::Number-->
								<span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
								<!--end::Number-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Label-->
									<span class="badge badge-light-success fs-base">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
									<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
											<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->1.9%</span>
									<!--end::Label-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Items-->
				</div>
				<!--end: Card Body-->
			</div>
			<!--end::List widget 23-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-xl-8">
			<!--begin::Tables widget 13-->
			<div class="card card-flush h-xl-100">
				<!--begin::Header-->
				<div class="card-header pt-7">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-gray-800">Most Popular Sellers</span>
						<span class="text-gray-400 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
					</h3>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
						<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
							<!--begin::Display range-->
							<div class="text-gray-600 fw-bold">Loading date range...</div>
							<!--end::Display range-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
							<span class="svg-icon svg-icon-1 ms-2 me-0">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
									<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
									<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Daterangepicker-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-3 pb-4">
					<!--begin::Table container-->
					<div class="table-responsive">
						<!--begin::Table-->
						<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
							<!--begin::Table head-->
							<thead>
								<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
									<th class="p-0 w-200px w-xxl-450px"></th>
									<th class="p-0 min-w-150px"></th>
									<th class="p-0 min-w-125px"></th>
									<th class="p-0 min-w-125px"></th>
									<th class="p-0 w-100px"></th>
								</tr>
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol- symbol-40px me-3">
												<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="/admin/account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Zuid Area</span>
											</div>
										</div>
									</td>
									<td class="text-end">
										<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
										<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
									</td>
									<td class="text-end">
										<a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
										<span class="text-gray-400 fw-semibold d-block fs-7">Earnings</span>
									</td>
									<td class="float-end text-end border-0">
										<div class="rating">
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
										</div>
										<span class="text-gray-400 fw-semibold d-block fs-7 mt-1">Rating</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol- symbol-40px me-3">
												<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="/admin/account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Zuid Area</span>
											</div>
										</div>
									</td>
									<td class="text-end">
										<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
										<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
									</td>
									<td class="text-end">
										<a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
										<span class="text-gray-400 fw-semibold d-block fs-7">Earnings</span>
									</td>
									<td class="float-end text-end border-0">
										<div class="rating">
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
										</div>
										<span class="text-gray-400 fw-semibold d-block fs-7 mt-1">Rating</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol- symbol-40px me-3">
												<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="/admin/account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Zuid Area</span>
											</div>
										</div>
									</td>
									<td class="text-end">
										<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
										<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
									</td>
									<td class="text-end">
										<a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
										<span class="text-gray-400 fw-semibold d-block fs-7">Earnings</span>
									</td>
									<td class="float-end text-end border-0">
										<div class="rating">
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
										</div>
										<span class="text-gray-400 fw-semibold d-block fs-7 mt-1">Rating</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol- symbol-40px me-3">
												<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="/admin/account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Zuid Area</span>
											</div>
										</div>
									</td>
									<td class="text-end">
										<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
										<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
									</td>
									<td class="text-end">
										<a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
										<span class="text-gray-400 fw-semibold d-block fs-7">Earnings</span>
									</td>
									<td class="float-end text-end border-0">
										<div class="rating">
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
										</div>
										<span class="text-gray-400 fw-semibold d-block fs-7 mt-1">Rating</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol- symbol-40px me-3">
												<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
											</div>
											<div class="d-flex justify-content-start flex-column">
												<a href="/admin/account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
												<span class="text-gray-400 fw-semibold d-block fs-7">Zuid Area</span>
											</div>
										</div>
									</td>
									<td class="text-end">
										<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
										<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
									</td>
									<td class="text-end">
										<a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
										<span class="text-gray-400 fw-semibold d-block fs-7">Earnings</span>
									</td>
									<td class="float-end text-end border-0">
										<div class="rating">
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
											<div class="rating-label checked">
												<i class="bi bi-star-fill fs-6s"></i>
											</div>
										</div>
										<span class="text-gray-400 fw-semibold d-block fs-7 mt-1">Rating</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-gray-700">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</td>
								</tr>
							</tbody>
							<!--end::Table body-->
						</table>
					</div>
					<!--end::Table container-->
				</div>
				<!--end: Card Body-->
			</div>
			<!--end::Tables widget 13-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-10">
		<!--begin::Col-->
		<div class="col-xl-4">
			<!--begin::Engage widget 1-->
			<div class="card h-md-100">
				<!--begin::Body-->
				<div class="card-body d-flex flex-column flex-center">
					<!--begin::Heading-->
					<div class="mb-2">
						<!--begin::Title-->
						<h1 class="fw-semibold text-gray-800 text-center lh-lg">Have your tried
						<br />new
						<span class="fw-bolder">Invoice Manager?</span></h1>
						<!--end::Title-->
						<!--begin::Illustration-->
						<div class="py-10 text-center">
							<img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
							<img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
						</div>
						<!--end::Illustration-->
					</div>
					<!--end::Heading-->
					<!--begin::Links-->
					<div class="text-center mb-1">
						<!--begin::Link-->
						<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Try Now</a>
						<!--end::Link-->
						<!--begin::Link-->
						<a class="btn btn-sm btn-light" href="/admin/account/settings.html">Learn More</a>
						<!--end::Link-->
					</div>
					<!--end::Links-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Engage widget 1-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-xl-8">
			<!--begin::Table Widget 4-->
			<div class="card card-flush h-xl-100">
				<!--begin::Card header-->
				<div class="card-header pt-7">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-gray-800">My Sales in Details</span>
						<span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 57 orders per day</span>
					</h3>
					<!--end::Title-->
					<!--begin::Actions-->
					<div class="card-toolbar">
						<!--begin::Filters-->
						<div class="d-flex flex-stack flex-wrap gap-4">
							<!--begin::Destination-->
							<div class="d-flex align-items-center fw-bold">
								<!--begin::Label-->
								<div class="text-gray-400 fs-7 me-2">Cateogry</div>
								<!--end::Label-->
								<!--begin::Select-->
								<select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
									<option></option>
									<option value="Show All" selected="selected">Show All</option>
									<option value="a">Category A</option>
									<option value="b">Category A</option>
								</select>
								<!--end::Select-->
							</div>
							<!--end::Destination-->
							<!--begin::Status-->
							<div class="d-flex align-items-center fw-bold">
								<!--begin::Label-->
								<div class="text-gray-400 fs-7 me-2">Status</div>
								<!--end::Label-->
								<!--begin::Select-->
								<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
									<option></option>
									<option value="Show All" selected="selected">Show All</option>
									<option value="Shipped">Shipped</option>
									<option value="Confirmed">Confirmed</option>
									<option value="Rejected">Rejected</option>
									<option value="Pending">Pending</option>
								</select>
								<!--end::Select-->
							</div>
							<!--end::Status-->
							<!--begin::Search-->
							<div class="position-relative my-1">
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
							</div>
							<!--end::Search-->
						</div>
						<!--begin::Filters-->
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-2">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
								<th class="min-w-100px">Order ID</th>
								<th class="text-end min-w-100px">Created</th>
								<th class="text-end min-w-125px">Customer</th>
								<th class="text-end min-w-100px">Total</th>
								<th class="text-end min-w-100px">Profit</th>
								<th class="text-end min-w-50px">Status</th>
								<th class="text-end"></th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fw-bold text-gray-600">
							<tr data-kt-table-widget-4="subtable_template" class="d-none">
								<td colspan="2">
									<div class="d-flex align-items-center gap-3">
										<a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
											<img src="" data-kt-src-path="assets/media/stock/ecommerce/" alt="" data-kt-table-widget-4="template_image" />
										</a>
										<div class="d-flex flex-column text-muted">
											<a href="#" class="text-gray-800 text-hover-primary fw-bold" data-kt-table-widget-4="template_name">Product name</a>
											<div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
										</div>
									</div>
								</td>
								<td class="text-end">
									<div class="text-gray-800 fs-7">Cost</div>
									<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_cost">1</div>
								</td>
								<td class="text-end">
									<div class="text-gray-800 fs-7">Qty</div>
									<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_qty">1</div>
								</td>
								<td class="text-end">
									<div class="text-gray-800 fs-7">Total</div>
									<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_total">name</div>
								</td>
								<td class="text-end">
									<div class="text-gray-800 fs-7 me-3">On hand</div>
									<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_stock">32</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<a href="/admin/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
								</td>
								<td class="text-end">7 min ago</td>
								<td class="text-end">
									<a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
								</td>
								<td class="text-end">$630.00</td>
								<td class="text-end">
									<span class="text-gray-800 fw-bolder">$86.70</span>
								</td>
								<td class="text-end">
									<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
								</td>
								<td class="text-end">
									<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-off">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-on">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
								</td>
							</tr>
							<tr>
								<td>
									<a href="/admin/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
								</td>
								<td class="text-end">52 min ago</td>
								<td class="text-end">
									<a href="#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
								</td>
								<td class="text-end">$25.00</td>
								<td class="text-end">
									<span class="text-gray-800 fw-bolder">$4.20</span>
								</td>
								<td class="text-end">
									<span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
								</td>
								<td class="text-end">
									<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-off">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-on">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
								</td>
							</tr>
							<tr>
								<td>
									<a href="/admin/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
								</td>
								<td class="text-end">1 hour ago</td>
								<td class="text-end">
									<a href="#" class="text-gray-600 text-hover-primary">Robert Fox</a>
								</td>
								<td class="text-end">$1,630.00</td>
								<td class="text-end">
									<span class="text-gray-800 fw-bolder">$203.90</span>
								</td>
								<td class="text-end">
									<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
								</td>
								<td class="text-end">
									<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-off">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-on">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
								</td>
							</tr>
							<tr>
								<td>
									<a href="/admin/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
								</td>
								<td class="text-end">3 hour ago</td>
								<td class="text-end">
									<a href="#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
								</td>
								<td class="text-end">$119.00</td>
								<td class="text-end">
									<span class="text-gray-800 fw-bolder">$12.00</span>
								</td>
								<td class="text-end">
									<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
								</td>
								<td class="text-end">
									<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-off">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-on">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
								</td>
							</tr>
							<tr>
								<td>
									<a href="/admin/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
								</td>
								<td class="text-end">2 day ago</td>
								<td class="text-end">
									<a href="#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
								</td>
								<td class="text-end">$660.00</td>
								<td class="text-end">
									<span class="text-gray-800 fw-bolder">$52.26</span>
								</td>
								<td class="text-end">
									<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
								</td>
								<td class="text-end">
									<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-off">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-on">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
								</td>
							</tr>
							<tr>
								<td>
									<a href="/admin/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
								</td>
								<td class="text-end">2 day ago</td>
								<td class="text-end">
									<a href="#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
								</td>
								<td class="text-end">$290.00</td>
								<td class="text-end">
									<span class="text-gray-800 fw-bolder">$29.00</span>
								</td>
								<td class="text-end">
									<span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
								</td>
								<td class="text-end">
									<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-off">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-on">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
								</td>
							</tr>
							<tr>
								<td>
									<a href="/admin/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
								</td>
								<td class="text-end">7 min ago</td>
								<td class="text-end">
									<a href="#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
								</td>
								<td class="text-end">$590.00</td>
								<td class="text-end">
									<span class="text-gray-800 fw-bolder">$50.00</span>
								</td>
								<td class="text-end">
									<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
								</td>
								<td class="text-end">
									<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-off">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
										<span class="svg-icon svg-icon-3 m-0 toggle-on">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
								</td>
							</tr>
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Table Widget 4-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
</div>
@endsection
