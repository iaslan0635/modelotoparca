<div class="d-flex flex-wrap position-relative">
    <div class="spinner-grow text-primary" role="status" style="position: absolute; top:-30px; z-index: 1" wire:loading.delay.longer>
        <span class="sr-only">Yükleniyor...</span>
    </div>

    <x-wire-dropdown class="btn btn-secondary my-1 ml-3">
        <span>
            <span>Fiyat{{ $this->priceRepr }}</span>
        </span>
        @if($priceMin || $priceMax)
            <button class="btn btn-danger btn-outline" wire:click="resetPriceFilters">X</button>
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

    <x-wire-dropdown class="btn btn-secondary my-1 ml-3">
        <span>
            {{ !$selectedCategoryId ? 'Kategoriler' : "Kategori: " . ($this->selectedCategoryName) }}
        </span>
        @if($selectedCategoryId)
            <button class="btn btn-danger btn-outline" wire:click="$set('selectedCategoryId', null)">X</button>
        @endif
        <x-slot:menu class="filter-dropdown">
            <div class="categories">
                <div class="filter__container">
                    <div class="filter-categories">
                        <ul class="filter-categories__list">
                            @forelse($categories as $category)
                                <li class="filter-categories__item filter-categories__item--child" wire:key="{{$category['id']}}">
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

    <x-wire-dropdown class="btn btn-secondary my-1 ml-3">
        <span>
            {{ $selectedBrands->isEmpty() ? 'Markalar' : "Markalar: " . $selectedBrands->join(', ') }}
        </span>
        @if($selectedBrands->isNotEmpty())
            <button class="btn btn-danger btn-outline" wire:click="resetSelectedBrands">X</button>
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
                                               @if($selectedBrands->has($brand['id'])) checked wire:key="checked" @else wire:key="unchecked" @endif
                                               wire:change="toggleBrand({{ $brand['id'] }}, @js($brand['name']))"
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

        <x-wire-dropdown class="btn btn-secondary my-1 ml-3" wire:key="{{ $property->id }}">
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
                                                       @if ($this->isPropertyValueSelected($property->id, $value->value)) checked wire:key="checked" @else wire:key="unchecked"
                                                       @endif
                                                       wire:change="togglePropertyValue({{ $property->id }}, @js($value->value))"
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
                                                       @if ($this->isPropertyValueSelected($property->id, $value->value)) checked wire:key="checked" @else wire:key="unchecked"
                                                       @endif
                                                       wire:change="toggleSolePropertyValue({{ $property->id }}, @js($value->value))"
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

@script
<script>
    $(() => {
        // Dropdown close on outside click
        $($wire.$el).find('.dropdown').on('hide.bs.dropdown', function (event) {
            if (!event || !event.clickEvent) return;
            const dropdown = $(event.target);

            // check if the dropdown is being closed because of a click outside
            const clickedOutside = !dropdown.find(event.clickEvent.target).length
            if (!clickedOutside) event.preventDefault()
        })

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
        max-width: 60vw;
    }
</style>
@endassets
