<tr>
    <td>
        <a href="{{'https://spareto.com'.$url->url}}" target="_blank">
            {{$url->url}}
        </a>
    </td>
    <td>{{ $url->origin_field }}</td>
    <td>
        @if($url->is_banned)
            <span class="badge rounded-pill text-white text-bg-success">Evet</span>
        @else
            <span class="badge rounded-pill text-white text-bg-danger">Hayır</span>
        @endif
    </td>
    <td>
        @if($url->is_banned)
            <button class="btn btn-sm btn-success" wire:click="unban" wire:loading.attr="disabled">
                <span wire:loading class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span wire:loading.remove>Yasağı kaldır</span>
            </button>
        @else
            <button class="btn btn-sm btn-danger" wire:click="ban" wire:loading.attr="disabled">
                <span wire:loading class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span wire:loading.remove>Yasakla</span>
            </button>
        @endif
    </td>
</tr>
