<div>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="save">
        <div class="mb-3">
            <label class="form-label">Pazaryeri</label>
            <select wire:model="marketplace_id" class="form-select">
                <option value="">Seçiniz</option>
                @foreach($marketplaces as $marketplace)
                    <option value="{{ $marketplace->id }}">{{ $marketplace->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Mağaza Adı</label>
            <input wire:model="store_name" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">API Key</label>
            <input wire:model="api_key" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">API Secret</label>
            <input wire:model="api_secret" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Supplier ID</label>
            <input wire:model="supplier_id" type="text" class="form-control">
        </div>
        <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" role="switch" wire:model="is_active" id="is_active">
            <label class="form-check-label" for="is_active">Aktif Hesap</label>
        </div>


        <button class="btn btn-primary" type="submit">
            {{ $editMode ? 'Güncelle' : 'Kaydet' }}
        </button>

    </form>
</div>
