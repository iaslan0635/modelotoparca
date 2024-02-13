<ul class="position-relative">
    <div wire:loading class="position-absolute" style="right: 0; top: 0">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    @each('livewire.admin.partial.permission-node', $tree->getChildren(), 'node')
</ul>
