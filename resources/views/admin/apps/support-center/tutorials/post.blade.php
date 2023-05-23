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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Tutorials Post</h1>
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
					<li class="breadcrumb-item text-muted">Support Center</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Tutorials</li>
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
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f090260f33">
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
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f090260f33" data-allow-clear="true">
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
			<!--begin::Hero card-->
			<div class="card mb-12">
				<!--begin::Hero body-->
				<div class="card-body flex-column p-5">
					<!--begin::Hero content-->
					<div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
							<!--begin::Title-->
							<h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">How Can We Help You?</h1>
							<!--end::Title-->
							<!--begin::Input group-->
							<div class="position-relative w-100">
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-primary position-absolute top-50 translate-middle ms-8">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" name="search" value="" placeholder="Ask a question" />
							</div>
							<!--end::Input group-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Wrapper-->
						<div class="flex-equal d-flex justify-content-center align-items-end ms-5">
							<!--begin::Illustration-->
							<img src="assets/media/illustrations/sketchy-1/20.png" alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12" />
							<!--end::Illustration-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Hero content-->
					<!--begin::Hero nav-->
					<div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
						<!--begin::Nav-->
						<ul class="nav flex-wrap border-transparent fw-bold">
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/overview">Overview</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/tickets/list">tickets</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/tutorials/list">Tutorials</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/faq">FAQ</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/licenses">Licenses</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item my-1">
								<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="admin/apps/support-center/contact">Contact US</a>
							</li>
							<!--end::Nav item-->
						</ul>
						<!--end::Nav-->
						<!--begin::Action-->
						<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-primary fw-bold fs-8 fs-lg-base">Create Ticket</a>
						<!--end::Action-->
					</div>
					<!--end::Hero nav-->
				</div>
				<!--end::Hero body-->
			</div>
			<!--end::Hero card-->
			<!--begin::Post card-->
			<div class="card">
				<!--begin::Body-->
				<div class="card-body p-lg-15 pb-lg-0">
					<!--begin::Layout-->
					<div class="d-flex flex-column flex-xl-row">
						<!--begin::Content-->
						<div class="flex-lg-row-fluid me-xl-15">
							<!--begin::Post content-->
							<div class="mb-17">
								<!--begin::Wrapper-->
								<div class="mb-8">
									<!--begin::Info-->
									<div class="d-flex flex-wrap mb-6">
										<!--begin::Item-->
										<div class="me-9 my-1">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-primary svg-icon-2 me-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Label-->
											<span class="fw-bold text-gray-400">06 April 2021</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="me-9 my-1">
											<!--begin::Icon-->
											<!--SVG file not found: icons/duotune/finance/fin006.svgFolder.svg-->
											<!--end::Icon-->
											<!--begin::Label-->
											<span class="fw-bold text-gray-400">Announcements</span>
											<!--begin::Label-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="my-1">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
											<span class="svg-icon svg-icon-primary svg-icon-2 me-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
													<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Label-->
											<span class="fw-bold text-gray-400">24 Comments</span>
											<!--end::Label-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Info-->
									<!--begin::Title-->
									<a href="#" class="text-dark text-hover-primary fs-2 fw-bold">Admin Panel - How To Get Started Tutorial. Create a customizable SaaS Based applications and solutions
									<span class="fw-bold text-muted fs-5 ps-1">5 mins read</span></a>
									<!--end::Title-->
									<!--begin::Container-->
									<div class="overlay mt-8">
										<!--begin::Image-->
										<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('assets/media/stock/1600x800/img-1.jpg')"></div>
										<!--end::Image-->
										<!--begin::Links-->
										<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
											<a href="admin/pages/about" class="btn btn-primary">About Us</a>
											<a href="admin/pages/careers/apply" class="btn btn-light-primary ms-3">Join Us</a>
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
									<a href="admin/pages/blog/post" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.</p>
									<!--end::Text-->
									<!--begin::Text-->
									<p class="mb-8">There’s an old maxim that states,
									<span class="text-gray-800 pe-1">“No fun for the writer, no fun for the reader.”</span>No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p>
									<!--end::Text-->
									<!--begin::Text-->
									<p class="mb-8">Before you do any of the following steps, be sure to pick a topic that actually interests you. Nothing – and
									<a href="admin/pages/blog/home" class="link-primary pe-1">I mean NOTHING</a>– will kill a blog post more effectively than a lack of enthusiasm from the writer. You can tell when a writer is bored by their subject, and it’s so cringe-worthy it’s a little embarrassing.</p>
									<!--end::Text-->
									<!--begin::Text-->
									<p class="mb-17">I can hear your objections already. “But Dan, I have to blog for a cardboard box manufacturing company.” I feel your pain, I really do. During the course of my career, I’ve written content for dozens of clients in some less-than-thrilling industries (such as financial regulatory compliance and corporate housing), but the hallmark of a professional blogger is the ability to write well about any topic, no matter how dry it may be. Blogging is a lot easier, however, if you can muster at least a little enthusiasm for the topic at hand.</p>
									<!--end::Text-->
								</div>
								<!--end::Description-->
								<!--begin::Block-->
								<div class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
									<!--begin::Section-->
									<div class="text-center flex-shrink-0 me-7 me-lg-13">
										<!--begin::Avatar-->
										<div class="symbol symbol-70px symbol-circle mb-2">
											<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="mb-0">
											<a href="admin/pages/user-profile/overview" class="text-gray-700 fw-bold text-hover-primary">Jane Johnson</a>
											<span class="text-gray-400 fs-7 fw-semibold d-block mt-1">Co-founder</span>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Section-->
									<!--begin::Text-->
									<div class="mb-0 fs-6">
										<div class="text-muted fw-semibold lh-lg mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp writing a blog post often takes more than a couple.</div>
										<a href="admin/pages/user-profile/overview" class="fw-semibold link-primary">Author’s Profile</a>
									</div>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								<!--begin::Icons-->
								<div class="d-flex flex-center">
									<!--begin::Icon-->
									<a href="#" class="mx-4">
										<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2" alt="" />
									</a>
									<!--end::Icon-->
									<!--begin::Icon-->
									<a href="#" class="mx-4">
										<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px my-2" alt="" />
									</a>
									<!--end::Icon-->
									<!--begin::Icon-->
									<a href="#" class="mx-4">
										<img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2" alt="" />
									</a>
									<!--end::Icon-->
									<!--begin::Icon-->
									<a href="#" class="mx-4">
										<img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2" alt="" />
									</a>
									<!--end::Icon-->
									<!--begin::Icon-->
									<a href="#" class="mx-4">
										<img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2" alt="" />
									</a>
									<!--end::Icon-->
									<!--begin::Icon-->
									<a href="#" class="mx-4">
										<img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2" alt="" />
									</a>
									<!--end::Icon-->
									<!--begin::Icon-->
									<a href="#" class="mx-4">
										<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2" alt="" />
									</a>
									<!--end::Icon-->
								</div>
								<!--end::Icons-->
							</div>
							<!--end::Post content-->
						</div>
						<!--end::Content-->
						<!--begin::Sidebar-->
						<div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
							<!--begin::Search blog-->
							<div class="mb-16">
								<h4 class="text-dark mb-7">Search Blog</h4>
								<!--begin::Input group-->
								<div class="position-relative">
									<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
									<span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Search blog-->
							<!--begin::Catigories-->
							<div class="mb-16">
								<h4 class="text-dark mb-7">Categories</h4>
								<!--begin::Item-->
								<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
									<!--begin::Text-->
									<a href="#" class="text-muted text-hover-primary pe-2">SaaS Solutions</a>
									<!--end::Text-->
									<!--begin::Number-->
									<div class="m-0">24</div>
									<!--end::Number-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
									<!--begin::Text-->
									<a href="#" class="text-muted text-hover-primary pe-2">Company News</a>
									<!--end::Text-->
									<!--begin::Number-->
									<div class="m-0">152</div>
									<!--end::Number-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
									<!--begin::Text-->
									<a href="#" class="text-muted text-hover-primary pe-2">Events & Activities</a>
									<!--end::Text-->
									<!--begin::Number-->
									<div class="m-0">52</div>
									<!--end::Number-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
									<!--begin::Text-->
									<a href="#" class="text-muted text-hover-primary pe-2">Support Related</a>
									<!--end::Text-->
									<!--begin::Number-->
									<div class="m-0">305</div>
									<!--end::Number-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
									<!--begin::Text-->
									<a href="#" class="text-muted text-hover-primary pe-2">Innovations</a>
									<!--end::Text-->
									<!--begin::Number-->
									<div class="m-0">70</div>
									<!--end::Number-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack fw-semibold fs-5 text-muted">
									<!--begin::Text-->
									<a href="#" class="text-muted text-hover-primary pe-2">Product Updates</a>
									<!--end::Text-->
									<!--begin::Number-->
									<div class="m-0">585</div>
									<!--end::Number-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Catigories-->
							<!--begin::Recent posts-->
							<div class="m-0">
								<h4 class="text-dark mb-7">Recent Posts</h4>
								<!--begin::Item-->
								<div class="d-flex flex-stack mb-7">
									<!--begin::Symbol-->
									<div class="symbol symbol-60px symbol-2by3 me-4">
										<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-1.jpg')"></div>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="m-0">
										<a href="#" class="text-dark fw-bold text-hover-primary fs-6">About Bootstrap Admin</a>
										<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack mb-7">
									<!--begin::Symbol-->
									<div class="symbol symbol-60px symbol-2by3 me-4">
										<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-2.jpg')"></div>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="m-0">
										<a href="#" class="text-dark fw-bold text-hover-primary fs-6">A yellow sofa</a>
										<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack mb-7">
									<!--begin::Symbol-->
									<div class="symbol symbol-60px symbol-2by3 me-4">
										<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-3.jpg')"></div>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="m-0">
										<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Our Camra Mega Set</a>
										<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Symbol-->
									<div class="symbol symbol-60px symbol-2by3 me-4">
										<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-4.jpg')"></div>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="m-0">
										<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Time to cook and eat?</a>
										<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Recent posts-->
						</div>
						<!--end::Sidebar-->
					</div>
					<!--end::Layout-->
					<!--begin::Section-->
					<div class="mb-17">
						<!--begin::Content-->
						<div class="d-flex flex-stack mb-5">
							<!--begin::Title-->
							<h3 class="text-dark">Video Tutorials</h3>
							<!--end::Title-->
							<!--begin::Link-->
							<a href="#" class="fs-6 fw-semibold link-primary">View All Videos</a>
							<!--end::Link-->
						</div>
						<!--end::Content-->
						<!--begin::Separator-->
						<div class="separator separator-dashed mb-9"></div>
						<!--end::Separator-->
						<!--begin::Row-->
						<div class="row g-10">
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Feature post-->
								<div class="card-xl-stretch me-md-6">
									<!--begin::Image-->
									<a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
										<img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
									</a>
									<!--end::Image-->
									<!--begin::Body-->
									<div class="m-0">
										<!--begin::Title-->
										<a href="admin/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
										<!--end::Text-->
										<!--begin::Content-->
										<div class="fs-6 fw-bold">
											<!--begin::Author-->
											<a href="admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Jane Miller</a>
											<!--end::Author-->
											<!--begin::Date-->
											<span class="text-muted">on Mar 21 2021</span>
											<!--end::Date-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Feature post-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Feature post-->
								<div class="card-xl-stretch mx-md-3">
									<!--begin::Image-->
									<a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-74.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
										<img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
									</a>
									<!--end::Image-->
									<!--begin::Body-->
									<div class="m-0">
										<!--begin::Title-->
										<a href="admin/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
										<!--end::Text-->
										<!--begin::Content-->
										<div class="fs-6 fw-bold">
											<!--begin::Author-->
											<a href="admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Cris Morgan</a>
											<!--end::Author-->
											<!--begin::Date-->
											<span class="text-muted">on Apr 14 2021</span>
											<!--end::Date-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Feature post-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Feature post-->
								<div class="card-xl-stretch ms-md-6">
									<!--begin::Image-->
									<a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-47.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/TWdDZYNqlg4">
										<img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
									</a>
									<!--end::Image-->
									<!--begin::Body-->
									<div class="m-0">
										<!--begin::Title-->
										<a href="admin/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
										<!--end::Text-->
										<!--begin::Content-->
										<div class="fs-6 fw-bold">
											<!--begin::Author-->
											<a href="admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Carles Nilson</a>
											<!--end::Author-->
											<!--begin::Date-->
											<span class="text-muted">on May 14 2021</span>
											<!--end::Date-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Feature post-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="mb-17">
						<!--begin::Content-->
						<div class="d-flex flex-stack mb-5">
							<!--begin::Title-->
							<h3 class="text-dark">Hottest Bundles</h3>
							<!--end::Title-->
							<!--begin::Link-->
							<a href="#" class="fs-6 fw-semibold link-primary">View All Offers</a>
							<!--end::Link-->
						</div>
						<!--end::Content-->
						<!--begin::Separator-->
						<div class="separator separator-dashed mb-9"></div>
						<!--end::Separator-->
						<!--begin::Row-->
						<div class="row g-10">
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Hot sales post-->
								<div class="card-xl-stretch me-md-6">
									<!--begin::Overlay-->
									<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-23.jpg">
										<!--begin::Image-->
										<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-23.jpg')"></div>
										<!--end::Image-->
										<!--begin::Action-->
										<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
											<i class="bi bi-eye-fill fs-2x text-white"></i>
										</div>
										<!--end::Action-->
									</a>
									<!--end::Overlay-->
									<!--begin::Body-->
									<div class="mt-5">
										<!--begin::Title-->
										<a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark mt-3">We’ve been focused on making a the from also not been eye</div>
										<!--end::Text-->
										<!--begin::Text-->
										<div class="fs-6 fw-bold mt-5 d-flex flex-stack">
											<!--begin::Label-->
											<span class="badge border border-dashed fs-2 fw-bold text-dark p-2">
											<span class="fs-6 fw-semibold text-gray-400">$</span>28</span>
											<!--end::Label-->
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-primary">Purchase</a>
											<!--end::Action-->
										</div>
										<!--end::Text-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Hot sales post-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Hot sales post-->
								<div class="card-xl-stretch mx-md-3">
									<!--begin::Overlay-->
									<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-14.jpg">
										<!--begin::Image-->
										<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x600/img-14.jpg')"></div>
										<!--end::Image-->
										<!--begin::Action-->
										<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
											<i class="bi bi-eye-fill fs-2x text-white"></i>
										</div>
										<!--end::Action-->
									</a>
									<!--end::Overlay-->
									<!--begin::Body-->
									<div class="mt-5">
										<!--begin::Title-->
										<a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark mt-3">We’ve been focused on making a the from also not been eye</div>
										<!--end::Text-->
										<!--begin::Text-->
										<div class="fs-6 fw-bold mt-5 d-flex flex-stack">
											<!--begin::Label-->
											<span class="badge border border-dashed fs-2 fw-bold text-dark p-2">
											<span class="fs-6 fw-semibold text-gray-400">$</span>27</span>
											<!--end::Label-->
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-primary">Purchase</a>
											<!--end::Action-->
										</div>
										<!--end::Text-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Hot sales post-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4">
								<!--begin::Hot sales post-->
								<div class="card-xl-stretch ms-md-6">
									<!--begin::Overlay-->
									<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-71.jpg">
										<!--begin::Image-->
										<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-71.jpg')"></div>
										<!--end::Image-->
										<!--begin::Action-->
										<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
											<i class="bi bi-eye-fill fs-2x text-white"></i>
										</div>
										<!--end::Action-->
									</a>
									<!--end::Overlay-->
									<!--begin::Body-->
									<div class="mt-5">
										<!--begin::Title-->
										<a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold fs-5 text-gray-600 text-dark mt-3">We’ve been focused on making a the from also not been eye</div>
										<!--end::Text-->
										<!--begin::Text-->
										<div class="fs-6 fw-bold mt-5 d-flex flex-stack">
											<!--begin::Label-->
											<span class="badge border border-dashed fs-2 fw-bold text-dark p-2">
											<span class="fs-6 fw-semibold text-gray-400">$</span>25</span>
											<!--end::Label-->
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-primary">Purchase</a>
											<!--end::Action-->
										</div>
										<!--end::Text-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Hot sales post-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Section-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Post card-->
			<!--begin::Modal - Support Center - Create Ticket-->
			<div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-750px">
					<!--begin::Modal content-->
					<div class="modal-content rounded">
						<!--begin::Modal header-->
						<div class="modal-header pb-0 border-0 justify-content-end">
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--begin::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
							<!--begin:Form-->
							<form id="kt_modal_new_ticket_form" class="form" action="#">
								<!--begin::Heading-->
								<div class="mb-13 text-center">
									<!--begin::Title-->
									<h1 class="mb-3">Create Ticket</h1>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-gray-400 fw-semibold fs-5">If you need more info, please check
									<a href="" class="fw-bold link-primary">Support Guidelines</a>.</div>
									<!--end::Description-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-8 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
										<span class="required">Subject</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a subject for your issue"></i>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid" placeholder="Enter your ticket subject" name="subject" />
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-semibold mb-2">Product</label>
										<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a product" name="product">
											<option value="">Select a product...</option>
											<option value="1">HTML Theme</option>
											<option value="1">Angular App</option>
											<option value="1">Vue App</option>
											<option value="1">React Theme</option>
											<option value="1">Figma UI Kit</option>
											<option value="3">Laravel App</option>
											<option value="4">Blazor App</option>
											<option value="5">Django App</option>
										</select>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-semibold mb-2">Assign</label>
										<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="user">
											<option value="">Select a user...</option>
											<option value="1">Karina Clark</option>
											<option value="2">Robert Doe</option>
											<option value="3">Niel Owen</option>
											<option value="4">Olivia Wild</option>
											<option value="5">Sean Bean</option>
										</select>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-semibold mb-2">Status</label>
										<select class="form-select form-select-solid" data-control="select2" data-placeholder="Open" data-hide-search="true">
											<option value=""></option>
											<option value="1" selected="selected">Open</option>
											<option value="2">Pending</option>
											<option value="3">Resolved</option>
											<option value="3">Closed</option>
										</select>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-semibold mb-2">Due Date</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<div class="symbol symbol-20px me-4 position-absolute ms-4">
												<span class="symbol-label bg-secondary">
													<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
													<span class="svg-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
															<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
															<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
															<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-8 fv-row">
									<label class="fs-6 fw-semibold mb-2">Description</label>
									<textarea class="form-control form-control-solid" rows="4" name="description" placeholder="Type your ticket description"></textarea>
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-8">
									<label class="fs-6 fw-semibold mb-2">Attachments</label>
									<!--begin::Dropzone-->
									<div class="dropzone" id="kt_modal_create_ticket_attachments">
										<!--begin::Message-->
										<div class="dz-message needsclick align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
											<span class="svg-icon svg-icon-3hx svg-icon-primary">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z" fill="currentColor" />
													<path d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z" fill="currentColor" />
													<path d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z" fill="currentColor" />
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-4">
												<h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
												<span class="fw-semibold fs-7 text-gray-400">Upload up to 10 files</span>
											</div>
											<!--end::Info-->
										</div>
									</div>
									<!--end::Dropzone-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-15 fv-row">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="fw-semibold me-5">
											<label class="fs-6">Notifications</label>
											<div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
										</div>
										<!--end::Label-->
										<!--begin::Checkboxes-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-10">
												<input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked" />
												<span class="form-check-label fw-semibold">Email</span>
											</label>
											<!--end::Checkbox-->
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid">
												<input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone" />
												<span class="form-check-label fw-semibold">Phone</span>
											</label>
											<!--end::Checkbox-->
										</div>
										<!--end::Checkboxes-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center">
									<button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end:Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Support Center - Create Ticket-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('styles')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endpush
@push('vendor_scripts')
<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
@push('custom_scripts')
<script src="assets/js/custom/apps/support-center/tickets/create.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
