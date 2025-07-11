<header class="w-full flex gap-4">
    <nav class="size-full">
        <ul class="size-full flex max-[400px]:gap-3 items-center gap-8">
            @foreach ($navItems as $key => $value)
                <li @class(['ml-auto' => $key === 'login'])>
                    <a href="{{ $value['link'] }}" class="{{ $value['className'] }}">
                        @if ($key === 'logo')
                            <x-icon-logofull class="w-32 sm:w-52" />
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
