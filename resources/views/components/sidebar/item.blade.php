@props(['href'])

<div class="menu-item">
    <a class="menu-link" href="{{ $href }}">
        @isset($icon)
            <span class="menu-icon">
                {{ $icon }}
            </span>
        @else
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
        @endisset
        <span class="menu-title">{{ $slot }}</span>
    </a>
</div>
