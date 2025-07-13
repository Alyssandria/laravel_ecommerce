<div class="flex w-full bg-green-500">
    @foreach ($providers as $key => $value)
        <a class="{{$value['className']}}" href="/auth/redirect/{{ key }}">
            @svg($value['icon'])
        </a>
    @endforeach
</div>
