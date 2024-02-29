<x-product-list :products="$products">
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
                                    <li class="filter-categories__item filter-categories__item--parent"
                                        wire:key="cat-parent-{{$parent->id}}">
                                        <span class="filter-categories__arrow">@include('icons/chevron-left')</span>
                                        <img src="{{ $parent->imageUrl() }}" class="category-icon-image">
                                        <a href="{{ route('category.show', [...request()->query(), 'category' => $parent]) }}">
                                            {{ $parent->name }}
                                        </a>
                                        <div class="filter-categories__counter">{{ $parent->deepProductsCount }}</div>
                                    </li>
                                @endforeach
                                <li class="filter-categories__item filter-categories__item--current"
                                    wire:key="cat-current">
                                    <img src="{{ $category->imageUrl() }}" class="category-icon-image">
                                    <a href="{{ route('category.show', [...request()->query(), 'category' => $category]) }}">
                                        {{ $category->name }}
                                    </a>
                                    <div class="filter-categories__counter">{{ $category->products_count }}</div>
                                </li>
                                @foreach($category->children->unique("name")->sortBy("name") as $child)
                                    @if($child->deepProductsCount > 0)
                                        <li class="filter-categories__item filter-categories__item--child"
                                            wire:key="cat-{{$child->id}}">
                                            <img src="{{ $child->imageUrl() }}" class="category-icon-image">
                                            <a href="{{ route('category.show', [...request()->query(), 'category' => $child]) }}">
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
    </x-slot:extraFilters>
</x-product-list>
