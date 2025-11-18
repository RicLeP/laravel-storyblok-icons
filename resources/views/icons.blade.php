<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    @foreach($sprites as $sprite)
        {!! $sprite['svg'] !!}
    @endforeach
</svg>
