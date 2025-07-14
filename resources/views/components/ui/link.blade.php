@use('Illuminate\Support\Arr')

@props(['variant' => 'default'])

@php
    $classes = Arr::toCssClasses([
        'p-2 text-secondary bg-transparent text-lg block w-full text-center',
        'pill' => $variant === 'pill',
        'bg-secondary text-primary' => $attributes->get('href') === url()->current(),
    ]);
@endphp

<a {{ $attributes->twMerge($classes) }}>
    {{ $slot }}
</a>
