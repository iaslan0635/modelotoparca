<div>
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
        <!--begin::Table head-->
        <thead>
        <!--begin::Table row-->
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-250px">Kategori</th>
            <th class="min-w-250px">N11</th>
            <th class="min-w-250px">Hepsiburada</th>
            <th class="min-w-250px">Trendyol</th>
        </tr>
        <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="fw-semibold text-gray-600">
        @foreach($categories as $category)
            <!--begin::Table row-->
            <livewire:admin.sync-category-single :category="$category" :n11Categories="$n11Categories"
                                                 :hepsiCategories="$hepsiCategories"
                                                 :trendyolCategories="$trendyolCategories"/>
            <!--end::Table row-->
        @endforeach
        </tbody>
        <!--end::Table body-->
    </table>
    {{ $categories->links() }}
</div>
