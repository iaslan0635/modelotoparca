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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Licenses</h1>
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f099bb87dc">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f099bb87dc" data-allow-clear="true">
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
				<!--begin::About card-->
				<div class="card">
					<!--begin::Body-->
					<div class="card-body p-5 px-lg-19 py-lg-16">
						<!--begin::Content main-->
						<div class="mb-14">
							<!--begin::Heading-->
							<div class="mb-15">
								<!--begin::Title-->
								<h1 class="fs-2x text-dark mb-6">License Comparision</h1>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fs-5 text-gray-600 fw-semibold">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
								<!--end::Text-->
							</div>
							<!--end::Heading-->
							<!--begin::Body-->
							<!--begin::Table-->
							<div class="mb-14">
								<!--begin::Table container-->
								<div class="table-responsive">
									<!--begin::Table-->
									<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
										<!--begin::Table head-->
										<thead>
											<tr class="fw-bold fs-6 text-gray-800 text-center border-0 bg-light">
												<th class="min-w-200px rounded-start"></th>
												<th class="min-w-140px">Regular</th>
												<th class="min-w-120px">Multiple</th>
												<th class="min-w-100px rounded-end">Extended</th>
											</tr>
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody class="border-bottom border-dashed">
											<tr class="fw-semibold fs-6 text-gray-800 text-center">
												<td class="text-start ps-6 fs-4">Number of end products or domains</td>
												<td>1</td>
												<td>Unlimited</td>
												<td>1</td>
											</tr>
											<tr class="text-center">
												<td class="text-start ps-6">
													<div class="fw-semibold fs-4 text-gray-800">Free end product</div>
												</td>
												<td>
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
													<span class="svg-icon svg-icon-2x svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
															<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--SVG file not found: 0-->
												</td>
												<td>
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
													<span class="svg-icon svg-icon-2x svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
															<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--SVG file not found: 0-->
												</td>
												<td>
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
													<span class="svg-icon svg-icon-2x svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
															<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--SVG file not found: 0-->
												</td>
											</tr>
											<tr class="text-center">
												<td class="text-start ps-6">
													<div class="fw-semibold fs-4 text-gray-800">End product with paid services</div>
												</td>
												<td>
													<!--SVG file not found: 0-->
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-2x svg-icon-danger">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</td>
												<td>
													<!--SVG file not found: 0-->
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-2x svg-icon-danger">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</td>
												<td>
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
													<span class="svg-icon svg-icon-2x svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
															<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--SVG file not found: 0-->
												</td>
											</tr>
											<tr class="text-center">
												<td class="text-start ps-6">
													<div class="fw-semibold fs-4 text-gray-800">Use in derivative themes or “generators”</div>
												</td>
												<td>
													<!--SVG file not found: 0-->
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-2x svg-icon-danger">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</td>
												<td>
													<!--SVG file not found: 0-->
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-2x svg-icon-danger">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</td>
												<td>
													<!--SVG file not found: 0-->
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-2x svg-icon-danger">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</td>
											</tr>
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Table container-->
							</div>
							<!--end::Table-->
							<!--begin::Block-->
							<div class="mb-20 pb-lg-20">
								<!--begin::Title-->
								<h2 class="fw-bold text-dark mb-8">Regular License:</h2>
								<!--end::Title-->
								<!--begin::List-->
								<ul class="fs-4 fw-semibold mb-6">
									<li>
										<span class="text-gray-700">E-commerce site</span>
									</li>
									<li class="my-2">
										<span class="text-gray-700">Company business activity dashboard</span>
									</li>
									<li>
										<span class="text-gray-700">Customer support center</span>
									</li>
								</ul>
								<!--end::List-->
								<!--begin::Text-->
								<div class="fs-4 fw-semibold text-gray-700 mb-13">If users can free browse and use your website or Admin Panel is used only as interface(eCommerce site) to sell other's products you can use Regular license.
								<br />If you are going to use the item on one domain and multiple subdomains, you only require one Licence.(ex: www.
								<span class="text-dark">domain.com</span>/site1 – site2.
								<span class="text-dark">domain.com</span>– site.3.
								<span class="text-dark">domain.com</span>).</div>
								<!--end::Text-->
								<!--begin::Title-->
								<h2 class="fw-bold text-dark mb-7">Multisite License:</h2>
								<!--end::Title-->
								<!--begin::List-->
								<ul>
									<li>
										<span class="fs-4 fw-semibold text-gray-700">It works the same as the Standard License, but you can use it in unlimited count of projects.</span>
									</li>
								</ul>
								<!--end::List-->
								<!--begin::Text-->
								<div class="fs-4 fw-semibold text-gray-700 mb-13">If users can free browse and use your website is used only as interface(eCommerce site) to sell other's products you can use Regular license. if you are going to use the item on multiple domains, then you will need to purchase a Licence for each domain or buy Multisite License.
								<br />(ex: www.domain-site-
								<span class="text-dark">one.com</span>– www.domain-site.
								<span class="text-dark">two.com</span>– www.site-three-
								<span class="text-dark">domain.com</span>).</div>
								<!--end::Text-->
								<!--begin::Title-->
								<h2 class="fw-bold text-dark mb-8">Extended License:</h2>
								<!--end::Title-->
								<!--begin::List-->
								<ul class="fs-4 fw-semibold mb-6">
									<li>
										<span class="text-gray-700">SaaS projects</span>
									</li>
									<li class="my-2">
										<span class="text-gray-700">Photo stock with PRO subscription</span>
									</li>
									<li>
										<span class="text-gray-700">Cloud service with paid plans</span>
									</li>
								</ul>
								<!--end::List-->
								<!--begin::Text-->
								<div class="fs-4 fw-semibold text-gray-700">E-commerce site Company business activity dashboard Customer support center If users can free browse and use your website is used only as interface(eCommerce site) to sell other's products you can use Regular license. If you are going to use the item on one domain and multiple subdomains, you only require one Licence . (ex: www.domain.com/site1 – site2.domain.com – site.3.domain.com).</div>
								<!--end::Text-->
							</div>
							<!--end::Block-->
							<!--end::Body-->
						</div>
						<!--end::Content main-->
						<!--begin::Card-->
						<div class="card mb-4 bg-light text-center mb-4">
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
				<!--end::About card-->
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
