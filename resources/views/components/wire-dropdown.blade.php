@props(['menu'])

<div class="dropdown">
    <button wire:key="toggle" wire:ignore.self {{ $attributes->class("dropdown-toggle")  }} type="button" data-toggle="dropdown" aria-expanded="false">
        {{ $slot }}
    </button>
    <ul wire:key="menu" {{ $menu->attributes->class("dropdown-menu") }}>
        {{ $menu }}
    </ul>
</div>
