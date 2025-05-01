@extends('layouts.panel-app')

@section('content')

    <div class="row">

        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-4">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Entegrasyon ayarları</h1>
        </div>

        <form method="post" action="{{ route('admin.merchant-setting.store') }}" class="row gap-4">
            @csrf

            @foreach(\App\Services\MarketPlace::MERCHANTS as $merchant)
                <div class="card shadow-sm col">
                    <div class="card-header">
                        <h3 class="card-title">{{ ucfirst($merchant) }}</h3>
                    </div>
                    <div class="card-body pb-12">
                        <x-admin.input min="0" max="100" :name='"{$merchant}-comission"' label="Komisyon" type="number"
                                       hint="Pazar yerine giderken eklenecek fiyat yüzdesi" :default="merchant_setting($merchant, 'comission')"/>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary">Gönder</button>
            </div>
        </form>

    </div>

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

