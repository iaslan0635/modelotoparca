<div class="product-tabs__pane" id="tecdoc-equivalents">
    @if(count($product->tecdoc ?? []))
        <div class="product__features">
            <ul>
                @foreach(($product->tecdoc ?? []) as $key => $spec)
                    <li>{{ $key }}:
                        <span>{{ $spec }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        Tecdoc eşdeğeri yok
    @endif
    <div class="block-space block-space--layout--divider-nl"></div>
</div>
