<div>
    <div wire:loading.flex
         style="aspect-ratio: 1; border-radius: 100%; background: black; display: none; justify-content: center; align-items: center;position: fixed; bottom: 2rem; right: 2rem; z-index: 100; height: 42px">
        <div class="spinner-border text-light" role="status"></div>
    </div>
    @if(!$selectMaker)
        <div class="top-auto">
            <div class="row">
                @foreach($makers as $maker)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="top-auto-item top-auto-item--model" data-tooltip-click="" wire:click="selectMakerForDropdown('{{$maker->name}}')">
                            <a class="top-auto-item__image">
                                <img class=" lazyloaded" src="https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838"
                                     data-srcset="https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838 1x, https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838 2x"
                                     srcset="https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838 1x, https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838 2x"
                                     alt="Original Oil Filter for BMW catalogue">
                            </a>
                            <div class="top-auto-item__name"
                                 data-link="https://www.onlinecarparts.co.uk/spare-parts/bmw/oil-filter.html">
                                <span>{{ $maker->name }}</span>
                            </div>

                            @if($selectedMakerForDropdown === $maker->name)
                                <div class="top-auto-item__tooltip js-tooltip" style="visibility: visible;opacity: 1;">
                                    <span class="close"></span>
                                    <ul>
                                        @foreach($dropdownContent as $item)
                                            <li>
                                                <a href="{{$item["link"]}}"
                                                   class="top-auto-item__tooltip-link">
                                                    {{$item["name"]}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
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
