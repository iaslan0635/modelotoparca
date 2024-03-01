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

    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
         data-kt-scroll-activate="true" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
         data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
         data-kt-scroll-save-state="true">
        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
             data-kt-menu-expand="false">
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('admin.dashboard') }}">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-danger">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<rect x="2" y="2" width="9" height="9"
                                                                                  rx="2" fill="currentColor"/>
																			<rect opacity="0.3" x="13" y="2" width="9"
                                                                                  height="9" rx="2"
                                                                                  fill="currentColor"/>
																			<rect opacity="0.3" x="13" y="13" width="9"
                                                                                  height="9" rx="2"
                                                                                  fill="currentColor"/>
																			<rect opacity="0.3" x="2" y="13" width="9"
                                                                                  height="9" rx="2"
                                                                                  fill="currentColor"/>
																		</svg>
													</span>
                                                <!--end::Svg Icon-->
											</span>
                    <span class="menu-title">Yönetim Paneli</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <x-sidebar.section title="Stok Yönetimi">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                        fill="currentColor"></path>
                    <path
                        d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                        fill="currentColor"></path>
                    <path opacity="0.3"
                          d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                          fill="currentColor"></path>
                    <path opacity="0.3"
                          d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                          fill="currentColor"></path>
                </svg>
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

            <x-sidebar.section title="Kullanıcı Yönetimi">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                        fill="currentColor"></path>
                    <path opacity="0.3"
                          d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                          fill="currentColor"></path>
                </svg>
            </x-sidebar.section>

            <x-sidebar.item :href="route('admin.user.index')">Kullanıcılar</x-sidebar.item>
            <x-sidebar.item :href="route('admin.employee.index')">Yöneticiler</x-sidebar.item>
            <x-sidebar.item :href="route('admin.role.index')">Roller</x-sidebar.item>
            <x-sidebar.section title="AKTARMA İŞLEMLERİ">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
                        fill="currentColor"></path>
                    <path opacity="0.3"
                          d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
                          fill="currentColor"></path>
                </svg>
            </x-sidebar.section>

            <x-sidebar.item :href="route('admin.import.index')">İçe aktar</x-sidebar.item>

            <x-sidebar.section title="Analizler">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z"
                        fill="currentColor"/>
                    <path opacity="0.3"
                          d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z"
                          fill="currentColor"/>
                </svg>
            </x-sidebar.section>

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
                    <x-slot:icon>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    </x-slot:icon>

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
                <x-slot:icon>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3"
                              d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                              fill="currentColor"></path>
                        <rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor"></rect>
                        <rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor"></rect>
                    </svg>
                </x-slot:icon>

                <x-sidebar.item :href="route('admin.order.marketplace')">Tüm Siparişler</x-sidebar.item>
                <x-sidebar.item href="">Kargodaki Siparişler</x-sidebar.item>
                <x-sidebar.item href="">Tamamlanan Siparişler</x-sidebar.item>
            </x-sidebar.menu>

            <x-sidebar.item :href="route('admin.category-sync')">Kategori Eşitleme</x-sidebar.item>
            <x-sidebar.item :href="route('admin.brand-sync')">Marka Eşitleme</x-sidebar.item>


            <x-sidebar.section title="E-Ticaret"/>

            <x-sidebar.menu title="Siparişler">
                <x-slot:icon>
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
                </x-slot:icon>

                <x-sidebar.item href="admin/sales-list">Tüm Siparişler</x-sidebar.item>
                <x-sidebar.item href="admin/sales-list?type=incargo">Kargodaki Siparişler</x-sidebar.item>
                <x-sidebar.item href="admin/sales-list?type=cancelled">İptal Edilenler</x-sidebar.item>
                <x-sidebar.item :href="route('admin.order.marketplace')">Pazaryerleri</x-sidebar.item>
                <x-sidebar.item href="admin/sales-list?type=completed">Tamamlanan Siparişler</x-sidebar.item>
            </x-sidebar.menu>

            <x-sidebar.item :href="route('admin.merchant-setting.index')">Entegrasyon ayarları</x-sidebar.item>

            <x-sidebar.menu title="İadeler">
                <x-slot:icon>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3"
                              d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                              fill="currentColor"></path>
                        <rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor"></rect>
                        <rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor"></rect>
                    </svg>
                </x-slot:icon>

                <x-sidebar.item href="admin/sales-list">İade Talepleri</x-sidebar.item>
                <x-sidebar.item href="admin/sales-list">Tamamlanan İadeler</x-sidebar.item>
            </x-sidebar.menu>

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
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
