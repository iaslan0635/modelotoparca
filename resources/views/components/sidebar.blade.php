<div class="sidebar__content" style="max-height: 98vh; overflow-y: scroll">
    <div class="widget widget-filters widget-filters--offcanvas--mobile">
        <div class="widget__header widget-filters__header">
            <h4>Kategoriler</h4>
        </div>
        <div class="widget-filters__list">
            @foreach($categories as $category)
                <div class="widget-filters__item">
                    <div class="widget-filters__item-title">
                        <a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <x-last-visited/>
</div>
