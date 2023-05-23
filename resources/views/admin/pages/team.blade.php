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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Our Team</h1>
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f09994ca95">
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
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f09994ca95" data-allow-clear="true">
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
						<!--begin::Meet-->
						<div class="mb-18">
							<!--begin::Wrapper-->
							<div class="mb-11">
								<!--begin::Top-->
								<div class="text-center mb-18">
									<!--begin::Title-->
									<h3 class="fs-2hx text-dark mb-6">Meet Our Team</h3>
									<!--end::Title-->
									<!--begin::Text-->
									<div class="fs-5 text-muted fw-semibold">Save thousands to millions of bucks by using single tool for different
									<br />amazing and outstanding and usefull great and useful admin</div>
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
										<a href="admin/dist/pages/pricing/pricing-1" class="btn btn-primary">Pricing</a>
										<a href="admin/dist/pages/careers/apply" class="btn btn-light-primary ms-3">Join Us</a>
									</div>
									<!--end::Links-->
								</div>
								<!--end::Overlay-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Description-->
							<div class="fs-5 fw-semibold text-gray-600">
								<!--begin::Text-->
								<p class="m-0">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it’s important to spend those vital hours planning your post and even thinking about
								<a href="admin/dist/pages/blog/post" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.</p>
								<!--end::Text-->
							</div>
							<!--end::Description-->
						</div>
						<!--end::Meet-->
						<!--begin::Team-->
						<div class="mb-18">
							<!--begin::Heading-->
							<div class="text-center mb-17">
								<!--begin::Title-->
								<h3 class="fs-2hx text-dark mb-5">Our Great Team</h3>
								<!--end::Title-->
								<!--begin::Sub-title-->
								<div class="fs-5 text-muted fw-semibold">It’s no doubt that when a development takes longer to complete, additional costs to
								<br />integrate and test each extra feature creeps up and haunts most of us.</div>
								<!--end::Sub-title=-->
							</div>
							<!--end::Heading-->
							<!--begin::Wrapper-->
							<div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">
								<!--begin::Item-->
								<div class="col text-center mb-9">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-1.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="admin/dist/pages/user-profile/projects" class="text-dark fw-bold text-hover-primary fs-3">Paul Miles</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold">Development Lead</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col text-center mb-9">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-2.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="admin/dist/pages/user-profile/projects" class="text-dark fw-bold text-hover-primary fs-3">Jania Garnbet</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold">Creative Director</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col text-center mb-9">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-16.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="admin/dist/pages/user-profile/projects" class="text-dark fw-bold text-hover-primary fs-3">James Nilson</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold">Python Expert</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col text-center mb-9">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-20.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="admin/dist/pages/user-profile/projects" class="text-dark fw-bold text-hover-primary fs-3">Mia Miles</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold">Project Manager</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col text-center mb-9">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-10.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="admin/dist/pages/user-profile/projects" class="text-dark fw-bold text-hover-primary fs-3">Sophia Miles</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold">Art Director</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col text-center mb-9">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-9.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="admin/dist/pages/user-profile/projects" class="text-dark fw-bold text-hover-primary fs-3">Oliver Lucas</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold">Marketing Manager</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col text-center mb-9">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-12.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="admin/dist/pages/user-profile/projects" class="text-dark fw-bold text-hover-primary fs-3">Amelia Miles</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold">QA Managers</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col text-center mb-9">
									<!--begin::Photo-->
									<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-23.jpg')"></div>
									<!--end::Photo-->
									<!--begin::Person-->
									<div class="mb-0">
										<!--begin::Name-->
										<a href="admin/dist/pages/user-profile/projects" class="text-dark fw-bold text-hover-primary fs-3">Liam James</a>
										<!--end::Name-->
										<!--begin::Position-->
										<div class="text-muted fs-6 fw-semibold">QA Managers</div>
										<!--begin::Position-->
									</div>
									<!--end::Person-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Team-->
						<!--begin::Join-->
						<div class="text-center mb-20">
							<!--begin::Top-->
							<div class="mb-13">
								<!--begin::Title-->
								<h3 class="fs-2hx text-dark mb-5">Join Us</h3>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fs-5 text-muted fw-semibold">Save thousands to millions of bucks by using single tool
								<br />for different amazing and great useful admin</div>
								<!--end::Text-->
							</div>
							<!--end::Top-->
							<!--begin::Text-->
							<p class="fs-5 fw-semibold text-gray-600 text-start mb-15">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it’s important to spend those vital hours planning
							<a href="admin/dist/pages/blog/post" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.</p>
							<!--end::Text-->
							<!--begin::Action-->
							<a href="admin/dist/pages/careers/apply" class="btn btn-primary mb-5">Apply Now</a>
							<!--end::Action-->
						</div>
						<!--end::Join-->
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
