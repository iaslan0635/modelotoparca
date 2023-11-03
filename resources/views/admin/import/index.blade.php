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
                        <div class="d-inline">
                            @php
                                $jobQuery = \DB::table("jobs")->where("queue", "default");
                                $primary = $jobQuery->clone()->where("attempts", 0)->count();
                                $retry2 = $jobQuery->clone()->where("attempts", 1)->count();
                                $retry3 = $jobQuery->clone()->where("attempts", 2)->count();
                                $failed = \DB::table("failed_jobs")->where("queue", "default")->count();
                            @endphp
                            <span class="d-inline badge badge-primary mx-2">İşlem kuyruğu: {{ $primary }}</span>
                            <span class="d-inline badge badge-warning text-black mx-2">2. Deneme: {{ $retry2 }}</span>
                            <span class="d-inline badge badge-warning text-black mx-2">3. Deneme: {{ $retry3 }}</span>
                            <span class="d-inline badge badge-danger mx-2">Başarısız işlemler: {{ $failed }}</span>
                        </div>
                    </div>
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
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <form class="d-flex flex-column gap-7 gap-lg-10">
                        @foreach($routes as $route)
                            <!--begin::Card-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>
                                            {{ str_replace("__APPEND", "", $route) }}.xlsx
                                            @if(str_ends_with($route, "__APPEND"))
                                                (Ekleme modu)
                                            @endif
                                        </h2>
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
