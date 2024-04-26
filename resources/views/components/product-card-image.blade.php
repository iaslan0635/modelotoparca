<div {{ $attributes->class(['product-card__image', 'product-image-with-slider']) }}>
    <div class="image image--type--product">
        <a href="{{ route('product.show', $product) }}"
           class="image__body">
            <img loading="lazy" class="image__tag"
                 src="{{ $product->imageUrl() }}" alt="{{ $product->title }}">
        </a>
        <div class="owl-carousel owl-theme">
            @foreach($product->imageUrls() as $url)
                <div class="item">
                    <img loading="lazy" src="{{ $url }}">
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
        <script type="module">
            $('.product-image-with-slider').each(function () {
                const el = $(this)
                el.find('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                })
            })
        </script>
    @endpush
@endonce
