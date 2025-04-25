<div class="mt-5">
    <h4>Kayıtlı Pazaryeri Hesapları</h4>
    @if (session()->has('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>#</th>
            <th>Pazaryeri</th>
            <th>Mağaza Adı</th>
            <th>Supplier ID</th>
            <th>Oluşturulma</th>
            <th>Durum</th>
            <th>İşlem</th>
        </tr>
        </thead>
        <tbody>
        @forelse($accounts as $account)
            <tr>
                <td>{{ $account->id }}</td>
                <td>{{ $account->marketplace->name ?? '-' }}</td>
                <td>{{ $account->store_name }}</td>
                <td>{{ json_decode($account->settings)->supplier_id ?? '-' }}</td>
                <td>{{ $account->created_at->diffForHumans() }}</td>
                <td>
                    @if ($account->is_active)
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-secondary">Pasif</span>
                    @endif
                </td>
                <td class="d-flex gap-2">
                    <button class="btn btn-warning btn-sm" wire:click="$dispatch('edit-account', { id: {{ $account->id }} })">
                        Düzenle
                    </button>
                    <button class="btn btn-danger btn-sm" wire:click="deleteAccount({{ $account->id }})"
                            onclick="return confirm('Silmek istediğinize emin misiniz?')">
                        Sil
                    </button>
                    <button class="btn btn-info btn-sm"
                            wire:click="testConnection({{ $account->id }})">
                        Test Et
                    </button>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Hiç kayıt yok.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
