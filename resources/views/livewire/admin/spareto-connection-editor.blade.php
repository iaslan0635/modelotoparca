Kapalıyız 😥

{{--
<table
    class="table table-row-dashed fs-6 gy-5 my-0">
    <thead>
    <tr>
        <th class="text-start">url</th>
        <th class="text-start">Eşleşme Sebebi</th>
        <th>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading></span>
                    {{ $connectionFilter === null ? "Tümü" : ($connectionFilter ? "Bağlı" : "Bağsız") }}
                </button>
                <ul class="dropdown-menu">
                    <li><a wire:click="applyConnectionFilter(null)" class="dropdown-item cursor-pointer">Tümü</a></li>
                    <li><a wire:click="applyConnectionFilter(true)" class="dropdown-item cursor-pointer">Bağlı</a></li>
                    <li><a wire:click="applyConnectionFilter(false)" class="dropdown-item cursor-pointer">Bağsız</a></li>
                </ul>
            </div>
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($this->getConnections() as $con)
        <tr>
            <td><a href="{{$con->url}}" target="_blank">{{$con->url}}</a></td>
            <td><span class="badge badge-primary">{{$con->connected_by}}</span></td>
            <td>
                @if($con->is_connection_applied)
                    <button class="btn btn-danger btn-sm" wire:click="disconnect({{$con->id}})">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading></span>
                        Sil
                    </button>
                @else
                    <button class="btn btn-success btn-sm" wire:click="connect({{$con->id}})">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading></span>
                        Bağla
                    </button>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
--}}
