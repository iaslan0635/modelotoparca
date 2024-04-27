<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Model Oto Parca | modelotoparca</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <!-- fonts -->
    <link rel="stylesheet" href="https://site.modelotoparca.com/fonts/levenim-mt-2.ttf">
    {{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Calibri:400,700,400italic,700italic">--}}
    {{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">--}}
    <!-- css -->
    @php $assetVersion = 4 @endphp
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}?v={{ $assetVersion }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/assets/owl.carousel.min.css') }}?v={{ $assetVersion }}">
    <link rel="stylesheet" href="{{ asset('vendor/photoswipe/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/photoswipe/default-skin/default-skin.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ $assetVersion }}">
    <link rel="stylesheet" href="{{ asset('css/stylemd.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.header-classic-variant-one.css') }}?v={{ $assetVersion }}" {{--media="(min-width: 1200px)"--}}>
    <link rel="stylesheet" href="{{ asset('css/style.mobile-header-variant-one.css') }}" media="(max-width: 1199px)">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <style>
        .owl-theme .owl-nav {
            margin-top: 10px;
            text-align: center;
            -webkit-tap-highlight-color: transparent;
        }

        .owl-theme .owl-nav [class*='owl-'] {
            color: #FFF;
            font-size: 14px;
            margin: 5px;
            padding: 4px 7px;
            background: #D6D6D6;
            display: inline-block;
            cursor: pointer;
            border-radius: 3px;
        }

        .owl-theme .owl-nav [class*='owl-']:hover {
            background: #869791;
            color: #FFF;
            text-decoration: none;
        }

        .owl-theme .owl-nav .disabled {
            opacity: 0.5;
            cursor: default;
        }

        .owl-theme .owl-nav.disabled + .owl-dots {
            margin-top: 10px;
        }

        .owl-theme .owl-dots {
            text-align: center;
            -webkit-tap-highlight-color: transparent;
        }

        .owl-theme .owl-dots .owl-dot {
            display: inline-block;
            zoom: 1;
            *display: inline;
        }

        .owl-theme .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px 7px;
            background: #D6D6D6;
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity 200ms ease;
            border-radius: 30px;
        }

        .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
            background: #869791;
        }
    </style>
    @stack('styles')
    <livewire:styles/>
</head>

<body>
<!-- site -->
<div class="site">
    <!-- site__mobile-header -->
    @include('layouts.header-mobile')
    <!-- site__mobile-header / end -->
    <!-- site__header -->
    @include('layouts.header')
    <!-- site__header / end -->
    <!-- site__body -->
    <div class="site__body">
        @yield('content')
    </div>
    <!-- site__body / end -->
    <!-- site__footer -->
    @include('layouts.footer')
    <!-- site__footer / end -->
</div>
<!-- site / end -->
<!-- mobile-menu -->
@include('layouts.mobile-menu')
<!-- mobile-menu / end -->
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>
<!-- quickview-modal / end -->
<!-- add-vehicle-modal -->
<div id="add-vehicle-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="vehicle-picker-modal__close">
                <svg width="12" height="12">
                    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                </svg>
            </button>
            <div class="vehicle-picker-modal__panel vehicle-picker-modal__panel--active">
                <div class="vehicle-picker-modal__title card-title">Add A Vehicle</div>
                <div class="vehicle-form vehicle-form--layout--modal">
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="Year">
                            <option value="none">Select Year</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                        </select>
                    </div>
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="Brand" disabled>
                            <option value="none">Select Brand</option>
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Ferrari</option>
                            <option>Ford</option>
                            <option>KIA</option>
                            <option>Nissan</option>
                            <option>Tesla</option>
                            <option>Toyota</option>
                        </select>
                    </div>
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="Model" disabled>
                            <option value="none">Select Model</option>
                            <option>Explorer</option>
                            <option>Focus S</option>
                            <option>Fusion SE</option>
                            <option>Mustang</option>
                        </select>
                    </div>
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="Engine" disabled>
                            <option value="none">Select Engine</option>
                            <option>Gas 1.6L 125 hp AT/L4</option>
                            <option>Diesel 2.5L 200 hp AT/L5</option>
                            <option>Diesel 3.0L 250 hp MT/L5</option>
                        </select>
                    </div>
                    <div class="vehicle-form__divider">Or</div>
                    <div class="vehicle-form__item">
                        <input type="text" class="form-control" placeholder="Enter VIN number" aria-label="VIN number">
                    </div>
                </div>
                <div class="vehicle-picker-modal__actions">
                    <button type="button" class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">Cancel
                    </button>
                    <button type="button" class="btn btn-sm btn-primary">Add A Vehicle</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- add-vehicle-modal / end -->
<!-- vehicle-picker-modal -->
<div id="vehicle-picker-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="vehicle-picker-modal__close">
                <svg width="12" height="12">
                    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                </svg>
            </button>
            <div class="vehicle-picker-modal__panel vehicle-picker-modal__panel--active" data-panel="list">
                <div class="vehicle-picker-modal__title card-title">Select Vehicle</div>
                <div class="vehicle-picker-modal__text">
                    Select a vehicle to find exact fit parts
                </div>
                <div class="vehicles-list">
                    <div class="vehicles-list__body">
                        <label class="vehicles-list__item">
                            <span class="vehicles-list__item-radio input-radio">
                                <span class="input-radio__body">
                                    <input class="input-radio__input" name="header-vehicle" type="radio">
                                    <span class="input-radio__circle"></span>
                                </span>
                            </span>
                            <span class="vehicles-list__item-info">
                                <span class="vehicles-list__item-name">2011 Ford Focus S</span>
                                <span class="vehicles-list__item-details">Engine 2.0L 1742DA L4 FI Turbo</span>
                            </span>
                            <button type="button" class="vehicles-list__item-remove">
                                <svg width="16" height="16">
                                    <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"/>
                                </svg>
                            </button>
                        </label>
                        <label class="vehicles-list__item">
                            <span class="vehicles-list__item-radio input-radio">
                                <span class="input-radio__body">
                                    <input class="input-radio__input" name="header-vehicle" type="radio">
                                    <span class="input-radio__circle"></span>
                                </span>
                            </span>
                            <span class="vehicles-list__item-info">
                                <span class="vehicles-list__item-name">2019 Audi Q7 Premium</span>
                                <span class="vehicles-list__item-details">Engine 3.0L 5626CC L6 QK</span>
                            </span>
                            <button type="button" class="vehicles-list__item-remove">
                                <svg width="16" height="16">
                                    <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"/>
                                </svg>
                            </button>
                        </label>
                    </div>
                </div>
                <div class="vehicle-picker-modal__actions">
                    <button type="button" class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">Cancel
                    </button>
                    <button type="button" class="btn btn-sm btn-primary" data-to-panel="form">Add A Vehicle</button>
                </div>
            </div>
            <div class="vehicle-picker-modal__panel" data-panel="form">
                <div class="vehicle-picker-modal__title card-title">Add A Vehicle</div>
                <div class="vehicle-form vehicle-form--layout--modal">
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="Year">
                            <option value="none">Select Year</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                        </select>
                    </div>
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="Brand" disabled>
                            <option value="none">Select Brand</option>
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Ferrari</option>
                            <option>Ford</option>
                            <option>KIA</option>
                            <option>Nissan</option>
                            <option>Tesla</option>
                            <option>Toyota</option>
                        </select>
                    </div>
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="Model" disabled>
                            <option value="none">Select Model</option>
                            <option>Explorer</option>
                            <option>Focus S</option>
                            <option>Fusion SE</option>
                            <option>Mustang</option>
                        </select>
                    </div>
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="Engine" disabled>
                            <option value="none">Select Engine</option>
                            <option>Gas 1.6L 125 hp AT/L4</option>
                            <option>Diesel 2.5L 200 hp AT/L5</option>
                            <option>Diesel 3.0L 250 hp MT/L5</option>
                        </select>
                    </div>
                    <div class="vehicle-form__divider">Or</div>
                    <div class="vehicle-form__item">
                        <input type="text" class="form-control" placeholder="Enter VIN number" aria-label="VIN number">
                    </div>
                </div>
                <div class="vehicle-picker-modal__actions">
                    <button type="button" class="btn btn-sm btn-secondary" data-to-panel="list">Back to list</button>
                    <button type="button" class="btn btn-sm btn-primary">Add A Vehicle</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- vehicle-picker-modal / end -->
<!-- photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- photoswipe / end -->
<!-- scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('js/number.js') }}"></script>
<script src="{{ asset('js/main.js') }}" defer></script>
<livewire:scripts/>
<script>
    Livewire.on('reload', () => window.location.reload())
</script>
<script>
    // A basic script to listen click events without dragging (useful in carousels)

    (function ($) {
        $.fn.trueclick = function (handler) {
            let isDragging = false;

            return this
                .on('mousedown', () => isDragging = false)
                .on('mousemove', () => isDragging = true)
                .on('mouseup', function (event) {
                    if (!isDragging) handler.call(this, event);
                });
        };
    })(jQuery);
</script>
@stack('scripts')
</body>
</html>
