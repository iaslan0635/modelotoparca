<div>
    <div class="row mb-4">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">🔍 Ürün Arama</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="searchTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $tab === 'general' ? 'active' : '' }}" wire:click="$set('tab', 'general')" type="button">
                                Geniş Arama
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $tab === 'logical' ? 'active' : '' }}" wire:click="$set('tab', 'logical')" type="button">
                                Logical Kod ile Ara
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade {{ $tab === 'general' ? 'show active' : '' }}">
                            <form wire:submit.prevent="searchGeneral">
                                <div class="input-group">
                                    <input type="text" class="form-control" wire:model.defer="searchGeneralInput" placeholder="Ürün Adı, OEM, Parça Kodu, vb...">
                                    <button class="btn btn-primary" type="submit">
                                        <span wire:loading.remove wire:target="searchGeneral">Ara</span>
                                        <span wire:loading wire:target="searchGeneral">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Bekleniyor...
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade {{ $tab === 'logical' ? 'show active' : '' }}">
                            <form wire:submit.prevent="searchLogical">
                                <div class="input-group">
                                    <input type="text" class="form-control" wire:model.defer="searchLogicalInput" placeholder="Logical Kod (ID)...">
                                    <button class="btn btn-secondary" type="submit">
                                        <span wire:loading.remove wire:target="searchLogical">Ara</span>
                                        <span wire:loading wire:target="searchLogical">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Bekleniyor...
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">🕒 Son Güncellenen Ürünler</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush mb-0">
                        @foreach($latestProducts as $product)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $product->title }}
                                <span class="badge bg-light text-muted">{{ $product->updated_at->format('d.m.Y H:i') }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @if(!empty($products) && count($products))
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">🔎 Arama Sonuçları</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach($products as $product)
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">{{ $product['title'] ?? 'Ürün adı yok' }}</h6>
                                        <small>SKU: {{ $product['sku'] ?? '-' }} | Kod: {{ $product['product_code'] ?? '-' }}</small><br>
                                        <small><strong>⛳ Eşleşen Kolon:</strong> {{ $product['match_column'] ?? '-' }}</small>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="/{{$product['id'] }}" class="btn btn-sm btn-outline-primary" title="Detay">
                                            <i class="ri-external-link-line"></i>
                                        </a>
                                        <button wire:click="openModal({{ $product['id'] }})" class="btn btn-sm btn-outline-secondary" title="Hızlı Önizleme">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif(!empty($searchGeneralInput) || !empty($searchLogicalInput))
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-warning mb-0">Sonuç bulunamadı.</div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Ürün Detay Modalı -->
    <div wire:ignore.self class="modal fade @if($showModal) show d-block @endif" tabindex="-1" role="dialog" id="productDetailModal" @if($showModal) style="display:block;" @endif>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">🛒 Ürün Detayı</h5>
                    <button type="button" class="btn-close" wire:click="closeModal"></button>
                </div>
                <div class="modal-body">
                    @if($selectedProduct)
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>ID:</strong> {{ $selectedProduct->id }}</li>
                            <li class="list-group-item"><strong>Ürün Adı:</strong> {{ $selectedProduct->title }}</li>
                            <li class="list-group-item"><strong>Üretici Kodu:</strong> {{ $selectedProduct->producercode }}</li>
                            <li class="list-group-item"><strong>OEM Kodları:</strong> {{ $selectedProduct->oem_codes }}</li>
                            <li class="list-group-item"><strong>Stok Kodu:</strong> {{ $selectedProduct->sku }}</li>
                            <li class="list-group-item"><strong>Bulunduğu Kolon:</strong> {{ $selectedProduct->match_column ?? 'Bilinmiyor' }}</li>
                        </ul>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary">Kapat</button>
                </div>
            </div>
        </div>
    </div>
</div>
