<div class="product-tabs__pane product-tabs__pane--active" id="product-same-products">
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
                                    {{-- {{ asset('images/brands') }} --}}
                                    <div class="product-card__badges">
                                        <img
                                                style="max-width: 60px; max-height: 30px;"
                                                src="{{ $cross->brand?->imageUrl() }}"
                                                alt="">
                                        |
                                    </div>
                                    <a href="{{ route('product.show', $cross) }}">
                                        {{ $cross->fullTitle }}
                                        <x-product-meta-stock
                                                :tiger="$cross->tiger"/>
                                    </a>
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
                                        class="product-card__price product-card__price--current">{{ $cross->price?->sellingPrice() }}</div>
                            </div>
                            <livewire:add-to-cart :product="$cross"/>
                            <livewire:add-to-list :product="$cross" class="btn btn-primary btn-lg mt-2"/>
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
