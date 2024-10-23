@php
    $sameProductsTab = $product->crosses()->exists();
    $alternativesTab = $product->alternatives()->exists();
@endphp

<div class="product__tabs product-tabs product-tabs--layout--full">
    <ul class="product-tabs__list">
        @if($sameProductsTab)
            <li class="product-tabs__item product-tabs__item--active">
                <a href="#product-same-products">Eşdeğer Ürünler</a>
            </li>
        @endif
        @if($alternativesTab)
            <li class="product-tabs__item @if(!$sameProductsTab) product-tabs__item--active @endif">
                <a href="#product-alternative-products">
                    Alternatif Ürünler
                </a>
            </li>
        @endif
        <li class="product-tabs__item @if(!$sameProductsTab && !$alternativesTab) product-tabs__item--active @endif">
            <a href="#product-tab-cars">
                Uyumlu Araçlar
            </a>
        </li>
        <li class="product-tabs__item">
            <a href="#product-tab-oem-codes">Oem Kodlar</a>
        </li>
        <li class="product-tabs__item">
            <a href="#tecdoc-equivalents">TecDoc</a>
        </li>
        <li class="product-tabs__item">
            <a href="#reviews">Yorumlar</a>
        </li>
    </ul>
    <div class="product-tabs__content">
        @include('product-detail.tabs.cars')
        @include('product-detail.tabs.reviews')
        @include('product-detail.tabs.oems')
        @include('product-detail.tabs.tecdoc')

        @includeWhen($sameProductsTab, 'product-detail.tabs.same-products')
        @includeWhen($alternativesTab, 'product-detail.tabs.alternatives')
    </div>
</div>
