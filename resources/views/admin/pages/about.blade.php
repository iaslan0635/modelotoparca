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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">About Us</h1>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f099817e03">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f099817e03" data-allow-clear="true">
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
				<div class="card-body p-lg-17">
					<!--begin::About-->
					<div class="mb-18">
						<!--begin::Wrapper-->
						<div class="mb-10">
							<!--begin::Top-->
							<div class="text-center mb-15">
								<!--begin::Title-->
								<h3 class="fs-2hx text-dark mb-5">About Us</h3>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fs-5 text-muted fw-semibold">Within the last 10 years, we have sold over 100,000 admin theme copies that have been
								<br />successfully deployed by small businesses to global enterprises</div>
								<!--end::Text-->
							</div>
							<!--end::Top-->
							<!--begin::Overlay-->
							<div class="overlay">
								<!--begin::Image-->
								<img class="w-100 card-rounded" src="assets/media/stock/1600x800/img-1.jpg" alt="" />
								<!--end::Image-->
								<!--begin::Links-->
								<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
									<a href="admin/dist/pages/pricing/pricing-2" class="btn btn-primary">Pricing</a>
									<a href="admin/dist/pages/careers/apply" class="btn btn-light-primary ms-3">Join Us</a>
								</div>
								<!--end::Links-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Description-->
						<div class="fs-5 fw-semibold text-gray-600">
							<!--begin::Text-->
							<p class="mb-8">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it’s important to spend those vital hours planning your post and even thinking about
							<a href="admin/dist/pages/blog/post" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.</p>
							<!--end::Text-->
							<!--begin::Text-->
							<p class="mb-8">There’s an old maxim that states,
							<span class="text-gray-800 pe-1">“No fun for the writer, no fun for the reader.”</span>No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p>
							<!--end::Text-->
							<!--begin::Text-->
							<p class="mb-8">Before you do any of the following steps, be sure to pick a topic that actually interests you. Nothing – and
							<a href="admin/dist/pages/blog/home" class="link-primary pe-1">I mean NOTHING</a>– will kill a blog post more effectively than a lack of enthusiasm from the writer. You can tell when a writer is bored by their subject, and it’s so cringe-worthy it’s a little embarrassing.</p>
							<!--end::Text-->
							<!--begin::Text-->
							<p class="mb-17">I can hear your objections already. “But Dan, I have to blog for a cardboard box manufacturing company.” I feel your pain, I really do. During the course of my career, I’ve written content for dozens of clients in some less-than-thrilling industries (such as financial regulatory compliance and corporate housing), but the hallmark of a professional blogger is the ability to write well about any topic, no matter how dry it may be. Blogging is a lot easier, however, if you can muster at least a little enthusiasm for the topic at hand.</p>
							<!--end::Text-->
						</div>
						<!--end::Description-->
					</div>
					<!--end::About-->
					<!--begin::Statistics-->
					<div class="card bg-light mb-18">
						<!--begin::Body-->
						<div class="card-body py-15">
							<!--begin::Wrapper-->
							<div class="d-flex flex-center">
								<!--begin::Items-->
								<div class="d-flex justify-content-between mb-10 mx-auto w-xl-900px">
									<!--begin::Item-->
									<div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
										<!--begin::Content-->
										<div class="text-center">
											<!--begin::Symbol-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-primary">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Symbol-->
											<!--begin::Text-->
											<div class="mt-1">
												<!--begin::Animation-->
												<div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
												<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700">0</div>+</div>
												<!--end::Animation-->
												<!--begin::Label-->
												<span class="text-gray-600 fw-semibold fs-5 lh-0">Businesses</span>
												<!--end::Label-->
											</div>
											<!--end::Text-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
										<!--begin::Content-->
										<div class="text-center">
											<!--begin::Symbol-->
											<!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-success">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z" fill="currentColor" />
													<path opacity="0.3" d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z" fill="currentColor" />
													<path opacity="0.3" d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Symbol-->
											<!--begin::Text-->
											<div class="mt-1">
												<!--begin::Animation-->
												<div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
												<div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="80">0</div>K+</div>
												<!--end::Animation-->
												<!--begin::Label-->
												<span class="text-gray-600 fw-semibold fs-5 lh-0">Quick Reports</span>
												<!--end::Label-->
											</div>
											<!--end::Text-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
										<!--begin::Content-->
										<div class="text-center">
											<!--begin::Symbol-->
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-info">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
													<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
													<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Symbol-->
											<!--begin::Text-->
											<div class="mt-1">
												<!--begin::Animation-->
												<div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
												<div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="35">0</div>M+</div>
												<!--end::Animation-->
												<!--begin::Label-->
												<span class="text-gray-600 fw-semibold fs-5 lh-0">Payments</span>
												<!--end::Label-->
											</div>
											<!--end::Text-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Item-->
								</div>
								<!--end::Items-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Testimonial-->
							<div class="fs-2 fw-semibold text-muted text-center mb-3">
							<span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll write about it in a
							<br />
							<span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way
							<span class="fs-1 lh-1 text-gray-700">“</span></div>
							<!--end::Testimonial-->
							<!--begin::Author-->
							<div class="fs-2 fw-semibold text-muted text-center">
								<a href="admin/dist/account/security" class="link-primary fs-4 fw-bold">Marcus Levy</a>
								<span class="fs-4 fw-bold text-gray-600">,KeenThemes CEO</span>
							</div>
							<!--end::Author-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Statistics-->
					<!--begin::Section-->
					<div class="mb-16">
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
					<!--begin::Team-->
					<div class="mb-18">
						<!--begin::Heading-->
						<div class="text-center mb-12">
							<!--begin::Title-->
							<h3 class="fs-2hx text-dark mb-5">Our Great Team</h3>
							<!--end::Title-->
							<!--begin::Sub-title-->
							<div class="fs-5 text-muted fw-semibold">It’s no doubt that when a development takes longer to complete, additional costs to
							<br />integrate and test each extra feature creeps up and haunts most of us.</div>
							<!--end::Sub-title=-->
						</div>
						<!--end::Heading-->
						<!--begin::Slider-->
						<div class="tns tns-default mb-10">
							<!--begin::Wrapper-->
							<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
								<!--begin::Item-->
								<div class="text-center">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-1.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="#" class="text-dark fw-bold text-hover-primary fs-3">Paul Miles</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold mt-1">Development Lead</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="text-center">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-2.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="#" class="text-dark fw-bold text-hover-primary fs-3">Melisa Marcus</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold mt-1">Creative Director</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="text-center">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-5.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="#" class="text-dark fw-bold text-hover-primary fs-3">David Nilson</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold mt-1">Python Expert</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="text-center">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-20.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="#" class="text-dark fw-bold text-hover-primary fs-3">Anne Clarc</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold mt-1">Project Manager</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="text-center">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-23.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="#" class="text-dark fw-bold text-hover-primary fs-3">Ricky Hunt</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold mt-1">Art Director</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="text-center">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-12.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="#" class="text-dark fw-bold text-hover-primary fs-3">Alice Wayde</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold mt-1">Marketing Manager</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="text-center">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-9.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="#" class="text-dark fw-bold text-hover-primary fs-3">Carles Puyol</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold mt-1">QA Managers</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Button-->
							<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
								<span class="svg-icon svg-icon-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--end::Button-->
							<!--begin::Button-->
							<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
								<span class="svg-icon svg-icon-3x">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--end::Button-->
						</div>
						<!--end::Slider-->
					</div>
					<!--end::Team-->
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
			<!--end::About card-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('vendor_scripts')
<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
