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
    @if($brands)
        <x-wire-dropdown class="btn btn-secondary">
            <span>
                {{ $selectedBrands->isEmpty() ? 'Markalar'
                    : "Markalar: " . $selectedBrands->keys()->join(', ') }}
            </span>
            @if($selectedBrands->isNotEmpty())
                <button class="btn btn-danger btn-outline" wire:click="resetSelectedBrands">X</button>
            @endif
            <x-slot:menu style="width: max-content">
                <div class="filter__container">
                    <div class="filter-list">
                        <div class="filter-list__list">
                            @foreach(
                                $brands
                                    ->map(fn ($p) => [$p[0]?->brand, count($p)])
                                    ->filter(fn ($pair) => $pair[0])
                                    ->sortBy(fn ($pair) => $pair[0]?->name)
                            as $key => [$brand, $count])
                                <label class="filter-list__item" wire:key="brand-top-{{$key}}">
                                    <span class="input-check filter-list__input">
                                        <span class="input-check__body">
                                            <input class="input-check__input" name="brands[]" value="{{ $key }}" type="checkbox"
                                                   wire:model.live="selectedBrands.{{ $key }}">
                                            <span class="input-check__box"></span>
                                            <span class="input-check__icon">
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
            </x-slot>
        </x-wire-dropdown>
    @endif
</div>
