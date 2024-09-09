<div class="card card-flush mx-auto">
    <div class="card-header mt-6">
        <div class="card-title">
            Kategorileri Sırala
        </div>
    </div>
    <div class="card-body pt-0">
        <div id="container" class="list-group" wire:ignore>
            @foreach($categories as $category)
                <div class="w-100 p-4 my-1 rounded border border-primary category-item" wire:key="{{ $category->id }}" data-id="{{ $category->id }}">
                    <div class="d-flex align-items-center">
                        <span>⠿</span>
                        <div class="ms-3">
                            <div class="fs-4">
                                {{ $category->name }}
                            </div>
                            <div class="text-muted">
                                {{ $category->slug }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.3/Sortable.min.js"></script>
<style>
    #container {
        width: max-content;
    }

    .category-item {
        cursor: move;
    }

    .card {
        width: max-content;
    }
</style>
@endassets

@script
<script>
    const container = $wire.$el.querySelector('#container');

    window.sortabl = Sortable.create(container, {
        animation: 150,
        ghostClass: 'bg-light-primary',
        onSort(e) {
            const ids = Array.from(container.children).map((el) => el.getAttribute('data-id'));
            $wire.reorder(ids);
        }
    });
</script>
@endscript
