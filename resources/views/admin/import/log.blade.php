@extends('admin.inhouse.layouts.kt')
@section('kt-content')

<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">İşlem Kayıtları</span>
            <span class="text-muted mt-1 fw-semibold fs-7">İşlem Kayıt Kuyruğu</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bold text-muted">
                    <th class="min-w-150px">Id</th>
                    <th class="min-w-140px">uuid</th>
                    <th class="min-w-120px">Bağlantı</th>
                    <th class="min-w-120px">Kuyruk</th>
                    <th class="min-w-120px">Payload</th>
                    <th class="min-w-120px">Exception</th>
                    <th class="min-w-120px">Date</th>

                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                <tr>

                    <td>
                        <span class="text-dark fw-bold text-hover-primary">1</span>
                    </td>
                    <td>
                            <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">test</span>
                    </td>
                    <td>
                        <span class="badge badge-light-success">productImport</span>
                    </td>
                    <td>
                         <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">test</span>
                    </td>
                    <td>
                         <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">test</span>
                    </td>
                    <td class="text-dark fw-bold text-hover-primary fs-6">test</td>

                    <td class="text-dark fw-bold text-hover-primary fs-6">05/28/2020</td>
                </tr>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
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
