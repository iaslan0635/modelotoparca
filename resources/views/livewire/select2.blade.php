<div wire:ignore>
    <select>
        @foreach($options as $key => $option)
            <option value="{{ $key }}" wire:key="{{ $key }}">{{ $option }}</option>
        @endforeach
    </select>
</div>

@script
<script>
    $(document).ready(function () {
        $($wire.$el).find('select').select2().on('select2:select', function (e) {
            let selectedId = e.params.data.id;
            $wire.set('value', selectedId);
        });
    });
</script>
@endscript
