<div {{ $attributes->class(['product-card__name']) }}>
    <div>
        @if($hasBrandImage)
            <div class="product-card__badges">
                <img src="{{ $brandImage }}" style="max-width: 5rem; max-height: 2rem;">
            </div>
        @endif
        <a href="{{ route('product.show', $product) }}">{{ $product->fullTitle }}</a>
    </div>
</div>
