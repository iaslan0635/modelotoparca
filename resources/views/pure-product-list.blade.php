<div class="products-view__list products-list products-list--grid--4" data-layout="list" data-with-features="false">
    <div class="products-list__head">
        <div class="products-list__column products-list__column--image">Image</div>
        <div class="products-list__column products-list__column--meta">SKU</div>
        <div class="products-list__column products-list__column--product">Product</div>
        <div class="products-list__column products-list__column--rating">Rating</div>
        <div class="products-list__column products-list__column--price">Price</div>
    </div>
    <div class="products-list__content">
        @foreach($products as $product)
            <div class="products-list__item" wire:key="product-{{$product->id}}">
                <div class="product-card">
                    <div class="product-card__actions-list">
                        <button
                            class="product-card__action product-card__action--quickview"
                            data-slug="{{ $product->slug }}"
                            type="button"
                            aria-label="Quick view">
                            <svg width="16" height="16">
                                <path
                                    d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z"/>
                            </svg>
                        </button>
                        <button
                            class="product-card__action product-card__action--wishlist"
                            type="button" aria-label="Add to wish list">
                            <svg width="16" height="16">
                                <path
                                    d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7 l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"/>
                            </svg>
                        </button>
                        <button
                            class="product-card__action product-card__action--compare"
                            type="button"
                            aria-label="Add to compare">
                            <svg width="16" height="16">
                                <path
                                    d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z"/>
                                <path
                                    d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z"/>
                                <path
                                    d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z"/>
                            </svg>
                        </button>
                    </div>
                    <x-product-card-image :product="$product" compatible/>
                    <div class="product-card__info">
                        <div class="product-card__meta">
                            <span
                                class="product-card__meta-title">{{ $product->producercode }}</span>
                        </div>
                        <x-product-card-name :product="$product"/>

                        <div class="product-card__features">

                            <ul>
                                {{$product->sku}}
                            </ul>

                            <ul>
                                @foreach(($product->specifications ?? []) as $key => $spec)
                                    <li wire:key="spec-{{$key}}">{{ "{$key} : {$spec}" }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="product-card__footer">
                        <div class="product-card__prices">
                            <div
                                class="product-card__price product-card__price--current">{{ $product->price?->formattedPrice }}</div>
                        </div>
                        <button class="product-card__addtocart-icon" type="button"
                                aria-label="Add to cart">
                            <svg width="20" height="20">
                                <circle cx="7" cy="17" r="2"/>
                                <circle cx="15" cy="17" r="2"/>
                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"/>
                            </svg>
                        </button>
                        <livewire:add-to-cart :product="$product" :key="$product->id"
                                              :quantity_mode="false"/>
                        <button class="product-card__wishlist" type="button">
                            <svg width="16" height="16">
                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"/>
                            </svg>
                            <span>Favorilerime Ekle</span>
                        </button>
                        <button class="product-card__compare" type="button">
                            <svg width="16" height="16">
                                <path
                                    d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z"/>
                                <path
                                    d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z"/>
                                <path
                                    d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z"/>
                            </svg>
                            <span>Karşılaştır</span>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="products-view__pagination">
    <nav aria-label="Page navigation example">
        {{ $products->withQueryString()->links() }}
    </nav>
    <div class="products-view__pagination-legend">
        {{ $products->total() }} adet üründen {{ min($products->total(), $products->perPage()) }} tanesi
        gösteriliyor
    </div>
</div>
