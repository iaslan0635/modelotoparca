<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
    <!--begin::Table head-->
    <thead>
    <!--begin::Table row-->
    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
        <th class="min-w-250px">Kategori</th>
        <th class="min-w-250px">N11</th>
    </tr>
    <!--end::Table row-->
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody class="fw-semibold text-gray-600">
    @foreach($categories as $category)
        <!--begin::Table row-->
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                @if($category->merchants()->n11()->exists())
                    Eşleştirilmiş
                @else
                    <select name="n11_id" id="n11_id">
                        @foreach($n11Categories as $ncat)
                            <option value="{{ $ncat->id }}">{{ $ncat->name }}</option>
                        @endforeach
                    </select>
                @endif
            </td>
        </tr>
        <!--end::Table row-->
    @endforeach
    </tbody>
    <!--end::Table body-->
</table>
