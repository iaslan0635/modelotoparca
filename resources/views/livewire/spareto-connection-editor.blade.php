<table
    class="table table-row-dashed fs-6 gy-5 my-0">
    <thead>
    <tr>
        <th class="text-start">url</th>
        <th class="text-start">Eşleşme Sebebi</th>
        <th class="text-start"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($product->sparetoConnections as $con)
        <tr>
            <th><a href="{{$con->url}}" target="_blank">{{$con->url}}</a></th>
            <th><span class="badge badge-primary">{{$con->connected_by}}</span></th>
            <th>
                @if($con->is_connection_applied)
                    <button class="btn btn-danger btn-sm" wire:click="disconnect({{$con->id}})">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading></span>
                        Sil
                    </button>
{{--                @elseif(array_search($con->id, $pending))--}}
{{--                    <button class="btn btn-success btn-sm" disabled="disabled">Bağlanıyor</button>--}}
                @else
                    <button class="btn btn-success btn-sm" wire:click="connect({{$con->id}})">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading></span>
                        Bağla
                    </button>
                @endif
            </th>
        </tr>
    @endforeach
    </tbody>
</table>
