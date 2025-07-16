<header class="w-full flex gap-4">
    <nav class="size-full">
        <ul class="size-full flex max-[400px]:gap-3 justify-between items-center">
            <div class="flex gap-8 items-center w-full">
            @foreach ($navItems as $key => $value)
                <li @class(['ml-auto' => $key === 'login'])>
                    <a href="{{ $value['link'] }}" class="font-bold {{ $value['className'] }}">
                        @if ($key === 'logo')
                            @svg($value['icon'], $value['iconClassName'])
                            {{ $value['label'] }}
                        @else
                            {{ $value['label'] }}
                        @endif
                    </a>
                </li>
            @endforeach
            </div>

            <div class="flex gap-8 items-center">
                @guest
                    <li >
                        <a href="{{ route('app.auth.login') }}" class="font-bold hidden ml-auto lg:flex lg:items-center gap-2">
                            <x-bi-person class="size-4"/> Login/Register
                        </a>
                    </li>
                @endguest
                <x-navigation.search />
                <x-navigation.cart />
                <x-navigation.menu />
            </div>
        </ul>
    </nav>
</header>
