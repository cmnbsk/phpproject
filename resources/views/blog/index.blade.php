@extends('layouts.app')
{{--Info message section (post updated, created, deleted)--}}
@if(Session::get('message'))
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-info fade in alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('message') }}
        </div>
    </div>
@endif

{{--Error message section (not logged in etc.)--}}
@if(Session::get('error'))
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-danger fade in alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('error') }}
        </div>
    </div>
@endif

@section('content')
    <div id="conts" class="content">
        <div class="container">
            <div class="content-grids">
                <div class="col-md-8 content-main">
                    <div class="content-grid">
                        @foreach($blogs->reverse() as $data)
                            @php($rand = rand(1,3))
                            @php($string = 'images/post'.(string)$rand.'.jpg')
                            <img src={{$string}} alt=""/>
                            <div class="content-grid-info">
                                {{--<img src="{!! asset('images/post1.jpg') !!}" alt=""/>--}}
                                <div class="post-info">
                                    <h4><a href="show/{{ $data->id }}">{{ $data -> title }}</a></h4>
                                    <h4>Dodano: {{ $data -> created_at }}</h4>
                                    <h4>Autor: {{ $data->author }} </h4>
                                    <hr>
                                    <p>{{ str_limit($data->post, 260) }}
                                    </p>
                                    <a href="show/{{ $data->id }}"><span></span>WIĘCEJ</a>
                                    <br>
                                    @if (Auth::user())
                                        <a href="edit/{{ $data->id }}"><span></span>EDYTUJ</a>
                                        <form class="" action="{{ action('BlogController@destroy', $data->id) }}"
                                              method="post">
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" name="name" value="USUŃ">
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
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
    </div>
@endsection

