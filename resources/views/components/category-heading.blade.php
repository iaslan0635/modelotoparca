@props(['category'])

<div {{ $attributes->class(['products-view__options view-options view-options--offcanvas--mobile']) }}>
    <div class="card">
        <div class="card-body card-body--padding--2">
            <div class="row">
                <div class="col-auto">
                    <img src="//placehold.co/300">
                </div>
                <div class="col">
                    <h2>Oil filter for auto</h2>
                    <h5>Popular manufacturers</h5>
                    <div class="owl-carousel owl-theme">
                        @for($i = 0; $i < 20; $i++)
                            <div class="item">
                                <div class="brand-slider-item">
                                    <img src="//placehold.co/200x100">
                                    <img src="//placehold.co/200x100">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push("scripts")
    <script>
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
    </script>
@endpush
@push("styles")
    <style>
        .brand-slider-item {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>
@endpush
