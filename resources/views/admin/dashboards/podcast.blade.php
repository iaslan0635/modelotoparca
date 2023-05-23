@extends('admin.layout')
@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
	<!--begin::Row-->
	<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
		<!--begin::Col-->
		<div class="col-xl-8">
			<!--begin::Engage widget 6-->
			<div class="card flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color:#020202;background-image:url('assets/media/stock/600x600/img-62.jpg')">
				<!--begin::Body-->
				<div class="card-body d-flex justify-content-between flex-column ps-xl-18">
					<!--begin::Heading-->
					<div class="mb-20 pt-xl-13">
						<!--begin::Title-->
						<h3 class="fw-bold text-white fs-4x mb-5 ms-n1">Utah Case</h3>
						<!--end::Title-->
						<!--begin::Description-->
						<span class="fw-bold text-white fs-4 mb-8 d-block lh-0">with Kristin Watson</span>
						<!--end::Description-->
						<!--begin::Items-->
						<div class="d-flex align-items-center">
							<!--begin::Item-->
							<div class="d-flex align-items-center me-6">
								<!--begin::Icon-->
								<a href="#" class="me-2">
									<i class="fonticon-play text-primary fs-3"></i>
								</a>
								<!--end::Icon-->
								<!--begin::Info-->
								<span class="fw-semibold text-white fs-6">70,000+ plays</span>
								<!--end::Info-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center">
								<!--begin::Icon-->
								<a href="#" class="me-2">
									<i class="fonticon-headset text-primary fs-3"></i>
								</a>
								<!--end::Icon-->
								<!--begin::Info-->
								<span class="fw-semibold text-white fs-6">372 listening now</span>
								<!--end::Info-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Items-->
					</div>
					<!--end::Heading-->
					<!--begin::Action-->
					<div class="mb-xl-10 mb-3">
						<a href='#' class="btn btn-primary fw-semibold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Listen Now</a>
						<a href="/admin/apps/support-center/overview.html" class="btn btn-color-white bg-transparent btn-outline fw-semibold" style="border: 1px solid rgba(255, 255, 255, 0.3)">Save for Later</a>
					</div>
					<!--begin::Action-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Engage widget 6-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-xl-4">
			<!--begin::Video widget 2-->
			<div class="card card-flush h-xl-100" id="kt_player_widget_2">
				<!--begin::Header-->
				<div class="card-header bg-black">
					<!--begin::Title-->
					<h3 class="card-title fw-bold text-white">Player</h3>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
							<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
							<span class="svg-icon svg-icon-1 svg-icon-white">
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
				<!--begin::Card body-->
				<div class="card-body bg-black pt-0">
					<!--begin::Image-->
					<div class="mx-auto mb-6 bgi-no-repeat bgi-size-contain bgi-position-center rounded-circle w-125px h-125px" style="background-image:url('assets/media/stock/600x600/img-59.jpg')"></div>
					<!--end::Image-->
					<!--begin::Section-->
					<div class="text-center mb-5">
						<!--begin::Title-->
						<h1 class="text-white fw-bold">Strange Friends</h1>
						<!--end::Title-->
						<!--begin::Title-->
						<span class="text-white opacity-75 fw-semibold">Theresa Webb</span>
						<!--end::Title-->
					</div>
					<!--end::Section-->
				</div>
				<!--end::Card body-->
				<!--begin::Card Footer-->
				<div class="card-footer bg-primary p-0 pb-9">
					<div class="mt-n10">
						<!--begin::Progress-->
						<div class="mb-5">
							<!--begin::Time-->
							<div class="d-flex flex-stack px-4 text-white opacity-75">
								<span class="current-time" data-kt-element="current-time">0:00</span>
								<span class="duration" data-kt-element="duration">0:00</span>
							</div>
							<!--end::Time-->
							<input type="range" class="form-range" data-kt-element="progress" min="0" max="100" value="0" step="0.01" />
						</div>
						<!--end::Progress-->
						<!--begin::Toolbar-->
						<div class="d-flex flex-center">
							<button class="btn btn-icon mx-1" data-kt-element="replay-button">
								<i class="fonticon-repeat fs-2 text-white"></i>
							</button>
							<button class="btn btn-icon mx-1" data-kt-element="play-prev-button">
								<i class='fonticon-back fs-2 text-white'></i>
							</button>
							<button class="btn btn-icon mx-6 play-pause" data-kt-element="play-button">
								<i class="fonticon-play text-white fs-4x" data-kt-element="play-icon"></i>
								<i class="fonticon-pause text-white fs-4x d-none" data-kt-element="pause-icon"></i>
							</button>
							<button class="btn btn-icon mx-1 next" data-kt-element="play-next-button">
								<i class='fonticon-next fs-2 text-white'></i>
							</button>
							<button class="btn btn-icon mx-1" data-kt-element="shuffle-button">
								<i class="fonticon-shuffle fs-2 text-white"></i>
							</button>
						</div>
						<!--end::Toolbar-->
						<!--begin::Tracks-->
						<audio data-kt-element="audio-track-1">
							<source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3" type="audio/mpeg" />
						</audio>
						<!--end::Tracks-->
					</div>
				</div>
				<!--end::Card Footer-->
			</div>
			<!--end::Video widget 2-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
		<!--begin::Col-->
		<div class="col-xl-8">
			<!--begin::Player widget 1-->
			<div class="card card-flush h-xl-100">
				<!--begin::Header-->
				<div class="card-header pt-7">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-dark">Recently Played</span>
						<span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
					</h3>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<a href="/admin/account/statements.html" class="btn btn-sm btn-light">History</a>
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Card body-->
				<div class="card-body pt-7">
					<!--begin::Row-->
					<div class="row g-5 g-xl-9 mb-5 mb-xl-9">
						<!--begin::Col-->
						<div class="col-sm-3 mb-3 mb-sm-0">
							<!--begin::Player card-->
							<div class="m-0">
								<!--begin::User pic-->
								<div class="card-rounded position-relative mb-5">
									<!--begin::Img-->
									<div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('assets/media/stock/600x600/img-61.jpg')"></div>
									<!--end::Img-->
									<!--begin::Play-->
									<button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
										<i class="fonticon-play text-white fs-2x" data-kt-element="list-play-icon"></i>
										<i class="fonticon-pause text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
									</button>
									<!--end::Play-->
								</div>
								<!--end::User pic-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Daily Podcast</a>
									<!--end::Title-->
									<span class="fw-bold fs-6 text-gray-400 d-block lh-1">Darlene Robertson</span>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Player card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-sm-3 mb-3 mb-sm-0">
							<!--begin::Player card-->
							<div class="m-0">
								<!--begin::User pic-->
								<div class="card-rounded position-relative mb-5">
									<!--begin::Img-->
									<div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('assets/media/stock/600x600/img-60.jpg')"></div>
									<!--end::Img-->
									<!--begin::Play-->
									<button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
										<i class="fonticon-play text-white fs-2x" data-kt-element="list-play-icon"></i>
										<i class="fonticon-pause text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
									</button>
									<!--end::Play-->
								</div>
								<!--end::User pic-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Neon Lights</a>
									<!--end::Title-->
									<span class="fw-bold fs-6 text-gray-400 d-block lh-1">Wade Warren</span>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Player card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-sm-3 mb-3 mb-sm-0">
							<!--begin::Player card-->
							<div class="m-0">
								<!--begin::User pic-->
								<div class="card-rounded position-relative mb-5">
									<!--begin::Img-->
									<div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('assets/media/stock/600x600/img-63.jpg')"></div>
									<!--end::Img-->
									<!--begin::Play-->
									<button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
										<i class="fonticon-play text-white fs-2x" data-kt-element="list-play-icon"></i>
										<i class="fonticon-pause text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
									</button>
									<!--end::Play-->
								</div>
								<!--end::User pic-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Single Eye</a>
									<!--end::Title-->
									<span class="fw-bold fs-6 text-gray-400 d-block lh-1">Robert Fox</span>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Player card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-sm-3 mb-3 mb-sm-0">
							<!--begin::Player card-->
							<div class="m-0">
								<!--begin::User pic-->
								<div class="card-rounded position-relative mb-5">
									<!--begin::Img-->
									<div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('assets/media/stock/600x600/img-56.jpg')"></div>
									<!--end::Img-->
									<!--begin::Play-->
									<button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
										<i class="fonticon-play text-white fs-2x" data-kt-element="list-play-icon"></i>
										<i class="fonticon-pause text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
									</button>
									<!--end::Play-->
								</div>
								<!--end::User pic-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Radiohead</a>
									<!--end::Title-->
									<span class="fw-bold fs-6 text-gray-400 d-block lh-1">Jacob Jones</span>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Player card-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Row-->
					<div class="row g-5 g-xl-9 mb-xl-3">
						<!--begin::Col-->
						<div class="col-sm-3 mb-3 mb-sm-0">
							<!--begin::Player card-->
							<div class="m-0">
								<!--begin::User pic-->
								<div class="card-rounded position-relative mb-5">
									<!--begin::Img-->
									<div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('assets/media/stock/600x600/img-57.jpg')"></div>
									<!--end::Img-->
									<!--begin::Play-->
									<button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
										<i class="fonticon-play text-white fs-2x" data-kt-element="list-play-icon"></i>
										<i class="fonticon-pause text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
									</button>
									<!--end::Play-->
								</div>
								<!--end::User pic-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">It is what it is</a>
									<!--end::Title-->
									<span class="fw-bold fs-6 text-gray-400 d-block lh-1">Jane Cooper</span>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Player card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-sm-3 mb-3 mb-sm-0">
							<!--begin::Player card-->
							<div class="m-0">
								<!--begin::User pic-->
								<div class="card-rounded position-relative mb-5">
									<!--begin::Img-->
									<div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('assets/media/stock/600x600/img-58.jpg')"></div>
									<!--end::Img-->
									<!--begin::Play-->
									<button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
										<i class="fonticon-play text-white fs-2x" data-kt-element="list-play-icon"></i>
										<i class="fonticon-pause text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
									</button>
									<!--end::Play-->
								</div>
								<!--end::User pic-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Broken Mirros</a>
									<!--end::Title-->
									<span class="fw-bold fs-6 text-gray-400 d-block lh-1">Jenny Wilson</span>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Player card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-sm-3 mb-3 mb-sm-0">
							<!--begin::Player card-->
							<div class="m-0">
								<!--begin::User pic-->
								<div class="card-rounded position-relative mb-5">
									<!--begin::Img-->
									<div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('assets/media/stock/600x600/img-55.jpg')"></div>
									<!--end::Img-->
									<!--begin::Play-->
									<button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
										<i class="fonticon-play text-white fs-2x" data-kt-element="list-play-icon"></i>
										<i class="fonticon-pause text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
									</button>
									<!--end::Play-->
								</div>
								<!--end::User pic-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">The Hood</a>
									<!--end::Title-->
									<span class="fw-bold fs-6 text-gray-400 d-block lh-1">Albert Flores</span>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Player card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-sm-3">
							<!--begin::Player card-->
							<div class="m-0">
								<!--begin::User pic-->
								<div class="card-rounded position-relative mb-5">
									<!--begin::Img-->
									<div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('assets/media/stock/600x600/img-64.jpg')"></div>
									<!--end::Img-->
									<!--begin::Play-->
									<button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
										<i class="fonticon-play text-white fs-2x" data-kt-element="list-play-icon"></i>
										<i class="fonticon-pause text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
									</button>
									<!--end::Play-->
								</div>
								<!--end::User pic-->
								<!--begin::Info-->
								<div class="m-0">
									<!--begin::Title-->
									<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Cirle Lights</a>
									<!--end::Title-->
									<span class="fw-bold fs-6 text-gray-400 d-block lh-1">Dianne Russell</span>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Player card-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Player widget 1-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-xl-4">
			<!--begin::List widget 24-->
			<div class="card h-xl-100" id="kt_list_widget_24">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-gray-800">Top Podcaster</span>
						<span class="text-gray-400 mt-1 fw-bold fs-7">8k social visitors</span>
					</h3>
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<a href="#" class="btn btn-sm btn-light">View All</a>
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-6">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-circle symbol-60px me-4">
							<img src="assets/media/avatars/300-28.jpg" class="" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Leslie Alexander</a>
								<span class="text-gray-400 fw-semibold d-block fs-6">Community</span>
							</div>
							<!--end:Author-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder" data-kt-element="follow">Follow</button>
							<!--end::Follow-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-5"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-circle symbol-60px me-4">
							<img src="assets/media/avatars/300-29.jpg" class="" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Jacob Jones</a>
								<span class="text-gray-400 fw-semibold d-block fs-6">Community</span>
							</div>
							<!--end:Author-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-primary py-2 px-4 fs-7 fw-bold" data-kt-element="follow">Following</button>
							<!--end::Follow-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-5"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-circle symbol-60px me-4">
							<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Ronald Richards</a>
								<span class="text-gray-400 fw-semibold d-block fs-6">Community</span>
							</div>
							<!--end:Author-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder" data-kt-element="follow">Follow</button>
							<!--end::Follow-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-5"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-circle symbol-60px me-4">
							<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Courtney Henry</a>
								<span class="text-gray-400 fw-semibold d-block fs-6">Community</span>
							</div>
							<!--end:Author-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder" data-kt-element="follow">Follow</button>
							<!--end::Follow-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-5"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-circle symbol-60px me-4">
							<img src="assets/media/avatars/300-27.jpg" class="" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Arlene McCoy</a>
								<span class="text-gray-400 fw-semibold d-block fs-6">Community</span>
							</div>
							<!--end:Author-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-primary py-2 px-4 fs-7 fw-bold" data-kt-element="follow">Following</button>
							<!--end::Follow-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-5"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Symbol-->
						<div class="symbol symbol-circle symbol-60px me-4">
							<img src="assets/media/avatars/300-30.jpg" class="" alt="" />
						</div>
						<!--end::Symbol-->
						<!--begin::Section-->
						<div class="d-flex align-items-center flex-row-fluid flex-wrap">
							<!--begin:Author-->
							<div class="flex-grow-1 me-2">
								<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Marvin McKinney</a>
								<span class="text-gray-400 fw-semibold d-block fs-6">Community</span>
							</div>
							<!--end:Author-->
							<!--begin::Follow-->
							<button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder" data-kt-element="follow">Follow</button>
							<!--end::Follow-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::List widget 24-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
		<!--begin::Col-->
		<div class="col-xl-8">
			<!--begin::Engage widget 7-->
			<div class="card card-flush h-xl-100">
				<!--begin::Header-->
				<div class="card-header pt-7">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold text-dark">Recent Followers</span>
						<span class="text-gray-400 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
					</h3>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<a href="/admin/account/statements.html" class="btn btn-sm btn-light">History</a>
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Card body-->
				<div class="card-body pt-7">
					<!--begin::Row-->
					<div class="row align-items-end h-100 gx-5 gx-xl-10">
						<!--begin::Col-->
						<div class="col-md-4 mb-11 mb-md-0">
							<!--begin::Overlay-->
							<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/42.jpg">
								<!--begin::Image-->
								<div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3" style="height: 266px;background-image:url('assets/media/stock/900x600/42.jpg"></div>
								<!--end::Image-->
								<!--begin::Action-->
								<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
									<i class="bi bi-eye-fill fs-2x text-white"></i>
								</div>
								<!--end::Action-->
							</a>
							<!--end::Overlay-->
							<!--begin::Info-->
							<div class="m-0">
								<!--begin::Title-->
								<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Feeling Good</a>
								<!--end::Title-->
								<!--begin::Time-->
								<span class="fw-bold fs-6 text-gray-400 d-block lh-1">2 hours</span>
								<!--end::Time-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 mb-11 mb-md-0">
							<!--begin::Overlay-->
							<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/40.jpg">
								<!--begin::Image-->
								<div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3" style="height: 266px;background-image:url('assets/media/stock/900x600/40.jpg"></div>
								<!--end::Image-->
								<!--begin::Action-->
								<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
									<i class="bi bi-eye-fill fs-2x text-white"></i>
								</div>
								<!--end::Action-->
							</a>
							<!--end::Overlay-->
							<!--begin::Info-->
							<div class="m-0">
								<!--begin::Title-->
								<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Both Sides</a>
								<!--end::Title-->
								<!--begin::Time-->
								<span class="fw-bold fs-6 text-gray-400 d-block lh-1">52 mins</span>
								<!--end::Time-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4">
							<!--begin::Overlay-->
							<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/41.jpg">
								<!--begin::Image-->
								<div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3" style="height: 266px;background-image:url('assets/media/stock/900x600/41.jpg"></div>
								<!--end::Image-->
								<!--begin::Action-->
								<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
									<i class="bi bi-eye-fill fs-2x text-white"></i>
								</div>
								<!--end::Action-->
							</a>
							<!--end::Overlay-->
							<!--begin::Info-->
							<div class="m-0">
								<!--begin::Title-->
								<a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Birds in the Sky</a>
								<!--end::Title-->
								<!--begin::Time-->
								<span class="fw-bold fs-6 text-gray-400 d-block lh-1">5 hours</span>
								<!--end::Time-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Engage widget 7-->
		</div>
		<!--end::Col-->
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
							<img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show h-125px" alt="" />
							<img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show h-125px" alt="" />
						</div>
						<!--end::Illustration-->
					</div>
					<!--end::Heading-->
					<!--begin::Links-->
					<div class="text-center mb-1">
						<!--begin::Link-->
						<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_offer_a_deal" data-bs-toggle="modal">Try Now</a>
						<!--end::Link-->
						<!--begin::Link-->
						<a class="btn btn-sm btn-light" href="/admin/account/billing.html">Learn More</a>
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
											<div class="symbol symbol-circle symbol-40px me-3">
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
											<div class="symbol symbol-circle symbol-40px me-3">
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
											<div class="symbol symbol-circle symbol-40px me-3">
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
											<div class="symbol symbol-circle symbol-40px me-3">
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
											<div class="symbol symbol-circle symbol-40px me-3">
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
		<!--begin::Col-->
		<div class="col-xl-4">
			<!--begin::Chart Widget 34-->
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
							<span class="fs-2hx fw-bold text-gray-800 me-3 lh-1 ls-n2">3,274.94</span>
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
						<span class="fs-6 fw-semibold text-gray-400">Your Earnings</span>
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
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_34_tab_1" href="#kt_charts_widget_34_tab_content_1">1d</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item mb-3">
							<!--begin::Link-->
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_34_tab_2" href="#kt_charts_widget_34_tab_content_2">5d</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item mb-3">
							<!--begin::Link-->
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_34_tab_3" href="#kt_charts_widget_34_tab_content_3">1m</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item mb-3">
							<!--begin::Link-->
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_34_tab_4" href="#kt_charts_widget_34_tab_content_4">6m</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="nav-item mb-3">
							<!--begin::Link-->
							<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_34_tab_5" href="#kt_charts_widget_34_tab_content_5">1y</a>
							<!--end::Link-->
						</li>
						<!--end::Item-->
					</ul>
					<!--end::Nav-->
					<!--begin::Tab Content-->
					<div class="tab-content mt-n6">
						<!--begin::Tap pane-->
						<div class="tab-pane fade active show" id="kt_charts_widget_34_tab_content_1">
							<!--begin::Chart-->
							<div id="kt_charts_widget_34_chart_1" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
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
												<a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-danger">-139.34</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,207.03</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-success">+576.24</span>
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
						<div class="tab-pane fade" id="kt_charts_widget_34_tab_content_2">
							<!--begin::Chart-->
							<div id="kt_charts_widget_34_chart_2" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
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
												<a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$1,656.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-success">+124.03</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,865.25</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-primary">+135.03</span>
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
						<div class="tab-pane fade" id="kt_charts_widget_34_tab_content_3">
							<!--begin::Chart-->
							<div id="kt_charts_widget_34_chart_3" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
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
												<a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-primary">-134.06</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-danger">+124.03</span>
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
						<div class="tab-pane fade" id="kt_charts_widget_34_tab_content_4">
							<!--begin::Chart-->
							<div id="kt_charts_widget_34_chart_4" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
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
												<a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,925.45</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-warning">+145.36</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-info">+124.03</span>
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
						<div class="tab-pane fade" id="kt_charts_widget_34_tab_content_5">
							<!--begin::Chart-->
							<div id="kt_charts_widget_34_chart_5" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
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
												<a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$856.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-danger">-243.05</span>
											</td>
										</tr>
										<tr>
											<td>
												<a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
											</td>
											<td class="pe-0 text-end">
												<span class="text-gray-800 fw-bold fs-6 me-1">$2,556.26</span>
											</td>
											<td class="pe-0 text-end">
												<span class="fw-bold fs-6 text-warning">-124.03</span>
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
			<!--end::Chart Widget 34-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
</div>
@endsection
