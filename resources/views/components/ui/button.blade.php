@use('Illuminate\Support\Arr')

@props(['variant' => 'default'])

@php
    $classes = Arr::toCssClasses(['w-full md:w-1/2 p-4 bg-primary text-secondary', 'pill' => $variant === 'pill']);
@endphp

<button {{ $attributes->twMerge($classes) }}>
    {{ $slot }}
</button>
