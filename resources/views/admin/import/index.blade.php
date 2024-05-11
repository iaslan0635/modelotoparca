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
                                $c = fn (int $attempts, bool $running) => $jobQuery->clone()
                                    ->where("attempts", $attempts)
                                    ->when($running,
                                        fn ($q) => $q->whereNotNull("reserved_at"),
                                        fn ($q) => $q->whereNull("reserved_at")
                                    )->count();

                                $failed = \DB::table("failed_jobs")->where("queue", "default")->count();
                            @endphp
                            <span class="d-inline badge badge-primary mx-2">İşlem kuyruğu | Bekleyen: {{ $c(0, false) }} | Çalışan: {{ $c(1, true) }}</span>
                            <span class="d-inline badge badge-danger mx-2">Başarısız işlemler: {{ $failed }}</span>
                            <span style="filter: grayscale(100%); float: right">
                                <span>Tekrar denemeler geçici olarak devre dışı</span>
                                <span class="d-inline badge badge-warning text-black mx-2">2. Deneme | Bekleyen: {{ $c(1, false) }} | Çalışan: {{ $c(2, true) }}</span>
                                <span class="d-inline badge badge-warning text-black mx-2">3. Deneme | Bekleyen: {{ $c(2, false) }} | Çalışan: {{ $c(3, true) }}</span>
                            </span>
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
