<div class="product-tabs__pane" id="product-tab-oem-codes">


    <div class="content">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @if (count($oems)>0)
                        <table
                                class="analogs-table">
                            <thead>
                            <tr>
                                <th class="analogs-table__column analogs-table__column--name">
                                    Marka
                                </th>
                                <th style="text-align: center"
                                    class="analogs-table__column analogs-table__column--name">
                                    Oem Kodlar
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($oems as $oem)
                                <tr>
                                    <td class="analogs-table__column">{{ $oem->brand }}</td>
                                    <td style="width:100%; display: inline-block; word-break: break-all; font-weight: 700">
                                        @foreach(explode(',', $oem->oems) as $item)
                                            <a href="{{ $item ? route('oem.search', ['oem' => $item]) : null }}">
                                                {{ $item }}
                                            </a>{{ !$loop->last ? "," : null }}
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>

    </div>


</div>
