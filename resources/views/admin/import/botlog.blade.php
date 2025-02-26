@extends('admin.inhouse.layouts.kt')
@section('kt-content')

    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Bot İşlem Kayıtları</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Bot İşlem Kayıt Kuyruğu</span>
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
                        <th class="min-w-140px">ProductId</th>
                        <th class="min-w-120px">Mesaj</th>
                        <th class="min-w-120px">İçerik</th>
                        <th class="min-w-120px">Source</th>
                        <th class="min-w-120px">Oluşturulma Tarihi</th>
                        <th class="min-w-120px">Değiştirilme Tarihi</th>

                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>
                                <span class="text-dark fw-bold text-hover-primary">{{ $log->id }}</span>
                            </td>
                            <td>
                                <a target="_blank" href="https://site.modelotoparca.com/admin/products/{{ $log->product_id }}" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $log->product_id }}</a>
                            </td>
                            <td>
                                <span class="badge badge-light-success">{{ $log->message }}</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ json_encode($log->context) }}</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $log->source }}</span>
                            </td>
                            <td class="text-dark fw-bold text-hover-primary fs-6">{{ $log->created_at }}</td>

                            <td class="text-dark fw-bold text-hover-primary fs-6">{{ $log->updated_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <div class="card-footer">
            {{ $logs->links() }}
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
