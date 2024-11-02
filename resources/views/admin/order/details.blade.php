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
                        Sipariş Detayı</h1>
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
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Order details page-->
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                   href="#kt_ecommerce_sales_order_summary">Order Summary</a>
                            </li>
                            <!--end:::Tab item-->
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                   href="#kt_ecommerce_sales_order_history">Order History</a>
                            </li>
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                        <!--begin::Button-->
                        <a href="{{ route('admin.order.edit', $order) }}" class="btn btn-success btn-sm me-lg-n7">Siparişi Düzenle</a>
                        <!--end::Button-->
                    </div>
                    <!--begin::Order summary-->
                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                        <!--begin::Order details-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Sipariş Detayı (#{{ $order->id }})</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                        <!--begin::Date-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/files/fil002.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
													<svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3"
                                                              d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z"
                                                              fill="currentColor"/>
														<path
                                                            d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z"
                                                            fill="currentColor"/>
													</svg>
												</span>
                                                    <!--end::Svg Icon-->Date Added
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">{{ $order->created_at->format("d/m/Y") }}</td>
                                        </tr>
                                        <!--end::Date-->
                                        <!--begin::Payment method-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3"
                                                              d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                                                              fill="currentColor"/>
														<path opacity="0.3"
                                                              d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                                                              fill="currentColor"/>
														<path
                                                            d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                                                            fill="currentColor"/>
													</svg>
												</span>
                                                    <!--end::Svg Icon-->Ödeme Methodu
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">{{ __("payment.".$order->payment_method) }}
                                                <img src="assets/media/svg/card-logos/visa.svg" class="w-50px ms-2"/>
                                            </td>
                                        </tr>
                                        <!--end::Payment method-->
                                        <!--begin::Date-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<path
                                                            d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z"
                                                            fill="currentColor"/>
														<path opacity="0.3"
                                                              d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z"
                                                              fill="currentColor"/>
													</svg>
												</span>
                                                    <!--end::Svg Icon-->Gönderi Durumu
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">{{ __("shipment.". $order->shipment_status) }}</td>
                                        </tr>
                                        <!--end::Date-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Order details-->
                        <!--begin::Customer details-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Müşteri Detayları</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                        <!--begin::Customer name-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
													<svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3"
                                                              d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
                                                              fill="currentColor"/>
														<path
                                                            d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
                                                            fill="currentColor"/>
														<rect x="7" y="6" width="4" height="4" rx="2"
                                                              fill="currentColor"/>
													</svg>
												</span>
                                                    <!--end::Svg Icon-->Müşteri
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                        <a href="admin/apps/ecommerce/customers/details">
                                                            <div class="symbol-label">
                                                                <img src="assets/media/avatars/300-23.jpg"
                                                                     alt="{{ $order->user->fullName }}" class="w-100"/>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <a href="admin/apps/ecommerce/customers/details"
                                                       class="text-gray-600 text-hover-primary">{{ $order->user->fullName }}</a>
                                                    <!--end::Name-->
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Customer name-->
                                        <!--begin::Customer email-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3"
                                                              d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                              fill="currentColor"/>
														<path
                                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                            fill="currentColor"/>
													</svg>
												</span>
                                                    <!--end::Svg Icon-->Email
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">
                                                <a href="admin/apps/user-management/users/view"
                                                   class="text-gray-600 text-hover-primary">{{ $order->user->email }}</a>
                                            </td>
                                        </tr>
                                        <!--end::Payment method-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Customer details-->
                        <!--begin::Documents-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Dökümanlar</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                        <!--begin::Invoice-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3"
                                                              d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                              fill="currentColor"/>
														<path
                                                            d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                            fill="currentColor"/>
														<path
                                                            d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                            fill="currentColor"/>
													</svg>
												</span>
                                                    <!--end::Svg Icon-->Invoice
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                       data-bs-toggle="tooltip" title=""
                                                       data-bs-original-title="View the invoice generated by this order."></i>
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">
                                                <a href="{{-- route('admin.invoices.show', $order->invoice_id) --}}"
                                                   class="text-gray-600 text-hover-primary">#{{$order->invoice_id}}</a>
                                            </td>
                                        </tr>
                                        <!--end::Invoice-->
                                        <!--begin::Shipping-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<path
                                                            d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z"
                                                            fill="currentColor"/>
														<path opacity="0.3"
                                                              d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z"
                                                              fill="currentColor"/>
													</svg>
												</span>
                                                    <!--end::Svg Icon-->Shipping
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                       data-bs-toggle="tooltip" title=""
                                                       data-bs-original-title="View the shipping manifest generated by this order."></i>
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">
                                                <a href="#" class="text-gray-600 text-hover-primary">#SHP-0025410</a>
                                            </td>
                                        </tr>
                                        <!--end::Shipping-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Documents-->
                    </div>
                    <!--end::Order summary-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                            <!--begin::Orders-->
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                    <!--begin::Payment address-->
                                    <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                        <!--begin::Background-->
                                        <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                            <img src="assets/media/icons/duotune/ecommerce/ecm001.svg" class="w-175px"/>
                                        </div>
                                        <!--end::Background-->
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Fatura Adresi</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">{{ $order->invoiceAddress->address }}
                                            <br/>{{ $order->invoiceAddress->city }},
                                            <br/>{{ $order->invoiceAddress->district }}.
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Payment address-->
                                    <!--begin::Shipping address-->
                                    <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                        <!--begin::Background-->
                                        <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                            <img src="assets/media/icons/duotune/ecommerce/ecm006.svg" class="w-175px"/>
                                        </div>
                                        <!--end::Background-->
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Teslimat Adresi</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            {{ $order->shipmentAddress->address }}<br/>
                                            {{ $order->shipmentAddress->city }},<br/>
                                            {{ $order->shipmentAddress->district }}.
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Shipping address-->
                                </div>
                                <!--begin::Product List-->
                                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Sipariş #{{ $order->id }}</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-175px">Ürün</th>
                                                    <th class="min-w-100px text-end">SKU</th>
                                                    <th class="min-w-70px text-end">Adet</th>
                                                    <th class="min-w-100px text-end">Birim Fiyat</th>
                                                    <th class="min-w-100px text-end">Toplam</th>
                                                    <th class="min-w-100px text-end">İptal</th>
                                                </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                @foreach($order->items as $item)
                                                    <tr>
                                                        <!--begin::Product-->
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Thumbnail-->
                                                                <a href="admin/apps/ecommerce/catalog/edit-product"
                                                                   class="symbol symbol-50px">
                                                                <span class="symbol-label"
                                                                      style="background-image:url({{ $item->product->imageUrl() }});"></span>
                                                                </a>
                                                                <!--end::Thumbnail-->
                                                                <!--begin::Title-->
                                                                <div class="ms-5">
                                                                    <a href="{{ route("admin.products.show", $item->product) }}"
                                                                       class="fw-bold text-gray-600 text-hover-primary">{{ $item->product->full_title }}</a>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                        </td>
                                                        <!--end::Product-->
                                                        <!--begin::SKU-->
                                                        <td class="text-end">{{ $item->product->sku }}</td>
                                                        <!--end::SKU-->
                                                        <!--begin::Quantity-->
                                                        <td class="text-end">{{ $item->quantity }}</td>
                                                        <!--end::Quantity-->
                                                        <!--begin::Price-->
                                                        <td class="text-end">{{ $item->formattedPrice }}</td>
                                                        <!--end::Price-->
                                                        <!--begin::Total-->
                                                        <td class="text-end">{{ $item->formattedTotalPrice }}</td>
                                                        <!--end::Total-->
                                                        <td class="text-end">
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    İptal Et
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    @foreach(\App\Enums\OrderRejectReasonType::cases() as $rejectReason)
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                               href="{{ route('admin.order.declineOrder', [$order, $item->id, $rejectReason->value]) }}">
                                                                                {{__('order_reject_reason_type.'.$rejectReason->value)}}
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <!--begin::Subtotal-->
                                                <tr>
                                                    <td colspan="4" class="text-end">Ara Toplam</td>
                                                    <td class="text-end">{{ format_money($order->items()->sum('price')) }}</td>
                                                </tr>
                                                <!--end::Subtotal-->
                                                <!--begin::VAT-->
                                                <tr>
                                                    <td colspan="4" class="text-end">VAT (0%)</td>
                                                    <td class="text-end">$0.00</td>
                                                </tr>
                                                <!--end::VAT-->
                                                <!--begin::Shipping-->
                                                <tr>
                                                    <td colspan="4" class="text-end">Shipping Rate</td>
                                                    <td class="text-end">$5.00</td>
                                                </tr>
                                                <!--end::Shipping-->
                                                <!--begin::Grand total-->
                                                <tr>
                                                    <td colspan="4" class="fs-3 text-dark text-end">Toplam</td>
                                                    <td class="text-dark fs-3 fw-bolder text-end">{{ format_money($order->total_amount) }}</td>
                                                </tr>
                                                <!--end::Grand total-->
                                                </tbody>
                                                <!--end::Table head-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Product List-->
                            </div>
                            <!--end::Orders-->
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                            <!--begin::Orders-->
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::Order history-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order History</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Date Added</th>
                                                    <th class="min-w-175px">Comment</th>
                                                    <th class="min-w-70px">Order Status</th>
                                                </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-semibold text-gray-600">
                                                @foreach($order->history as $history)
                                                <tr>
                                                    <!--begin::Date-->
                                                    <td>{{$history->created_at}}</td>
                                                    <!--end::Date-->
                                                    <!--begin::Comment-->
                                                    <td>{{$history->message}}</td>
                                                    <!--end::Comment-->
                                                    <!--begin::Status-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">{{ __("order_status.".$history->status) }}</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status-->
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                <!--end::Table head-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Order history-->
                                <!--begin::Order data-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order Data</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5">
                                                <!--begin::Table body-->
                                                <tbody class="fw-semibold text-gray-600">
                                                <!--begin::IP address-->
                                                <tr>
                                                    <td class="text-muted">IP Address</td>
                                                    <td class="fw-bold text-end">{{ $order->client_data["ip"] ?? '?' }}</td>
                                                </tr>
                                                <!--end::IP address-->
                                                <!--begin::User agent-->
                                                <tr>
                                                    <td class="text-muted">User Agent</td>
                                                    <td class="fw-bold text-end">{{ $order->client_data["user_agent"] ?? '?' }}</td>
                                                </tr>
                                                <!--end::User agent-->
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Order data-->
                            </div>
                            <!--end::Orders-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Order details page-->
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
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
