<header class="w-full flex gap-4">
    <nav class="size-full">
        <ul class="size-full flex max-[400px]:gap-3 items-center gap-8">
            @foreach ($navItems as $key => $value)
                <li @class(['ml-auto' => $key === 'login'])>
                    <a href="{{ $value['link'] }}" class="font-bold {{ $value['className'] }}">
                        @if ($key === 'logo' || $value['icon'] !== '')
                            @svg($value['icon'], $value['iconClassName'])
                            {{ $value['label'] }}
                        @else
                            {{ $value['label'] }}
                        @endif
                    </a>
                </li>
            @endforeach
            <x-search />
            <x-cart />
            <x-menu />
        </ul>
    </nav>
</header>
