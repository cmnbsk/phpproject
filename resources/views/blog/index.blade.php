@extends('layouts.app')

{{--Info message section (post updated, created, deleted)--}}
@if(Session::get('message'))
    <div class="alert alert-info">
        <strong>{{ Session::get('message') }}</strong>
    </div>
@endif

{{--Error message section (not logged in etc.)--}}
@if(Session::get('error'))
    <div class="alert alert-danger">
        <strong>{{ Session::get('error') }}</strong>
    </div>
@endif

<h1>Mój blog</h1>

@section('content')
    <div id="conts">
        Ostatnio dodane:<br>
        @foreach($blogs->reverse() as $data)

            @if($data->id>=$c)
                <h5><a href="show/{{ $data->id }}">{{ $data -> title }}</a></h5>
            @endif


        @endforeach
        <br>
            Najpopularniejsze:<br>
            @foreach($b as $data2)
                <h5><a href="show/{{ $data2->id }}">{{ $data2 -> title }}</a></h5>
                @endforeach
    </div>

    @if (!Auth::guest())
        <a href="create">Dodaj nowy post</a>
    @endif

    @foreach($blogs->reverse() as $data)
        <h2><a href="show/{{ $data->id }}">{{ $data -> title }}</a></h2>
        <h5>Autor: {{ $data->author }} </h5>
        {{--<p>{{ $data->post }}    --}}
        <p>{{ str_limit($data->post, 250) }}
                </p>

        @if (!Auth::guest())  <a href="edit/{{ $data->id }}">Edytuj post</a>
        <form class="" action="{{ action('BlogController@destroy', $data->id) }}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="name" value="delete">
        </form>

        @endif
        <hr>
    @endforeach
@endsection

