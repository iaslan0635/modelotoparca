@extends("admin.inhouse.layouts.kt")
@section("kt-content")
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header mt-6">
            <!--begin::Card title-->
            <div class="card-title"></div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            @yield("card-content")
        </div>
        <!--end::Card body-->
    </div>
@endsection
