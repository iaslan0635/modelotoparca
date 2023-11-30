@extends("admin.inhouse.layouts.card")
@section("card-content")
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
        <!--begin::Table head-->
        <thead>
        <!--begin::Table row-->
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            @yield("head")
        </tr>
        <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="fw-semibold text-gray-600">
        @yield("body")
        </tbody>
        <!--end::Table body-->
    </table>
    <!--end::Table-->
    @yield("pagination")
@endsection
