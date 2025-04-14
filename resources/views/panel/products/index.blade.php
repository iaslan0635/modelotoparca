@extends('layouts.panel-app')

@section('title', 'Ürün Detayı')

@section('content')
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ $product->title ?? 'Ürün Adı Yok' }}</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <tbody>
                            <tr>
                                <th style="width: 200px;">Ürün ID</th>
                                <td>{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <th>Üretici Kodu</th>
                                <td>{{ $product->producercode }}</td>
                            </tr>
                            <tr>
                                <th>OEM Kodları</th>
                                <td>{{ $product->oem_codes }}</td>
                            </tr>
                            <tr>
                                <th>Stok Kodu</th>
                                <td>{{ $product->sku }}</td>
                            </tr>
                            <tr>
                                <th>Açıklama</th>
                                <td>{{ $product->description }}</td>
                            </tr>
                            <tr>
                                <th>Eşleşen Kolon</th>
                                <td>{{ $product->match_column ?? '-' }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('panel.dashboard') }}" class="btn btn-light">
                            <i class="ri-arrow-left-line"></i> Geri Dön
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sağ kolon: Ürün görseli veya dummy kutu --}}
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ asset('panel-assets/images/products/img-1.png') }}" class="img-fluid rounded" style="max-height: 200px;" alt="Ürün Resmi">
                    <p class="text-muted mt-3">Görsel temsili olarak kullanılmaktadır.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
