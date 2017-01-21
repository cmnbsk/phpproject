@extends('blog.index')


@section('contents')
    @foreach($blogs->reverse() as $data)

        @if($data->id>=$a)
            <h5><a href="show/{{ $data->id }}">{{ $data -> title }}</a></h5>

            <hr class="lastPosts">
        @endif
    @endforeach
@endsection