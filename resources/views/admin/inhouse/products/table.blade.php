@extends('admin.inhouse.layouts.kt')
@section('kt-content')
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                  transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor"/>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <form>
                        <input type="text" name="search"
                               class="form-control form-control-solid w-250px ps-14" placeholder="Ürün Ara"
                               value="{{ \request()->input("search") }}"/>
                    </form>
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <form class="card-toolbar flex-row-fluid justify-content-end gap-5">
                @if($usingSearch)
                    <span style="color: rgb(185,28,28);" class="fw-bold fs-7 text-uppercase">Arama yapılırken filtreler yok sayılıyor</span>
                @else
                    <div class="w-100 mw-250px">
                        <!--begin::Select2-->
                        <select class="form-select form-select-solid" id="brand-filter-select" multiple
                                data-hide-search="true" data-placeholder="Marka" name="brands">
                            <option value="all">Tüm markalar</option>
                            @foreach($brands as $brand)
                                @if($brand->id == 0) @continue @endif
                                <option @if(request()->input("brand") == $brand->id) selected @endif value="{{ $brand->id }}">
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                        <!--end::Select2-->
                    </div>
                    <div class="w-100 mw-250px">
                        <!--begin::Select2-->
                        <select class="form-select form-select-solid" id="status-filter-select" multiple
                                data-hide-search="true" data-placeholder="Ürün Filtresi" name="filters">
                            <option value="all">Tüm ürünler</option>
                            @php $selected = fn ($value) => $value == request()->input("filter") ? 'selected' : '' @endphp
                            @foreach($filterConstraintsToShow as $key => $value)
                                <option {{ $selected($key) }} value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <!--end::Select2-->
                    </div>
                @endif
                <button class="btn btn-primary">Filtrele</button>
            </form>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                   data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                   value="1"/>
                        </div>
                    </th>
                    <th class="pe-0 text-start">id</th>
                    <th class="pe-0 text-start">Marka</th>
                    <th class="pe-0 min-w-200px">Ürün</th>
                    <th class="pe-0 text-end min-w-100px">SKU</th>
                    <th class="pe-0 text-end min-w-70px">Miktar</th>
                    <th class="pe-0 text-end min-w-100px">Fiyat</th>
                    <th class="pe-0 text-end min-w-100px">Durum</th>
                    <th class="pe-0 text-end min-w-100px">Pazaryerleri</th>
                    <th class="pe-0 text-end min-w-70px">İşlem</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-semibold text-gray-600">
                @foreach($products as $product)
                    @php $link = route("admin.products.show", $product) @endphp
                        <!--begin::Table row-->
                    <tr>
                        <!--begin::Checkbox-->
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <!--end::Checkbox-->
                        <!--begin::logicref=-->
                        <td>
                            <span class="fw-bold">{{ $product->id }}</span>
                        </td>
                        <!--end::logicref=-->
                        <!--begin::brand=-->
                        <td class="text-start pe-0">
                            <span class="fw-bold">{{ $product->brand?->name}}</span>
                        </td>
                        <!--end::brand=-->
                        <!--begin::Category=-->
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="{{ $link }}" class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url({{ $product->imageUrl() }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="{{ $link }}"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">{{ $product->title }}</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <!--end::Category=-->
                        <!--begin::SKU=-->
                        <td class="text-end pe-0">
                            <span class="fw-bold">{{ $product->producercode }}</span>
                        </td>
                        <!--end::SKU=-->
                        <!--begin::Qty=-->
                        <td class="text-end pe-0" data-order="33">
                            <span class="fw-bold ms-3">{{ $product->quantity }}</span>
                        </td>
                        <!--end::Qty=-->
                        <!--begin::Price=-->
                        <td class="text-end pe-0">
                            <span class="fw-bold text-dark">{{ $product->price?->formatted_price }}</span>
                        </td>
                        <!--end::Price=-->
                        <!--begin::Status=-->
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Yayında</div>
                            <!--end::Badges-->
                        </td>
                        <!--end::Status=-->
                        <!--begin::Status=-->
                        <td class="text-end pe-0">
                            @forelse($product->merchants as $merchant)
                                <!--begin::Badges-->
                                <div
                                    class="badge badge-light-success">{{ ucfirst($merchant->merchant) }}</div>
                                <!--end::Badges-->
                            @empty
                                @if($product->ecommerce)
                                    <div class="badge badge-danger">Henüz e-ticaret sitelerine eklenmemiş</div>
                                @else
                                    <div class="badge badge-secondary">E-ticarete kapalı</div>
                                @endif
                            @endforelse
                        </td>
                        <!--end::Status=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">İşlem
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ $link }}" class="menu-link px-3">Düzenle</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->
                    </tr>
                    <!--end::Table row-->
                @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            {{ $products->links() }}
        </div>
        <!--end::Card body-->
    </div>
@endsection
@push('custom_scripts')
    <script src="assets/js/custom/apps/ecommerce/catalog/products.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>

    <script>
        $(() => {
                const navigate = param => event => {
                    const dataId = event.params.data.id
                    const url = new URL(window.location.href)
                    url.searchParams.set(param, dataId)
                    url.searchParams.delete("page")
                    window.location.href = url.toString()
                }

                $("#status-filter-select").select2({
                    minimumResultsForSearch: -1,
                    allowClear: true,
                })

                $("#brand-filter-select").select2({
                    allowClear: true,
                })
            }
        )
    </script>
@endpush
