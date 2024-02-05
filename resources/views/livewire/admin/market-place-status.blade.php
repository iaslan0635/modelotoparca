<div class="card card-flush py-4" wire:init="loadData">
    <div class="card-header">
        <div class="card-title">
            <h2>Pazaryeri durumları</h2>
        </div>
    </div>
    <div class="card-body">
        @if($statuses === null)
            <div class="d-flex justify-content-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Yükleniyor...</span>
                </div>
            </div>
        @else
            <table class="table table-hover" style="width: max-content">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Pazaryeri</th>
                    <th scope="col">Durum</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($statuses as $marketPlace => $status)
                    <tr>
                        <td class="text-capitalize">{{ $marketPlace }}</td>
                        <td>
                            {{ $marketPlace }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
