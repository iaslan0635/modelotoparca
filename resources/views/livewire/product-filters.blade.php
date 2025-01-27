@assets
<style>
    .filters-container {
        background: #fff;
        border-radius: 12px;
        padding: 1rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
        position: relative;
    }

    .filters-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        width: 100%;
    }

    .filter-chip {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 0.5rem 0.75rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.2s ease;
        cursor: pointer;
        font-size: 0.875rem;
        color: #475569;
        min-width: 120px;
        max-width: 200px;
    }

    .filter-chip:hover {
        border-color: #cbd5e0;
        background: #f1f5f9;
        transform: translateY(-1px);
    }

    .filter-chip.active {
        background: #eef2ff;
        border-color: #818cf8;
        color: #4f46e5;
    }

    .filter-chip-content {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex: 1;
        min-width: 0;
    }

    .filter-chip-text {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .filter-chip-icon {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        opacity: 0.5;
    }

    .filter-chip.active .filter-chip-icon {
        opacity: 1;
        color: #4f46e5;
    }

    .filter-remove {
        width: 18px;
        height: 18px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        background: transparent;
        color: #94a3b8;
        border: none;
        padding: 0;
        font-size: 16px;
        line-height: 1;
        cursor: pointer;
        transition: all 0.2s ease;
        flex-shrink: 0;
    }

    .filter-remove:hover {
        background: #fee2e2;
        color: #ef4444;
    }

    .filter-dropdown {
        position: absolute;
        z-index: 50;
        margin-top: 0.5rem;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        max-width: 320px !important;
        width: 100%;
        border: 1px solid #e2e8f0;
        overflow: hidden;
    }

    .filter__container {
        max-height: 400px;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #cbd5e0 #f1f5f9;
    }

    .filter__container::-webkit-scrollbar {
        width: 6px;
    }

    .filter__container::-webkit-scrollbar-track {
        background: #f1f5f9;
    }

    .filter__container::-webkit-scrollbar-thumb {
        background-color: #cbd5e0;
        border-radius: 3px;
    }

    .filter-list__item {
        padding: 0.75rem 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        cursor: pointer;
        transition: all 0.2s ease;
        border-bottom: 1px solid #f1f5f9;
    }

    .filter-list__item:last-child {
        border-bottom: none;
    }

    .filter-list__item:hover {
        background: #f8fafc;
    }

    .filter-list__title {
        flex: 1;
        font-size: 0.875rem;
        color: #475569;
        min-width: 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .filter-list__counter {
        padding: 0.25rem 0.5rem;
        background: #f1f5f9;
        border-radius: 6px;
        font-size: 0.75rem;
        color: #64748b;
        font-weight: 500;
    }

    .category-icon-image {
        width: 24px;
        height: 24px;
        object-fit: cover;
        border-radius: 6px;
        flex-shrink: 0;
    }

    /* Checkbox Tasarımı */
    .input-check__body {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .input-check__input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .input-check__box {
        width: 18px;
        height: 18px;
        background: #fff;
        border: 2px solid #cbd5e0;
        border-radius: 4px;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .input-check__input:checked+.input-check__box {
        background: #4f46e5;
        border-color: #4f46e5;
    }

    .input-check__icon {
        opacity: 0;
        transform: scale(0.5);
        transition: all 0.2s ease;
    }

    .input-check__input:checked+.input-check__box .input-check__icon {
        opacity: 1;
        transform: scale(1);
    }

    .input-check__icon svg {
        width: 12px;
        height: 9px;
        fill: #fff;
    }

    /* Fiyat Slider */
    .filter-price__slider {
        margin: 2rem 1.5rem;
    }

    .filter-price__title {
        margin: 1rem 1.5rem;
        padding: 0.75rem 1rem;
        background: #f8fafc;
        border-radius: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.875rem;
        color: #475569;
    }

    /* NoUI Slider Özelleştirme */
    .noUi-connect {
        background: #4f46e5;
    }

    .noUi-handle {
        border: 2px solid #4f46e5;
        background: #fff;
        border-radius: 50%;
        cursor: pointer;
    }

    .noUi-handle:before,
    .noUi-handle:after {
        display: none;
    }

    /* Loading Spinner */
    .filter-loading {
        position: absolute;
        top: -24px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
    }

    /* Responsive Tasarım */
    @media (max-width: 768px) {
        .filters-container {
            padding: 0.75rem;
            border-radius: 8px;
        }

        .filters-wrapper {
            gap: 0.5rem;
        }

        .filter-chip {
            min-width: calc(50% - 0.5rem);
            max-width: calc(50% - 0.5rem);
            font-size: 0.813rem;
        }

        .filter-dropdown {
            max-width: 280px !important;
            position: fixed;
            left: 50% !important;
            transform: translateX(-50%);
            top: auto !important;
            bottom: 0;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom: none;
        }

        .filter__container {
            max-height: 60vh;
        }
    }

    @media (max-width: 480px) {
        .filter-chip {
            min-width: 100%;
            max-width: 100%;
        }

        .filter-dropdown {
            max-width: 100% !important;
        }

        .filter-price__title {
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            text-align: center;
        }
    }
</style>
@endassets

<div class="filters-container">
    <div class="spinner-grow text-primary filter-loading" role="status" wire:loading.delay.longer>
        <span class="sr-only">Yükleniyor...</span>
    </div>

    <div class="filters-wrapper">
        <x-wire-dropdown class="filter-chip {{ ($priceMin || $priceMax) ? 'active' : '' }}">
            <div class="filter-chip-content" title="{{ 'Fiyat' . $this->priceRepr }}">
                <svg class="filter-chip-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="filter-chip-text">Fiyat{{ $this->priceRepr }}</span>
            </div>
            @if($priceMin || $priceMax)
            <button class="filter-remove" wire:click="resetPriceFilters">×</button>
            @endif
            <x-slot name="menu" class="filter-dropdown">
                <div class="filter__container">
                    <div wire:ignore>
                        <div class="filter-price__slider"></div>
                        <div class="filter-price__title">
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
            </x-slot>
        </x-wire-dropdown>

        <x-wire-dropdown class="filter-chip {{ $selectedCategoryId ? 'active' : '' }}">
            <div class="filter-chip-content"
                title="{{ !$selectedCategoryId ? 'Kategoriler' : 'Kategori: ' . ($this->selectedCategoryName) }}">
                <svg class="filter-chip-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <span class="filter-chip-text">
                    {{ !$selectedCategoryId ? 'Kategoriler' : Str::limit($this->selectedCategoryName, 15) }}
                </span>
            </div>
            @if($selectedCategoryId)
            <button class="filter-remove" wire:click="$set('selectedCategoryId', null)">×</button>
            @endif
            <x-slot name="menu" class="filter-dropdown">
                <div class="filter__container">
                    <div class="filter-list">
                        @forelse($categories as $category)
                        <div class="filter-list__item" wire:key="{{$category['id']}}"
                            wire:click="$set('selectedCategoryId', {{ $category['id'] }})">
                            <img src="{{ $category['imageUrl'] }}" class="category-icon-image"
                                alt="{{ $category['name'] }}">
                            <span class="filter-list__title">{{ $category['name'] }}</span>
                            <span class="filter-list__counter">{{ $category['count'] }}</span>
                        </div>
                        @empty
                        <div class="filter-list__item">
                            Alt kategori yok. @if($selectedCategoryId) Seçili kategoriyi kaldırmayı deneyin. @endif
                        </div>
                        @endforelse
                    </div>
                </div>
            </x-slot>
        </x-wire-dropdown>

        <x-wire-dropdown class="filter-chip {{ $selectedBrands->isNotEmpty() ? 'active' : '' }}">
            <div class="filter-chip-content"
                title="{{ $selectedBrands->isEmpty() ? 'Markalar' : 'Markalar: ' . $this->selectedBrandNames->join(', ') }}">
                <svg class="filter-chip-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <span class="filter-chip-text">
                    {{ $selectedBrands->isEmpty() ? 'Markalar' : Str::limit($this->selectedBrandNames->join(', '), 15) }}
                </span>
            </div>
            @if($selectedBrands->isNotEmpty())
            <button class="filter-remove" wire:click="resetSelectedBrands">×</button>
            @endif
            <x-slot name="menu" class="filter-dropdown">
                <div class="filter__container">
                    @foreach($brands as $brand)
                    <label class="filter-list__item" wire:key="{{$brand['id']}}">
                        <span class="input-check__body">
                            <input class="input-check__input" type="checkbox"
                                {{ $selectedBrands->has($brand['id']) ? 'checked' : '' }}
                                wire:change="toggleBrand({{ $brand['id'] }})">
                            <span class="input-check__box">
                                <span class="input-check__icon">
                                    <svg viewBox="0 0 9 7">
                                        <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
                                    </svg>
                                </span>
                            </span>
                        </span>
                        <span class="filter-list__title">
                            {{ $brand['name'] }}
                            <img src="{{ $brand['imageUrl'] }}" class="category-icon-image" alt="{{ $brand['name'] }}">
                        </span>
                        <span class="filter-list__counter">{{ $brand['count'] }}</span>
                    </label>
                    @endforeach
                </div>
            </x-slot>
        </x-wire-dropdown>

        @foreach($properties ?? [] as [$property, $values])
        @if(!$property->show_filter)
        @continue
        @endif

        <x-wire-dropdown
            class="filter-chip {{ $this->getSelectedPropertyValues($property->id)->isNotEmpty() ? 'active' : '' }}"
            wire:key="{{ $property->id }}">
            @php
            $selectedValues = $this->getSelectedPropertyValues($property->id);
            $displayText = $property->name . ($selectedValues->isEmpty() ? '' : ': ' . $selectedValues->join(', '));
            @endphp
            <div class="filter-chip-content" title="{{ $displayText }}">
                <svg class="filter-chip-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                </svg>
                <span class="filter-chip-text">{{ Str::limit($displayText, 15) }}</span>
            </div>
            @if($selectedValues->isNotEmpty())
            <button class="filter-remove" wire:click="resetPropertyValues({{ $property->id }})">×</button>
            @endif
            <x-slot name="menu" class="filter-dropdown">
                <div class="filter__container">
                    @foreach($values as $value)
                    @if($property->search_type === "multiple")
                    <label class="filter-list__item" wire:key="{{$value->id}}">
                        <span class="input-check__body">
                            <input class="input-check__input" type="checkbox"
                                {{ ($this->isPropertyValueSelected($property->id, $value->value)) ? 'checked' : '' }}
                                wire:change="togglePropertyValue({{ $property->id }}, @js($value->value))">
                            <span class="input-check__box">
                                <span class="input-check__icon">
                                    <svg viewBox="0 0 9 7">
                                        <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
                                    </svg>
                                </span>
                            </span>
                        </span>
                        <span class="filter-list__title">{{ $value->value }}</span>
                    </label>
                    @elseif($property->search_type === "none")
                    <label class="filter-list__item" wire:key="{{$value->id}}">
                        <span class="input-check__body">
                            <input class="input-check__input" type="checkbox"
                                {{ ($this->isPropertyValueSelected($property->id, $value->value)) ? 'checked' : '' }}
                                wire:change="toggleSolePropertyValue({{ $property->id }}, @js($value->value))">
                            <span class="input-check__box">
                                <span class="input-check__icon">
                                    <svg viewBox="0 0 9 7">
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
            </x-slot>
        </x-wire-dropdown>
        @endforeach
    </div>
</div>
