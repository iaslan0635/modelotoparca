@props([
    'products',
    'car',
    'breadcrumb',
    'sidebar',
    'extraFilters',
    'brands',
    'properties',
    'min_price',
    'max_price',
    'filteredProperties',
    'category',
])

<div class="site__body">
    {{ $breadcrumb ?? '' }}
    <div class="block-split block-split--has-sidebar solyasla">
        <div class="block-split__item block-split__item-sidebar col-auto">
            <div class="sidebar sidebar--offcanvas--mobile">
                <div class="sidebar__backdrop"></div>
                <div class="sidebar__body">
                    <div class="sidebar__header">
                        <div class="sidebar__title">Filtrele</div>
                        <button class="sidebar__close" type="button">
                            <svg width="12" height="12">
                                <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="sidebar__content">
                        <form method="GET">
                            <div class="widget widget-filters widget-filters--offcanvas--mobile"
                                 data-collapse
                                 data-collapse-opened-class="filter--opened">
                                <div class="widget__header widget-filters__header">
                                    <h4>Filtrele</h4>
                                </div>
                                <div class="widget-filters__list">
                                    {{$extraFilters ?? ''}}
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Fiyat
                                                <span class="filter__arrow">
                                                            <svg width="12px" height="7px">
                                                                <path
                                                                    d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"/>
                                                            </svg>
                                                        </span>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-price" data-min="0" data-max="99999" data-from="0" data-to="99999">
                                                        <div class="filter-price__slider"></div>
                                                        <div class="filter-price__title-button">
                                                            <input type="hidden" name="min_price" value="" id="min-value">
                                                            <input type="hidden" name="max_price" value="" id="max-value">
                                                            <div class="filter-price__title">
                                                                ₺
                                                                <span class="filter-price__min-value"></span>
                                                                – ₺
                                                                <span class="filter-price__max-value"></span>
                                                            </div>
                                                            <button type="submit" class="btn btn-xs btn-secondary filter-price__button">
                                                                Filtrele
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach(($properties ?? []) as [$property, $values])
                                        @if($property->show_filter)
                                            <div class="widget-filters__item" wire:key="prop-{{$property->id}}">
                                                <div class="filter filter--opened" data-collapse-item>
                                                    <button type="button" class="filter__title" data-collapse-trigger>
                                                        {{ $property->name }}
                                                        <span class="filter__arrow">
                                                                    <svg width="12px" height="7px">
                                                                        <path
                                                                            d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"/>
                                                                    </svg>
                                                                </span>
                                                    </button>
                                                    <div class="filter__body"
                                                         data-collapse-content
                                                         style="max-height: 280px;overflow: auto;">
                                                        <div class="filter__container">
                                                            <div class="filter-list">
                                                                <div class="filter-list__list">
                                                                    @foreach($values as $value)
                                                                        @if($property->search_type === "multiple")
                                                                            <label class="filter-list__item"
                                                                                   wire:key="prop-val-{{$value->id}}">
                                                                                        <span class="input-check filter-list__input">
                                                                                            <span class="input-check__body">
                                                                                                <input
                                                                                                    {{ request()->has("property.$property->id") ? in_array($value->value, \Arr::wrap(request()->input("property.$property->id"))) ? "checked" : null : null }}
                                                                                                    class="input-check__input"
                                                                                                    name="property[{{ $property->id }}][]"
                                                                                                    value="{{ $value->value }}"
                                                                                                    type="checkbox"
                                                                                                    wire:model="property.{{ $property->id }}">
                                                                                                <span class="input-check__box"></span>
                                                                                                <span class="input-check__icon">
                                                                                                    <svg width="9px"
                                                                                                         height="7px">
                                                                                                        <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"/>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                        </span>
                                                                                <span class="filter-list__title">{{ $value->value }}</span>
                                                                            </label>
                                                                        @elseif($property->search_type === "none")
                                                                            <label class="filter-list__item" wire:key="prop-val-{{$value->id}}">
                                                                                        <span class="input-check filter-list__input">
                                                                                            <span class="input-check__body">
                                                                                                <input
                                                                                                    {{ request()->has("property.$property->id") ? in_array($value->value, \Arr::wrap(request()->input("property.$property->id"))) ? "checked" : null : null }}
                                                                                                    class="input-check__input"
                                                                                                    name="property[{{ $property->id }}][]"
                                                                                                    value="{{ $value->value }}"
                                                                                                    type="checkbox"
                                                                                                    wire:model="property.{{ $property->id }}">
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
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="widget-filters__actions d-flex">
                                    <button type="submit" class="btn btn-primary btn-sm">Filtrele</button>
                                    <button type="reset" class="btn btn-secondary btn-sm">Sıfırla</button>
                                </div>
                            </div>
                        </form>
                        <x-last-visited/>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="block-split__row row no-gutters">

                <div class="block-split__item block-split__item-content col-auto">
                    <div class="block">
                        <div class="products-view">
                            <x-car-selection/>
                            @if(isset($category) && $category)
                                <x-category-heading :category="$category" :brandIds="$brands->keys()"/>
                            @endif
                            <div class="products-view__options view-options view-options--offcanvas--mobile">
                                <div class="view-options__body">
                                    <button type="button" class="view-options__filters-button filters-button">
                                        <span class="filters-button__icon">
                                            <svg width="16" height="16">
                                                <path d="M7,14v-2h9v2H7z M14,7h2v2h-2V7z M12.5,6C12.8,6,13,6.2,13,6.5v3c0,0.3-0.2,0.5-0.5,0.5h-2
	C10.2,10,10,9.8,10,9.5v-3C10,6.2,10.2,6,10.5,6H12.5z M7,2h9v2H7V2z M5.5,5h-2C3.2,5,3,4.8,3,4.5v-3C3,1.2,3.2,1,3.5,1h2
	C5.8,1,6,1.2,6,1.5v3C6,4.8,5.8,5,5.5,5z M0,2h2v2H0V2z M9,9H0V7h9V9z M2,14H0v-2h2V14z M3.5,11h2C5.8,11,6,11.2,6,11.5v3
	C6,14.8,5.8,15,5.5,15h-2C3.2,15,3,14.8,3,14.5v-3C3,11.2,3.2,11,3.5,11z"/>
                                            </svg>
                                        </span>
                                        <span class="filters-button__title">Filters</span>
                                        <span class="filters-button__counter">3</span>
                                    </button>
                                    <div class="view-options__layout layout-switcher">
                                        <div class="layout-switcher__list">
                                            <button type="button" data-layout-id="1" class="layout-switcher__button"
                                                    data-layout="grid"
                                                    data-with-features="true">
                                                <svg width="16" height="16">
                                                    <path d="M15.2,16H9.8C9.4,16,9,15.6,9,15.2V9.8C9,9.4,9.4,9,9.8,9h5.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
	H9.8C9.4,7,9,6.6,9,6.2V0.8C9,0.4,9.4,0,9.8,0h5.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z M6.2,16H0.8
	C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h5.4C6.6,9,7,9.4,7,9.8v5.4C7,15.6,6.6,16,6.2,16z M6.2,7H0.8C0.4,7,0,6.6,0,6.2V0.8
	C0,0.4,0.4,0,0.8,0h5.4C6.6,0,7,0.4,7,0.8v5.4C7,6.6,6.6,7,6.2,7z"/>
                                                </svg>
                                            </button>
                                            <button type="button" data-layout-id="2" class="layout-switcher__button"
                                                    data-layout="grid"
                                                    data-with-features="false">
                                                <svg width="16" height="16">
                                                    <path d="M16,0.8v14.4c0,0.4-0.4,0.8-0.8,0.8H9.8C9.4,16,9,15.6,9,15.2V0.8C9,0.4,9.4,0,9.8,0l5.4,0C15.6,0,16,0.4,16,0.8z M7,0.8
	v14.4C7,15.6,6.6,16,6.2,16H0.8C0.4,16,0,15.6,0,15.2L0,0.8C0,0.4,0.4,0,0.8,0l5.4,0C6.6,0,7,0.4,7,0.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" data-layout-id="3"
                                                    class="layout-switcher__button layout-switcher__button--active"
                                                    data-layout="list" data-with-features="false">
                                                <svg width="16" height="16">
                                                    <path d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h14.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
	H0.8C0.4,7,0,6.6,0,6.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z"/>
                                                </svg>
                                            </button>
                                            <button type="button" data-layout-id="4" class="layout-switcher__button"
                                                    data-layout="table" data-with-features="false">
                                                <svg width="16" height="16">
                                                    <path d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2v-2.4C0,12.4,0.4,12,0.8,12h14.4c0.4,0,0.8,0.4,0.8,0.8v2.4C16,15.6,15.6,16,15.2,16z
	 M15.2,10H0.8C0.4,10,0,9.6,0,9.2V6.8C0,6.4,0.4,6,0.8,6h14.4C15.6,6,16,6.4,16,6.8v2.4C16,9.6,15.6,10,15.2,10z M15.2,4H0.8
	C0.4,4,0,3.6,0,3.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v2.4C16,3.6,15.6,4,15.2,4z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="view-options__legend">
                                        {{ $products->total() }} adet
                                        üründen {{ min($products->total(), $products->perPage()) }} tanesi
                                        gösteriliyor
                                    </div>
                                    <div class="view-options__spring"></div>
                                    <div class="view-options__select">
                                        <label for="view-option-sort">Sırala:</label>
                                        <select id="view-option-sort" class="form-control form-control-sm" wire:model="sortBy">
                                            <option value="price-asc">Yükselen Fiyat</option>
                                            <option value="price-desc">Azalan Fiyat</option>
                                            <option value="title-asc">Yükselen Başlık</option>
                                            <option value="title-desc">Azalan Başlık</option>
                                        </select>
                                    </div>
                                    <div class="view-options__select">
                                        <label for="view-option-limit">Göster:</label>
                                        <select id="view-option-limit" class="form-control form-control-sm" wire:model="pageSize">
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                            <option value="48">48</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="view-options__body view-options__body--filters">
                                    <div class="view-options__label">Active Filters</div>
                                    <div class="applied-filters">
                                        <form method="GET" id="querySearch">
                                            <ul class="applied-filters__list">
                                                @if(isset($min_price) && $min_price)
                                                    <input type="hidden" name="min_price" id="min-price" wire:key="max-price-input" value="{{ $min_price }}">
                                                    <li class="applied-filters__item" wire:key="max-price">
                                                        <a href="#" class="applied-filters__button applied-filters__button--filter">
                                                            En düşük fiyat: {{ $min_price }}
                                                            <svg width="9" height="9" onclick="$(`#min-price`).remove() && $('#querySearch').submit()">
                                                                <path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z"/>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                @endif
                                                @if(isset($max_price) && $max_price)
                                                    <input type="hidden" name="max_price" id="max-price" wire:key="min-price-input" value="{{ $max_price }}">
                                                    <li class="applied-filters__item" wire:key="min-price">
                                                        <a href="#" class="applied-filters__button applied-filters__button--filter">
                                                            En yüksek fiyat: {{ $max_price }}
                                                            <svg width="9" height="9" onclick="$(`#max-price`).remove() && $('#querySearch').submit()">
                                                                <path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z"/>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                @endif
                                                @foreach(($brandsArray ?? []) as $brand)
                                                    @php if(!$brands->has($brand)) continue; @endphp
                                                    <li class="applied-filters__item" wire:key="brand-{{$brand}}">
                                                        <input type="hidden" name="brands[]"
                                                               id="brand-{{ $brands[$brand][0]->brand->id }}"
                                                               value="{{ $brands[$brand][0]->brand->id }}">
                                                        <a href="#" class="applied-filters__button applied-filters__button--filter">
                                                            Marka: {{ $brands[$brand][0]?->brand?->name }}
                                                            <svg width="9" height="9"
                                                                 onclick="$(`#brand-{{ $brands[$brand][0]->brand->id }}`).remove() && $('#querySearch').submit()">
                                                                <path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z"/>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                @endforeach
                                                @foreach(($filteredProperties ?? []) as  $id => $prop)
                                                    <li class="applied-filters__item" wire:key="propfilter-{{$prop}}">
                                                        <a href="#" class="applied-filters__button applied-filters__button--filter">
                                                            {{ $properties->firstWhere("0.id", $id)[0]->name }}: {{ $prop }}
                                                            <svg wire:click="deselectProperty({{$id}})" width="9" height="9">
                                                                <path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z"/>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @include('pure-product-list', ["products" => $products])
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
    </div>
    <div style="position: fixed; bottom: 3rem; right: 3rem; width: 3rem; height: 3rem;"
         class="align-items-center bg-dark justify-content-center rounded-circle" wire:loading.flex>
        <div class="spinner-border text-white" role="status"></div>
    </div>
</div>


@push('scripts')
    <script>
        // Persist layout selection
        const updateSelection = () => {
            const selectedLayoutId = Number(localStorage.getItem("selected-layout") ?? "3")
            const el = document.querySelector(`.layout-switcher__button[data-layout-id="${selectedLayoutId}"]`)
            const viewEl = document.querySelector('.products-list')

            $(".layout-switcher__button--active").removeClass("layout-switcher__button--active")
            el.classList.add("layout-switcher__button--active")
            viewEl.dataset.layout = el.dataset.layout
            viewEl.dataset.withFeatures = el.dataset.withFeatures
        }

        updateSelection()
        $(".layout-switcher__button").click(e => localStorage.setItem("selected-layout", e.currentTarget.dataset.layoutId))
    </script>
@endpush
