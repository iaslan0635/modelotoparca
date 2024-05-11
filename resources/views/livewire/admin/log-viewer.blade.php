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
                <th class="text-end">Tarih/Kaynak</th>
            </tr>
            </thead>
            <tbody>
            @foreach($logs as $log)
                <tr>
                    <td class="ps-4 fs-4">
                        <span>{{ $log->message }}</span>
                        @if($log->context)
                            <div class="d-flex w-100 gap-6 mt-2">
                                @php
                                    $context = $log->context;
                                    ksort($context);
                                @endphp
                                @foreach($context as $key => $value)
                                    <div class="badge text-bg-light border border-primary fw-normal">{{ $key }}: {{ $value }}</div>
                                @endforeach
                            </div>
                        @endif
                    </td>
                    <td class="text-end">
                        <div>{{ $log->created_at->diffForHumans() }}</div>
                        <div class="badge text-bg-{{ $log->sourceColor }} text-light mt-4">{{ $log->source }}</div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
