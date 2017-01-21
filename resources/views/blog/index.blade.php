@extends('layouts.app')
{{ Session::get('message') }}
<h1>Mój blog</h1>
@section('content')


    @if (!Auth::guest())
        <a href="blog/create">Dodaj nowy post</a>
    @endif


    @foreach($blogs->reverse() as $data)
        <h2><a href="blog/show/{{ $data->id }}">{{ $data -> title }}</a></h2>
        <p>{{ $data->post }} </p>
        <p>{{ $data->author }} </p>
        @if (!Auth::guest())  <a href="blog/edit/{{ $data->id }}">Edytuj post</a>
        <form class="" action="{{ action('BlogController@destroy', $data->id) }}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="name" value="delete">
        </form>
        @endif
        <hr>
    @endforeach
@endsection