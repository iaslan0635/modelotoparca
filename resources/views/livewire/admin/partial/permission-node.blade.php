@php
    $reprState = fn (?bool $state) => $state === true ? "allow" : ($state === false ? "deny" : "indeterminate");
    $ghostClass = "ghost-" . $reprState($node->getState());
@endphp
<li class="my-4">
    <div class="d-flex gap-4">
        <div class="permission-checkbox-container">
            <div type="checkbox" class="form-check-input permission-checkbox {{ $ghostClass }} {{ $reprState($node->designation) }}"></div>
            <div class="permission-opitons rounded-1 p-1 {{ $ghostClass }}">
                <div class="permission-checkbox form-check-input allow" type="checkbox" wire:click="allow('{{ $node->fqn }}')"></div>
                <div class="permission-checkbox form-check-input" type="checkbox" wire:click="indeterminate('{{ $node->fqn }}')"></div>
                <div class="permission-checkbox form-check-input deny" type="checkbox" wire:click="deny('{{ $node->fqn }}')"></div>
            </div>
        </div>
        <span>{{ $node->name }}</span>
    </div>

    @unless($node->isLeaf())
        <ul>
            @each('livewire.admin.partial.permission-node', $node->getChildren(), 'node')
        </ul>
    @endunless
</li>
