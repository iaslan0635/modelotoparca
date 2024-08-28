@extends("layouts.master")
@section("content")
    <x-product-list :products="$query->clone()->paginate(10)" :filter-categories="$filterCategories" :min_price="$min_price" :max_price="$max_price">
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
                                    @foreach($query->clone()->with('categories')->get("id")->pluck('categories')->flatten()->unique('name') as $child)
                                        <li class="filter-categories__item filter-categories__item--child"
                                            wire:key="cat-{{$child->id}}">
                                            <img src="{{ $child->imageUrl() }}" class="category-icon-image">
                                            <a href="?category={{$child->slug}}">
                                                {{ $child->name }}
                                            </a>
                                            <div class="filter-categories__counter">{{ $child->products_count }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot:extraFilters>
    </x-product-list>
@endsection
