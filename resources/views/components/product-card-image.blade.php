<div {{ $attributes->class(['product-card__image', 'product-image-with-slider']) }}>
    <div class="product-gallery product-gallery--layout--quickview quickview__gallery" data-layout="quickview" style="width: 100%;">
        <div class="product-gallery__featured">
            <div class="owl-carousel">
                @foreach($product->imageUrls() as $imageUrl)
                    <a class="image image--type--product">
                        <div class="image__body">
                            <img class="image__tag" src="{{$imageUrl}}">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="product-gallery__thumbnails">
            <div class="owl-carousel">
                @foreach($product->imageUrls() as $imageUrl)
                    <div class="product-gallery__thumbnails-item image image--type--product">
                        <div class="image__body">
                            <img class="image__tag" src="{{$imageUrl}}">
                        </div>
                    </div>
                @endforeach
            </div>
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
            onMainJsResolved(() => {
                $('.product-gallery').each(function (i, gallery) {
                    initProductGallery(gallery, "quickview", true);
                })
            })
            /*Livewire.hook('morph.added', ({ el, component }) => {
                console.log("morph.added")
                onMainJsResolved(() => {
                    $('.product-gallery').each(function (i, gallery) {
                        initProductGallery(gallery, "quickview", true);
                    })
                })
            })
            Livewire.hook('morph.removed', ({ el, component }) => {
                console.log("morph.removed")
                onMainJsResolved(() => {
                    $('.product-gallery').each(function (i, gallery) {
                        initProductGallery(gallery, "quickview", true);
                    })
                })
            })*/
        </script>
    @endpush
@endonce
