<div class="d-flex flex-column gap-7 gap-lg-10">
    <livewire:car-search variant="admin" />
    <!--begin::Card-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Araç bağlantıları</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <div class="accordion">
                @foreach($car_brands as $brand => $cars_by_names)
                    <x-accordion id-prefix="car-brand" :id="$brand" :title="$brand">
                        @foreach($cars_by_names as $name => $cars)
                            <x-accordion id-prefix="car" :id="$name" :title="$name">
                                <table class="table table-row-dashed fs-6 gy-5 my-0">
                                    <thead>
                                    <tr>
                                        <th>Model</th>
                                        <th>Yıl</th>
                                        <th>Kapasite</th>
                                        <th>Güç</th>
                                        <th>Sil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cars as $car)
                                        <tr>
                                            <td>{{ $car["name"] }}</td>
                                            <td>{{ $car["produced_from"] ?? "0000-00-00" }}
                                                - {{ $car["produced_to"] ?? $cachedNow ?? ($cachedNow = now()->format("Y-m-d")) }}</td>
                                            <td>{{ $car["capacity"] }}</td>
                                            <td>{{ $car["power"] }}</td>
                                            <td><button class="btn btn-danger" wire:loading.class="btn-loading" wire:click="disconnectCar({{$car["id"]}})">Sil</button></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </x-accordion>
                        @endforeach
                    </x-accordion>
                @endforeach
            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>

@push("custom_scripts")
    <script>
        $(() => {
            $("#car-connector").select2({
                ajax: {
                    url: @js(route("admin.products.edit.searchForSelect2", $product_id)),
                    dataType: 'json'
                }
            });
        })

        document.addEventListener('livewire:init', () => {
            const component = @this;
            $("#car-connector").on("select2:select", (e) => {
                component.chosen_car_id = e.params.data.id
            })
        })
    </script>
@endpush
