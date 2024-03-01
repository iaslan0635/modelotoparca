<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
    <!--begin::Aside user-->
    <!--begin::User-->
    <div class="aside-user d-flex align-items-sm-center justify-content-center py-5 ms-8">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px">
            <img src="/assets/media/avatars/blank.png" alt="">
        </div>
        <!--end::Symbol-->

        <!--begin::Wrapper-->
        <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
            <!--begin::Section-->
            <div class="d-flex">
                <!--begin::Info-->
                <div class="flex-grow-1 me-2 overflow-hidden">
                    <!--begin::Username-->
                    <a href="#"
                       class="text-white text-hover-primary fs-6 fw-bold">{{Auth::user()->first_name}} {{Auth::user()->last_name }}</a>
                    <!--end::Username-->

                    <!--begin::Description-->
                    <span
                        class="text-gray-600 fw-semibold d-block fs-8 mb-1 overflow-hidden text-truncate">{{Auth::user()->email}}</span>
                    <!--end::Description-->

                    <!--begin::Label-->
                    <div class="d-flex align-items-center text-success fs-9">
                        <span class="bullet bullet-dot bg-success me-1"></span>
                        Çevrimiçi
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Section-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::User-->
    <!--end::Aside user-->
</div>

<div class="app-sidebar-menu overflow-hidden flex-column-fluid">

    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
         data-kt-scroll-activate="true" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
         data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
         data-kt-scroll-save-state="true">
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
             data-kt-menu-expand="false">
            <div class="menu-item">
                <a class="menu-link" href="{{ route('admin.dashboard') }}">
                    <span class="menu-icon">
                        <span class="svg-icon svg-icon-1 svg-icon-danger">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"/>
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"/>
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"/>
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"/>
                            </svg>
                        </span>
                    </span>
                    <span class="menu-title">Yönetim Paneli</span>
                </a>
            </div>

            <x-sidebar.section title="Stok Yönetimi">
                @include('admin.icons.stock-management')
            </x-sidebar.section>

            @can("Stok Yönetimi.Ürünler.Listele")
                <x-sidebar.item :href="route('admin.products.index')">Ürünler</x-sidebar.item>
            @endcan
            @can("Stok Yönetimi.Kategoriler.Ara")
                <x-sidebar.item :href="route('admin.categories.index')">Kategoriler</x-sidebar.item>
            @endcan
            @can("Stok Yönetimi.Markalar.Ara")
                <x-sidebar.item :href="route('admin.brands.index')">Markalar</x-sidebar.item>
            @endcan

            <x-sidebar.section title="Kullanıcı Yönetimi">@include('admin.icons.user-management')</x-sidebar.section>
            <x-sidebar.item :href="route('admin.user.index')">Kullanıcılar</x-sidebar.item>
            <x-sidebar.item :href="route('admin.employee.index')">Yöneticiler</x-sidebar.item>
            <x-sidebar.item :href="route('admin.role.index')">Roller</x-sidebar.item>


            <x-sidebar.section title="AKTARMA İŞLEMLERİ">@include('admin.icons.export-import')</x-sidebar.section>
            <x-sidebar.item :href="route('admin.import.index')">İçe aktar</x-sidebar.item>


            <x-sidebar.section title="Analizler">@include('admin.icons.analysis')</x-sidebar.section>
            <x-sidebar.item :href="route('admin.analysis.search')">Arama istatistikleri</x-sidebar.item>
            <x-sidebar.item :href="route('admin.analysis.search-replacements')">Arama düzeltmeleri</x-sidebar.item>
            <x-sidebar.item :href="route('admin.cars.index')">Araçlar</x-sidebar.item>


            <x-sidebar.section title="Pazaryerleri"/>
            @canany([
                "Pazaryerleri.Ürünler.Tüm Ürünler",
                "Pazaryerleri.Ürünler.Satıştaki Ürünler",
                "Pazaryerleri.Ürünler.Hatalı Ürünler"
            ])
                <x-sidebar.menu title="Ürünler">
                    <x-slot:icon>@include('admin.icons.products')</x-slot:icon>

                    @can("Pazaryerleri.Ürünler.Tüm Ürünler")
                        <x-sidebar.item :href="route('admin.marketplace-products.index')">Tüm Ürünler</x-sidebar.item>
                    @endcan
                    @can("Pazaryerleri.Ürünler.Satıştaki Ürünler")
                        <x-sidebar.item :href="route('admin.marketplace-products.on-sale')">Satıştaki Ürünler
                        </x-sidebar.item>
                    @endcan
                    @can("Pazaryerleri.Ürünler.Hatalı Ürünler")
                        <x-sidebar.item :href="route('admin.merchant.failed')">Hatalı Ürünler</x-sidebar.item>
                    @endcan
                </x-sidebar.menu>
            @endcanany
            <x-sidebar.menu title="Siparişler">
                <x-slot:icon>@include('admin.icons.orders')</x-slot:icon>

                <x-sidebar.item :href="route('admin.order.marketplace')">Tüm Siparişler</x-sidebar.item>
                <x-sidebar.item href="">Kargodaki Siparişler</x-sidebar.item>
                <x-sidebar.item href="">Tamamlanan Siparişler</x-sidebar.item>
            </x-sidebar.menu>
            <x-sidebar.item :href="route('admin.category-sync')">Kategori Eşitleme</x-sidebar.item>
            <x-sidebar.item :href="route('admin.brand-sync')">Marka Eşitleme</x-sidebar.item>


            <x-sidebar.section title="E-Ticaret"/>
            <x-sidebar.menu title="Siparişler">
                <x-slot:icon>@include('admin.icons.orders')</x-slot:icon>

                <x-sidebar.item href="admin/sales-list">Tüm Siparişler</x-sidebar.item>
                <x-sidebar.item href="admin/sales-list?type=incargo">Kargodaki Siparişler</x-sidebar.item>
                <x-sidebar.item href="admin/sales-list?type=cancelled">İptal Edilenler</x-sidebar.item>
                <x-sidebar.item :href="route('admin.order.marketplace')">Pazaryerleri</x-sidebar.item>
                <x-sidebar.item href="admin/sales-list?type=completed">Tamamlanan Siparişler</x-sidebar.item>
            </x-sidebar.menu>
            <x-sidebar.item :href="route('admin.merchant-setting.index')">Entegrasyon ayarları</x-sidebar.item>


            <x-sidebar.menu title="İadeler">
                <x-slot:icon>@include('admin.icons.orders')</x-slot:icon>

                <x-sidebar.item href="admin/sales-list">İade Talepleri</x-sidebar.item>
                <x-sidebar.item href="admin/sales-list">Tamamlanan İadeler</x-sidebar.item>
            </x-sidebar.menu>


            <x-sidebar.section title="Yönetim"/>
            <x-sidebar.item :href="route('admin.user.index')">Sayfalar</x-sidebar.item>
            <x-sidebar.item href="">Yorumlar</x-sidebar.item>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
