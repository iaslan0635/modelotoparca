@extends('admin.layout')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit
                        Product</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="admin/index" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">eCommerce</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Catalog</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="{{ route('product.show', $product) }}"
                       class="btn btn-sm fw-bold btn-secondary">
                        Mağaza sayfası
                    </a>
                    <a href="{{ route('admin.products.edit.rerunBot', $product) }}"
                       class="btn btn-sm fw-bold btn-primary">
                        Bot ile Yeniden Çek
                    </a>
                    <livewire:admin.product.create-merchant :product="$product"/>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Form-->
                <div class="form d-flex flex-column flex-lg-row">
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <x-admin.image-manager :images="$product->images" :readonly_images="$product->imageUrl()"
                                               :upload_action="route('admin.categories.edit.image', $product)"/>
                        <livewire:admin.market-place-status :product="$product"/>
                    </div>
                    <!--end::Aside column-->
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active"
                                   data-bs-toggle="tab" href="#bot_connections">Bot Eşleşmeleri
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#details">Ürün bilgileri
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#oems">Oem Kodlar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#cars">Uyumlu Araçlar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#todo">Sipariş Geçmişi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#todo">Yorum Geçmişi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#todo">Mağaza Soruları
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#bot-logs">Bot kayıtları
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#bot-images">Bot resimleri
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#trendyol-product-sync">Trendyol Özellik Eşleştirmesi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#hepsiburada-product-sync">Hepsiburada Özellik Eşleştirmesi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#n11-product-sync">N11 Özellik Eşleştirmesi
                                </a>
                            </li>
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade show active" id="bot_connections" role="tabpanel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::Card-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Bot Ürün Eşleşmeleri ({{ count($product->bots) }})</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Url</th>
                                                    <th>Kaynak Alan</th>
                                                    <th>Yasaklı mı?</th>
                                                    <th>İşlemler</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($product->bots as $url)
                                                    <livewire:bot-connection-ban-panel :url="$url"/>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="details" role="tabpanel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::Card-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Ürün bilgileri</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <p>{{ $product->description }}</p>
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="oems" role="tabpanel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::Card-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Elle oem ekle</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <form action="{{ route('admin.products.edit.oem', $product) }}">
                                                <input name="oem" type="text" class="form-control mb-2"
                                                       placeholder="Oem kodu"/>
                                                <input name="brand" type="text" class="form-control"
                                                       placeholder="Marka"/>
                                                <button type="submit" class="btn btn-primary mt-4">Bağla</button>
                                            </form>
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Oem kodlar</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <table
                                                class="table table-row-dashed fs-6 gy-5 my-0">
                                                <thead>
                                                <tr>
                                                    <th class="text-start">Marka</th>
                                                    <th class="text-start">Oem Kodlar</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($oems as $oem)
                                                    <tr>
                                                        <td class="analogs-table__column">{{ $oem->brand ?: "[Tiger Excel]" }}</td>
                                                        <td style="width:100%; display: inline-block; word-break: break-all; font-weight: 700">
                                                            @foreach(explode(',', $oem->oems) as $item)
                                                                <a href="{{ $item ? route('oem.search', ['oem' => $item]) : null }}">
                                                                    {{ $item }}
                                                                </a>{{ !$loop->last ? ",": null }}
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="cars" role="tabpanel">
                                <livewire:admin.car-panel :car_brands="$car_brands" :product_id="$product->id"/>
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="todo" role="tabpanel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::Card-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Yakında...</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="bot-logs" role="tabpanel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::Card-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Kayıtlar</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <div class="card-body pt-0">
                                            <table class="table table-responsive table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Mesaj</th>
                                                    <th class="text-end">Tarih</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($logs as $log)
                                                    <tr>
                                                        <td>
                                                            <pre>{{ $log->message }}</pre>
                                                        </td>
                                                        <td class="text-end">{{ $log->created_at->diffForHumans() }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="bot-images" role="tabpanel">
                                <livewire:admin.bot-image-manager :product="$product"/>
                            </div>
                            <!--end::Tab pane-->
                            @env("production")
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="trendyol-product-sync" role="tabpanel">
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <!--begin::Card-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>Trendyol Kategori Özellik Eşleştirmesi</h2>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <livewire:admin.sync-product-category-attribute :product="$product"/>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="hepsiburada-product-sync" role="tabpanel">
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <!--begin::Card-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>Hepsiburada Kategori Özellik Eşleştirmesi</h2>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <livewire:admin.sync-product-category-attribute :product="$product" :type="'hepsiburada'"/>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="n11-product-sync" role="tabpanel">
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <!--begin::Card-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>N11 Kategori Özellik Eşleştirmesi</h2>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <livewire:admin.sync-product-category-attribute :product="$product" :type="'n11'"/>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                            @endenv
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Main column-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@push('vendor_scripts')
    <script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
@endpush
@push('custom_scripts')
    <script src="assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <script>
        $('.dropzone.image')
            .dropzone({
                url: "{{ route('admin.products.edit.image', $product) }}",
                headers: {"X-CSRF-TOKEN": "{{ csrf_token() }}"}
            })
    </script>
@endpush
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush
