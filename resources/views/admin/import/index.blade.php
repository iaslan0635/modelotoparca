@extends('admin.layout')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 w-100">
                    <!--begin::Title-->
                    <div>
                        <h1 class="page-heading d-inline">
                            İçe aktar
                        </h1>
                    </div>
                    <!--end::Title-->
                    <div class="mt-4">
                        <a href="{{ route('admin.import.rerunMissingProducts') }}" class="btn btn-primary">
                            Eksik araçları olan ürünleri yeniden çek
                        </a>
                    </div>
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
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <form class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="row">
                            <x-queue-card class="col mx-4" title="Genel işlemler" queue="default"/>
                            <x-queue-card class="col mx-4" title="Ürün içe aktarma" queue="productImport"/>
                            <x-queue-card class="col mx-4" title="Bot" queue="bot"/>
                        </div>
                        @foreach($routes as $route)
                            <!--begin::Card-->
                            <x-import-card :filename="$route"/>
                            <!--end::Card-->
                        @endforeach
                    </form>
                </div>
                <!--end::Main column-->
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
