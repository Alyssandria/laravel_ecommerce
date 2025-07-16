@use('Illuminate\Support\Arr')

@php
    $classes = Arr::toCssClasses([
        'p-3 px-6 text-sm rounded-[33px] border',
        'border border-red-500' => $errors->has($attributes->get('id')),
        'pr-14' => $attributes->get('type') === 'password',
    ]);
@endphp

<div class="space-y-2">
<label for="{{ $attributes->get('id') }}" x-data="{ isHidden: true, toggle() { this.isHidden = !this.isHidden } }" class="relative flex flex-col gap-2">
    {{ $label }}

    @if ($attributes->get('type') === 'password')
        <input {{ $attributes->twMerge($classes)->merge(['type' => 'text']) }} x-bind:type="isHidden ? 'password' : 'text'" value="{{ old($attributes->get('id')) }}" />
            <button type="button" class="absolute right-8 top-1/2  translate-[30%]" @click="toggle()">
                <x-bi-eye class="size-5" x-bind:class="isHidden ? 'block' : 'hidden'" />
                <x-bi-eye-slash class="size-5" x-cloak x-show="!isHidden" />
            </button>
    @else

    <input {{ $attributes->twMerge($classes)->merge(['type' => 'text']) }} value="{{ old($attributes->get('id')) }}"/>

    @endif

</label>
@error($attributes->get('id'))
   <p class="font-bold text-xs text-red-500">{{ $message }}</p>
@enderror
</div>
