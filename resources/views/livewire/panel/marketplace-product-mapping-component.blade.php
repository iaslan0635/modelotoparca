<div class="container-fluid">
    <h2 class="mb-4">Ürün Eşleme</h2>

    {{-- Eşlenmiş Ürünler Listesi --}}
    <h4 class="mt-5">Eşlenmiş Ürünler</h4>
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
            <tr>
                <th>Ürün</th>
                <th>Pazaryeri Ürünü</th>
                <th>İşlem</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($existingMappings as $mapping)
                <tr>
                    <td>
                        <strong>{{ $mapping->product->title ?? '-' }}</strong><br>
                        <small class="text-muted">SKU: {{ $mapping->product->sku ?? '-' }}</small>
                    </td>
                    <td>
                        <strong>{{ $mapping->marketplaceProduct->name ?? '-' }}</strong><br>
                        <small class="text-muted">SKU: {{ $mapping->marketplaceProduct->sku ?? '-' }}</small>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm" wire:click="deleteMapping({{ $mapping->id }})">
                            Sil
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Eşlenmiş ürün bulunamadı.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    {{-- Arama ve Pazaryeri Seçimi --}}
    <div class="row mt-5 mb-4">
        <div class="col-md-6">
            <label>Ürünlerde Ara</label>
            <input type="text" class="form-control" placeholder="Ürün Adı veya Kodu" wire:model.debounce.500ms="searchProduct">
        </div>
        <div class="col-md-6">
            <label>Pazaryeri Ürünlerinde Ara</label>
            <input type="text" class="form-control" placeholder="Pazaryeri Ürün Adı veya Kodu" wire:model.debounce.500ms="searchMarketplaceProduct">
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-6">
            <label>Pazaryeri Seçimi</label>
            <select class="form-select" wire:model="selectedMarketplaceAccount">
                <option value="">Pazaryeri Seçin</option>
                @foreach ($marketplaceAccounts as $account)
                    <option value="{{ $account->id }}">{{ $account->store_name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- Ürün Eşleme Tablosu --}}
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
            <tr>
                <th>Ürün</th>
                <th>Pazaryeri Ürün Seçimi</th>
                <th>İşlem</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>
                        <strong>{{ $product->title }}</strong><br>
                        <small class="text-muted">ID: {{ $product->id }}</small><br>
                        <small class="text-muted">SKU: {{ $product->sku }}</small><br>
                        <small class="text-muted">Üretici Kodu: {{ $product->producercode }}</small>
                    </td>
                    <td>
                        <select class="form-select" wire:model.defer="selectedMappings.{{ $product->id }}">
                            <option value="">Seçiniz</option>
                            @foreach ($marketplaceProducts as $marketplaceProduct)
                                <option value="{{ $marketplaceProduct->id }}">
                                    {{ $marketplaceProduct->name }} (SKU: {{ $marketplaceProduct->sku ?? 'Yok' }}) (Barkod: {{ $marketplaceProduct->barcode ?? 'Yok' }})
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-sm" wire:click="saveMapping({{ $product->id }})">
                            Kaydet
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Gösterilecek ürün bulunamadı.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('notify', event => {
            const detail = event.detail?.detail || event.detail; // fallback'li alalım

            if (!detail) {
                alert('Bilinmeyen bir hata oluştu.');
                return;
            }

            if (typeof NotificationApp !== 'undefined' && NotificationApp.send) {
                NotificationApp.send(detail.message, detail.type);
            } else {
                alert(detail.message);
            }
        });
    </script>
@endpush
