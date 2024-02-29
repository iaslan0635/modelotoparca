<li class="my-4">
    <div class="d-flex gap-4">
        @include("livewire.admin.partial.permission-checkbox", ["node" => $node])
        <span>{{ $node->name }}</span>
    </div>

    @unless($node->isLeaf())
        <ul>
            @each('livewire.admin.partial.permission-node', $node->getChildren(), 'node')
        </ul>
    @endunless
</li>
