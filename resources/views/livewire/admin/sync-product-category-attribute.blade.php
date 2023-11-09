<div class="card-body pt-0">
    @if(!$product->categories[0]->merchants()->trendyol()->exists())
        Lütfen önce kategori eşleştiriniz!
    @else
        <table class="table table-responsive table-striped">
            <thead>
            <tr>
                <th>Mesaj</th>
                <th>Zorunlu mu ?</th>
                <th>Değer</th>
                <th>İşlem</th>
            </tr>
            </thead>
            <tbody>
            @if($type === "trendyol")
                @foreach($attributes->categoryAttributes as $attribute)
                    <livewire:admin.product-attribute-trendyol :key="$attribute->attribute->id" :attribute="(array)$attribute" :product_id="$product->id"/>
                @endforeach
            @elseif($type === "hepsiburada")
                @foreach($attributes->data->attributes as $attribute)
                    <livewire:admin.product-attribute-hepsiburada :key="$attribute->id" :attribute="(array)$attribute" :product_id="$product->id"/>
                @endforeach
            @elseif($type === "n11")
                @foreach($attributes->category->attributeList as $attribute)
                    <livewire:admin.product-attribute-n11 :key="$attribute->id" :attribute="(array)$attribute" :product_id="$product->id"/>
                @endforeach
            @endif
            </tbody>
        </table>
    @endif
</div>
