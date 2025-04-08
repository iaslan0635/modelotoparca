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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Orders Listing</h1>
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
                        <li class="breadcrumb-item text-muted">Sales</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#"
                           class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="currentColor"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter
                        </a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                             id="kt_menu_631f08e971923">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true"
                                                data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_631f08e971923" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1"/>
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                   checked="checked"/>
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications"
                                               checked="checked"/>
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">
                                        Apply
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_create_app">Create
                    </a>
                    <!--end::Primary button-->
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
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <form method="get">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <!--end::Flatpickr-->
                                <div class="w-100 mw-150px">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Status"
                                            name="merchant"
                                            data-kt-ecommerce-order-filter="status">
                                        <option value="n11" {{ request()->input('merchant') === "n11" ? "selected":null }}>
                                            N11
                                        </option>
                                        <option
                                            value="hepsiburada" {{ request()->input('merchant') === "hepsiburada" ? "selected":null }}>
                                            Hepsiburada
                                        </option>
                                        <option
                                            value="trendyol" {{ request()->input('merchant') === "trendyol" ? "selected":null }}>
                                            Trendyol
                                        </option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--begin::Add product-->
                                <button type="submit" class="btn btn-primary">Filtrele</button>
                                <!--end::Add product-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                    </form>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                               data-kt-check-target="#kt_ecommerce_sales_table .form-check-input"
                                               value="1"/>
                                    </div>
                                </th>
                                <th class="min-w-100px">Order ID</th>
                                <th class="min-w-100px">Merchant</th>
                                <th class="min-w-175px">Customer</th>
                                <th class="text-end min-w-70px">Status</th>
                                <th class="text-end min-w-100px">Total</th>
                                <th class="text-end min-w-100px">Date Added</th>
                                <th class="text-end min-w-100px">Date Modified</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">
                            <!--begin::Table row-->
                            @foreach($orders as $order)
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1"/>
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Order ID=-->
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('admin.order.marketplace.show', $order) }}"
                                           class="text-gray-800 text-hover-primary fw-bold">{{ $order->id }}</a>
                                    </td>
                                    <!--end::Order ID=-->
                                    <!--begin::Order ID=-->
                                    <td data-kt-ecommerce-order-filter="merchant">
                                        {{ $order->merchant }}
                                    </td>
                                    <!--end::Order ID=-->
                                    <!--begin::Customer=-->
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('admin.order.marketplace.show', $order) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        {{ substr(\App\Services\MarketPlace::parseOrder($order)['client']['full_name'] ?? "", 0, 1) }}
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('admin.order.marketplace.show', $order) }}"
                                                   class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ \App\Services\MarketPlace::parseOrder($order)['client']['full_name'] }}</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Customer=-->
                                    <!--begin::Status=-->
                                    <td class="text-end pe-0" data-order="{{ $order->status }}">
                                        <!--begin::Badges-->
                                        <div
                                            class="badge badge-light-danger">{{ $order->status }}</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Total=-->
                                    <td class="text-end pe-0">
                                        <span
                                            class="fw-bold">{{ format_money($order->price) }}</span>
                                    </td>
                                    <!--end::Total=-->
                                    <!--begin::Date Added=-->
                                    <td class="text-end" data-order="{{ $order->date->format("Y-m-d") }}">
                                        <span class="fw-bold">{{ $order->date->translatedFormat("d M Y") }}</span>
                                    </td>
                                    <!--end::Date Added=-->
                                    <!--begin::Date Modified=-->
                                    <td class="text-end" data-order="{{ $order->date->format("Y-m-d") }}">
                                        <span class="fw-bold">{{ $order->date->translatedFormat("d M Y") }}</span>
                                    </td>
                                    <!--end::Date Modified=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">İşlemler
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('admin.order.show', $order) }}"
                                                   class="menu-link px-3">View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="admin/apps/ecommerce/sales/edit-order" class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                   data-kt-ecommerce-order-filter="delete_row">Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                            @endforeach
                            <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                    <div class="card-footer">
                        {{ $orders->links() }}
                    </div>
                </div>
                <!--end::Products-->
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
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush
@push('custom_scripts')
    <script src="assets/js/custom/apps/ecommerce/sales/listing.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
