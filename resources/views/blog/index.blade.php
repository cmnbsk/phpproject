@extends('layouts.app')

{{--Messages section (post updated, created, deleted)--}}
@if(Session::get('message'))
    <div class="alert alert-info">
        <strong>{{ Session::get('message') }}</strong>
    </div>
@endif

<h1>Mój blog</h1>
@section('content')


    @if (!Auth::guest())
        <a href="blog/create">Dodaj nowy post</a>
    @endif

    @foreach($blogs->reverse() as $data)
        <h2><a href="blog/show/{{ $data->id }}">{{ $data -> title }}</a></h2>
        <h5>Autor: {{ $data->author }} </h5>
        <p>{{ $data->post }} </p>

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