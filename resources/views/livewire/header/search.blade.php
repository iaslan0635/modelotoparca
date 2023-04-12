<div class="header__search">
    <div class="search">
        <form action="{{ route("search") }}" class="search__body">
            <div class="search__shadow"></div>
            <input name="query" class="search__input" wire:model="query" type="text" placeholder="Ürün Adı, Ürün Kodu, Oem Kodu veya Marka yazın">
            <livewire:garage :key="'garage'" />
            <button class="search__button search__button--end" type="submit">
                                <span class="search__button-icon"><svg width="20" height="20">
                                        <path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
	c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
	c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z" />
                                    </svg>
                                </span>
            </button>
            <div class="search__box"></div>
            <div class="search__decor">
                <div class="search__decor-start"></div>
                <div class="search__decor-end"></div>
            </div>
            <div class="search__dropdown search__dropdown--suggestions suggestions {{ strlen($query) >= 3 ? "search__dropdown--open":null }}">
                <div class="suggestions__group">
                    <div class="suggestions__group-title">Ürünler</div>
                    <div class="suggestions__group-content">
                        @foreach($results as $product)
                            <a class="suggestions__item suggestions__product"
                               href="{{ route('product.show', $product) }}">
                                <div class="suggestions__product-image image image--type--product">
                                    <div class="image__body">
                                        <img class="image__tag" src="{{ $product->imageUrl() }}" alt="">
                                    </div>
                                </div>
                                <div class="suggestions__product-info">
                                    <div class="suggestions__product-name">{{ $product->fullTitle }}</div>
                                    <div class="suggestions__product-rating">
                                        <div class="suggestions__product-rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="suggestions__product-rating-label">5 on 22 reviews</div>
                                    </div>
                                </div>
                                <div class="suggestions__product-price">{{ $product->price->formattedPrice }}</div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="suggestions__group">
                    <div class="suggestions__group-title">Kategoriler</div>
                    <div class="suggestions__group-content">
                        @foreach($categories as $category)
                            <a class="suggestions__item suggestions__category" href="{{ route('category.show', $category) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
