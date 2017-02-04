@extends('layouts.app')

@section('content')
    <div class="about-content">
        <div class="container">
            <h2>Dodaj nowy post</h2>
            <div class="about-section">
                <div class="about-grid">
                    <form class="form-horizontal" action="{{ action('BlogController@store') }}" method="post">
                        <div class="form-group">
                            <label class="control-label" for="title">Tytuł:</label>
                            <input class="form-control" id="title" type="text" name="title"
                                   placeholder="Tytuł" required>
                            {{ ($errors->has('title')) ? $errors->first('title') : '' }}
                        </div>
                        <div class="form-group">
                            <label for="comment">Treść:</label>
                            <textarea class="form-control" id="comment" name="post" rows="8"
                                      placeholder="Treść" required></textarea>
                            {{ ($errors->has('post')) ? $errors->first('post') : '' }}
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="btn btn-success" type="submit" name="_name" value="Dodaj">
                            <a class="btn btn-danger" role="button" href="{{action('BlogController@index')}}">Odrzuć
                                zmiany</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <h1>Dodaj nowy post</h1>
    <form class="" action="{{ action('BlogController@store') }}" method="post">

        <input type="text" name="title" value="" required placeholder="Tytuł">
        {{ ($errors->has('title')) ? $errors->first('title') : '' }}<br>
        <textarea name="post" rows="8" cols="40" required placeholder="Opis"></textarea>
        {{ ($errors->has('post')) ? $errors->first('post') : '' }}<br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="_name" value="Dodaj">
    </form>
@endsection