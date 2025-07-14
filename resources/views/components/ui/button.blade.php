@use('Illuminate\Support\Arr')

@props(['variant' => 'default'])

@php
    $classes = Arr::toCssClasses(['w-1/2 p-3 bg-primary text-secondary', 'pill' => $variant === 'pill']);
@endphp

<button {{ $attributes->twMerge($classes) }}>
    {{ $slot }}
</button>
