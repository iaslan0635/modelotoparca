<div class="d-flex flex-wrap position-relative">
    <div class="spinner-grow text-primary" role="status" style="position: absolute; top:-30px; z-index: 1">
        <span class="sr-only">Yükleniyor...</span>
    </div>

    @if($categories)
        <x-wire-dropdown class="btn btn-secondary my-1 mx-2 my-1 mx-2">
            <span>
                {{ !$selectedCategoryId ? 'Kategoriler'
                    : "Kategori: " . ($categories->find($selectedCategoryId)?->name ?? '?') }}
            </span>
            @if($selectedCategoryId)
                <button class="btn btn-danger btn-outline" wire:click="$set('selectedCategoryId', null)">X</button>
            @endif
            <x-slot:menu class="filter-dropdown">
                <div class="categories">
                    <div class="filter__container">
                        <div class="filter-categories">
                            <ul class="filter-categories__list">
                                @foreach($categories as $category)
                                    <li class="filter-categories__item filter-categories__item--child" wire:key="{{$category->id}}">
                                        <img src="{{ $category->imageUrl() }}" class="category-icon-image">
                                        <a href="#" wire:click.prevent="$set('selectedCategoryId', {{ $category->id }})"
                                           class="{{$selectedCategoryId == $category->id ? 'fw-bold' : ''}}">
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
        <x-wire-dropdown class="btn btn-secondary my-1 mx-2">
            <span>
                {{ $selectedBrands->isEmpty() ? 'Markalar'
                    : "Markalar: " . $selectedBrands->join(', ') }}
            </span>
            @if($selectedBrands->isNotEmpty())
                <button class="btn btn-danger btn-outline" wire:click="resetSelectedBrands">X</button>
            @endif
            <x-slot:menu class="filter-dropdown">
                <div class="filter__container">
                    <div class="filter-list">
                        <div class="filter-list__list">
                            @foreach(
                                $brands
                                    ->map(fn ($p) => [$p[0]?->brand, count($p)])
                                    ->filter(fn ($pair) => $pair[0])
                                    ->sortBy(fn ($pair) => $pair[0]?->name)
                            as $key => [$brand, $count])
                                <label class="filter-list__item" wire:key="{{$key}}">
                                    <span class="input-check filter-list__input">
                                        <span class="input-check__body">
                                            <input class="input-check__input" type="checkbox"
                                                   @if($selectedBrands->has($brand->id)) checked wire:key="checked" @else wire:key="unchecked" @endif
                                                   wire:change="toggleBrand({{ $brand->id }}, '{{ $brand->name }}')"
                                            >
                                            <span class="input-check__box"></span>
                                            <span class="input-check__icon">
                                                <svg width="9px" height="7px">
                                                    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"/>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="filter-list__title">
                                        {{ $brand->name }}
                                        <img src="{{ $brand->imageUrl() }}" class="category-icon-image">
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

    @foreach($properties as [$property, $values])
        @if(!$property->show_filter)
            @continue
        @endif

        <x-wire-dropdown class="btn btn-secondary my-1 mx-2" wire:key="{{ $property->id }}">
            @php $selectedValues = $this->getSelectedPropertyValues($property->id) @endphp
            <span>{{ $property->name }}{{ $selectedValues->isEmpty() ? '' : ": " . $selectedValues->join(", ") }}</span>
            @if($selectedValues->isNotEmpty())
                <button class="btn btn-danger btn-outline" wire:click="resetPropertyValues({{ $property->id }})">X</button>
            @endif
            <x-slot:menu class="filter-dropdown">
                <div class="filter__container">
                    <div class="filter-list">
                        <div class="filter-list__list">
                            @foreach($values as $value)
                                @if($property->search_type === "multiple")
                                    <label class="filter-list__item" wire:key="{{$value->id}}">
                                        <span class="input-check filter-list__input">
                                            <span class="input-check__body">
                                                <input class="input-check__input" type="checkbox"
                                                       @if ($this->isPropertyValueSelected($property->id, $value->value)) checked wire:key="checked" @else wire:key="unchecked" @endif
                                                       wire:change="togglePropertyValue({{ $property->id }}, '{{ $value->value }}')"
                                                >
                                                <span class="input-check__box"></span>
                                                <span class="input-check__icon">
                                                    <svg width="9px" height="7px">
                                                        <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="filter-list__title">{{ $value->value }}</span>
                                    </label>
                                @elseif($property->search_type === "none")
                                    <label class="filter-list__item" wire:key="{{$value->id}}">
                                        <span class="input-check filter-list__input">
                                            <span class="input-check__body">
                                                <input class="input-check__input" type="checkbox"
                                                       @if ($this->isPropertyValueSelected($property->id, $value->value)) checked wire:key="checked" @else wire:key="unchecked" @endif
                                                       wire:change="toggleSolePropertyValue({{ $property->id }}, '{{ $value->value }}')"
                                                >
                                                <span class="input-check__box"></span>
                                                <span class="input-check__icon">
                                                    <svg width="9px" height="7px">
                                                        <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="filter-list__title">{{ $value->value }}</span>
                                    </label>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-wire-dropdown>
    @endforeach
</div>

@assets
<style>
    .filter-dropdown {
        width: max-content;
        max-width: 60vw;
    }
</style>
@endassets
