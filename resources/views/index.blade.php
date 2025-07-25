<x-layout>
            @auth
                {{ Auth::user()->name }}
            @endauth
</x-layout>
