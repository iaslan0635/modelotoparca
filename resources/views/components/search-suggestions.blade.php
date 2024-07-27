<div wire:ignore.self class="search__dropdown search__dropdown--suggestions suggestions">
    <div class="suggestions__group">
        <div class="suggestions__group-title">Ürünler</div>
        <div class="suggestions__group-content">
            @foreach($results as $product)
                @if(($model = $product->model()) === null)
                    @php
                        Log::driver("important")->error("Product model is null. id: " . $product->document()->id())
                    @endphp
                    @continue
                @endif

                {{-- {{ dd($product->model()) }}--}}
                <a class="suggestions__item suggestions__product"
                   href="{{ route('product.show', $product->model()) }}">
                    <div class="suggestions__product-image image image--type--product">
                        <div class="image__body">
                            <img class="image__tag" src="{{ $product->model()->imageUrl() }}" alt="">
                        </div>
                    </div>
                    <div class="suggestions__product-info">
                        <div class="suggestions__product-name">
                            {!! ($str = @$product->highlight()["full_text"][0]) ? explode(" | ", $str)[0]
                                : (@$product->highlight()["title"][0] ?? $product->model()->fullTitle) !!}
                            {{ ($ids = implode(',', array_keys($highlights[$product->model()->id] ?? []))) ? " / $ids": "" }}
                        </div>
                        <div class="suggestions__product-rating">
                            {{ $product->model()->brand?->name }}
                        </div>
                    </div>
                    <div class="suggestions__product-image image image--type--product">
                        <div class="image__body">
                            <img class="image__tag" src="{{ $product->model()->brand?->imageUrl() }}">
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="suggestions__group">
        <div class="suggestions__group-title">Kategoriler</div>
        <div class="suggestions__group-content">
            @foreach($categories as ["category" => $category])
                <a class="suggestions__item suggestions__category"
                   href="{{ route('search', ['query' => $query, 'category' => $category->id]) }}">
                    <span class="text-muted">{{ $category->allParents()->map(fn ($c) => $c->name)->join(" > ") }} &gt;</span> {{ $category->name }}
                </a>
            @endforeach
        </div>
    </div>
    <div class="suggestions__group">
        <div class="suggestions__group-title">Öneriler</div>
        <div class="suggestions__group-content">
            @foreach($suggestions as $key => $suggestion)
                @foreach($suggestion as $item)
                    <a class="suggestions__item suggestions__category"
                       href="{{ route('search', ['query' => strip_tags($item)]) }}">{{ ucfirst($key) }}
                        - {!! $item !!}</a>
                @endforeach
            @endforeach
        </div>
    </div>
    <div wire:loading.flex
         style="display: none; background: rgba(255, 255, 255, 0.29);backdrop-filter: blur(3px);position: absolute;inset: 0;justify-content: center;align-items: center;">
        <div class="spinner-border"></div>
    </div>
</div>
