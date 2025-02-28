<div class="block-split">
    <div class="container wide-container">
        <div class="block-split__row justify-content-center row no-gutters fixed-sidebar">
            {{--            <div class="block-split__item block-split__item-content col-auto">--}}
            <div class="block-split__item block-split__item-content col-12">
                <x-search-header :brandIds="$brands->keys()" :categoryIds="$categories->pluck('id')->toArray()" />
                <div class="block">
                    <div class="products-view" id="product-lists">
                        <div class="products-view__options view-options view-options--offcanvas--mobile">
                            <div class="view-options__body">
                                <button type="button" class="view-options__filters-button filters-button">
                                    <span class="filters-button__icon">
                                        <svg width="16" height="16">
                                            <path d="M7,14v-2h9v2H7z M14,7h2v2h-2V7z M12.5,6C12.8,6,13,6.2,13,6.5v3c0,0.3-0.2,0.5-0.5,0.5h-2
	C10.2,10,10,9.8,10,9.5v-3C10,6.2,10.2,6,10.5,6H12.5z M7,2h9v2H7V2z M5.5,5h-2C3.2,5,3,4.8,3,4.5v-3C3,1.2,3.2,1,3.5,1h2
	C5.8,1,6,1.2,6,1.5v3C6,4.8,5.8,5,5.5,5z M0,2h2v2H0V2z M9,9H0V7h9V9z M2,14H0v-2h2V14z M3.5,11h2C5.8,11,6,11.2,6,11.5v3
	C6,14.8,5.8,15,5.5,15h-2C3.2,15,3,14.8,3,14.5v-3C3,11.2,3.2,11,3.5,11z" />
                                        </svg>
                                    </span>
                                    <span class="filters-button__title">Filters</span>
                                    <span class="filters-button__counter">3</span>
                                </button>
                                <div class="view-options__layout layout-switcher">
                                    <div class="layout-switcher__list">
                                        <button type="button" data-layout-id="1" class="layout-switcher__button"
                                            data-layout="grid" data-with-features="true">
                                            <svg width="16" height="16">
                                                <path d="M15.2,16H9.8C9.4,16,9,15.6,9,15.2V9.8C9,9.4,9.4,9,9.8,9h5.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
	H9.8C9.4,7,9,6.6,9,6.2V0.8C9,0.4,9.4,0,9.8,0h5.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z M6.2,16H0.8
	C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h5.4C6.6,9,7,9.4,7,9.8v5.4C7,15.6,6.6,16,6.2,16z M6.2,7H0.8C0.4,7,0,6.6,0,6.2V0.8
	C0,0.4,0.4,0,0.8,0h5.4C6.6,0,7,0.4,7,0.8v5.4C7,6.6,6.6,7,6.2,7z" />
                                            </svg>
                                        </button>
                                        <button type="button" data-layout-id="2" class="layout-switcher__button"
                                            data-layout="grid" data-with-features="false">
                                            <svg width="16" height="16">
                                                <path d="M16,0.8v14.4c0,0.4-0.4,0.8-0.8,0.8H9.8C9.4,16,9,15.6,9,15.2V0.8C9,0.4,9.4,0,9.8,0l5.4,0C15.6,0,16,0.4,16,0.8z M7,0.8
	v14.4C7,15.6,6.6,16,6.2,16H0.8C0.4,16,0,15.6,0,15.2L0,0.8C0,0.4,0.4,0,0.8,0l5.4,0C6.6,0,7,0.4,7,0.8z" />
                                            </svg>
                                        </button>
                                        <button type="button" data-layout-id="3"
                                            class="layout-switcher__button layout-switcher__button--active"
                                            data-layout="list" data-with-features="false">
                                            <svg width="16" height="16">
                                                <path d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h14.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
	H0.8C0.4,7,0,6.6,0,6.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z" />
                                            </svg>
                                        </button>
                                        <button type="button" data-layout-id="4" class="layout-switcher__button"
                                            data-layout="table" data-with-features="false">
                                            <svg width="16" height="16">
                                                <path d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2v-2.4C0,12.4,0.4,12,0.8,12h14.4c0.4,0,0.8,0.4,0.8,0.8v2.4C16,15.6,15.6,16,15.2,16z
	 M15.2,10H0.8C0.4,10,0,9.6,0,9.2V6.8C0,6.4,0.4,6,0.8,6h14.4C15.6,6,16,6.4,16,6.8v2.4C16,9.6,15.6,10,15.2,10z M15.2,4H0.8
	C0.4,4,0,3.6,0,3.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v2.4C16,3.6,15.6,4,15.2,4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="view-options__legend">
                                    {{ $products->total() }} adet üründen {{ count($products) }} tanesi
                                    gösteriliyor.
                                </div>
                                <div class="view-options__spring"></div>
                                <div class="view-options__select">
                                    <label for="view-option-sort">Sort:</label>
                                    <select id="view-option-sort" class="form-control form-control-sm"
                                        wire:model.live="sortBy">
                                        <option>Seçiniz...</option>
                                        <option value="price-asc">Fiyat Yükselen</option>
                                        <option value="price-desc">Fiyat Azalan</option>
                                    </select>
                                </div>
                                <div class="view-options__select">
                                    <label for="view-option-limit">Show:</label>
                                    <select id="view-option-limit" class="form-control form-control-sm" name="">
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="view-options__body view-options__body--filters">
                                @if (request()->has('min_price') || request()->has('max_price') ||
                                count(request()->input('brands', [])) > 0)
                                <div class="view-options__label">Active Filters</div>
                                @endif
                                <div class="applied-filters">
                                    <livewire:product-filters :$categories
                                        :brands="\App\Livewire\ProductFilters::normalizeBrands($brands)"
                                        :selectedCategoryId="$category" :selectedBrands="collect($brandFilters)" />
                                </div>
                            </div>
                        </div>
                        <div class="products-view__list products-list products-list--grid--4" data-layout="list"
                            data-with-features="false">
                            <div wire:loading>
                                <div class="spinner-border text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="products-list__head">
                                <div class="products-list__column products-list__column--image">Image</div>
                                <div class="products-list__column products-list__column--meta">SKU</div>
                                <div class="products-list__column products-list__column--product">Product</div>
                                <div class="products-list__column products-list__column--rating">Rating</div>
                                <div class="products-list__column products-list__column--price">Price</div>
                            </div>
                            <div class="products-list__content" wire:loading.remove>
                                @foreach($products as $product)
                                @if(($model = $product->model()) === null)
                                @php
                                Log::driver("important")->error("Product model is null. id: " .
                                $product->document()->id())
                                @endphp
                                @continue
                                @endif
                                <div class="products-list__item">
                                    <div class="product-card">
                                        <div class="product-card__actions-list">
                                            <button class="product-card__action product-card__action--quickview"
                                                data-slug="{{ $model->slug }}" type="button" aria-label="Quick view">
                                                <svg width="16" height="16">
                                                    <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                </svg>
                                            </button>
                                            <button class="product-card__action product-card__action--wishlist"
                                                type="button" aria-label="Add to wish list">
                                                <svg width="16" height="16">
                                                    <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                </svg>
                                            </button>
                                            <button class="product-card__action product-card__action--compare"
                                                type="button" aria-label="Add to compare">
                                                <svg width="16" height="16">
                                                    <path
                                                        d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                    <path
                                                        d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                    <path
                                                        d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <x-product-card-image :product="$model" />
                                        <div class="product-card__info">
                                            <div class="product-card__meta">
                                                <span class="product-card__meta-title"> {{ $model->producercode }}
                                                </span>
                                            </div>
                                            <x-product-card-name :product="$model" />
                                            <div class="product-card__features">
                                                <ul>
                                                    @foreach(($model->specifications ?? []) as $key => $spec)
                                                    <li>{{ "$key: $spec" }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <x-product-meta :tiger="$model->tiger" />
                                            <x-product-highlights :highlights="$highlights" :model="$model" />
                                        </div>
                                        <x-product-card-right :product="$model">
                                            <span>Skor: {{ $product->score() }}</span>
                                        </x-product-card-right>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @if(filled($alternatives))
                        <x-product-list-appendix :products="$alternatives" :highlights="$highlights" />
                        @endif
                        @if(filled($similars))
                        <x-product-list-appendix :products="$similars" :highlights="$highlights" />
                        @endif
                        <div class="products-view__pagination">
                            <nav aria-label="Page navigation example">
                                {{ $products->withQueryString()->links() }}
                            </nav>
                            <div class="products-view__pagination-legend">
                                {{ $products->total() }} adet üründen {{ $products->perPage() }} tanesi
                                gösteriliyor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
</div>
@push('scripts')
<script>
    $(".pagination").click(() => window.scrollTo(0, 0))
</script>
<script>
    Livewire.on('filtered', () => {
            console.log("filtered");
            $('.product-gallery').each(function (i, gallery) {
                initProductGallery(gallery, "quickview", true);
            });
        });
</script>
@endpush
@push('styles')
<style>
    .status-badge__text>em {
        font-weight: bold;
        font-style: normal;
    }
</style>
@endpush