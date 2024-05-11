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
                            <div class="d-flex w-100 gap-2 mt-2 flex-wrap">
                                @php
                                    $context = $log->context;
                                    ksort($context);
                                @endphp
                                @foreach($context as $key => $value)
                                    <div class="badge text-bg-light border border-primary fw-normal me-4">
                                        {{ $key }}: {{ is_bool($value) ? ($value ? "Evet": "Hayır") : $value }}</div>
                                @endforeach
                            </div>
                        @endif
                    </td>
                    <td class="text-end">
                        <div class="text-nowrap">{{ $log->created_at->diffForHumans() }}</div>
                        <div class="d-flex justify-content-end align-items-center  mt-4">
                            @if (str_starts_with($log->source, "bot") && \App\Services\Bots\OnlineCarParts::isOldVersion($log->source))
                                <div class="badge text bg-danger text-light">Eski sürüm</div>
                            @endif
                            <div class="badge text-bg-{{ $log->sourceColor }} text-light">{{ $log->source }}</div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
