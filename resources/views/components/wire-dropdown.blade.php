@props(['menu'])

<div class="dropdown" wire:ignore.self>
    <button {{ $attributes->class("dropdown-toggle")  }} type="button" data-toggle="dropdown" aria-expanded="false" wire:ignore.self>
        {{ $slot }}
    </button>
    <ul wire:ignore.self {{ $menu->attributes->class("dropdown-menu") }}>
        {{ $menu }}
    </ul>
</div>
