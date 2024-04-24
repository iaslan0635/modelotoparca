<div>
    @can("Stok Yönetimi.Ürünler.Detay Görüntüle.N11 Oluştur")
        @if(!$product->merchants()->where('merchant', 'n11')->exists())
            <button wire:dirty.attr="disabled" wire:click="createN11" class="btn btn-sm fw-bold btn-primary">
                N11 oluştur
                <span wire:loading>
                    <i class="fas fa-spinner fa-spin"></i>
                </span>
            </button>
        @endif
    @endcan
    @can("Stok Yönetimi.Ürünler.Detay Görüntüle.Hepsiburada Oluştur")
        @if(!$product->merchants()->where('merchant', 'hepsiburada')->exists())
            <button wire:dirty.attr="disabled" wire:click="createHepsiburada" class="btn btn-sm fw-bold btn-primary">
                Hepsiburada oluştur
                <span wire:loading>
                    <i class="fas fa-spinner fa-spin"></i>
                </span>
            </button>
        @endif
    @endcan
    @can("Stok Yönetimi.Ürünler.Detay Görüntüle.Trendyol Oluştur")
        @if(!$product->merchants()->where('merchant', 'trendyol')->exists())
            <button wire:dirty.attr="disabled" wire:click="createTrendyol" class="btn btn-sm fw-bold btn-primary">
                Trendyol oluştur
                <span wire:loading>
                    <i class="fas fa-spinner fa-spin"></i>
                </span>
            </button>
        @endif
    @endcan
</div>
