@use('Illuminate\Support\Arr')

@php
    $classes = Arr::toCssClasses([
        'p-3 px-6 text-sm rounded-[33px] border',
        'pr-14' => $attributes->get('type') === 'password',
    ]);
@endphp

@if ($attributes->get('type') === 'password')
    <label for="{{ $attributes->get('id') }}" x-data="{ isHidden: true, toggle() { this.isHidden = !this.isHidden } }" class="relative flex flex-col gap-2">
        {{ $label }}
        <input {{ $attributes->twMerge($classes)->merge(['type' => 'text']) }}
            x-bind:type="isHidden ? 'password' : 'text'" />
        <button type="button" class="absolute right-8 top-1/2  translate-[30%]" @click="toggle()">
            <x-bi-eye class="size-5" x-bind:class="isHidden ? 'block' : 'hidden'" />
            <x-bi-eye-slash class="size-5" x-bind:class="isHidden ? 'hidden' : 'block'" />
        </button>
    </label>
@else
    <label for="{{ $attributes->get('id') }}" class="relative flex flex-col gap-2">
        {{ $label }}
        <input {{ $attributes->twMerge($classes)->merge(['type' => 'text']) }} />
    </label>
@endif
