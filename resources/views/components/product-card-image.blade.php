<div {{ $attributes->class(['product-card__image', 'product-image-with-slider']) }}>
    <div class="image image--type--product">
        <a href="{{ route('product.show', $product) }}"
           class="image__body">
            <img class="image__tag" style="line-height: 10;text-align: center;" src="{{ $product->imageUrl() }}" alt="{{ $product->title }}" loading="lazy">
        </a>
        <div class="owl-carousel owl-theme">
            @foreach($product->imageUrls() as $url)
                <div class="item">
                    <img class="product-slider-image" loading="lazy" src="{{ $url }}" onerror="this.remove()">
                </div>
            @endforeach
        </div>
    </div>
    @if($compatible)
        <x-compatible-badge/>
        {{-- Car search page has this --}}
        {{--<div
            class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
            <div class="status-badge__body">
                <div class="status-badge__icon">
                    <svg width="13" height="13">
                        <path
                            d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z"/>
                    </svg>
                </div>
                <x-compatible-badge/>
                <div class="status-badge__tooltip" tabindex="0"
                     data-toggle="tooltip"
                     title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
            </div>
        </div>--}}
    @endif
</div>

@once
    @push("scripts")
        <script>
            $('.product-image-with-slider').each(function () {
                const el = $(this)
                const image = el.find('.image__tag')

                el.find('.owl-carousel').owlCarousel({
                    loop: false,
                    rewind: false,
                    margin: 10,
                    nav: true,
                    items: 3,
                    center: true,
                })

                el.find('.product-slider-image').trueclick(function () {
                    image.attr('src', $(this).attr('src'))
                })
            })
        </script>
    @endpush
@endonce
