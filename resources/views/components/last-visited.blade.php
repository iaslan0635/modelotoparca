<div class="card widget widget-products d-none d-lg-block">
    <div class="widget__header">
        <h4>Son Ziyaret Ettiğim Ürünler</h4>
    </div>
    <div class="widget-products__list">
        @foreach(\App\Packages\LatestProducts::items() as $item)
            <div class="widget-products__item">
                <div class="widget-products__image image image--type--product">
                    <a href="{{ route('product.show', $item) }}" class="image__body">
                        <img loading="lazy" class="image__tag"
                             src="{{ $item->imageUrl() }}"
                             alt="">
                    </a>
                </div>
                <div class="widget-products__info">
                    <div class="widget-products__name">
                        <a href="{{ route('product.show', $item) }}">{{ $item->fullTitle }}</a>
                    </div>
                    <div class="widget-products__prices">
                        <div
                            class="widget-products__price widget-products__price--current">
                            {{ $item->price?->formattedPrice }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
