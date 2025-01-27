<div class="d-flex flex-wrap position-relative">
    <div class="spinner-grow text-primary" role="status" style="position: absolute; top:-30px; z-index: 1"
        wire:loading.delay.longer>
        <span class="sr-only">Yükleniyor...</span>
    </div>

    <x-wire-dropdown class="btn-filter my-1 ml-3">
        <span title="{{ 'Fiyat' . $this->priceRepr }}">
            <span>Fiyat{{ $this->priceRepr }}</span>
        </span>
        @if($priceMin || $priceMax)
        <button class="btn-close" wire:click="resetPriceFilters">×</button>
        @endif
        <x-slot:menu class="filter-dropdown" style="width: 30rem">
            <div class="filter__container">
                <div wire:ignore>
                    <div class="filter-price__slider"></div>
                    <div class="filter-price__title-button">
                        <div class="filter-price__title d-flex justify-content-between w-100">
                            <span>
                                <span class="filter-price__min-value"></span>
                                TL
                            </span>
                            <span>-</span>
                            <span>
                                <span class="filter-price__max-value"></span>
                                TL
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            </x-slot>
    </x-wire-dropdown>

    <x-wire-dropdown class="btn-filter my-1 ml-3">
        <span title="{{ !$selectedCategoryId ? 'Kategoriler' : 'Kategori: ' . ($this->selectedCategoryName) }}">
            {{ !$selectedCategoryId ? 'Kategoriler' : Str::limit($this->selectedCategoryName, 15) }}
        </span>
        @if($selectedCategoryId)
        <button class="btn-close" wire:click="$set('selectedCategoryId', null)">×</button>
        @endif
        <x-slot:menu class="filter-dropdown">
            <div class="categories">
                <div class="filter__container">
                    <div class="filter-categories">
                        <ul class="filter-categories__list">
                            @forelse($categories as $category)
                            <li class="filter-categories__item filter-categories__item--child"
                                wire:key="{{$category['id']}}">
                                <img src="{{ $category['imageUrl'] }}" class="category-icon-image">
                                <a href="#" wire:click.prevent="$set('selectedCategoryId', {{ $category['id'] }})"
                                    class="{{$selectedCategoryId == $category['id'] ? 'fw-bold' : ''}}">
                                    {{ $category['name'] }}
                                </a>
                                <div class="filter-categories__counter">{{ $category['count'] }}</div>
                            </li>
                            @empty
                            <li class="filter-categories__item filter-categories__item--child">
                                Alt kategori yok. @if($selectedCategoryId) Seçili kategoriyi kaldırmayı deneyin. @endif
                            </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            </x-slot>
    </x-wire-dropdown>

    <x-wire-dropdown class="btn-filter my-1 ml-3">
        <span
            title="{{ $selectedBrands->isEmpty() ? 'Markalar' : 'Markalar: ' . $this->selectedBrandNames->join(', ') }}">
            {{ $selectedBrands->isEmpty() ? 'Markalar' : Str::limit($this->selectedBrandNames->join(', '), 15) }}
        </span>
        @if($selectedBrands->isNotEmpty())
        <button class="btn-close" wire:click="resetSelectedBrands">×</button>
        @endif
        <x-slot:menu class="filter-dropdown">
            <div class="filter__container">
                <div class="filter-list">
                    <div class="filter-list__list">
                        @foreach($brands as $brand)
                        <label class="filter-list__item" wire:key="{{$brand['id']}}">
                            <span class="input-check filter-list__input">
                                <span class="input-check__body">
                                    <input class="input-check__input" type="checkbox"
                                        @if($selectedBrands->has($brand['id'])) checked wire:key="checked" @else
                                    wire:key="unchecked" @endif
                                    wire:change="toggleBrand({{ $brand['id'] }})"
                                    >
                                    <span class="input-check__box"></span>
                                    <span class="input-check__icon">
                                        <svg width="9px" height="7px">
                                            <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
                                        </svg>
                                    </span>
                                </span>
                            </span>
                            <span class="filter-list__title">
                                {{ $brand['name'] }}
                                <img src="{{ $brand['imageUrl'] }}" class="category-icon-image">
                            </span>
                            <span class="filter-list__counter">{{ $brand['count'] }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
            </div>
            </x-slot>
    </x-wire-dropdown>

    @foreach($properties ?? [] as [$property, $values])
    @if(!$property->show_filter)
    @continue
    @endif

    <x-wire-dropdown class="btn-filter my-1 ml-3" wire:key="{{ $property->id }}">
        @php
        $selectedValues = $this->getSelectedPropertyValues($property->id);
        $displayText = $property->name . ($selectedValues->isEmpty() ? '' : ': ' . $selectedValues->join(', '));
        @endphp
        <span title="{{ $displayText }}">
            {{ Str::limit($displayText, 15) }}
        </span>
        @if($selectedValues->isNotEmpty())
        <button class="btn-close" wire:click="resetPropertyValues({{ $property->id }})">×</button>
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
                                        {{ ($this->isPropertyValueSelected($property->id, $value->value)) ? 'checked' : '' }}
                                        wire:key="{{ ($this->isPropertyValueSelected($property->id, $value->value)) ? 'checked' : 'unchecked' }}"
                                        wire:change="togglePropertyValue({{ $property->id }}, @js($value->value))">
                                    <span class="input-check__box"></span>
                                    <span class="input-check__icon">
                                        <svg width="9px" height="7px">
                                            <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
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
                                        {{ ($this->isPropertyValueSelected($property->id, $value->value)) ? 'checked' : '' }}
                                        wire:key="{{ ($this->isPropertyValueSelected($property->id, $value->value)) ? 'checked' : 'unchecked' }}"
                                        wire:change="toggleSolePropertyValue({{ $property->id }}, @js($value->value))">
                                    <span class="input-check__box"></span>
                                    <span class="input-check__icon">
                                        <svg width="9px" height="7px">
                                            <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
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

@script
<script>
    $(() => {
        // Slider reactivity
        const sliderEl = $wire.$el.querySelector('.filter-price__slider');
        const minEl = $wire.$el.querySelector('.filter-price__min-value');
        const maxEl = $wire.$el.querySelector('.filter-price__max-value');

        const priceMin = $wire.get('priceMin') ?? $wire.get('priceRangeMin');
        const priceMax = $wire.get('priceMax') ?? $wire.get('priceRangeMax');


        let slider = noUiSlider.create(sliderEl, {
            start: [priceMin, priceMax],
            connect: true,
            step: 100,
            range: {
                'min': $wire.get('priceRangeMin'),
                'max': $wire.get('priceRangeMax'),
            }
        })

        slider.on('change', function ([priceMin, priceMax]) {
            $wire.set('priceMin', priceMin);
            $wire.set('priceMax', priceMax);
        });

        slider.on('update', function ([priceMin, priceMax]) {
            minEl.textContent = priceMin;
            maxEl.textContent = priceMax;
        });
    })
</script>
@endscript

@assets
<style>
    .filter-dropdown {
        width: max-content;
        max-width: 300px !important;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .filters-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        width: 100%;
        padding: 0.5rem;
    }

    .btn-filter {
        background: white;
        border: 1px solid #e2e8f0;
        color: #4a5568;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.2s ease;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        width: auto;
        max-width: 200px;
        justify-content: space-between;
    }

    .btn-filter span {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: calc(100% - 24px);
    }

    .btn-filter:hover {
        background: #f7fafc;
        border-color: #cbd5e0;
    }

    .btn-filter .btn-close {
        padding: 0;
        width: 16px;
        height: 16px;
        min-width: 16px;
        border-radius: 4px;
        background: #e5e7eb;
        color: #4b5563;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        border: none;
        margin-left: 8px;
        flex-shrink: 0;
        line-height: 1;
        font-weight: 500;
    }

    .btn-filter .btn-close:hover {
        background: #d1d5db;
        color: #1f2937;
    }

    .filter__container {
        padding: 1rem;
        background: white;
        border-radius: 8px;
        max-height: 80vh;
        overflow-y: auto;
        width: 100%;
        max-width: 300px;
    }

    .filter-list__item {
        padding: 0.75rem;
        border-radius: 6px;
        transition: background 0.2s ease;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        cursor: pointer;
        flex-wrap: wrap;
        max-width: 100%;
    }

    .filter-list__item:hover {
        background: #f7fafc;
    }

    .category-icon-image {
        width: 24px;
        height: 24px;
        object-fit: contain;
        border-radius: 4px;
    }

    .filter-list__counter {
        background: #edf2f7;
        padding: 0.25rem 0.5rem;
        border-radius: 4px;
        font-size: 0.875rem;
        color: #4a5568;
        margin-left: auto;
    }

    .filter-price__slider {
        margin: 2rem 1rem;
    }

    .filter-price__title {
        margin-top: 1rem;
        padding: 0.5rem;
        background: #f7fafc;
        border-radius: 6px;
    }

    .input-check__box {
        border-radius: 4px;
        border: 2px solid #cbd5e0;
        transition: all 0.2s ease;
    }

    .input-check__input:checked+.input-check__box {
        background: #4299e1;
        border-color: #4299e1;
    }

    .filter-list__title {
        flex: 1;
        min-width: 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: calc(100% - 40px);
    }

    /* Responsive Tasarım */
    @media (max-width: 768px) {

        .filter-dropdown,
        .filter__container {
            max-width: 280px !important;
        }

        .btn-filter {
            max-width: 150px;
        }

        .filter-list__item {
            padding: 0.5rem;
        }

        .filter-list__counter {
            margin-left: 0;
            width: 100%;
            text-align: center;
            margin-top: 0.5rem;
        }
    }

    @media (max-width: 480px) {

        .filter-dropdown,
        .filter__container {
            max-width: 250px !important;
        }

        .filter-price__title {
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .filter-list__title {
            font-size: 0.875rem;
        }
    }
</style>
@endassets
