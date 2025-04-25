<div class="mb-5">
    <h2>Ürün Eşleme</h2>

    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="mb-3">
        <label>Pazaryeri Seç</label>
        <select wire:model="selectedMarketplaceAccount" class="form-select">
            <option value="">Seçiniz</option>
            @foreach ($marketplaceAccounts as $account)
                <option value="{{ $account->id }}">{{ $account->store_name }}</option>
            @endforeach
        </select>
    </div>

    <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>Ürün</th>
            <th>Mevcut Eşleme</th>
            <th>Yeni Eşleme</th>
            <th>İşlem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            @php
                $mapping = \App\Models\MarketplaceProductMapping::where('product_id', $product->id)
                    ->where('marketplace_account_id', $selectedMarketplaceAccount)
                    ->first();
            @endphp
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $mapping->external_product_id ?? '-' }}</td>
                <td>
                    <input type="text" class="form-control" wire:model.defer="mappings.{{ $product->id }}">
                </td>
                <td>
                    <button class="btn btn-primary btn-sm" wire:click="saveMapping({{ $product->id }})">
                        Kaydet
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
