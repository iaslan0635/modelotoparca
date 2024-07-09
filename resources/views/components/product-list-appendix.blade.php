@props([
    'products',
    'highlights'
])

@if(filled($products))
    <hr {{ $attributes }}>
    <div class="products-view__list products-list products-list--grid--4" data-layout="list"
         data-with-features="false">
        <div class="products-list__content">
            @foreach($products as $product)
                <div class="products-list__item">
                    <div class="product-card">
                        <div class="product-card__actions-list">
                            <button
                                class="product-card__action product-card__action--quickview"
                                data-slug="{{ $product->slug }}" type="button"
                                aria-label="Quick view">
                                <svg width="16" height="16">
                                    <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
                 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z"/>
                                </svg>
                            </button>
                            <button
                                class="product-card__action product-card__action--wishlist"
                                type="button" aria-label="Add to wish list">
                                <svg width="16" height="16">
                                    <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
                l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"/>
                                </svg>
                            </button>
                            <button
                                class="product-card__action product-card__action--compare"
                                type="button" aria-label="Add to compare">
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
                        <x-product-card-image :product="$product"/>
                        <div class="product-card__info">
                            <div class="product-card__meta"><span
                                    class="product-card__meta-title">{{ $product->producercode }}</span>
                            </div>
                            <x-product-card-name :product="$product"/>
                            <div class="product-card__features">
                                <ul>
                                    @foreach(($product->specifications ?? []) as $key => $spec)
                                        <li>{{ "{$key} : {$spec}" }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <x-product-meta :tiger="$product->tiger"/>
                            @isset($highlights)
                                <x-product-highlights :model="$product" :highlights="$highlights"/>
                            @endisset
                        </div>
                        <x-product-card-right :product="$product" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
