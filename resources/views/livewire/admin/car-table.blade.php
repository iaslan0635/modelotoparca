<tbody class="fw-semibold text-gray-600">
@foreach($cars as $car)
    @php if (is_array($car)) $car = (object) $car @endphp
    <!--begin::Table row-->
    <tr>
        <td>
            <span class="fw-bold">{{ $car->name }}</span>
        </td>
        <td>
            <span class="fw-bold">{{ $car->maker["name"] }}</span>
        </td>
        <td>
            <span class="fw-bold">{{ $car->short_name }}</span>
        </td>
        <td>
            <span class="fw-bold">{{ $car->power }}</span>
        </td>
        <td>
            <span class="fw-bold">{{ $car->capacity }}</span>
        </td>
        <td>
            <span class="fw-bold">{{ $car->produced_from ?? "?" }} - {{ $car->produced_to ?? "∞" }}</span>
        </td>
        <td>
            <button class="btn btn-sm btn-{{$car->indexable ? "success": "danger"}}" wire:click="toggleIndexing({{$loop->index}}, {{(int)$car->indexable}})">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading></span>
                {{ $car->indexable ? "Aranabilir" : "Aranamaz" }}
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                        fill="currentColor"/>
                    <path
                        d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                        fill="currentColor"/>
                </svg>
            </button>
        </td>
    </tr>
    <!--end::Table row-->
@endforeach
</tbody>
