<!DOCTYPE html>
<html lang="tr" data-layout="horizontal" data-topbar="light" data-sidebar-size="lg">
<head>
    <meta charset="utf-8" />
    <title>@yield('title') | ModelSepeti Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ModelSepeti Yönetim Paneli" name="description" />
    <meta content="ModelSepeti" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('panel/images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('panel/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('panel/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('panel/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('panel/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('panel/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    @yield('css')
    @livewireStyles
</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="{{ route('dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('panel/images/logo-sm.png') }}" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="{{ asset('panel/images/logo-dark.png') }}" alt="" height="17">
                                </span>
                        </a>

                        <a href="{{ route('dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('panel/images/logo-sm.png') }}" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="{{ asset('panel/images/logo-light.png') }}" alt="" height="17">
                                </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-md-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Ara..." autocomplete="off"
                                   id="search-options" value="">
                            <span class="mdi mdi-magnify search-widget-icon"></span>
                            <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                  id="search-close-options"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <i class="bx bx-search fs-22"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                             aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Ara..."
                                               aria-label="Search Result">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown ms-1 topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-category-alt fs-22'></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                            <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fw-semibold fs-15">Hızlı Menü</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('panel/images/brands/github.png') }}" alt="Github">
                                            <span>Ürünler</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('panel/images/brands/bitbucket.png') }}" alt="bitbucket">
                                            <span>Siparişler</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('panel/images/brands/dribbble.png') }}" alt="dribbble">
                                            <span>Kullanıcılar</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <i class='bx bx-bell fs-22'></i>
                            <span
                                class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span
                                    class="visually-hidden">okunmamış mesaj</span></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                             aria-labelledby="page-header-notifications-dropdown">

                            <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold text-white">Bildirimler</h6>
                                        </div>
                                        <div class="col-auto dropdown-tabs">
                                            <span class="badge badge-soft-light fs-13">3 Yeni</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-body" style="position: relative;">
                                <div class="tab-content" id="notificationItemsTabContent">
                                    <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <!-- Notification items would go here -->
                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3">
                                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                                <i class="bx bx-cart"></i>
                                                            </span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 lh-base">Yeni sipariş alındı
                                                                <span class="text-secondary">2 saat önce</span>
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-13 text-muted">
                                                            SU-143 numaralı ürün <span class="fw-semibold">TS-142</span> referansı ile satıldı
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="{{ asset('panel/images/users/avatar-1.jpg') }}"
                                         alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Walter White</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Yönetici</span>
                                    </span>
                                </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Hoş Geldin Walter!</h6>
                            <a class="dropdown-item" href="pages-profile.html"><i
                                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Profil</span></a>
                            <a class="dropdown-item" href="auth-logout-basic.html"><i
                                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle" data-key="t-logout">Çıkış</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <div class="navbar-brand-box">
            <!-- Logo -->
            <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('panel/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="{{ asset('panel/images/logo-dark.png') }}" alt="" height="17">
                    </span>
            </a>
            <!-- End Logo -->
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('dashboard') }}" class="nav-link" data-key="t-analytics">
                                        Ana Sayfa
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarProducts">
                            <i class="ri-store-2-line"></i> <span data-key="t-products">Ürün Yönetimi</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarProducts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-products-list">
                                        Ürün Listesi
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-product-create">
                                        Yeni Ürün Ekle
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-categories">
                                        Kategoriler
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarOrders">
                            <i class="ri-shopping-cart-2-line"></i> <span data-key="t-orders">Sipariş Yönetimi</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarOrders">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-orders-list">
                                        Sipariş Listesi
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-order-create">
                                        Yeni Sipariş Oluştur
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarUsers" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarUsers">
                            <i class="ri-user-2-line"></i> <span data-key="t-users">Kullanıcı Yönetimi</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarUsers">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-users-list">
                                        Kullanıcı Listesi
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-user-create">
                                        Yeni Kullanıcı Ekle
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-roles">
                                        Roller ve İzinler
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarMarketplaces" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarMarketplaces">
                            <i class="ri-store-3-line"></i> <span data-key="t-marketplaces">Pazaryerleri</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarMarketplaces">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-marketplace-list">
                                        Pazaryeri Listesi
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-marketplace-products">
                                        Pazaryeri Ürünleri
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarReports" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarReports">
                            <i class="ri-line-chart-line"></i> <span data-key="t-reports">Raporlar</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarReports">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-sales-report">
                                        Satış Raporları
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-product-report">
                                        Ürün Raporları
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="">
                            <i class="ri-settings-3-line"></i> <span data-key="t-settings">Ayarlar</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © ModelSepeti.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by ModelSepeti
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{ asset('panel/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('panel/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('panel/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('panel/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('panel/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('panel/js/plugins.js') }}"></script>

<!-- App js -->
<script src="{{ asset('panel/js/app.js') }}"></script>

@yield('js')
@livewireScripts
</body>
</html>
