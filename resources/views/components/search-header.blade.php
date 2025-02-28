<div {{ $attributes->class(['products-view__options view-options view-options--offcanvas--mobile']) }}>
    <div class="card">
        <div class="card-body card-body--padding--2">
            <div class="row">
                <div class="col d-flex flex-column justify-content-between">
                <div>
                    <h5>Kategoriler</h5>
                </div>

                </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-between">
                    <div>
                        <h5>Markalar</h5>
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
        $('.owl-brands-slider').owlCarousel({
            loop: false,
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

        $('.brand-slider-item').trueclick(function () {
            selectBrand($(this).data('id'))
        })
    </script>
@endpush
@push("styles")
    <style>
        .brand-slider-item {
            cursor: pointer;
            height: 2.5rem;
            max-width: 100% !important;
            /*width: 7.5rem;*/
            /*max-height: 100%;*/
        }

        .brand-slider-group {
            display: grid;
            flex-direction: column;
            gap: 10px;
            align-items: start;
            justify-items: center;
            grid-template-rows: 1fr 1fr;
            height: 9rem;
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
