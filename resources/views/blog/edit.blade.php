@extends('layouts.app')

@section('content')
    <div class="about-content">
        <div class="container">
            <h2>Edytuj post</h2>
            <div class="about-section">
                <div class="about-grid">
                    <form class="form-horizontal" action="{{ action('BlogController@update', $detailpage->id) }}"
                          method="post">
                        <div class="form-group">
                            <label class="control-label" for="title">Tytuł:</label>
                            <input class="form-control" id="title" type="text" name="title"
                                   value="{{ $detailpage->title }}" placeholder="Tytuł">
                            {{ ($errors->has('title')) ? $errors->first('title') : '' }}
                        </div>
                        <div class="form-group">
                            <label for="comment">Treść:</label>
                            <textarea class="form-control" id="comment" name="post" rows="8"
                                      placeholder="Treść">{{ $detailpage->post }}></textarea>
                            {{ ($errors->has('post')) ? $errors->first('post') : '' }}
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="_method" value="put">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" name="name" class="btn btn-success">Zapisz zmiany</button>
                            <a class="btn btn-danger" role="button" href="{{action('BlogController@index')}}">Wróć do strony głównej</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection