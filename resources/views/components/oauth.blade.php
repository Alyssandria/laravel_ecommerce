<div class="w-full space-y-8">
    <div class="flex gap-8 items-center">
        <div class="w-full bg-gray-300 h-[.8px]"></div>
        <span class="block text-nowrap">or continue with</span>
        <div class="w-full bg-gray-300 h-[.8px]"></div>
    </div>
    <div class="flex justify-between w-full gap-4">
    @foreach ($providers as $key => $value)
        <a href="/auth/redirect/{{$key}}" class="cursor-pointer shadow-lg p-4 px-6 border-gray-100 rounded-lg bg-gray-100 {{$value['className']}}">
            @svg($value['icon'])
        </a>
    @endforeach
    </div>
</div>
