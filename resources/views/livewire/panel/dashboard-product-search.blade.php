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
                        @if($tab === 'general')
                            <div>
                                <form wire:submit.prevent="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" wire:model.lazy="search" placeholder="Ürün Adı, OEM, Parça Kodu, vb...">
                                        <button class="btn btn-primary" type="submit">Ara</button>
                                    </div>
                                </form>
                            </div>
                        @endif

                        @if($tab === 'logical')
                            <div>
                                <form wire:submit.prevent="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" wire:model.lazy="search" placeholder="Logical Kod (ID)...">
                                        <button class="btn btn-secondary" type="submit">Ara</button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Dummy veri: kritik stok -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">📦 Kritik Stoklu Ürünler</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush mb-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Fren Balatası <span class="badge bg-danger">2 adet</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Hava Filtresi <span class="badge bg-warning text-dark">4 adet</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Yağ Filtresi <span class="badge bg-success">6 adet</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Arama Sonuçları -->
    @if($products)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">🔎 Arama Sonuçları</h5>
                    </div>
                    <div class="card-body">
                        @if(count($products))
                            <div class="list-group">
                                @foreach($products as $product)
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">{{ $product->title }}</h6>
                                            <small>SKU: {{ $product->sku }} | Kod: {{ $product->product_code ?? '-' }}</small>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Detay</a>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="alert alert-warning mb-0">Sonuç bulunamadı.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
