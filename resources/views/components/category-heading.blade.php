<div {{ $attributes->class(['products-view__options view-options view-options--offcanvas--mobile']) }}>
    <div class="card">
        <div class="card-body card-body--padding--2">
            @if($category->parent)
                <a class="btn btn-secondary" href="{{ route('category.show', $category->parent) }}">
                    <i class="fa fa-arrow-left ms-1"></i>
                    Geri
                </a>
            @endif
            <div class="subcatrow">
                <div class="product-subcat">
                    <div class="subcat__list">
                        @foreach($category->children as $child)
                            <a class="subcaticon" href="{{ route('category.show', $child) }}">
                                <img class="subcaticon" src="{{ $child->imageUrl() }}" style="
                                height: 150px;
                                max-width: 150px;">
                                <span style="color: #20548e; font-weight: 800;">{{ $child->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-between">
                    <div class="owl-slider">
                        <div id="carousel" class="owl-carousel">
                            @foreach($brands as $brand)
                                <a class="brandslideitem" href="{{ route('category.show', [
                                    'category' => $category,
                                    'brands[0]' => $brand->id
                                ]) }}">
                                    <img style="max-height: 50px" src="{{ $brand->imageUrl() }}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{--
            <br>
            <div class="row">
                <div class="col-auto">
                    <img src="{{ $category->imageUrl() }}" style="max-height: 15rem;margin-bottom: 1.65rem;">
                </div>
                <div class="col d-flex flex-column justify-content-between">
                    <div>
                        <h2>{{$category->name}}</h2>
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
            </div>--}}
        </div>
    </div>
</div>

<style>
    .subcatrow {
        display: flex;
        justify-content: center;
        margin-bottom: 2rem;
    }

    .product-subcat {
        padding: 20px;
        border-radius: 8px; /* Köşeleri yuvarlama */
    }

    .subcat__list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px; /* Etiketler arasındaki boşluk */
    }

    .subcaticon {
        display: flex;
        flex-direction: column; /* İçeriği dikey olarak hizalama */
        align-items: center; /* Merkezi hizalama */
        background-color: #fff;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Hafif gölge */
        transition: transform 0.3s, box-shadow 0.3s; /* Hover efekti için geçiş */
        text-align: center; /* Yazıyı merkezde hizalama */
        width:210px !important;
    }

    .subcaticon img {
        width: 60px;
        height: 60px;
        margin-bottom: 5px; /* Resim ve yazı arasındaki boşluk */
    }

    .subcaticon a {
        text-decoration: none;
        color: #333;
        font-weight: 600;
        margin-top: 5px;
    }

    .subcaticon:hover {
        transform: translateY(-5px); /* Hover edildiğinde yukarı kaldır */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Hover gölgesini artır */
    }

    .subcaticon a:hover {
        color: #ff9900; /* Bağlantı üzerine gelindiğinde renk değişimi */
    }

    .owl-nav button {
        position: absolute;
        top: 50%;
        background-color: #000;
        color: #fff;
        margin: 0;
        transition: all 0.3s ease-in-out;
    }

    .owl-nav button.owl-prev {
        left: 0;
    }

    .owl-nav button.owl-next {
        right: 0;
    }

    .owl-dots {
        text-align: center;
        padding-top: 15px;
    }

    .owl-dots button.owl-dot {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        display: inline-block;
        background: #ccc;
        margin: 0 3px;
    }

    .owl-dots button.owl-dot.active {
        background-color: #000;
    }

    .owl-dots button.owl-dot:focus {
        outline: none;
    }

    .owl-nav button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.38) !important;
    }

    .owl-nav button:focus {
        outline: none;
    }

    .owl-item {
        /*height: 300px !important; !* Adjust this value as needed *!*/
        display: flex;
    }

    .brandslideitem {
        width: 100%;
        height: 90px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .brandimgslideitem {
        width: 100%;
        max-height: 80px;
    }

</style>
@push("scripts")
    <script defer>
        const runSlider = () => {
            console.log("livewire initialized")
            jQuery("#carousel").trigger('destroy.owl.carousel');
            $('.owl-brands-slider').trigger('destroy.owl.carousel');

            jQuery("#carousel").owlCarousel({
                autoplay: true,
                rewind: false, /* use rewind if you don't want loop */
                margin: 20,
                loop: false,
                /*
               animateOut: 'fadeOut',
               animateIn: 'fadeIn',
               */
                responsiveClass: true,
                autoHeight: true,
                autoplayTimeout: 7000,
                smartSpeed: 800,
                nav: true,
                navText: [
                    '<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>',
                    '<svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>'],
                responsive: {
                    0: {
                        items: 3
                    },

                    600: {
                        items: 6
                    },

                    1024: {
                        items: 8
                    },

                    1366: {
                        items: 10
                    }
                }
            });

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
        }
        Livewire.hook('morph.added', ({ el, component }) => {
            runSlider()
        })
        runSlider()

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
