@extends('admin.layout')
@section('content')
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
						<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/overview">Overview</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item my-1">
						<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/tickets/list">tickets</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item my-1">
						<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="/admin/apps/support-center/tutorials/list">Tutorials</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item my-1">
						<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/faq">FAQ</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item my-1">
						<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/licenses">Licenses</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item my-1">
						<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/contact">Contact US</a>
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
	<!--begin::Home card-->
	<div class="card">
		<!--begin::Body-->
		<div class="card-body p-10 p-lg-15">
			<!--begin::Section-->
			<div class="mb-17">
				<!--begin::Title-->
				<h3 class="text-dark mb-7">Latest Articles, News & Updates</h3>
				<!--end::Title-->
				<!--begin::Separator-->
				<div class="separator separator-dashed mb-9"></div>
				<!--end::Separator-->
				<!--begin::Row-->
				<div class="row">
					<!--begin::Col-->
					<div class="col-md-6">
						<!--begin::Feature post-->
						<div class="h-100 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10">
							<!--begin::Video-->
							<div class="mb-3">
								<iframe class="embed-responsive-item card-rounded h-275px w-100" src="https://www.youtube.com/embed/TWdDZYNqlg4" allowfullscreen="allowfullscreen"></iframe>
							</div>
							<!--end::Video-->
							<!--begin::Body-->
							<div class="mb-5">
								<!--begin::Title-->
								<a href="#" class="fs-2 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Get Started Tutorial.
								<br />Create easy customizable applications</a>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fw-semibold fs-5 text-gray-600 text-dark mt-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused on from v4 to v5 speaker approachable making focused a but from a step away afraid to step away been focused Writing a blog post is a little like driving; you can study the highway code (or read articles telling you how to write a blog post) for months, but nothing can prepare you for the real thing like getting behind the wheel</div>
								<!--end::Text-->
							</div>
							<!--end::Body-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrap">
								<!--begin::Item-->
								<div class="d-flex align-items-center pe-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-3">
										<img alt="" src="assets/media/avatars/300-9.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Text-->
									<div class="fs-5 fw-bold">
										<a href="/admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">David Morgan</a>
										<span class="text-muted">on Apr 27 2021</span>
									</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Label-->
								<span class="badge badge-light-primary fw-bold my-2">TUTORIALS</span>
								<!--end::Label-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Feature post-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-md-6 justify-content-between d-flex flex-column">
						<!--begin::Post-->
						<div class="ps-lg-6 mb-16 mt-md-0 mt-17">
							<!--begin::Body-->
							<div class="mb-6">
								<!--begin::Title-->
								<a href="#" class="fw-bold text-dark mb-4 fs-2 lh-base text-hover-primary">Bootstrap Admin Theme - How To Get Started Tutorial. Create customizable applications</a>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fw-semibold fs-5 mt-4 text-gray-600 text-dark">We’ve been focused on making the from v4 to v5 a but we’ve also not been afraid to step away been focused on from v4 to v5 speaker approachable making focused</div>
								<!--end::Text-->
							</div>
							<!--end::Body-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrap">
								<!--begin::Item-->
								<div class="d-flex align-items-center pe-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-3">
										<img src="assets/media/avatars/300-20.jpg" class="" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Text-->
									<div class="fs-5 fw-bold">
										<a href="/admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Jane Miller</a>
										<span class="text-muted">on Apr 27 2021</span>
									</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Label-->
								<span class="badge badge-light-info fw-bold my-2">BLOG</span>
								<!--end::Label-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Post-->
						<!--begin::Post-->
						<div class="ps-lg-6 mb-16">
							<!--begin::Body-->
							<div class="mb-6">
								<!--begin::Title-->
								<a href="#" class="fw-bold text-dark mb-4 fs-2 lh-base text-hover-primary">Angular Admin Theme - How To Get Started Tutorial.</a>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fw-semibold fs-5 mt-4 text-gray-600 text-dark">We’ve been focused on making the from v4 to v5 a but we’ve also not been afraid to step away</div>
								<!--end::Text-->
							</div>
							<!--end::Body-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrap">
								<!--begin::Item-->
								<div class="d-flex align-items-center pe-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-3">
										<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Text-->
									<div class="fs-5 fw-bold">
										<a href="/admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Cris Morgan</a>
										<span class="text-muted">on Mar 14 2021</span>
									</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Label-->
								<span class="badge badge-light-primary fw-bold my-2">TUTORIALS</span>
								<!--end::Label-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Post-->
						<!--begin::Post-->
						<div class="ps-lg-6">
							<!--begin::Body-->
							<div class="mb-6">
								<!--begin::Title-->
								<a href="#" class="fw-bold text-dark mb-4 fs-2 lh-base text-hover-primary">React Admin Theme - How To Get Started Tutorial. Create best applications</a>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fw-semibold fs-5 mt-4 text-gray-600 text-dark">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
								<!--end::Text-->
							</div>
							<!--end::Body-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack flex-wrap">
								<!--begin::Item-->
								<div class="d-flex align-items-center pe-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-3">
										<img src="assets/media/avatars/300-19.jpg" class="" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Text-->
									<div class="fs-5 fw-bold">
										<a href="/admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Cris Morgan</a>
										<span class="text-muted">on Mar 14 2021</span>
									</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Label-->
								<span class="badge badge-light-warning fw-bold my-2">NEWS</span>
								<!--end::Label-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Col-->
				</div>
				<!--begin::Row-->
			</div>
			<!--end::Section-->
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
								<a href="/admin/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
								<!--end::Text-->
								<!--begin::Content-->
								<div class="fs-6 fw-bold">
									<!--begin::Author-->
									<a href="/admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Jane Miller</a>
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
								<a href="/admin/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
								<!--end::Text-->
								<!--begin::Content-->
								<div class="fs-6 fw-bold">
									<!--begin::Author-->
									<a href="/admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Cris Morgan</a>
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
								<a href="/admin/pages/user-profile/overview" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
								<!--end::Text-->
								<!--begin::Content-->
								<div class="fs-6 fw-bold">
									<!--begin::Author-->
									<a href="/admin/pages/user-profile/overview" class="text-gray-700 text-hover-primary">Carles Nilson</a>
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
			<!--begin::latest instagram-->
			<div class="">
				<!--begin::Section-->
				<div class="m-0">
					<!--begin::Content-->
					<div class="d-flex flex-stack">
						<!--begin::Title-->
						<h3 class="text-dark">Latest Instagram Posts</h3>
						<!--end::Title-->
						<!--begin::Link-->
						<a href="#" class="fs-6 fw-semibold link-primary">View Instagram</a>
						<!--end::Link-->
					</div>
					<!--end::Content-->
					<!--begin::Separator-->
					<div class="separator separator-dashed border-gray-300 mb-9 mt-5"></div>
					<!--end::Separator-->
				</div>
				<!--end::Section-->
				<!--begin::Row-->
				<div class="row g-10 row-cols-2 row-cols-lg-5">
					<!--begin::Col-->
					<div class="col">
						<!--begin::Overlay-->
						<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/16.jpg">
							<!--begin::Image-->
							<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/16.jpg')"></div>
							<!--end::Image-->
							<!--begin::Action-->
							<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
								<i class="bi bi-eye-fill fs-2x text-white"></i>
							</div>
							<!--end::Action-->
						</a>
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col">
						<!--begin::Overlay-->
						<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/13.jpg">
							<!--begin::Image-->
							<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/13.jpg')"></div>
							<!--end::Image-->
							<!--begin::Action-->
							<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
								<i class="bi bi-eye-fill fs-2x text-white"></i>
							</div>
							<!--end::Action-->
						</a>
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col">
						<!--begin::Overlay-->
						<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/19.jpg">
							<!--begin::Image-->
							<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/19.jpg')"></div>
							<!--end::Image-->
							<!--begin::Action-->
							<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
								<i class="bi bi-eye-fill fs-2x text-white"></i>
							</div>
							<!--end::Action-->
						</a>
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col">
						<!--begin::Overlay-->
						<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/15.jpg">
							<!--begin::Image-->
							<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/15.jpg')"></div>
							<!--end::Image-->
							<!--begin::Action-->
							<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
								<i class="bi bi-eye-fill fs-2x text-white"></i>
							</div>
							<!--end::Action-->
						</a>
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col">
						<!--begin::Overlay-->
						<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/12.jpg">
							<!--begin::Image-->
							<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/12.jpg')"></div>
							<!--end::Image-->
							<!--begin::Action-->
							<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
								<i class="bi bi-eye-fill fs-2x text-white"></i>
							</div>
							<!--end::Action-->
						</a>
					</div>
					<!--end::Col-->
				</div>
				<!--begin::Row-->
			</div>
			<!--end::latest instagram-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Home card-->
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
@endsection
