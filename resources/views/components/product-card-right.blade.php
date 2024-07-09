@props([
    /** @var \App\Models\Product */
    'product'
])

<div {{ $attributes->class(['product-card__footer']) }}>
    <div class="product-card__prices flex-column">
        @if($product->price?->discount)
            <div class="product-card__price product-card__price--old" style="font-size: xx-large">{{ $product->price?->listingPrice() }}</div>
            <div class="product-card__price product-card__price--new">{{ $product->price?->sellingPrice() }}</div>
        @else
            <div class="product-card__price product-card__price--current">{{ $product->price?->sellingPrice() }}</div>
        @endif
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
    <livewire:add-to-cart :wire:key="$product->id"
                          :product="$product"
                          :quantity_mode="false"/>
    <button class="product-card__wishlist" type="button">
        <svg width="16" height="16">
            <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"/>
        </svg>
        <span>Favorilerime Ekle</span>
    </button>
    <div class="product-card__compare">
        {{ $slot }}
    </div>
</div>
