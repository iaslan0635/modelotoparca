<div {{ $attributes->class(['card card-flush py-4']) }}>
    <div class="card-header">
        <div class="card-title">
            <h4>{{ $title }}</h4>
        </div>
    </div>
    <div class="card-body pt-0 d-flex justify-content-between">
        <span class="d-inline badge badge-primary mx-2">Bekleyen: {{ $awaitingCount }}</span>
        <span class="d-inline badge badge-success mx-2">Çalışan: {{ $runningCount }}</span>
        <span class="d-inline badge badge-danger mx-2">Başarısız: {{ $failedCount }}</span>
    </div>
</div>
