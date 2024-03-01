@props(['href'])

<div class="menu-item">
    <a class="menu-link" href="{{ $href }}">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">{{ $slot }}</span>
    </a>
</div>
