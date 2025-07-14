@use('Illuminate\Support\Arr')

@php
    $classes = Arr::toCssClasses(['p-3 px-6 text-sm rounded-[33px] border',
    'pr-14' => $attributes->get('type') === 'password'
]);
@endphp

@if ($attributes->get('type') === "password")
<label x-data="{ isHidden: true, toggle() { this.isHidden = !this.isHidden } }" class="relative flex flex-col gap-2">
    <input {{ $attributes->twMerge($classes)->merge(['type' => 'text']) }} x-bind:type="isHidden ? 'password' : 'text'"/>
    <button type="button" class="absolute right-5 top-1/2  translate-[-40%]" @click="toggle()">
        <x-bi-eye class="size-5" x-bind:class="isHidden ? 'block' : 'hidden'"/>
        <x-bi-eye-slash class="size-5" x-bind:class="isHidden ? 'hidden' : 'block'"/>
    </button>
</label>

@else
<input {{ $attributes->twMerge($classes)->merge(['type' => 'text']) }} />
@endif
