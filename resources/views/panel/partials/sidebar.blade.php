<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="https://site.modelotoparca.com/storage/imported_images/dark-logo.png" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="https://site.modelotoparca.com/storage/imported_images/dark-logo.png" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="https://site.modelotoparca.com/storage/imported_images/dark-logo.png" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="https://site.modelotoparca.com/storage/imported_images/dark-logo.png" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <!-- sidebar.blade.php -->
    <div id="scrollbar">
        <div class="container-fluid">
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title">Yönetim</li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-dashboard-line"></i> <span>Kontrol Paneli</span>
                    </a>
                </li>

                <!-- Ürün Yönetimi -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuProducts" data-bs-toggle="collapse" role="button">
                        <i class="ri-box-3-line"></i> <span>Ürünler</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuProducts">
                        <ul class="nav nav-sm flex-column">
                            <li><a href="#" class="nav-link">Tüm Ürünler</a></li>
                            <li><a href="#" class="nav-link">Ürün Ekle</a></li>
                            <li><a href="{{route('admin.categories.index')}}" class="nav-link">Kategoriler</a></li>
                            <li><a href="#" class="nav-link">Markalar</a></li>
                            <li><a href="#" class="nav-link">Stok Takibi</a></li>
                            <li><a href="#" class="nav-link">Varyasyonlar</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Sipariş Yönetimi -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuOrders" data-bs-toggle="collapse" role="button">
                        <i class="ri-shopping-cart-line"></i> <span>Siparişler</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuOrders">
                        <ul class="nav nav-sm flex-column">
                            <li><a href="#" class="nav-link">Sipariş Listesi</a></li>
                            <li><a href="#" class="nav-link">İade Talepleri</a></li>
                            <li><a href="#" class="nav-link">Faturalar</a></li>
                            <li><a href="#" class="nav-link">Kargo Takibi</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Müşteri Yönetimi -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuCustomers" data-bs-toggle="collapse" role="button">
                        <i class="ri-user-line"></i> <span>Müşteriler</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuCustomers">
                        <ul class="nav nav-sm flex-column">
                            <li><a href="#" class="nav-link">Müşteri Listesi</a></li>
                            <li><a href="#" class="nav-link">Yorumlar</a></li>
                            <li><a href="#" class="nav-link">Segmentasyon</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Pazaryeri Entegrasyonları -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuMarketplaces" data-bs-toggle="collapse" role="button">
                        <i class="ri-store-line"></i> <span>Pazaryeri</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuMarketplaces">
                        <ul class="nav nav-sm flex-column">
                            <li><a href="{{ route('admin.panel.marketplace.index') }}" class="nav-link">Pazaryerleri</a></li>
                            <li><a href="#" class="nav-link">Trendyol</a></li>
                            <li><a href="#" class="nav-link">Hepsiburada</a></li>
                            <li><a href="#" class="nav-link">Amazon</a></li>
                            <li><a href="{{ route('admin.panel.marketplace.product-mapping') }}" class="nav-link">Ürün Eşleştirme</a></li>
                            <li><a href="#" class="nav-link">Sipariş Senkronizasyonu</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Kampanyalar -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuDiscounts" data-bs-toggle="collapse" role="button">
                        <i class="ri-price-tag-3-line"></i> <span>Kampanyalar</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuDiscounts">
                        <ul class="nav nav-sm flex-column">
                            <li><a href="#" class="nav-link">İndirimler</a></li>
                            <li><a href="#" class="nav-link">Kuponlar</a></li>
                            <li><a href="#" class="nav-link">Sepet Kuralları</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Raporlar -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuReports" data-bs-toggle="collapse" role="button">
                        <i class="ri-bar-chart-line"></i> <span>Raporlar</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuReports">
                        <ul class="nav nav-sm flex-column">
                            <li><a href="#" class="nav-link">Satış Raporları</a></li>
                            <li><a href="#" class="nav-link">Stok Raporları</a></li>
                            <li><a href="#" class="nav-link">Müşteri Raporları</a></li>
                            <li><a href="#" class="nav-link">Kargo Raporları</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Kullanıcılar & Rolleri -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuUsers" data-bs-toggle="collapse" role="button">
                        <i class="ri-team-line"></i> <span>Kullanıcılar</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuUsers">
                        <ul class="nav nav-sm flex-column">
                            <li><a href="#" class="nav-link">Kullanıcı Listesi</a></li>
                            <li><a href="#" class="nav-link">Roller</a></li>
                            <li><a href="#" class="nav-link">İzinler</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Site Yönetimi -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuSite" data-bs-toggle="collapse" role="button">
                        <i class="ri-global-line"></i> <span>Site Yönetimi</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuSite">
                        <ul class="nav nav-sm flex-column">
                            <li><a href="#" class="nav-link">Sayfalar</a></li>
                            <li><a href="#" class="nav-link">Slider</a></li>
                            <li><a href="#" class="nav-link">İletışim Bilgileri</a></li>
                            <li><a href="#" class="nav-link">Footer İçeriği</a></li>
                            <li><a href="#" class="nav-link">KVKK / Gizlilik</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Ayarlar -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuSettings" data-bs-toggle="collapse" role="button">
                        <i class="ri-settings-3-line"></i> <span>Ayarlar</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuSettings">
                        <ul class="nav nav-sm flex-column">
                            <li><a href="#" class="nav-link">Genel Ayarlar</a></li>
                            <li><a href="#" class="nav-link">Mail Ayarları</a></li>
                            <li><a href="#" class="nav-link">Bakım Modu</a></li>
                            <li><a href="#" class="nav-link">Dil Yönetimi</a></li>
                            <li><a href="#" class="nav-link">Loglar</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
