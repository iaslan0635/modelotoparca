<div class="card card-flush py-4">
    <div class="card-header">
        <div class="card-title">
            <h2>Bot Ürün Eşleşmeleri ({{ count($product->bots) }})</h2>
        </div>
        <div class="card-toolbar">
            <span class="text-sm text-muted" style="font-size: 1rem">
                Değişikliklerin uygulanması birkaç dakika sürebilir.
            </span>
            <div wire:loading.class.remove="invisible" class="invisible mx-4 spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <button class="btn btn-sm fw-bold btn-primary" wire:click="save" wire:loading.attr="disabled" @unless($isDirty) disabled @endunless>Kaydet</button>
        </div>
    </div>
    <div class="card-body pt-0">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Url</th>
                <th>Kaynak Alan</th>
                <th>Aranan kelime</th>
                <th>Yasaklı mı?</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($connections as $i => $item)
                <tr>
                    <td>
                        <a href="{{get_item($item['connection'], "url")}}" target="_blank">
                            {{get_item($item['connection'], "url")}}
                        </a>
                    </td>
                    <td>{{ get_item($item['connection'], "origin_field") }}</td>
                    <td>
                        @if($item['isBanned'])
                            <span class="badge rounded-pill text-white text-bg-success">Evet</span>
                        @else
                            <span class="badge rounded-pill text-white text-bg-danger">Hayır</span>
                        @endif
                    </td>
                    <td>{{ get_item($item['connection'], "keyword") }}</td>
                    <td>
                        @if($item['isBanned'])
                            <button class="btn btn-sm btn-success" wire:click="unban({{$i}})" wire:loading.attr="disabled">
                                <span>Yasağı kaldır</span>
                            </button>
                        @else
                            <button class="btn btn-sm btn-danger" wire:click="ban({{$i}})" wire:loading.attr="disabled">
                                <span>Yasakla</span>
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
