<tr>
    <td>{{$url->url}}</td>
    <td>{{$url->is_banned ? "Evet" : "Hayır"}}</td>
    <td>
        @if($is_banned)
            <button class="btn btn-success" wire:click="ban">Yasağı kaldır</button>
        @else
            <button class="btn btn-danger" wire:click="unban">Yasakla</button>
        @endif
    </td>
</tr>
