<div class="app-content flex-column-fluid">
    <x-wire-loading class="bg-primary" />
    <!--begin::Content container-->
    <div class="app-container container-xxl">
        <!--begin::Form-->
        <!--begin::Aside column-->
        <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
            <!--begin::Order details-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Sipariş Detayları</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="d-flex flex-column gap-10">
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Label-->
                            <label class="form-label">Sipariş Numarası</label>
                            <!--end::Label-->
                            <!--begin::Auto-generated ID-->
                            <div class="fw-bold fs-3">#{{ $order->id }}</div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">Sipariş Durumu</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <livewire:select2 :options="collect(\App\Enums\OrderStatuses::cases())
                                    ->mapWithKeys(fn ($status) => [$status->value => __('status.'.$status->value)])
                                    ->all()" wire:model="form.status" />
                            <!--end::Select2-->
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <!--end::Card header-->
            </div>
            <!--end::Order details-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
            <div class="row">
                <div class="col">
                    <div class="card card-flush mx-1 py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Sipariş Ürünleri</h2>
                            </div>
                            <div class="card-toolbar">
                                @if (!$addMode)
                                    <button class="btn btn-primary" wire:click="$set('addMode', true)">
                                        Ürün ekle
                                    </button>
                                @endif
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-column gap-10">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5"
                                       id="kt_ecommerce_edit_order_product_table">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-200px">Ürün</th>
                                        <th class="min-w-100px text-end pe-5">Adet</th>
                                        <th class="min-w-100px text-end pe-5">Toplam fiyat</th>
                                        <th class="min-w-100px text-end pe-5">İşlemler</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-semibold text-gray-600">
                                    @foreach($items as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a class="symbol symbol-50px">
                                                        <span class="symbol-label" style="background-image:url({{ $item->product?->imageUrl() }});"></span>
                                                    </a>
                                                    <div class="ms-5">
                                                        <a class="text-gray-800 text-hover-primary fs-5 fw-bold">
                                                            {{ $item->product_data["title"] }}
                                                        </a>
                                                        <div class="fw-semibold fs-7">
                                                            Price:
                                                            <span>
                                                                {{ $item->formatted_price }}
                                                            </span>
                                                        </div>
                                                        <div class="text-muted fs-7">SKU: {{ $item->product_data["sku"] }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5">
                                                <span class="fw-bold ms-3">
                                                    {{ $item->quantity }}
                                                </span>
                                            </td>
                                            <td class="text-end pe-5">
                                                <span class="fw-bold ms-3">
                                                    {{ $item->formatted_total_price }}
                                                </span>
                                            </td>
                                            <td class="text-end pe-5">
                                                <span class="fw-bold ms-3">
                                                    İşlemler
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                </div>
                @if($addMode)
                    <div class="col-6">
                        <div class="card card-flush mx-1 py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Ürün ekle</h2>
                                </div>
                                <div class="card-toolbar">
                                    <button class="btn btn-danger" wire:click="$set('addMode', false)">
                                        Kapat
                                    </button>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="d-flex flex-column gap-10">
                                    <!--begin::Search products-->
                                    <div class="d-flex align-items-center position-relative mb-n7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                      rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
                                                <path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="currentColor"/>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <input type="text" wire:model.live.debounce="search" class="form-control form-control-solid w-100 w-lg-50 ps-14" placeholder="Arama yaparak başlayın"/>
                                    </div>
                                    <!--end::Search products-->
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5"
                                           id="kt_ecommerce_edit_order_product_table">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-200px">Ürün</th>
                                            <th class="min-w-100px text-end pe-5">Stok adeti</th>
                                            <th class="min-w-100px text-end pe-5">İşlemler</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                        @foreach($searchResults as $product)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="symbol symbol-50px">
                                                            <span class="symbol-label" style="background-image:url({{ $product->imageUrl() }});"></span>
                                                        </a>
                                                        <div class="ms-5">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">
                                                                {{ $product->title }}
                                                            </a>
                                                            <div class="fw-semibold fs-7">
                                                                Price:
                                                                <span>
                                                                    {{ $product->price?->sellingPrice() }}
                                                                </span>
                                                            </div>
                                                            <div class="text-muted fs-7">SKU: {{ $product->sku }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-5">
                                                    <span class="fw-bold ms-3">
                                                        {{ $product->quantity }}
                                                    </span>
                                                </td>
                                                <td class="text-end pe-5">
                                                    <span class="fw-bold ms-3">
                                                        <button wire:click="addProduct({{$product->id}})" class="btn btn-primary">Ekle</button>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card header-->
                        </div>
                    </div>
                @endif
            </div>
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
                    <span class="indicator-label">Değişiklikleri Kaydet</span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
        <!--end::Form-->
    </div>
    <!--end::Content container-->
</div>
