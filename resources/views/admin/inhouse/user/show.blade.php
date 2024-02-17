@extends('admin.inhouse.layouts.kt')
@section('title', "Çalışanı Görüntüle")
@section('kt-content')
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Summary-->
                    <!--begin::User Info-->
                    <div class="d-flex flex-center flex-column py-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            <img src="assets/media/avatars/300-6.jpg" alt="image" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a  class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{ $user->full_name }}</a>
                        <!--end::Name-->
                    </div>
                    <!--end::User Info-->
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Detaylar
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span></div>
                        <span>
                            <a href="{{ route('admin.employee.edit', $user) }}" class="btn btn-sm btn-light-primary">Düzenle</a>
                        </span>
                    </div>
                    <!--end::Details toggle-->
                    <div class="separator"></div>
                    <!--begin::Details content-->
                    <div id="kt_user_view_details" class="collapse show">
                        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Hesap ID</div>
                            <div class="text-gray-600">{{ $user->id }}</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Email</div>
                            <div class="text-gray-600">
                                <a href="mailto:{{ $user->email }}" class="text-gray-600 text-hover-primary">{{ $user->email }}</a>
                            </div>
                            <!--begin::Details item-->
                        </div>
                    </div>
                    <!--end::Details content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Connected Accounts-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <div class="card-title">
                        <h3 class="fw-bold m-0"></h3>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-2">
                    <img src="/assets/media/svg/illustrations/easy/2-dark.svg" class="mx-auto d-block">
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Connected Accounts-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Overview</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#orders_tab">Siparişler</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Events & Logs</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item ms-auto">
                    <!--begin::Action menu-->
                    <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-2 me-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon--></a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="#" class="menu-link px-5">Create invoice</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="#" class="menu-link flex-stack px-5">Create payments
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-5">Apps</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-5">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-5">Statements</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
                                            <span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
                                        </label>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-3"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="#" class="menu-link px-5">Reports</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="#" class="menu-link px-5">Account Settings</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="#" class="menu-link text-danger px-5">Delete customer</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu-->
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade" id="kt_user_view_overview_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card card-flush mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h2 class="mb-1">User's Schedule</h2>
                                <div class="fs-6 fw-semibold text-muted">2 upcoming meetings</div>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
                                    <!--SVG file not found: media/icons/duotune/art/art008.svg-->
                                    Add Schedule</button>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9 pt-4">
                            <!--begin::Dates-->
                            <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                        <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 fw-bolder">21</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                        <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 fw-bolder">22</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                        <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 fw-bolder">23</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                        <span class="opacity-50 fs-7 fw-semibold">We</span>
                                        <span class="fs-6 fw-bolder">24</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                        <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                        <span class="fs-6 fw-bolder">25</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                        <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                        <span class="fs-6 fw-bolder">26</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                        <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 fw-bolder">27</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                        <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 fw-bolder">28</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                        <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 fw-bolder">29</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                        <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 fw-bolder">30</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_10">
                                        <span class="opacity-50 fs-7 fw-semibold">We</span>
                                        <span class="fs-6 fw-bolder">31</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                            </ul>
                            <!--end::Dates-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Day-->
                                <div id="kt_schedule_day_0" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">10:00 - 11:00
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Peter Marcus</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">13:00 - 14:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Terry Robins</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">14:30 - 15:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">10:00 - 11:00
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Mark Randall</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">9:00 - 10:00
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">10:00 - 11:00
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">David Stevenson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee Review Approvals</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Sean Bean</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">13:00 - 14:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee Review Approvals</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Terry Robins</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_2" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Sean Bean</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">13:00 - 14:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Naomi Hayabusa</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">11:00 - 11:45
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">David Stevenson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">13:00 - 14:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Yannis Gloverson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_3" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">9:00 - 10:00
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Naomi Hayabusa</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Peter Marcus</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Karina Clarke</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_4" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">14:30 - 15:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Naomi Hayabusa</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">10:00 - 11:00
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Bob Harris</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">9:00 - 10:00
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_5" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">11:00 - 11:45
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">11:00 - 11:45
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">11:00 - 11:45
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">David Stevenson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_6" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Creative Content Initiative</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Karina Clarke</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">13:00 - 14:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Mark Randall</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">11:00 - 11:45
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee Review Approvals</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Naomi Hayabusa</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_7" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">David Stevenson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">13:00 - 14:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Kendell Trevor</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">David Stevenson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">14:30 - 15:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Sean Bean</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">13:00 - 14:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_8" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee Review Approvals</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Sean Bean</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">10:00 - 11:00
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Peter Marcus</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Naomi Hayabusa</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_9" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">11:00 - 11:45
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Sean Bean</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">9:00 - 10:00
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Terry Robins</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_10" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Bob Harris</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">11:00 - 11:45
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Creative Content Initiative</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">David Stevenson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-6">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">11:00 - 11:45
                                                <span class="fs-7 text-muted text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Karina Clarke</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Tasks-->
                    <div class="card card-flush mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h2 class="mb-1">User's Tasks</h2>
                                <div class="fs-6 fw-semibold text-muted">Total 25 tasks in backlog</div>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor" />
                                            <rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor" />
                                            <rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor" />
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add Task</button>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center position-relative mb-7">
                                <!--begin::Label-->
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                <!--end::Label-->
                                <!--begin::Details-->
                                <div class="fw-semibold ms-5">
                                    <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Create FureStibe branding logo</a>
                                    <!--begin::Info-->
                                    <div class="fs-7 text-muted">Due in 1 day
                                        <a href="#">Karina Clark</a></div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Task menu-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Update Status</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fs-6 fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Task menu-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center position-relative mb-7">
                                <!--begin::Label-->
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                <!--end::Label-->
                                <!--begin::Details-->
                                <div class="fw-semibold ms-5">
                                    <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Schedule a meeting with FireBear CTO John</a>
                                    <!--begin::Info-->
                                    <div class="fs-7 text-muted">Due in 3 days
                                        <a href="#">Rober Doe</a></div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Task menu-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Update Status</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fs-6 fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Task menu-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center position-relative mb-7">
                                <!--begin::Label-->
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                <!--end::Label-->
                                <!--begin::Details-->
                                <div class="fw-semibold ms-5">
                                    <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">9 Degree Project Estimation</a>
                                    <!--begin::Info-->
                                    <div class="fs-7 text-muted">Due in 1 week
                                        <a href="#">Neil Owen</a></div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Task menu-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Update Status</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fs-6 fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Task menu-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center position-relative mb-7">
                                <!--begin::Label-->
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                <!--end::Label-->
                                <!--begin::Details-->
                                <div class="fw-semibold ms-5">
                                    <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Dashboard UI & UX for Leafr CRM</a>
                                    <!--begin::Info-->
                                    <div class="fs-7 text-muted">Due in 1 week
                                        <a href="#">Olivia Wild</a></div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Task menu-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Update Status</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fs-6 fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Task menu-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center position-relative">
                                <!--begin::Label-->
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                <!--end::Label-->
                                <!--begin::Details-->
                                <div class="fw-semibold ms-5">
                                    <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Mivy App R&D, Meeting with clients</a>
                                    <!--begin::Info-->
                                    <div class="fs-7 text-muted">Due in 2 weeks
                                        <a href="#">Sean Bean</a></div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Task menu-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Update Status</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fs-6 fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Task menu-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Tasks-->
                </div>
                <!--end:::Tab pane-->
                <!--begin:::Tab pane-->
                <div class="tab-pane fade show active" id="orders_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Siparişler</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
                <!--begin:::Tab pane-->
                <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Login Sessions</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Filter-->
                                <button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr077.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="4" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            <path d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z" fill="currentColor" />
                                            <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Sign out all sessions</button>
                                <!--end::Filter-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                    <!--begin::Table head-->
                                    <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                    <!--begin::Table row-->
                                    <tr class="text-start text-muted text-uppercase gs-0">
                                        <th class="min-w-100px">Location</th>
                                        <th>Device</th>
                                        <th>IP Address</th>
                                        <th class="min-w-125px">Time</th>
                                        <th class="min-w-70px">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <!--begin::Invoice=-->
                                        <td>Australia</td>
                                        <!--end::Invoice=-->
                                        <!--begin::Status=-->
                                        <td>Chome - Windows</td>
                                        <!--end::Status=-->
                                        <!--begin::Amount=-->
                                        <td>207.14.17.133</td>
                                        <!--end::Amount=-->
                                        <!--begin::Date=-->
                                        <td>23 seconds ago</td>
                                        <!--end::Date=-->
                                        <!--begin::Action=-->
                                        <td>Current session</td>
                                        <!--end::Action=-->
                                    </tr>
                                    <tr>
                                        <!--begin::Invoice=-->
                                        <td>Australia</td>
                                        <!--end::Invoice=-->
                                        <!--begin::Status=-->
                                        <td>Safari - iOS</td>
                                        <!--end::Status=-->
                                        <!--begin::Amount=-->
                                        <td>207.19.13.168</td>
                                        <!--end::Amount=-->
                                        <!--begin::Date=-->
                                        <td>3 days ago</td>
                                        <!--end::Date=-->
                                        <!--begin::Action=-->
                                        <td>
                                            <a href="#" data-kt-users-sign-out="single_user">Sign out</a>
                                        </td>
                                        <!--end::Action=-->
                                    </tr>
                                    <tr>
                                        <!--begin::Invoice=-->
                                        <td>Australia</td>
                                        <!--end::Invoice=-->
                                        <!--begin::Status=-->
                                        <td>Chrome - Windows</td>
                                        <!--end::Status=-->
                                        <!--begin::Amount=-->
                                        <td>207.49.16.48</td>
                                        <!--end::Amount=-->
                                        <!--begin::Date=-->
                                        <td>last week</td>
                                        <!--end::Date=-->
                                        <!--begin::Action=-->
                                        <td>Expired</td>
                                        <!--end::Action=-->
                                    </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Logs</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <button type="button" class="btn btn-sm btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
                                            <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
                                            <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Download Report</button>
                                <!--end::Button-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-0">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
                                    <!--begin::Table body-->
                                    <tbody>
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-success">200 OK</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoices/in_7515_5438/payment</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">10 Nov 2022, 2:40 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-success">200 OK</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoices/in_6509_8838/payment</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">21 Feb 2022, 10:10 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-danger">500 ERR</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoice/in_1466_9864/invalid</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">10 Mar 2022, 9:23 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-success">200 OK</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoices/in_7050_7062/payment</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">21 Feb 2022, 11:05 am</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-success">200 OK</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoices/in_6509_8838/payment</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">21 Feb 2022, 11:30 am</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Events</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <button type="button" class="btn btn-sm btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
                                            <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
                                            <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Download Report</button>
                                <!--end::Button-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
                                <!--begin::Table body-->
                                <tbody>
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 6:43 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2022, 10:10 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2022, 11:05 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a>has made payment to
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2022, 5:20 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">Invoice
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
                                        <span class="badge badge-light-warning me-1">Pending</span>to
                                        <span class="badge badge-light-info">In Progress</span></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2022, 5:20 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2022, 6:43 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">Invoice
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
                                        <span class="badge badge-light-danger">Declined</span></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2022, 5:20 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">Invoice
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
                                        <span class="badge badge-light-succees me-1">In Transit</span>to
                                        <span class="badge badge-light-success">Approved</span></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2022, 11:05 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">Invoice
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is
                                        <span class="badge badge-light-info">In Progress</span></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2022, 5:30 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">Invoice
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
                                        <span class="badge badge-light-danger">Declined</span></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2022, 6:05 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
@endsection
