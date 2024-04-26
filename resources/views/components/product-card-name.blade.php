@props([
    /** @var \App\Models\Product */
    'product'
])

<div {{ $attributes->class(['product-card__name']) }}>
    <div>
        <div class="product-card__badges">
            <div class="tag-badge tag-badge--sale">{{ $product->brand?->name }}</div>
        </div>
        <a href="{{ route('product.show', $product) }}">{{ $product->fullTitle }}</a>
    </div>
</div>
