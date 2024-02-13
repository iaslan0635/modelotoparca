<div class="position-relative">
    <div wire:loading class="position-absolute" style="right: 0; top: 0">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <ul>
        @each('livewire.admin.partial.permission-node', $tree->getChildren(), 'node')
    </ul>

    <div class="d-flex justify-content-end mt-4">
        <button class="btn btn-primary" wire:click="save" wire:loading.attr="disabled" @unless($isDirty) disabled @endunless>Kaydet</button>
    </div>
</div>
