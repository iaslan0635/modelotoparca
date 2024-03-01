<div class="card card-flush py-4">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>Kayıtlar</h2>
        </div>
        <div class="card-toolbar">
            <button class="btn btn-sm btn-primary" wire:click="refresh">
                <span class="spinner-border spinner-border-sm" wire:loading wire:target="refresh"></span>
                <span wire:loading.remove wire:target="refresh">Yenile</span>
            </button>
        </div>
    </div>
    <!--end::Card header-->
    <div class="card-body pt-0">
        <table class="table table-responsive table-striped">
            <thead>
            <tr>
                <th>Mesaj</th>
                <th class="text-end">Tarih</th>
            </tr>
            </thead>
            <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>
                        <pre>{{ $log->message }}</pre>
                    </td>
                    <td class="text-end">{{ $log->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
