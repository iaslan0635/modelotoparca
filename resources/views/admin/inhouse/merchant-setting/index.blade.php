@extends('layouts.panel-app')

{{--@section("kt-title", "")--}}
@section("content")
{{--    @if($errors->any()) @dd($errors) @endif--}}
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
@endsection
