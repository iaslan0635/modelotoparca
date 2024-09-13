<div class="product-tabs__pane product-tabs__pane--active" id="product-tab-cars">

    <div class="compatible-cars row mt-2">
        @foreach($car_brands as $brand => $cars_by_names)
            <div class="compatible-cars-list mt-2 brand"
                 data-id="{{ $loop->index }}">
                <div class="uyumluSelectButtons">
                    <img class="lazy loaded"
                         src="https://websitem.modelotoparca.com/public/maker/{{ $brand }}.png"

                         alt=""
                         data-ll-status="loaded">
                    <br>
                    {{ $brand }}
                </div>
            </div>
        @endforeach
    </div>
    <hr>
    <div class="row">
        @foreach($car_brands as $brand => $cars_by_names)
            @php $index = $loop->index; @endphp
            @foreach($cars_by_names as $name => $cars)
                <div
                        class="uyumlu-car-select-line model col-md-12 models-{{ $index }}"
                        style="display: {{ $index === 0 ? "block":"none" }}">
                    <div class="title">
                        <div class="model-indicator">+</div>
                        {{ $name }}
                    </div>
                    <div class="content" style="display: none">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <table
                                            class="analogs-table">
                                        <thead>
                                        <tr>
                                            <th class="analogs-table__column analogs-table__column--name">

                                            </th>
                                            <th class="analogs-table__column analogs-table__column--name">
                                                Model
                                            </th>
                                            <th class="analogs-table__column analogs-table__column--name">
                                                Üretim Yılı
                                            </th>
                                            <th class="analogs-table__column analogs-table__column--name">
                                                Güç
                                            </th>
                                            <th class="analogs-table__column analogs-table__column--name">
                                                Kapasite
                                            </th>
                                            <th class="analogs-table__column analogs-table__column--name">
                                                Motor
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($cars as $car)
                                            <tr>
                                                <td class="analogs-table__column">
                                                    <img
                                                            src="{{ $car->imageUrl() }}"
                                                            style="height: 2rem">
                                                </td>
                                                <td class="analogs-table__column">{{ $car->name }}</td>
                                                <td class="analogs-table__column">
                                                    {{ $car->produced_from ?? "0000-00-00" }}
                                                    - {{
                                                                                                    $car->produced_to ?? $cachedNow ?? ($cachedNow = now()->format("d-m-Y"))
                                                                                                }}
                                                </td>
                                                {{--                                                                                    <td class="analogs-table__column">{{ $car->engine }} </td>--}}
                                                <td class="analogs-table__column">{{$car->type}}
                                                    / {{ $car->power_kw }} Kw
                                                    / {{ $car->power_hp }} Hp
                                                </td>
                                                <td class="analogs-table__column">{{ $car->capacity }}
                                                    cc
                                                </td>
                                                <td class="analogs-table__column"> {{$car->engine_code}} </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
    <div class="block-space block-space--layout--divider-nl"></div>


</div>
