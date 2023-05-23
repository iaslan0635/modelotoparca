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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">My Balance: 37,045$</h1>
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
					<li class="breadcrumb-item text-muted">Dashboards</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Secondary button-->
				<a href="admin/apps/subscriptions/list" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary">My Subscriptions</a>
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet">Top Up</a>
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
			<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
				<!--begin::Col-->
				<div class="col-xxl-8">
					<!--begin::Row-->
					<div class="row g-5 g-xl-10">
						<!--begin::Col-->
						<div class="col-md-4">
							<!--begin::Card widget 11-->
							<div class="card card-flush h-xl-100" style="background-color: #F6E5CA">
								<!--begin::Header-->
								<div class="card-header flex-nowrap pt-5">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold fs-4 text-gray-800">Bitcoin</span>
										<span class="mt-1 fw-semibold fs-7" style="color:">36,668 USD for 1 BTC</span>
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Menu-->
										<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-1">
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
								<div class="card-body text-center pt-5">
									<!--begin::Image-->
									<img src="assets/media/svg/shapes/bitcoin.svg" class="h-125px mb-5" alt="" />
									<!--end::Image-->
									<!--begin::Section-->
									<div class="text-start">
										<span class="d-block fw-bold fs-1 text-gray-800">0.44554576 BTC</span>
										<span class="mt-1 fw-semibold fs-3" style="color:">19,335,45 USD</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Card widget 11-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4">
							<!--begin::Card widget 11-->
							<div class="card card-flush h-xl-100" style="background-color: #F3D6EF">
								<!--begin::Header-->
								<div class="card-header flex-nowrap pt-5">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold fs-4 text-gray-800">Etherium</span>
										<span class="mt-1 fw-semibold fs-7" style="color:">325,035 USD for 1 ETH</span>
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Menu-->
										<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-1">
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
								<div class="card-body text-center pt-5">
									<!--begin::Image-->
									<img src="assets/media/svg/shapes/ethereum.svg" class="h-125px mb-5" alt="" />
									<!--end::Image-->
									<!--begin::Section-->
									<div class="text-start">
										<span class="d-block fw-bold fs-1 text-gray-800">29.33460000 ETH</span>
										<span class="mt-1 fw-semibold fs-3" style="color:">7,336,00 USD</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Card widget 11-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4">
							<!--begin::Card widget 11-->
							<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
								<!--begin::Header-->
								<div class="card-header flex-nowrap pt-5">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold fs-4 text-gray-800">Dogecoin</span>
										<span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span>
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Menu-->
										<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-1">
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
								<div class="card-body text-center pt-5">
									<!--begin::Image-->
									<img src="assets/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
									<!--end::Image-->
									<!--begin::Section-->
									<div class="text-start">
										<span class="d-block fw-bold fs-1 text-gray-800">4703.7589 DOGE</span>
										<span class="mt-1 fw-semibold fs-3" style="color:">503,005,56 USD</span>
									</div>
									<!--end::Section-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Card widget 11-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xxl-4">
					<!--begin::Forms widget 1-->
					<div class="card h-xl-100">
						<!--begin::Header-->
						<div class="card-header position-relative min-h-50px p-0 border-bottom-2">
							<!--begin::Nav-->
							<ul class="nav nav-pills nav-pills-custom d-flex position-relative w-100">
								<!--begin::Item-->
								<li class="nav-item mx-0 p-0 w-50">
									<!--begin::Link-->
									<a class="nav-link btn btn-color-muted active border-0 h-100 px-0" data-bs-toggle="pill" id="kt_forms_widget_1_tab_1" href="#kt_forms_widget_1_tab_content_1">
										<!--begin::Subtitle-->
										<span class="nav-text fw-bold fs-4 mb-3">Buy</span>
										<!--end::Subtitle-->
										<!--begin::Bullet-->
										<span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
										<!--end::Bullet-->
									</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="nav-item mx-0 px-0 w-50">
									<!--begin::Link-->
									<a class="nav-link btn btn-color-muted border-0 h-100 px-0" data-bs-toggle="pill" id="kt_forms_widget_1_tab_2" href="#kt_forms_widget_1_tab_content_2">
										<!--begin::Subtitle-->
										<span class="nav-text fw-bold fs-4 mb-3">Sell</span>
										<!--end::Subtitle-->
										<!--begin::Bullet-->
										<span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
										<!--end::Bullet-->
									</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
							</ul>
							<!--end::Nav-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Tab Content-->
							<div class="tab-content">
								<!--begin::Tap pane-->
								<div class="tab-pane fade active show" id="kt_forms_widget_1_tab_content_1">
									<!--begin::Input group-->
									<div class="form-floating border border-gray-300 rounded mb-7">
										<select class="form-select form-select-transparent" id="kt_forms_widget_1_select_1">
											<option></option>
											<option value="0" data-kt-select2-icon="assets/media/svg/coins/bitcoin.svg" selected="selected">Bitcoin/BTC</option>
											<option value="1" data-kt-select2-icon="assets/media/svg/coins/ethereum.svg">Ethereum/ETH</option>
											<option value="2" data-kt-select2-icon="assets/media/svg/coins/filecoin.svg">Filecoin/FLE</option>
											<option value="3" data-kt-select2-icon="assets/media/svg/coins/chainlink.svg">Chainlink/CIN</option>
											<option value="4" data-kt-select2-icon="assets/media/svg/coins/binance.svg">Binance/BCN</option>
										</select>
										<label for="floatingInputValue">Coin Name</label>
									</div>
									<!--end::Input group-->
									<!--begin::Row-->
									<div class="row mb-7">
										<!--begin::Col-->
										<div class="col-6">
											<!--begin::Input group-->
											<div class="form-floating">
												<input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$230.00" />
												<label for="floatingInputValue">Amount(USD)</label>
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-6">
											<!--begin::Input group-->
											<div class="form-floating">
												<input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$0,00000032" />
												<label for="floatingInputValue">Amount(BTC)</label>
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Action-->
									<div class="d-flex align-items-end">
										<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet" class="btn btn-primary fs-3 w-100">Make Payment</a>
									</div>
									<!--end::Action-->
								</div>
								<!--end::Tap pane-->
								<!--begin::Tap pane-->
								<div class="tab-pane fade" id="kt_forms_widget_1_tab_content_2">
									<!--begin::Input group-->
									<div class="form-floating border rounded mb-7">
										<select class="form-select form-select-transparent" id="kt_forms_widget_1_select_2">
											<option></option>
											<option value="0" data-kt-select2-icon="assets/media/svg/coins/bitcoin.svg" selected="selected">Bitcoin/BTC</option>
											<option value="1" data-kt-select2-icon="assets/media/svg/coins/ethereum.svg">Ethereum/ETH</option>
											<option value="2" data-kt-select2-icon="assets/media/svg/coins/filecoin.svg">Filecoin/FLE</option>
											<option value="3" data-kt-select2-icon="assets/media/svg/coins/chainlink.svg">Chainlink/CIN</option>
											<option value="4" data-kt-select2-icon="assets/media/svg/coins/binance.svg">Binance/BCN</option>
										</select>
										<label for="floatingInputValue">Coin Name</label>
									</div>
									<!--end::Input group-->
									<!--begin::Row-->
									<div class="row mb-7">
										<!--begin::Col-->
										<div class="col-6">
											<!--begin::Input group-->
											<div class="form-floating">
												<input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$0,0000005" />
												<label for="floatingInputValue">Amount(BTC)</label>
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-6">
											<!--begin::Input group-->
											<div class="form-floating">
												<input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$1230.00" />
												<label for="floatingInputValue">Amount(USD)</label>
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Action-->
									<div class="d-flex align-items-end">
										<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet" class="btn btn-primary fs-3 w-100">Place Offer</a>
									</div>
									<!--end::Action-->
								</div>
								<!--end::Tap pane-->
							</div>
							<!--end::Tab Content-->
						</div>
						<!--end: Card Body-->
					</div>
					<!--end::Forms widget 1-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
				<!--begin::Col-->
				<div class="col-xxl-8">
					<!--begin::Chart widget 26-->
					<div class="card card-flush overflow-hidden h-xl-100">
						<!--begin::Header-->
						<div class="card-header pt-7 mb-2">
							<!--begin::Title-->
							<h3 class="card-title text-gray-800 fw-bold">Transaction History</h3>
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
						<!--begin::Card body-->
						<div class="card-body d-flex justify-content-between flex-column pt-0 pb-1 px-0">
							<!--begin::Info-->
							<div class="px-9 mb-5">
								<!--begin::Statistics-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Currency-->
									<span class="fs-4 fw-semibold text-gray-400 align-self-start me-1">$</span>
									<!--end::Currency-->
									<!--begin::Value-->
									<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
									<!--end::Value-->
									<!--begin::Label-->
									<span class="badge badge-success fs-base">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
									<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
											<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->4.5%</span>
									<!--end::Label-->
								</div>
								<!--end::Statistics-->
								<!--begin::Description-->
								<span class="fs-6 fw-semibold text-gray-400">Transactions in April</span>
								<!--end::Description-->
							</div>
							<!--end::Info-->
							<!--begin::Chart-->
							<div id="kt_charts_widget_26" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Transactions" style="height: 300px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Chart widget 26-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xxl-4">
					<!--begin::Engage widget 1-->
					<div class="card h-md-100">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column flex-center">
							<!--begin::Heading-->
							<div class="mb-2">
								<!--begin::Title-->
								<h1 class="fw-semibold text-gray-800 text-center lh-lg">Try out our
								<br />new
								<span class="fw-bolder">Invoice Manager</span></h1>
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
								<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_account" data-bs-toggle="modal">Try Now</a>
								<!--end::Link-->
								<!--begin::Link-->
								<a class="btn btn-sm btn-light" href="admin/apps/ecommerce/sales/listing">Learn More</a>
								<!--end::Link-->
							</div>
							<!--end::Links-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Engage widget 1-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 g-xl-10">
				<!--begin::Col-->
				<div class="col-xxl-8">
					<!--begin::Tables widget 7-->
					<div class="card card-flush h-xl-100">
						<!--begin::Header-->
						<div class="card-header pt-7">
							<!--begin::Title-->
							<h4 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold text-gray-800">Latest Activity</span>
								<span class="text-gray-400 mt-1 fw-semibold fs-7">Updated 37 minutes ago</span>
							</h4>
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
						<div class="card-body py-3">
							<!--begin::Table container-->
							<div class="table-responsive">
								<!--begin::Table-->
								<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
									<!--begin::Table head-->
									<thead>
										<tr class="border-bottom-0">
											<th class="p-0 w-50px"></th>
											<th class="p-0 min-w-175px"></th>
											<th class="p-0 min-w-175px"></th>
											<th class="p-0 min-w-150px"></th>
											<th class="p-0 min-w-150px"></th>
											<th class="p-0 min-w-50px"></th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody>
										<tr>
											<td>
												<div class="symbol symbol-40px">
													<span class="symbol-label bg-light-info">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-info">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z" fill="currentColor" />
																<path opacity="0.3" d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
											</td>
											<td class="ps-0">
												<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Insurance</a>
												<span class="text-muted fw-semibold d-block fs-7">Personal Health</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">BTC Wallet</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">23 Jan, 22</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">-0.0024 BTC</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="symbol symbol-40px">
													<span class="symbol-label bg-light-success">
														<!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="currentColor" />
																<path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
											</td>
											<td class="ps-0">
												<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
												<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">ETH Wallet</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">04 Feb, 22</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">-0.346 ETH</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="symbol symbol-40px">
													<span class="symbol-label bg-light-danger">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs036.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-danger">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M22 12C22 12.2 22 12.5 22 12.7L19.5 10.2L16.9 12.8C16.9 12.5 17 12.3 17 12C17 9.5 15.2 7.50001 12.8 7.10001L10.2 4.5L12.7 2C17.9 2.4 22 6.7 22 12ZM11.2 16.9C8.80001 16.5 7 14.5 7 12C7 11.7 7.00001 11.5 7.10001 11.2L4.5 13.8L2 11.3C2 11.5 2 11.8 2 12C2 17.3 6.09999 21.6 11.3 22L13.8 19.5L11.2 16.9Z" fill="currentColor" />
																<path opacity="0.3" d="M22 12.7C21.6 17.9 17.3 22 12 22C11.8 22 11.5 22 11.3 22L13.8 19.5L11.2 16.9C11.5 16.9 11.7 17 12 17C14.5 17 16.5 15.2 16.9 12.8L19.5 10.2L22 12.7ZM10.2 4.5L12.7 2C12.5 2 12.2 2 12 2C6.7 2 2.4 6.1 2 11.3L4.5 13.8L7.10001 11.2C7.50001 8.8 9.5 7 12 7C12.3 7 12.5 7.00001 12.8 7.10001L10.2 4.5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
											</td>
											<td class="ps-0">
												<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
												<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">BTC Wallet</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">18 Feb, 22</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">-0.00081 BTC</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="symbol symbol-40px">
													<span class="symbol-label bg-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs020.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-primary">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="currentColor" />
																<path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
											</td>
											<td class="ps-0">
												<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
												<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">DOGE Wallet</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">01 Apr, 22</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">-456.34 DOGE</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="symbol symbol-40px">
													<span class="symbol-label bg-light-warning">
														<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-warning">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="currentColor" />
																<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
											</td>
											<td class="ps-0">
												<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
												<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">BTC Wallet</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">26 May, 22</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
											</td>
											<td>
												<span class="text-dark fw-bold d-block fs-6">-0.000039 BTC</span>
												<span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
											</td>
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</td>
										</tr>
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--begin::Body-->
					</div>
					<!--end::Tables widget 7-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xxl-4">
					<!--begin::List widget 22-->
					<div class="card card-flush h-xl-100">
						<!--begin::Header-->
						<div class="card-header pt-5">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold text-gray-800">Mining Status</span>
								<span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
							</h3>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<a href="#" class="btn btn-sm btn-light">All Courses</a>
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Item-->
							<div class="d-flex flex-stack">
								<!--begin::Section-->
								<div class="d-flex align-items-center me-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-40px me-3">
										<span class="symbol-label bg-light-info">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
											<span class="svg-icon svg-icon-2x svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z" fill="currentColor" />
													<path opacity="0.3" d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Content-->
									<div class="me-5">
										<!--begin::Title-->
										<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">GPUs mining</a>
										<!--end::Title-->
										<!--begin::Desc-->
										<span class="fw-semibold fs-7 d-block text-start text-success ps-0">Running</span>
										<!--end::Desc-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--begin::Wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Info-->
									<div class="d-flex flex-center">
										<!--begin::Action-->
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
										</div>
										<!--end::Action-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-4"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="d-flex flex-stack">
								<!--begin::Section-->
								<div class="d-flex align-items-center me-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-40px me-3">
										<span class="symbol-label bg-light-success">
											<!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
											<span class="svg-icon svg-icon-2x svg-icon-success">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="currentColor" />
													<path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Content-->
									<div class="me-5">
										<!--begin::Title-->
										<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">GPUs mining</a>
										<!--end::Title-->
										<!--begin::Desc-->
										<span class="fw-semibold fs-7 d-block text-start text-success ps-0">Running</span>
										<!--end::Desc-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--begin::Wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Info-->
									<div class="d-flex flex-center">
										<!--begin::Action-->
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
										</div>
										<!--end::Action-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-4"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="d-flex flex-stack">
								<!--begin::Section-->
								<div class="d-flex align-items-center me-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-40px me-3">
										<span class="symbol-label bg-light-danger">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs036.svg-->
											<span class="svg-icon svg-icon-2x svg-icon-danger">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M22 12C22 12.2 22 12.5 22 12.7L19.5 10.2L16.9 12.8C16.9 12.5 17 12.3 17 12C17 9.5 15.2 7.50001 12.8 7.10001L10.2 4.5L12.7 2C17.9 2.4 22 6.7 22 12ZM11.2 16.9C8.80001 16.5 7 14.5 7 12C7 11.7 7.00001 11.5 7.10001 11.2L4.5 13.8L2 11.3C2 11.5 2 11.8 2 12C2 17.3 6.09999 21.6 11.3 22L13.8 19.5L11.2 16.9Z" fill="currentColor" />
													<path opacity="0.3" d="M22 12.7C21.6 17.9 17.3 22 12 22C11.8 22 11.5 22 11.3 22L13.8 19.5L11.2 16.9C11.5 16.9 11.7 17 12 17C14.5 17 16.5 15.2 16.9 12.8L19.5 10.2L22 12.7ZM10.2 4.5L12.7 2C12.5 2 12.2 2 12 2C6.7 2 2.4 6.1 2 11.3L4.5 13.8L7.10001 11.2C7.50001 8.8 9.5 7 12 7C12.3 7 12.5 7.00001 12.8 7.10001L10.2 4.5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Content-->
									<div class="me-5">
										<!--begin::Title-->
										<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Est. daily USD</a>
										<!--end::Title-->
										<!--begin::Desc-->
										<span class="fw-semibold fs-7 d-block text-start text-gray-400 ps-0">$48.02</span>
										<!--end::Desc-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--begin::Wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Info-->
									<div class="d-flex flex-center">
										<!--begin::Action-->
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
										<!--end::Action-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Item-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-4"></div>
							<!--end::Separator-->
							<!--begin::Item-->
							<div class="d-flex flex-stack">
								<!--begin::Section-->
								<div class="d-flex align-items-center me-5">
									<!--begin::Symbol-->
									<div class="symbol symbol-40px me-3">
										<span class="symbol-label bg-light-primary">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs020.svg-->
											<span class="svg-icon svg-icon-2x svg-icon-primary">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="currentColor" />
													<path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Content-->
									<div class="me-5">
										<!--begin::Title-->
										<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Team Members</a>
										<!--end::Title-->
										<!--begin::Desc-->
										<span class="fw-semibold fs-7 d-block text-start text-gray-400 ps-0">6</span>
										<!--end::Desc-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Section-->
								<!--begin::Wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Info-->
									<div class="d-flex flex-center">
										<!--begin::Action-->
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
										<!--end::Action-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="card-footer mx-auto pt-0">
							<!--begin::Actions-->
							<a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">Add PC</a>
							<a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Buy GPU</a>
							<!--end::Actions-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::List widget 22-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('styles')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
@endpush
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
@endpush
@push('custom_scripts')
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/top-up-wallet.js"></script>
<script src="assets/js/custom/utilities/modals/create-account.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
