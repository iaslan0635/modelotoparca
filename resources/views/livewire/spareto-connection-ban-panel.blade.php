<tr>
    <td>{{$url->url}}</td>
    <td>{{$url->is_banned ? "Evet" : "Hayır"}}</td>
    <td>
        @if($url->is_banned)
            <button class="btn btn-success" wire:click="unban" wire:loading.attr="disabled" wire:loading.class="btn-loading">Yasağı kaldır</button>
        @else
            <button class="btn btn-danger" wire:click="ban" wire:loading.attr="disabled" wire:loading.class="btn-loading">Yasakla</button>
        @endif
    </td>
</tr>
