<div {{ $attributes->class(['products-view__options view-options view-options--offcanvas--mobile']) }}>
    <div class="card">
        <div class="card-body card-body--padding--2">
            <div class="row">
                <div class="col-auto">
                    <img src="//placehold.co/300" style="margin-bottom: 1.65rem">
                </div>
                <div class="col d-flex flex-column justify-content-between">
                    <div>
                        <h2>Oil filter for auto</h2>
                        <h5>Popular manufacturers</h5>
                    </div>
                    <div wire:ignore>
                        <div class="owl-carousel owl-brands-slider">
                            @foreach(collect($brands)->chunk(2) as $i => $chunk)
                                <div class="item" wire:key="brand-slider-chunk-{{$i}}">
                                    <div class="brand-slider-group">
                                        @foreach($chunk as $brand)
                                            <img wire:key="brand-slider-group-{{$brand->id}}" src="{{ $brand->imageUrl() }}" data-id="{{$brand->id}}" class="brand-slider-item">
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push("scripts")
    <script defer>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
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

        function selectBrand(id) {
            console.log("selected brand " + id)
            const qs = new URLSearchParams(window.location.search)

            const keysToBeRemoved = Array.from(qs.keys()).filter(k => k.startsWith("brands"))
            keysToBeRemoved.forEach(k => qs.delete(k))

            qs.set("brands[]", id)
            window.location.search = qs.toString()
        }

        let isDragging = false
        $('.brand-slider-item')
            .mousedown(() => isDragging = false)
            .mousemove(() => isDragging = true)
            .mouseup(function () {
                if (!isDragging) selectBrand($(this).data('id'))
                isDragging = false
            });
    </script>
@endpush
@push("styles")
    <style>
        .brand-slider-item {
            cursor: pointer;
            width: 7.5rem;
            max-height: 100%;
        }

        .brand-slider-group {
            display: grid;
            flex-direction: column;
            gap: 10px;
            align-items: start;
            justify-items: center;
            grid-template-rows: 1fr 1fr;
            height: 16rem;
        }

        .brand-slider-group :focus {
            outline: none;
        }

        .owl-brands-slider .owl-dots {
            text-align: center;
            -webkit-tap-highlight-color: transparent
        }

        .owl-brands-slider .owl-dots .owl-dot {
            display: inline-block;
            zoom: 1
        }

        .owl-brands-slider .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px 7px;
            background: #D6D6D6;
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity .2s ease;
            border-radius: 30px
        }

        .owl-brands-slider .owl-dots .owl-dot.active span,
        .owl-brands-slider .owl-dots .owl-dot:hover span {
            background: #869791
        }
    </style>
@endpush
