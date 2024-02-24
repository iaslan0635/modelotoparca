@extends('layouts.master')
@section('content')
    <x-breadcrumb :parts="[
            ['name' => 'Ürünler'],
            ['name' => \Str::limit($product->title, 20)]
        ]"/>
    <div class="block-split">
        <div class="container">
            <div class="block-split__row row no-gutters">
                <div class="block-split__item block-split__item-content col-auto">
                    <div class="product product--layout--full">
                        <div class="product__body">
                            <div class="product__card product__card--one"></div>
                            <div class="product__card product__card--two"></div>
                            <div class="product-gallery product-gallery--layout--product-full product__gallery"
                                 data-layout="product-full">
                                <div class="product-gallery__featured">
                                    {{--                                    <button type="button" class="product-gallery__zoom">--}}
                                    {{--                                        <svg width="24" height="24">--}}
                                    {{--                                            <path d="M15,18c-2,0-3.8-0.6-5.2-1.7c-1,1.3-2.1,2.8-3.5,4.6c-2.2,2.8-3.4,1.9-3.4,1.9s-0.6-0.3-1.1-0.7--}}
                                    {{--	c-0.4-0.4-0.7-1-0.7-1s-0.9-1.2,1.9-3.3c1.8-1.4,3.3-2.5,4.6-3.5C6.6,12.8,6,11,6,9c0-5,4-9,9-9s9,4,9,9S20,18,15,18z M15,2--}}
                                    {{--	c-3.9,0-7,3.1-7,7s3.1,7,7,7s7-3.1,7-7S18.9,2,15,2z M16,13h-2v-3h-3V8h3V5h2v3h3v2h-3V13z"/>--}}
                                    {{--                                        </svg>--}}
                                    {{--                                    </button>--}}
                                    <div class="owl-carousel">
                                        @foreach($product->imageUrls() as $image)

                                            <a class="image image--type--product" href="{{ $image }}"
                                               target="_blank" data-width="700" data-height="700">
                                                <div class="image__body">

                                                    <div class="product-card__badges" style="text-align: -webkit-right">
                                                        <div style=" right:5px;">
                                                            <img style="max-width: 150px; max-height: 25px;"
                                                                 src="{{ $product->brand?->imageUrl() }}"
                                                                 alt="">
                                                        </div>
                                                    </div>
                                                    <img class="image__tag" src="{{ $image }}" alt="">
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
                                                    <img class="image__tag" src="{{ $image }}" alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="product__header">
                                <h1 class="product__title">{{ $product->fullTitle }}</h1>
                                <div class="product__subtitle">
                                    <div class="product__rating">
                                        <div class="product__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__rating-label">
                                            <a href="">3.5 on 7 reviews</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__main">
                                <div class="product__excerpt">{{ $product->description }}</div>
                                <div class="product__features">
                                    <div class="product__features-title">Key Features:</div>
                                    <ul>
                                        @foreach(($product->specifications ?? []) as $key => $spec)
                                            <li>{{ $key }}:
                                                <span>{{ $spec }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__info-card">
                                    <div class="product__info-body">
                                        <div class="product__badge tag-badge tag-badge--sale">Sale</div>
                                        <div class="product__prices-stock">
                                            <div class="product__prices">
                                                <div
                                                    class="product__price product__price--current">{{ $product->price?->formattedPrice }}</div>
                                            </div>
                                            <div
                                                class="status-badge status-badge--style--success product__stock status-badge--has-text">
                                                <div class="status-badge__body">
                                                    <div
                                                        class="status-badge__text">{{ $product->quantity > 0 ? "Stokta Var":"Stokta Yok" }}</div>
                                                    <div class="status-badge__tooltip" tabindex="0"
                                                         data-toggle="tooltip"
                                                         title="{{ $product->quantity > 0 ? "Stokta Var":"Stokta Yok" }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__meta">
                                            <table>
                                                <tr>
                                                    <th>Üretici Kodu</th>
                                                    <td>{{ $product->producercode }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Marka</th>
                                                    <td>
                                                        <a href="">{{ $product->brand?->name }}</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Cross code</th>
                                                    <td>{{ $product->cross_code }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="product__actions">
                                        <livewire:add-to-cart :product="$product"/>
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
                            <div class="product__tabs product-tabs product-tabs--layout--full">
                                <ul class="product-tabs__list">
                                    <li class="product-tabs__item product-tabs__item--active">
                                        <a href="#product-same-products">Eşdeğer Ürünler</a>
                                    </li>
                                    <li class="product-tabs__item">
                                        <a
                                            href="#product-tab-cars">Uyumlu Araçlar
                                        </a>
                                    </li>
                                    <li class="product-tabs__item">
                                        <a href="#product-tab-oem-codes">Oem Kodlar</a>
                                    </li>
                                    <li class="product-tabs__item">
                                        <a href="#product-alternative-products">Alternatif
                                            Ürünler
                                        </a>
                                    </li>
                                    <li class="product-tabs__item">
                                        <a href="#tecdoc-equivalents">TecDoc</a>
                                    </li>
                                    <li class="product-tabs__item">
                                        <a href="#product-tab-reviews">Değerlendirmeler
                                            <span class="product-tabs__item-counter">0</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="product-tabs__content">
                                    <div class="product-tabs__pane" id="product-tab-reviews">
                                        <div class="reviews-view">
                                            <div class="reviews-view__list">
                                                <div class="reviews-list">
                                                    <ol class="reviews-list__content">
                                                        <li class="reviews-list__item">
                                                            <div class="review">
                                                                <div class="review__body">
                                                                    <div class="review__avatar">
                                                                        <img
                                                                            src="{{ asset('images/avatars/avatar-1-42x42.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="review__meta">
                                                                        <div class="review__author">Samantha Smith</div>
                                                                        <div class="review__date">27 May, 2018</div>
                                                                    </div>
                                                                    <div class="review__rating">
                                                                        <div class="rating">
                                                                            <div class="rating__body">
                                                                                <div
                                                                                    class="rating__star rating__star--active"></div>
                                                                                <div
                                                                                    class="rating__star rating__star--active"></div>
                                                                                <div
                                                                                    class="rating__star rating__star--active"></div>
                                                                                <div
                                                                                    class="rating__star rating__star--active"></div>
                                                                                <div class="rating__star"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="review__content typography">
                                                                        Phasellus id mattis nulla. Mauris velit nisi,
                                                                        imperdiet vitae sodales in, maximus ut lectus.
                                                                        Vivamus commodo
                                                                        scelerisque lacus, at porttitor dui iaculis id.
                                                                        Curabitur imperdiet ultrices fermentum.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                    <div class="reviews-list__pagination">
                                                        <ul class="pagination">
                                                            <li class="page-item disabled">
                                                                <a class="page-link page-link--with-arrow" href=""
                                                                   aria-label="Previous">
                                                                    <span
                                                                        class="page-link__arrow page-link__arrow--left"
                                                                        aria-hidden="true">
                                                                        <svg width="7"
                                                                             height="11">
                                                                            <path
                                                                                d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z"/>
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item active" aria-current="page">
                                                                <span class="page-link">
                                                                    2
                                                                    <span class="sr-only">(current)</span>
                                                                </span>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">4</a>
                                                            </li>
                                                            <li class="page-item page-item--dots">
                                                                <div class="pagination__dots"></div>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">9</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link page-link--with-arrow" href=""
                                                                   aria-label="Next">
                                                                    <span
                                                                        class="page-link__arrow page-link__arrow--right"
                                                                        aria-hidden="true">
                                                                        <svg width="7"
                                                                             height="11">
                                                                            <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z"/>
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @auth
                                                <form class="reviews-view__form">
                                                    <h3 class="reviews-view__header">Write A Review</h3>
                                                    <div class="row">
                                                        <div class="col-xxl-8 col-xl-10 col-lg-9 col-12">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="review-stars">Review Stars</label>
                                                                    <select id="review-stars" class="form-control">
                                                                        <option>5 Stars Rating</option>
                                                                        <option>4 Stars Rating</option>
                                                                        <option>3 Stars Rating</option>
                                                                        <option>2 Stars Rating</option>
                                                                        <option>1 Stars Rating</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="review-author">Your Name</label>
                                                                    <input type="text" class="form-control"
                                                                           id="review-author" placeholder="Your Name">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="review-email">Email Address</label>
                                                                    <input type="text" class="form-control"
                                                                           id="review-email"
                                                                           placeholder="Email Address">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="review-text">Your Review</label>
                                                                <textarea class="form-control" id="review-text"
                                                                          rows="6"></textarea>
                                                            </div>
                                                            <div class="form-group mb-0 mt-4">
                                                                <button type="submit" class="btn btn-primary">Post Your
                                                                    Review
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endauth
                                        </div>
                                    </div>
                                    <div class="product-tabs__pane product-tabs__pane--active" id="product-tab-cars">

                                        <div class="compatible-cars row mt-2">
                                            @foreach($car_brands as $brand => $cars_by_names)
                                                <div class="compatible-cars-list mt-2 brand"
                                                     data-id="{{ $loop->index }}">
                                                    <div class="uyumluSelectButtons">
                                                        <img class="lazy loaded"
                                                             src="https://websitem.modelotoparca.com/public/maker/{{ $brand }}.png"

                                                             alt=""
                                                             data-ll-status="loaded">
                                                        <br>
                                                        {{ $brand }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <hr>
                                        <div class="row">
                                            @foreach($car_brands as $brand => $cars_by_names)
                                                @php $index = $loop->index; @endphp
                                                @foreach($cars_by_names as $name => $cars)
                                                    <div
                                                        class="uyumlu-car-select-line model col-md-12 models-{{ $index }}"
                                                        style="display: {{ $index === 0 ? "block":"none" }}">
                                                        <div class="title">{{ $name }}</div>
                                                        <div class="content" style="display: none">
                                                            <div class="card-body">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <table
                                                                            class="analogs-table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th class="analogs-table__column analogs-table__column--name">

                                                                                </th>
                                                                                <th class="analogs-table__column analogs-table__column--name">
                                                                                    Model
                                                                                </th>
                                                                                <th class="analogs-table__column analogs-table__column--name">
                                                                                    Üretim Yılı
                                                                                </th>
                                                                                <th class="analogs-table__column analogs-table__column--name">
                                                                                    Güç
                                                                                </th>
                                                                                <th class="analogs-table__column analogs-table__column--name">
                                                                                    Kapasite
                                                                                </th>
                                                                                <th class="analogs-table__column analogs-table__column--name">
                                                                                    Motor
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            @foreach($cars as $car)
                                                                                <tr>
                                                                                    <td class="analogs-table__column">
                                                                                        <img src="{{ $car->imageUrl() }}" style="height: 2rem">
                                                                                    </td>
                                                                                    <td class="analogs-table__column">{{ $car->name }}</td>
                                                                                    <td class="analogs-table__column">
                                                                                        {{ $car->produced_from ?? "0000-00-00" }}
                                                                                        - {{
                                                                                                    $car->produced_to ?? $cachedNow ?? ($cachedNow = now()->format("d-m-Y"))
                                                                                                }}
                                                                                    </td>
{{--                                                                                    <td class="analogs-table__column">{{ $car->engine }} </td>--}}
                                                                                    <td class="analogs-table__column">{{$car->type}} / {{ $car->power_kw }} Kw / {{ $car->power_hp }} Hp </td>
                                                                                    <td class="analogs-table__column">{{ $car->capacity }} cc </td>
                                                                                    <td class="analogs-table__column"> {{$car->engine_code}} </td>
                                                                                </tr>
                                                                            @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endforeach
                                        </div>
                                        <div class="block-space block-space--layout--divider-nl"></div>


                                    </div>
                                    <div class="product-tabs__pane" id="product-tab-oem-codes">


                                        <div class="content">
                                            <div class="card-body">
                                                <div class="container">
                                                    <div class="row">
                                                        @if (count($oems)>0)
                                                            <table
                                                                class="analogs-table">
                                                                <thead>
                                                                <tr>
                                                                    <th class="analogs-table__column analogs-table__column--name">
                                                                        Marka
                                                                    </th>
                                                                    <th style="text-align: center"
                                                                        class="analogs-table__column analogs-table__column--name">
                                                                        Oem Kodlar
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                @foreach($oems as $oem)
                                                                    <tr>
                                                                        <td class="analogs-table__column">{{ $oem->brand }}</td>
                                                                        <td style="width:100%; display: inline-block; word-break: break-all; font-weight: 700">
                                                                            @foreach(explode(',', $oem->oems) as $item)
                                                                                <a href="{{ $item ? route('oem.search', ['oem' => $item]) : null }}">
                                                                                    {{ $item }}
                                                                                </a>{{ !$loop->last ? "," : null }}
                                                                            @endforeach
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="product-tabs__pane" id="product-same-products">
                                        <div class="products-view__list products-list products-list--grid--4"
                                             data-layout="table" data-with-features="false">
                                            <div class="products-list__head">
                                                <div class="products-list__column products-list__column--image">#</div>
                                                <div class="products-list__column products-list__column--meta">Ürün
                                                    Kodu
                                                </div>
                                                <div class="products-list__column products-list__column--product">Ürün
                                                </div>
                                                <div class="products-list__column products-list__column--price">Fiyat
                                                </div>
                                            </div>
                                            <div class="products-list__content">
                                                @foreach($product->crosses()->get() as $cross)
                                                    <div class="products-list__item">
                                                        <div class="product-card">
                                                            <div class="product-card__actions-list">
                                                                <button
                                                                    class="product-card__action product-card__action--quickview"
                                                                    type="button" data-slug="{{ $cross->slug }}"
                                                                    aria-label="Quick view">
                                                                    <svg width="16" height="16">
                                                                        <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z"></path>
                                                                    </svg>
                                                                </button>
                                                                <button
                                                                    class="product-card__action product-card__action--wishlist"
                                                                    type="button" aria-label="Add to wish list">
                                                                    <svg width="16" height="16">
                                                                        <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"></path>
                                                                    </svg>
                                                                </button>
                                                                <button
                                                                    class="product-card__action product-card__action--compare"
                                                                    type="button" aria-label="Add to compare">
                                                                    <svg width="16" height="16">
                                                                        <path
                                                                            d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z"></path>
                                                                        <path
                                                                            d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z"></path>
                                                                        <path
                                                                            d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="product-card__image">
                                                                <div class="image image--type--product">
                                                                    <a href="{{ route('product.show', $cross) }}"
                                                                       class="image__body">
                                                                        <img class="image__tag"
                                                                             src="{{ $cross->imageUrl() }}" alt="">
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                                    <div class="status-badge__body">
                                                                        <div class="status-badge__icon">
                                                                            <svg width="13" height="13">
                                                                                <path
                                                                                    d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__info">
                                                                <div
                                                                    class="product-card__meta">{{ $cross->producercode }}</div>
                                                                <div class="product-card__name">
                                                                    <div>
                                                                        {{--                                                                        {{ asset('images/brands') }}--}}
                                                                        <div class="product-card__badges">
                                                                            <img
                                                                                style="max-width: 60px; max-height: 30px;"
                                                                                src="{{ $cross->brand?->imageUrl() }}"
                                                                                alt="">
                                                                            |
                                                                        </div>
                                                                        <a href="{{ route('product.show', $cross) }}">{{ $cross->fullTitle }}</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-card__features">
                                                                    <ul>
                                                                        @foreach(($cross->specifications ?? []) as $key => $spec)
                                                                            <li>{{ $key }}:
                                                                                <span>{{ $spec }}</span>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__footer">
                                                                <div class="product-card__prices">
                                                                    <div
                                                                        class="product-card__price product-card__price--current">{{ $cross->price?->formattedPrice }}</div>
                                                                </div>
                                                                <a href="{{ route('product.show', $cross) }}">
                                                                    <button class="product-card__addtocart-icon"
                                                                            type="button" aria-label="Add to cart">
                                                                        <svg width="20" height="20">
                                                                            {{--                                                                        <circle cx="7" cy="17" r="2"></circle>--}}
                                                                            {{--                                                                        <circle cx="15" cy="17" r="2"></circle>--}}
                                                                            <path
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"
                                                                                id="mainIconPathAttribute"></path>
                                                                            <path
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"
                                                                                id="mainIconPathAttribute"></path>

                                                                        </svg>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tabs__pane" id="product-alternative-products">
                                        <div class="products-view__list products-list products-list--grid--4"
                                             data-layout="table" data-with-features="false">
                                            <div class="products-list__head">
                                                <div class="products-list__column products-list__column--image">Image
                                                </div>
                                                <div class="products-list__column products-list__column--meta">SKU</div>
                                                <div class="products-list__column products-list__column--product">
                                                    Product
                                                </div>
                                                <div class="products-list__column products-list__column--rating">
                                                    Rating
                                                </div>
                                                <div class="products-list__column products-list__column--price">Price
                                                </div>
                                            </div>
                                            <div class="products-list__content">
                                                @foreach($product->alternatives as $cross)
                                                    <div class="products-list__item">
                                                        <div class="product-card">
                                                            <div class="product-card__actions-list">
                                                                <button
                                                                    class="product-card__action product-card__action--quickview"
                                                                    type="button" data-slug="{{ $cross->slug }}"
                                                                    aria-label="Quick view">
                                                                    <svg width="16" height="16">
                                                                        <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z"></path>
                                                                    </svg>
                                                                </button>
                                                                <button
                                                                    class="product-card__action product-card__action--wishlist"
                                                                    type="button" aria-label="Add to wish list">
                                                                    <svg width="16" height="16">
                                                                        <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"></path>
                                                                    </svg>
                                                                </button>
                                                                <button
                                                                    class="product-card__action product-card__action--compare"
                                                                    type="button" aria-label="Add to compare">
                                                                    <svg width="16" height="16">
                                                                        <path
                                                                            d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z"></path>
                                                                        <path
                                                                            d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z"></path>
                                                                        <path
                                                                            d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="product-card__image">
                                                                <div class="image image--type--product">
                                                                    <a href="{{ route('product.show', $cross) }}"
                                                                       class="image__body">
                                                                        <img class="image__tag"
                                                                             src="{{ $product->imageUrl() }}" alt="">
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                                    <div class="status-badge__body">
                                                                        <div class="status-badge__icon">
                                                                            <svg width="13" height="13">
                                                                                <path
                                                                                    d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__info">
                                                                <div
                                                                    class="product-card__meta">{{ $cross->producercode }}</div>
                                                                <div class="product-card__name">
                                                                    <div>
                                                                        <div class="product-card__badges">
                                                                            <div
                                                                                class="tag-badge tag-badge--sale">{{ $cross->brand?->name }}</div>
                                                                        </div>
                                                                        <a href="{{ route('product.show', $cross) }}">{{ $cross->fullTitle }}</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-card__rating">
                                                                    <div class="rating product-card__rating-stars">
                                                                        <div class="rating__body">
                                                                            <div
                                                                                class="rating__star rating__star--active"></div>
                                                                            <div
                                                                                class="rating__star rating__star--active"></div>
                                                                            <div
                                                                                class="rating__star rating__star--active"></div>
                                                                            <div
                                                                                class="rating__star rating__star--active"></div>
                                                                            <div class="rating__star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-card__rating-label">4 on 3
                                                                        reviews
                                                                    </div>
                                                                </div>
                                                                <div class="product-card__features">
                                                                    <ul>
                                                                        @foreach(($cross->specifications ?? []) as $key => $spec)
                                                                            <li>{{ $key }}:
                                                                                <span>{{ $spec }}</span>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__footer">
                                                                <div class="product-card__prices">
                                                                    <div
                                                                        class="product-card__price product-card__price--current">{{ $cross->price?->formattedPrice }}</div>
                                                                </div>
                                                                <button class="product-card__addtocart-icon"
                                                                        type="button" aria-label="Add to cart">
                                                                    <svg width="20" height="20">
                                                                        <circle cx="7" cy="17" r="2"></circle>
                                                                        <circle cx="15" cy="17" r="2"></circle>
                                                                        <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"></path>
                                                                    </svg>
                                                                </button>
                                                                <button class="product-card__addtocart-full"
                                                                        type="button">
                                                                    Sepete Ekle
                                                                </button>
                                                                <button class="product-card__wishlist" type="button">
                                                                    <svg width="16" height="16">
                                                                        <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"></path>
                                                                    </svg>
                                                                    <span>Add to wishlist</span>
                                                                </button>
                                                                <button class="product-card__compare" type="button">
                                                                    <svg width="16" height="16">
                                                                        <path
                                                                            d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z"></path>
                                                                        <path
                                                                            d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z"></path>
                                                                        <path
                                                                            d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z"></path>
                                                                    </svg>
                                                                    <span>Add to compare</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-tabs__pane" id="tecdoc-equivalents">
                                        @if(count($product->tecdoc ?? []))
                                            <div class="product__features">
                                                <ul>
                                                    @foreach(($product->tecdoc ?? []) as $key => $spec)
                                                        <li>{{ $key }}:
                                                            <span>{{ $spec }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @else
                                            Tecdoc eşdeğeri yok
                                        @endif
                                        <div class="block-space block-space--layout--divider-nl"></div>
                                    </div>
                                </div>
                            </div>
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
                let displayValue = model.querySelector('.content').style.display
                if (displayValue === "none")
                    model.querySelector('.content').style.display = "block"

                if (displayValue === "block")
                    model.querySelector('.content').style.display = "none"
            })
        }
    </script>
@endpush
