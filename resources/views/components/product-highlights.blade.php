@props([
    'highlights',
    'model'
])
<div {{ $attributes->class(['status-badge status-badge--style--success status-badge--has-icon status-badge--has-text']) }}>
    @foreach($highlights[$model->id] ?? [] as $key => $mark)
        <div class="status-badge__body mt-2">
            <div class="status-badge__icon">
                <svg width="13" height="13">
                    <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z"/>
                </svg>
            </div>
            <div class="status-badge__text">{{ trans("highlights.$key") }}: {!! implode("<br>", $mark) !!}</div>
        </div>
    @endforeach
</div>
