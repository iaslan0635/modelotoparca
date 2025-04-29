@extends('layouts.panel-app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                <h5 class="mb-0 pb-1 text-decoration-underline">Kayıtlı Pazaryerleri</h5>
            </div>
            <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                <div class="col">
                    <div class="card card-body">
                        <div class="d-flex mb-4 align-items-center">
                            <div class="flex-shrink-0">
                                <img src="https://cdn.brandfetch.io/idEdTxkWAp/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1668517486389" alt="" class="avatar-sm rounded-circle">
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h5 class="card-title mb-1">Trendyol</h5>
                                <p class="text-muted mb-0">Model Otomotiv</p>
                            </div>
                        </div>
                        <h6 class="mb-1">$15,548</h6>
                        <p class="card-text text-muted">Expense Account</p>
                        <a href="{{ route('admin.panel.marketplace.sync-trendyol-products') }}" class="btn btn-primary">
                            Trendyol Ürünlerini Güncelle
                        </a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end col -->
    </div>

    <h1 class="mb-4">Yeni Pazaryeri Hesabı Ekle</h1>

    @livewire('panel.marketplace-account-form')

    @livewire('panel.marketplace-account-list')

@endsection

