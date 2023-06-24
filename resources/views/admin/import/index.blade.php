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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">İçe aktar</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Form-->
                <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="admin/apps/ecommerce/catalog/products">
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            @foreach($routes as $route)
                                <!--begin::Card-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>{{ $route }}.xlsx</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-2">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" data-route="{{ $route }}">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <!--begin::Icon-->
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Dosyayı buraya bırakın veya yüklemek için tıklayın.</h3>
                                                        <span class="fs-7 fw-semibold text-gray-400">Dosya yüklendikten sonra kuyruğa eklenecektir.</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Card-->
                            @endforeach
                            <!--begin::Card-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Bot</h2>
                                        <span class="badge badge-primary mx-4">İçe aktarım kuyruğu: {{ \DB::table("jobs")->where("queue", "import")->count() }}</span>
                                        <span class="badge badge-primary mx-4">Bot kuyruğu: {{ \DB::table("jobs")->where("queue", "spareto")->count() }}</span>
                                        <span class="badge badge-primary">Bağlantı kuyruğu: {{ \DB::table("jobs")->where("queue", "default")->count() }}</span>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-2">
                                        <a class="btn btn-primary me-4" href="{{ route('admin.import.sparetobot_bot') }}">Botu çalıştır</a>
                                        <a class="btn btn-primary" href="{{ route('admin.import.sparetobot_connect') }}">Bot sonuçlarını eşleştir</a>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@push('styles')
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
@endpush
@push('vendor_scripts')
    <script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
@endpush
@push('custom_scripts')
    <script>
        @foreach($routes as $route)
        $('.dropzone[data-route="{{ $route }}"]')
            .dropzone({
                url: "{{ route("admin.import.$route") }}",
                headers: {"X-CSRF-TOKEN": "{{ csrf_token() }}"}
            })
        @endforeach
    </script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
@endpush
