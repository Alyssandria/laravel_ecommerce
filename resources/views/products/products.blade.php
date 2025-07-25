<x-layout>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">

            <ul class="mt-8 grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($products as $key => $value)
                    <li class="w-full">
                        <a href="#" class="group overflow-hidden flex flex-col gap-4 justify-around">
                            <img src="{{ $value['images'][0] }}" alt=""
                                class="h-[350px] w-full block object-cover transition duration-500 rounded-2xl group-hover:scale-105 sm:h-[450px]" />

                            <div class="w-full relative items-baseline flex flex-col gap-4">
                                <span
                                    class="block text-lg font-bold text-primary group-hover:underline group-hover:underline-offset-4 truncate max-w-full">
                                    {{ $value['title'] }}
                                </span>

                                <div class="w-full flex items-center justify-between">
                                    <span
                                        class="block tracking-wider text-lg font-bold text-gray-900">${{ $value['price'] }}
                                    </span>
                                    <form action="{{ route('cart.add', $value['id']) }}" method="post">
                                        @csrf
                                        <button type="submit" class="block">
                                            <x-bi-cart class="size-6" />
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</x-layout>
