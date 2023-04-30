@props([
    'form',
    'maxHeight' => null,
    'width' => null,
])

<x-filament::dropdown
    {{ $attributes->class(['filament-tables-column-toggling']) }}
    :max-height="$maxHeight"
    placement="bottom-start"
    shift
    :width="$width"
    wire:key="{{ $this->id }}.table.toggle"
>
    <x-slot name="trigger">
        <x-filament-tables::toggleable.trigger />
    </x-slot>

    <div class="p-4">
        {{ $form }}
    </div>
</x-filament::dropdown>
