<x-product-list :products="$products" :filtered-properties="$property" :properties="$allProperties" :category="$category" :brands-array="$brandsArray" :brands="$brands">
    <x-slot:breadcrumb>
        <x-breadcrumb :parts="[
            ['name' => 'Kategoriler', 'link' => route('category.index')],
            ['name' => $category->name]
        ]"/>
    </x-slot:breadcrumb>
    <x-slot:extraFilters>
        <div class="widget-filters__item">
            <div class="filter filter--opened" data-collapse-item>
                <button type="button" class="filter__title" data-collapse-trigger>
                    Kategoriler
                    <span class="filter__arrow">@include('icons/chevron-down')</span>
                </button>
                <div class="filter__body categories" data-collapse-content>
                    <div class="filter__container">
                        <div class="filter-categories">
                            <ul class="filter-categories__list">
                                @foreach($parents->unique("name")->sortBy("name") as $parent)
                                    <li class="filter-categories__item filter-categories__item--b parent"
                                        wire:key="cat-parent-{{$parent->id}}">
                                        <span class="filter-categories__arrow">@include('icons/chevron-left')</span>
                                        <img src="{{ $parent->imageUrl() }}" class="category-icon-image">
                                        <a href="{{ route('category.show', [...Arr::except(request()->query(), ['page']), 'category' => $parent]) }}">
                                            {{ $parent->name }}
                                        </a>
                                        <div class="filter-categories__counter">{{ $parent->deepProductsCount }}</div>
                                    </li>
                                @endforeach
                                <li class="filter-categories__item filter-categories__item--current"
                                    wire:key="cat-current">
                                    <img src="{{ $category->imageUrl() }}" class="category-icon-image">
                                    <a href="{{ route('category.show', [...Arr::except(request()->query(), ['page']), 'category' => $category]) }}">
                                        {{ $category->name }}
                                    </a>
                                    <div class="filter-categories__counter">{{ $category->products_count }}</div>
                                </li>
                                @foreach($category->children->unique("name")->sortBy("name") as $child)
                                    @if($child->deepProductsCount > 0)
                                        <li class="filter-categories__item filter-categories__item--child"
                                            wire:key="cat-{{$child->id}}">
                                            <img src="{{ $child->imageUrl() }}" class="category-icon-image">
                                            <a href="{{ route('category.show', [...Arr::except(request()->query(), ['page']), 'category' => $child]) }}">
                                                {{ $child->name }}
                                            </a>
                                            <div class="filter-categories__counter">{{ $child->products_count }}</div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget-filters__item">
            <div class="filter filter--opened" data-collapse-item>
                <button type="button" class="filter__title" data-collapse-trigger>
                    Markalar
                    <span class="filter__arrow">
                        <svg width="12px" height="7px">
                            <path
                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"/>
                        </svg>
                    </span>
                </button>
                <div class="filter__body" data-collapse-content style="max-height: 280px;overflow: auto;">
                    <div class="filter__container">
                        <div class="filter-list">
                            <div class="filter-list__list">
                                @foreach(
                                    collect($brands)
                                        ->map(fn ($p) => [$p[0]?->brand, count($p)])
                                        ->filter(fn ($pair) => $pair[0])
                                        ->sortBy(fn ($pair) => $pair[0]?->name)
                                as $key => [$brand, $count])
                                    <label class="filter-list__item" wire:key="brand-top-{{$key}}">
                                        <span class="input-check filter-list__input">
                                            <span class="input-check__body">
                                                <input class="input-check__input" name="brands[]" value="{{ $key }}" wire:model="brandsArray" type="checkbox"
                                                    {{ request()->has('brands') ? in_array($key, request()->input('brands')) ? "checked":null:null }}>
                                                <span class="input-check__box"></span><span class="input-check__icon">
                                                    <svg width="9px" height="7px">
                                                        <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="filter-list__title">
                                            {{ $brand?->name }}
                                            <img src="{{ $brand?->imageUrl() }}" class="category-icon-image">
                                        </span>
                                        <span class="filter-list__counter">{{ $count }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:extraFilters>
</x-product-list>
