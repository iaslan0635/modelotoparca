@extends('layouts.master')
@section('content')
    @isset($product->categories[0])
        <x-breadcrumb :parts="[
            ['name' => $product->categories[0]->name, 'link' => route('category.show', $product->categories[0])],
            ['name' => \Str::limit($product->full_title, 20)]
        ]"/>
    @endisset
    <div class="block-split">
        <div class="container">
            <div class="block-split__row justify-content-center row no-gutters">
                <div class="block-split__item block-split__item-content col-auto">
                    <div class="product product--layout--full">
                        <div class="product__body">
                            <div class="product__card product__card--one"></div>
                            <div class="product__card product__card--two"></div>
                            <div class="product-gallery product-gallery--layout--product-full product__gallery"
                                 data-layout="product-full">
                                <div class="product-gallery__featured">
                                    <div class="owl-carousel">
                                        @foreach($product->imageUrls() as $image)
                                            <a class="image image--type--product" href="{{ $image }}" target="_blank"
                                               data-width="700" data-height="700">
                                                <div class="image__body">
                                                    <div class="product-card__badges" style="text-align: -webkit-right">
                                                        <div style=" right:5px;">
                                                            <img style="max-width: 150px; max-height: 60px;" loading="lazy"
                                                                 src="{{ $product->brand?->imageUrl() }}" alt="">
                                                        </div>
                                                    </div>
                                                    <img class="image__tag" src="{{ $image }}" alt="" loading="lazy">
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="product-gallery__thumbnails">
                                    <div class="owl-carousel">
                                        @foreach($product->imageUrls() as $image)
                                            <div class="product-gallery__thumbnails-item image image--type--product">
                                                <div class="image__body">
                                                    <img class="image__tag" src="{{ $image }}" alt="" loading="lazy">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="product__header">
                                <h1 class="product__title">{{ $product->fullTitle }}</h1>
                            </div>
                            <div class="product__main">
                                <div class="product__excerpt">
                                    <details>
                                        <summary>Üretici detayları</summary>
                                        <span class="m-0">{{ $product->description }}</span>
                                        @if($product->fitting_position)
                                            <pre class="m-0">Montaj Konumu: {{ $product->fitting_position }}</pre>
                                        @endif
                                    </details>
                                </div>
                                @if(filled($product->specifications))
                                    <div class="product__features">
                                        <div class="product__features-title">Spesifikasyonlar:</div>
                                        <ul>
                                            @foreach($product->specifications as $key => $spec)
                                                <li>
                                                    {{ $key }}:
                                                    <span>{{ $spec }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="product__info">
                                <div class="product__info-card">
                                    <div class="product__info-body">
                                        <div class="product__subtitle">
                                            <div class="product__rating">
                                                <div class="product__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <div class="rating__star"></div>
                                                            <div class="rating__star"></div>
                                                            <div class="rating__star"></div>
                                                            <div class="rating__star"></div>
                                                            <div class="rating__star"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__rating-label">
                                                    <a href="">
                                                        <span style="font-weight: bold">0</span>
                                                        /5
                                                    </a>
                                                    <a href=""> 0 Değerlendirme</a>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        @if($price = $product->price)
                                            <div class="product__prices-stock">
                                                <div class="product__prices">
                                                    @if($price->discount)
                                                        <div
                                                            class="product__price product__price--old">{{ $price->listingPrice() }}</div>
                                                        <div
                                                            class="product__price product__price--new">{{ $price->sellingPrice() }}</div>
                                                    @else
                                                        <div
                                                            class="product__price product__price--current">{{ $price->sellingPrice() }}</div>
                                                    @endif
                                                </div>
                                                <div
                                                    class="status-badge status-badge--style--success product__stock status-badge--has-text">
                                                    <div class="status-badge__body">
                                                        <span
                                                            class="badge badge-danger">{{ $product->quantity > 0 ? "Stokta" : "Stokta Yok" }}</span>
                                                        <div class="status-badge__tooltip" tabindex="0"
                                                             data-toggle="tooltip"
                                                             title="{{ $product->quantity > 0 ? "Stokta":"Stokta Yok" }}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="product__meta">
                                            <table>
                                                <tr>
                                                    <th>Üretici Kodu</th>
                                                    <td>{{ $product->producercode }}</td>
                                                </tr>
                                                @if($product->brand !== null)
                                                    <tr>
                                                        <th>Marka</th>
                                                        <td>
                                                            <a href="{{ route('brand.show', $product->brand) }}">{{ $product->brand->name }}</a>
                                                        </td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <th>Cross code</th>
                                                    <td>{{ $product->cross_code }}</td>
                                                </tr>
                                                {{--@if(Auth::guard("admin")->check())--}}
                                                    <tr>
                                                        <th>Ek bilgi</th>
                                                        <td>{{ $tiger->raf_no ?? "##[BİLİNMİYOR]" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ek bilgi</th>
                                                        <td>
                                                            <x-product-meta-stock :tiger="$tiger"/>
                                                        </td>
                                                    </tr>
                                                {{--@endif--}}
                                            </table>
                                        </div>
                                    </div>
                                    <div class="product__actions">
                                        @if ($product->quantity <= 0)
                                            <a href="https://wa.me/905528880668/?text=https://site.modelotoparca.com/p/{{ $product->slug }} Ürün İle İlgili Bilgi Almak İstiyorum"
                                               target="_blank" class="btn btn-success mb-2"
                                               style="border-radius: 20px; width: 50%">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                     fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                                </svg>
                                                Bilgi Al
                                            </a>
                                        @endif
                                        <livewire:add-to-cart :product="$product"/>
                                        <livewire:add-to-list :product="$product" class="btn btn-primary btn-lg mt-2"/>
                                        <div class="product__actions-divider"></div>
                                        <livewire:product.whislist :product="$product"/>
                                    </div>

                                    <div class="product__tags-and-share-links">
                                        <div class="product__tags tags tags--sm">
                                            <div class="tags__list">
                                                @foreach($oems as $oem)
                                                    @foreach(explode(',', $oem->oems) as $item)
                                                        <a href="{{ $item ? route('oem.search', ['oem' => $item]) : null }}">
                                                            {{ $item }}
                                                        </a>{{ !$loop->last ? " " : null }}
                                                    @endforeach
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="product__share-links share-links">
                                            <ul class="share-links__list">
                                                <li class="share-links__item share-links__item--type--like">
                                                    <a href="">Facebook</a>
                                                </li>
                                                <li class="share-links__item share-links__item--type--tweet">
                                                    <a href="">Tweetter</a>
                                                </li>
                                                <li class="share-links__item share-links__item--type--pin">
                                                    <a href="">Pin
                                                        It
                                                    </a>
                                                </li>
                                                <li class="share-links__item share-links__item--type--counter">
                                                    <a
                                                        href="">Paylaş
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @include('partials.ucretsiz-kargo-dikey')
                            </div>
                            @include('product-detail.tabs')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-space block-space--layout--before-footer"></div>
@endsection
@push('scripts')
    <script>
        const models = document.getElementsByClassName('model'),
            brands = document.getElementsByClassName('brand');

        for (let brand of brands) {
            brand.addEventListener('click', function () {
                for (let xb of brands) {
                    for (let xm of document.getElementsByClassName(`models-${xb.dataset.id}`)) {
                        xm.style.display = "none"
                    }
                }
                for (let modelx of document.getElementsByClassName(`models-${brand.dataset.id}`)) {
                    modelx.style.display = modelx.style.display === "block" ? "none" : "block"
                    //modelx.style.display = "block"
                }
            })
        }

        for (let model of models) {
            model.addEventListener('click', function () {
                const content = model.querySelector('.content');
                const indicator = model.querySelector('.model-indicator')

                const isOpen = content.style.display === "block"

                content.style.display = isOpen ? "none" : "block"
                indicator.textContent = isOpen ? "+" : "-"
            })
        }
    </script>
@endpush
@push('styles')
    <style>
        .internal-card {
            opacity: 0;
            transition: opacity 0.5s;
        }

        .internal-card:hover {
            opacity: 1;
        }

        .model-indicator {
            font-size: 2rem;
            line-height: .5;
            display: inline-block;
            vertical-align: text-top;
            margin-right: .5rem;
        }
    </style>
@endpush
