<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <span class="menu-link">
        <span class="menu-icon">
            <span class="svg-icon svg-icon-2">
                {{ $icon }}
            </span>
        </span>
        <span class="menu-title">{{ $title }}</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        {{ $slot }}
    </div>
</div>
