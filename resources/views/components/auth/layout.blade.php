<div class="pt-20 w-full flex flex-col justify-center items-center min-h-[95vh]">
    <div class="w-full max-w-[455px] flex flex-col gap-6 min-sm:p-6">
        <div class="flex flex-col items-center gap-6">
            <x-icon-logofull class="w-52" />
            <div class="pill p-2 w-full flex bg-primary">
                <x-ui.link href="{{ route('login') }}" variant="pill">Login</x-ui>
                    <x-ui.link href="{{ route('register') }}" variant="pill">Register</x-ui>
            </div>
            <span class="text-grey">Discover your true self now!</span>
        </div>
        {{ $slot }}
        <x-auth.oauth />
    </div>
</div>
