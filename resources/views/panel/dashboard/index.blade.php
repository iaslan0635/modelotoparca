<!-- resources/views/panel/dashboard/index.blade.php -->
@extends('panel.layouts.master')

@section('title', 'Dashboard')

@section('css')
    <!-- jsvectormap css -->
    <link href="{{ asset('panel/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('panel/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Kontrol Paneli</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ModelSepeti</a></li>
                        <li class="breadcrumb-item active">Kontrol Paneli</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Toplam Ürün</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="31301">31301</span></h4>
                            <div class="d-flex">
                                <span class="badge badge-soft-success">Hepsi Satışta</span>
                            </div>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-primary rounded fs-3">
                            <i class="bx bx-package text-primary"></i>
                        </span>
                        </div>
                    </div>
                </div><!-- end card body -->
                <div class="animation-effect-6 text-primary opacity-25">
                    <i class="bi bi-box2-fill"></i>
                </div>
                <div class="animation-effect-4 text-primary opacity-25">
                    <i class="bi bi-box2-fill"></i>
                </div>
                <div class="animation-effect-3 text-primary opacity-25">
                    <i class="bi bi-box2-fill"></i>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Toplam Üye</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="36">36</span></h4>
                            <div class="d-flex align-items-center">
                            <span class="text-success me-2">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +3
                            </span>
                                <span class="text-muted">Geçen Aydan</span>
                            </div>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-info rounded fs-3">
                            <i class="bx bx-user-circle text-info"></i>
                        </span>
                        </div>
                    </div>
                </div><!-- end card body -->
                <div class="animation-effect-6 text-info opacity-25">
                    <i class="bi bi-person-fill"></i>
                </div>
                <div class="animation-effect-4 text-info opacity-25">
                    <i class="bi bi-person-fill"></i>
                </div>
                <div class="animation-effect-3 text-info opacity-25">
                    <i class="bi bi-person-fill"></i>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Bu Ay Sipariş</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="1836">1836</span></h4>
                            <div class="d-flex align-items-center">
                            <span class="text-success me-2">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +2.2%
                            </span>
                                <span class="text-muted">Geçen Aydan</span>
                            </div>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-warning rounded fs-3">
                            <i class="bx bx-shopping-bag text-warning"></i>
                        </span>
                        </div>
                    </div>
                </div><!-- end card body -->
                <div class="animation-effect-6 text-warning opacity-25">
                    <i class="bi bi-cart-fill"></i>
                </div>
                <div class="animation-effect-4 text-warning opacity-25">
                    <i class="bi bi-cart-fill"></i>
                </div>
                <div class="animation-effect-3 text-warning opacity-25">
                    <i class="bi bi-cart-fill"></i>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Ortalama Günlük Satış</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="2420">2420</span></h4>
                            <div class="d-flex align-items-center">
                            <span class="text-success me-2">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +2.6%
                            </span>
                                <span class="text-muted">Geçen Aydan</span>
                            </div>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-success rounded fs-3">
                            <i class="bx bx-dollar-circle text-success"></i>
                        </span>
                        </div>
                    </div>
                </div><!-- end card body -->
                <div class="animation-effect-6 text-success opacity-25">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="animation-effect-4 text-success opacity-25">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="animation-effect-3 text-success opacity-25">
                    <i class="bi bi-currency-dollar"></i>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->
    </div>

    <!-- Hedef Tablosu -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Aylık Hedef</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h4 class="fs-22 fw-semibold ff-secondary">$1,048 / <small class="fs-14 fw-normal text-muted">$2,000</small></h4>
                            <h6 class="text-muted mb-0">Tamamlanan: <span class="text-success fw-semibold">%62</span></h6>
                        </div>
                        <div class="flex-shrink-0">
                            <div id="goal-progress" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>

                    <div class="progress progress-lg mt-3 rounded-pill">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Haftalık Satış Grafiği</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="weekly-sales-chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info", "--vz-dark", "--vz-primary"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>

    <!-- Web Kaynağı Satışlar -->
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Web Kaynağı Satışlar</h4>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            <i class="ri-file-list-3-line align-middle"></i> Rapor İndir
                        </button>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="col-xl-12">
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="fs-15 mb-0">Bu Ay Yapılan Satışlar</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="dropdown">
                                        <button class="btn btn-soft-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="text-uppercase">Son Ay<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton6">
                                            <li><a class="dropdown-item" href="#">Ocak</a></li>
                                            <li><a class="dropdown-item" href="#">Şubat</a></li>
                                            <li><a class="dropdown-item" href="#">Mart</a></li>
                                            <li><a class="dropdown-item" href="#">Nisan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="14094">14,094</span> ₺</h2>
                            <div id="website-sales-chart" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Pazaryeri Satışlar</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-soft-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="text-uppercase">Son Ay<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton6">
                                <li><a class="dropdown-item" href="#">Ocak</a></li>
                                <li><a class="dropdown-item" href="#">Şubat</a></li>
                                <li><a class="dropdown-item" href="#">Mart</a></li>
                                <li><a class="dropdown-item" href="#">Nisan</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="col-xl-12">
                        <div>
                            <h5 class="fs-15 mb-1">Bu Ay Yapılan Satışlar</h5>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="3706">3,706</span> ₺</h2>

                            <div id="marketplace-sales-chart" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>

                            <div class="mt-3 pt-2">
                                <div class="d-flex mb-2">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate text-muted fs-14 mb-0"><i class="mdi mdi-circle align-middle text-primary me-2"></i>N11</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <p class="mb-0">3,142 ₺</p>
                                    </div>
                                </div><!-- end -->
                                <div class="d-flex mb-2">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate text-muted fs-14 mb-0"><i class="mdi mdi-circle align-middle text-success me-2"></i>Trendyol</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <p class="mb-0">364 ₺</p>
                                    </div>
                                </div><!-- end -->
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate text-muted fs-14 mb-0"><i class="mdi mdi-circle align-middle text-warning me-2"></i>HepsiBurada</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <p class="mb-0">200 ₺</p>
                                    </div>
                                </div><!-- end -->
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>

    <!-- Pazaryeri Ürünleri Tablosu -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Pazaryerlerindeki Ürünler</h4>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-info btn-sm">
                            <i class="ri-file-list-3-line align-middle"></i> Hepsini Gör
                        </button>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center pb-3">
                                <div class="avatar-sm me-3">
                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                        <img src="{{ asset('panel/images/marketplaces/n11.png') }}" alt="n11" class="avatar-xxs" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1">N11</h5>
                                    <p class="text-muted mb-0">214 Ürün</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center pb-3">
                                <div class="avatar-sm me-3">
                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                        <img src="{{ asset('panel/images/marketplaces/trendyol.png') }}" alt="Trendyol" class="avatar-xxs" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1">Trendyol</h5>
                                    <p class="text-muted mb-0">185 Ürün</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center pb-3">
                                <div class="avatar-sm me-3">
                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                        <img src="{{ asset('panel/images/marketplaces/hb.png') }}" alt="HepsiBurada" class="avatar-xxs" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1">HepsiBurada</h5>
                                    <p class="text-muted mb-0">156 Ürün</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th scope="col">Ürün</th>
                                <th scope="col">Fiyat</th>
                                <th scope="col">Görüntüle</th>
                                <th scope="col" style="width: 120px;">Pazaryeri</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{ asset('panel/images/products/product-1.jpg') }}" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">Halı</div>
                                    </div>
                                </td>
                                <td>223.78 ₺</td>
                                <td><a href="javascript:void(0);" class="link-secondary">Görüntüle <i class="ri-arrow-right-line align-middle"></i></a></td>
                                <td><span class="badge badge-soft-primary">N11</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{ asset('panel/images/products/product-2.jpg') }}" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">Halı</div>
                                    </div>
                                </td>
                                <td>153.18 ₺</td>
                                <td><a href="javascript:void(0);" class="link-secondary">Görüntüle <i class="ri-arrow-right-line align-middle"></i></a></td>
                                <td><span class="badge badge-soft-success">Trendyol</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{ asset('panel/images/products/product-3.jpg') }}" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">Halı</div>
                                    </div>
                                </td>
                                <td>28.44 ₺</td>
                                <td><a href="javascript:void(0);" class="link-secondary">Görüntüle <i class="ri-arrow-right-line align-middle"></i></a></td>
                                <td><span class="badge badge-soft-warning">HepsiBurada</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{ asset('panel/images/products/product-4.jpg') }}" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">Halı</div>
                                    </div>
                                </td>
                                <td>467.33 ₺</td>
                                <td><a href="javascript:void(0);" class="link-secondary">Görüntüle <i class="ri-arrow-right-line align-middle"></i></a></td>
                                <td><span class="badge badge-soft-primary">N11</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <!-- apexcharts -->
    <script src="{{ asset('panel/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('panel/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('panel/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('panel/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('panel/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- Grafik kodları -->
    <script>
        // Basit bir chart örneği - weekly sales chart
        document.addEventListener("DOMContentLoaded", function () {
            var options = {
                series: [{
                    name: 'Sipariş',
                    data: [44, 55, 57, 56, 61, 58, 63]
                }],
                chart: {
                    type: 'bar',
                    height: 270,
                    toolbar: {
                        show: false,
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '40%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt', 'Paz'],
                },
                yaxis: {
                    title: {
                        text: 'Sipariş Sayısı',
                        style: {
                            fontWeight: 500,
                        },
                    }
                },
                fill: {
                    opacity: 1
                },
                colors: ['#405189'],
            };

            var chart = new ApexCharts(document.querySelector("#weekly-sales-chart"), options);
            chart.render();

            // Website satış grafiği
            var websiteOptions = {
                series: [{
                    name: "Satış",
                    data: [10, 41, 35, 51, 49, 62, 69, 91, 148, 160, 150, 142]
                }],
                chart: {
                    height: 320,
                    type: 'line',
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 3
                },
                colors: ['#0ab39c'],
                xaxis: {
                    categories: ['Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Eki', 'Kas', 'Ara'],
                }
            };

            var websiteChart = new ApexCharts(document.querySelector("#website-sales-chart"), websiteOptions);
            websiteChart.render();

            // Pazaryeri satış grafiği
            var marketplaceOptions = {
                series: [{
                    name: "Satış",
                    data: [31, 40, 28, 51, 42, 82, 56, 90, 120, 95, 70, 120]
                }],
                chart: {
                    height: 320,
                    type: 'line',
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 3
                },
                colors: ['#405189'],
                xaxis: {
                    categories: ['Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Eki', 'Kas', 'Ara'],
                }
            };

            var marketplaceChart = new ApexCharts(document.querySelector("#marketplace-sales-chart"), marketplaceOptions);
            marketplaceChart.render();

            // Hedef ilerleme grafiği
            var goalOptions = {
                series: [62],
                chart: {
                    height: 110,
                    type: 'radialBar',
                    sparkline: {
                        enabled: true
                    }
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            margin: 0,
                            size: '60%'
                        },
                        track: {
                            margin: 0
                        },
                        dataLabels: {
                            show: false
                        }
                    }
                },
                colors: ['#0ab39c']
            };

            var goalChart = new ApexCharts(document.querySelector("#goal-progress"), goalOptions);
            goalChart.render();
        });
    </script>
@endsection
