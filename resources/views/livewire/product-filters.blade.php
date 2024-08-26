<div>
    @if($categories)
        <x-wire-dropdown class="btn btn-secondary">
            <span>
                {{ !$selectedCategory ? 'Kategoriler'
                    : "Kategori: " . ($categories->find($selectedCategory)?->name ?? '?') }}
            </span>
            @if($selectedCategory)
                <button class="btn btn-danger btn-outline" wire:click="$set('selectedCategory', null)">X</button>
            @endif
            <x-slot:menu style="width: max-content">
                <div class="categories">
                    <div class="filter__container">
                        <div class="filter-categories">
                            <ul class="filter-categories__list">
                                @foreach($categories as $category)
                                    <li class="filter-categories__item filter-categories__item--child"
                                        wire:key="{{$category->id}}">
                                        <img src="{{ $category->imageUrl() }}" class="category-icon-image">
                                        <a href="#" wire:click.prevent="$set('selectedCategory', {{ $category->id }})"
                                           class="{{$selectedCategory == $category->id ? 'fw-bold' : ''}}">
                                            {{ $category->name }}
                                        </a>
                                        <div class="filter-categories__counter">{{ $category->products_count }}</div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-wire-dropdown>
    @endif
</div>
