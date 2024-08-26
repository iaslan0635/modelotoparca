<div wire:ignore>
    <select id="{{ $this->id() }}">
        @foreach($options as $key => $option)
            <option value="{{ $key }}" wire:key="{{ $key }}">{{ $option }}</option>
        @endforeach
    </select>
</div>

@script
<script>
    $(document).ready(function () {
        const id = $wire.$id;
        let x = $(`#${id}`).select2().on('select2:select', function (e) {
            let selectedId = e.params.data.id;
            $wire.set('value', selectedId);
        });
    });
</script>
@endscript
