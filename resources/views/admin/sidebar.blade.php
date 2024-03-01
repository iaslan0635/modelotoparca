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

            <x-sidebar.section title="Stok Yönetimi">@include('admin.icons.stock-management')</x-sidebar.section>

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
<<<<<<< HEAD
            @can("Pazaryerleri.Ürünler.Kategori Eşitleme")
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route("admin.category-sync") }}">
                    <span class="menu-icon">
                        <!--begin::Svg Icon-->
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Kategori Eşitleme</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            @endcan
            @can("Pazaryerleri.Marka Eşitleme")
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route("admin.brand-sync") }}">
                    <span class="menu-icon">
                        <!--begin::Svg Icon-->
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Marka Eşitleme</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            @endcan

            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">E-Ticaret</span>
                </div>
                <!--end:Menu content-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                    fill="currentColor"/>
                                <path opacity="0.3"
                                      d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                      fill="currentColor"/>
                                <path opacity="0.3"
                                      d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                      fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Siparişler</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="admin/sales-list">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tüm Siparişler</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="admin/sales-list?type=incargo">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Kargoda ki Siparişler</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="admin/sales-list?type=cancelled">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">İptal Edilenler</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('admin.order.marketplace') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Pazaryerleri</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="admin/sales-list?type=completed">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tamamlanan Siparişler</span>
                        </a>
                        <!--end:Menu link-->
                    </div>

                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route("admin.merchant-setting.index") }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Entegrasyon ayarları</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                      d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                      fill="currentColor"></path>
                                <rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor"></rect>
                                <rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor"></rect>
                            </svg>
                        </span>
                    </span>
                    <span class="menu-title">İadeler</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="admin/sales-list">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">İade Talepleri</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="admin/sales-list">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tamamlanan İadeler</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">Yönetim</span>
                </div>
                <!--end:Menu content-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route("admin.user.index") }}">
                    <span class="menu-icon">
                        <!--begin::Svg Icon-->
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Sayfalar</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route("admin.user.index") }}">
                    <span class="menu-icon">
                        <!--begin::Svg Icon-->
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Yorumlar</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
=======


            <x-sidebar.section title="Yönetim"/>
            <x-sidebar.item :href="route('admin.user.index')">Sayfalar</x-sidebar.item>
            <x-sidebar.item href="">Yorumlar</x-sidebar.item>
>>>>>>> 562138472329ec73a1eb1b0fdd67d9056a8738bd
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
