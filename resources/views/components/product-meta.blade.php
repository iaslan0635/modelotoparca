@props(['tiger' ])

<span {{ $attributes }}>
    <h6 {{ $attributes }}>
           <span class="badge badge-light">{{ $tiger->raf_no ?? "##[BİLİNMİYOR]" }}</span>
        <span
            class="badge @if($tiger?->stock_on_51) badge-success @else badge-danger @endif">S51 / {{$tiger?->stock_on_51 }}
        </span>
        <span
            class="badge @if($tiger?->stock_on_38) badge-success @else badge-danger @endif">S38 / {{$tiger?->stock_on_38}}
        </span>
        <span
            class="badge @if($tiger?->stock_on_01) badge-success @else badge-danger @endif">S01 / {{$tiger->stock_on_01}}
        </span>
    </h6>
</span>
