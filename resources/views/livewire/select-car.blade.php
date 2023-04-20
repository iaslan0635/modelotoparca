<div>
    @if(!$selectMaker)
        <div class="top-auto">
            <div class="row">
                @foreach($makers as $maker)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="top-auto-item top-auto-item--model" data-tooltip-click="">
                            <a href="../../spare-parts/bmw/oil-filter.html" class="top-auto-item__image">
                                <img class=" lazyloaded" src="https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838"
                                     data-srcset="https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838 1x, https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838 2x"
                                     srcset="https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838 1x, https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838 2x"
                                     alt="Original Oil Filter for BMW catalogue">
                            </a>
                            <div class="top-auto-item__name"
                                 data-link="https://www.onlinecarparts.co.uk/spare-parts/bmw/oil-filter.html">
                                <span>{{ $maker->name }}</span>
                            </div>

                            <div class="top-auto-item__tooltip js-tooltip">
                                <span class="close"></span>
                                <ul>
                                    <li>
                                        <a href="../spare-parts/bmw/oil-filter/3er-reihe.html"
                                           class="top-auto-item__tooltip-link">
                                            3 Series
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../spare-parts/bmw/oil-filter/5er-reihe.html"
                                           class="top-auto-item__tooltip-link">
                                            5 Series
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../spare-parts/bmw/oil-filter/1er-reihe.html"
                                           class="top-auto-item__tooltip-link">
                                            1 Series
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../spare-parts/bmw/oil-filter/x5.html" class="top-auto-item__tooltip-link">
                                            X5
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <h3 class="models-title"><span>Oil Filter for BMW models</span></h3>

    <div class="top-auto">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="top-auto-item"
                     data-link="https://www.onlinecarparts.co.uk/spare-parts/bmw/oil-filter/3-e90.html">
                    <a href="https://www.onlinecarparts.co.uk/spare-parts/bmw/oil-filter/3-e90.html"
                       class="top-auto-item__image">
                        <img class=" ls-is-cached lazyloaded"
                             src="https://scdn.autoteiledirekt.de/groups/170x100/952.png"
                             data-srcset="https://scdn.autoteiledirekt.de/groups/170x100/952.png 1x, https://scdn.autoteiledirekt.de/groups/170x100/952.png 2x"
                             srcset="https://scdn.autoteiledirekt.de/groups/170x100/952.png 1x, https://scdn.autoteiledirekt.de/groups/170x100/952.png 2x"
                             alt="Original Oil Filter BMW 3 Saloon (E90)">
                    </a>
                    <div class="top-auto-item__name">
                        <span>3 Saloon (E90)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
