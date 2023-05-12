<div>
    <div wire:loading.flex
         style="aspect-ratio: 1; border-radius: 100%; background: black; display: none; justify-content: center; align-items: center;position: fixed; bottom: 2rem; right: 2rem; z-index: 100; height: 42px">
        <div class="spinner-border text-light" role="status"></div>
    </div>
    @if(array_key_exists($previusStage, $chosen))
        <h3 class="models-title"><span>{{ @$chosen[$previusStage]["title"] ?? $chosen[$previusStage]["name"] }}</span></h3>
    @endif

    <div wire:click="decrementStage()" class="btn btn-info">&leftarrow;</div>

    <div class="top-auto">
        <div class="row">
            @foreach($lists[$stage] as $i => $item)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="top-auto-item top-auto-item--model" data-tooltip-click="" wire:click="choose({{$i}})">
                        <a class="top-auto-item__image">
                            <img class=" lazyloaded" src="{{@$item["image"] ?? "https://scdn.autoteiledirekt.de/makers/16.svg?rev=94077838"}}">
                        </a>
                        <div class="top-auto-item__name"
                             data-link="https://www.onlinecarparts.co.uk/spare-parts/bmw/oil-filter.html">
                            <span>{{ $item["name"] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
