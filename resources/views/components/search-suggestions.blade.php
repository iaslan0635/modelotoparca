<div wire:ignore.self class="search__dropdown search__dropdown--suggestions suggestions">
    <div class="suggestions__group">
        <div class="suggestions__group-title">Ürünler</div>
        <div class="suggestions__group-content">
            @foreach($results as $product)
                {{-- {{ dd($product->model()) }}--}}
                <a class="suggestions__item suggestions__product"
                   href="{{ route('product.show', $product->model()) }}">
                    <div class="suggestions__product-image image image--type--product">
                        <div class="image__body">
                            <img class="image__tag" src="{{ $product->model()->imageUrl() }}" alt="">
                        </div>
                    </div>
                    <div class="suggestions__product-info">
                        <div class="suggestions__product-name">{{ $product->model()->fullTitle }}
                            / {{ implode(',', array_keys($highlights[$product->model()->id] ?? [])) }}</div>
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
                   href="{{ route('search', ['query' => $query, 'category' => $category->id]) }}">{{ $category->name }}</a>
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
</div>
