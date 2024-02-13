<li class="my-4">
    <div class="d-flex gap-4">
        <div class="permission-checkbox-container">
            <div class="form-check-input permission-checkbox real-permission-checkbox {{ $node->designationRepr() }}" type="checkbox"></div>
            <div class="permission-opitons bg-white rounded-1 border border-dark p-1">
                <div class="permission-checkbox form-check-input allow" type="checkbox" wire:click="allow('{{ $node->fqn }}')"></div>
                <div class="permission-checkbox form-check-input" type="checkbox" wire:click="indeterminate('{{ $node->fqn }}')"></div>
                <div class="permission-checkbox form-check-input deny" type="checkbox" wire:click="deny('{{ $node->fqn }}')"></div>
            </div>
        </div>
        <span>name: {{ $node->name }} ({{ $node->fqn }})</span>
    </div>

    @unless($node->isLeaf())
        <ul>
            @each('livewire.admin.partial.permission-node', $node->getChildren(), 'node')
        </ul>
    @endunless
</li>
