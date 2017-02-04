@extends('layouts.app')

@section('content')
    <div class="single">
        <div class="container">
            <div class="col-md-8 single-main">
                <h2>{{$detailpage -> title}}</h2>
                <div class="single-grid">
                    <p>{{ $detailpage -> post }}</p>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left media-top">
                                <img src="{{asset('images/avatar1.png')}}" class="media-object" style="width:105px">
                            </div>
                            <div class="media-body">
                                <p class="media-heading">Autor: {{$detailpage -> author}}</p>
                                <p class="media-heading">Dodano: {{$detailpage -> created_at}}</p>
                                <p class="media-heading">Ostatnio edytowano: {{$detailpage -> updated_at}}</p>
                                <p class="media-heading">Liczba wyświetleń: {{ $detailpage -> views }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-default" role="button" href="{{action('BlogController@index')}}">Wróć do strony głównej</a>
                @if (Auth::user())
                    <a class="btn btn-info" role="button" href="edit/{{ $detailpage->id }}"><span></span>Edytuj</a>
                <br>
                <br>
                    <form class="" action="{{ action('BlogController@destroy', $detailpage->id) }}"
                          method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" name="name" value="Usuń post">
                    </form>
                @endif
            </div>
            <div class="col-md-4 content-right">
                <div class="categories">
                    <div class="panel panel-danger">
                        <div class="panel-body">
                            <h3>MENU UŻYTKOWNIKA</h3>
                            <ul>
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Zaloguj się</a></li>
                                    <li><a href="{{ url('/register') }}">Zarejestruj się</a></li>
                                @elseif(Auth::user())
                                    <li>
                                        <a href="{{ action('BlogController@create') }}">
                                            Dodaj nowy post
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ action('UserController@edit') }}">
                                            Twój profil
                                        </a>
                                    </li>
                                    {{--WYLOGUJ--}}
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Wyloguj się
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>NAJCZĘŚCIEJ ODWIEDZANE</h3>
                            <ul>
                                @foreach($most_popular as $data)
                                    <li><a href="show/{{ $data->id }}">{{ $data -> title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="recent">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>OSTATNIO DODANE</h3>
                            <ul>
                                @foreach($last_post as $data)
                                    <li><a href="show/{{ $data->id }}">{{ $data -> title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection