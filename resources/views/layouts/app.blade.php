<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

    <title>Blog o tematyce programistycznej</title>
    <link href="{!! asset('css/bootstrap.css') !!}" rel='stylesheet' type='text/css'/>
    <link href="{!! asset('css/style.css') !!}" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Osobisty blog stworzony w ramach projektu zaliczeniowego z przedmiotu Tworzenie Aplikacji Internetowych"
    />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TK blog') }}</title>

    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet'
          type='text/css'>
    <!----//webfonts---->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--end slider -->

    <!--scripts-->
    <script type="text/javascript" src="{!! asset('js/move-top.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/easing.js') !!}"></script>
    <script src="{!! asset('js/app.js') !!}"></script>
    <!--/scripts-->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
            });
        });
    </script>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {
            "message": "W ramach naszej witryny stosujemy pliki cookies w celu świadczenia Państwu usług na najwyższym poziomie, w tym w sposób dostosowany do indywidualnych potrzeb. Korzystanie z witryny bez zmiany ustawień dotyczących cookies oznacza, że będą one zamieszczane w Państwa urządzeniu końcowym. Możecie Państwo dokonać w każdym czasie zmiany ustawień dotyczących cookies.",
            "dismiss": "Akceptuję",
            "learnMore": "Więcej informacji",
            "link": "http://www.ciasteczka.info/informacje-o-cookies.html",
            "theme": "light-top"
        };
    </script>

    <script type="text/javascript"
            src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->

    <!---->
</head>

<body>
<div id="app">
    <!---header---->
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="{{action('BlogController@index')}}"><img src="{!! asset('images/logo.jpg') !!}" title=""/></a>
            </div>
            <!---start-top-nav---->
            <div class="top-menu">
                <span class="menu"> </span>
                <ul>
                    <li><a href="{!! action('BlogController@index') !!}">BLOG</a></li>
                    <li><a href="{!! action('BlogController@show', 1) !!}">O MNIE</a></li>
                    <li><a href="{!! action('BlogController@show', 2) !!}">KONTAKT</a></li>
                    @if(Auth::user())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">
                            {{ Auth::user()->email }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                    Wyloguj
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
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
                        </ul>
                    </li>
                    @else
                        <li><a href="{{ url('/login') }}">ZALOGUJ</a></li>
                        <li><a href="{{ url('/register') }}">REJESTRACJA</a></li>
                    @endif
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
            <script>
                $("span.menu").click(function () {
                    $(".top-menu ul").slideToggle("slow", function () {
                    });
                });
            </script>
            <!---//End-top-nav---->
        </div>
    </div>
{{--<div class="header">--}}
{{--<div class="container">--}}
{{--<div class="logo">--}}
{{--<a href=""><img src="{!! asset('images/logo.jpg') !!}" title=""/></a>--}}
{{--</div>--}}
{{--<!---start-top-nav---->--}}
{{--<div class="top-menu">--}}
{{--SEARCH--}}
{{--<div class="search">--}}
{{--<form>--}}
{{--<input type="text" placeholder="" required="">--}}
{{--<input type="submit" value=""/>--}}
{{--</form>--}}
{{--</div>--}}
{{--<span class="menu"> </span>--}}
{{--<ul>--}}
{{--<li><a href="{!! action('BlogController@index') !!}">BLOG</a></li>--}}
{{--<li><a href="{!! action('BlogController@index') !!}">O MNIE</a></li>--}}
{{--<li><a href="{!! action('BlogController@index') !!}">KONTAKT</a></li>--}}
{{--</ul>--}}

{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav navbar-right">--}}
{{--<!-- Authentication Links -->--}}
{{--@if (Auth::guest())--}}
{{--<li><a href="{{ url('/login') }}">ZALOGUJ</a></li>--}}
{{--<li><a href="{{ url('/register') }}">ZAREJESTRUJ</a></li>--}}
{{--@else--}}
{{--<li class="dropdown">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--aria-expanded="false">--}}
{{--{{ Auth::user()->email }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu" role="menu">--}}
{{--<li>--}}
{{--<a href="{{ url('/logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--Wyloguj--}}
{{--</a>--}}
{{--<form id="logout-form" action="{{ url('/logout') }}" method="POST"--}}
{{--style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="{{ action('BlogController@create') }}">--}}
{{--Dodaj nowy post--}}
{{--</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="{{ action('UserController@edit') }}">--}}
{{--Twój profil--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endif--}}
{{--<div class="clearfix"></div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--<script>--}}
{{--$("span.menu").click(function () {--}}
{{--$(".top-menu ul").slideToggle("slow", function () {--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
{{--<!---//End-top-nav---->--}}
{{--</div>--}}
{{--</div>--}}
<!--/header-->
    <div>
        @yield('content')
    </div>
</div>
<!---->
<div class="footer">
    <div class="container">
        <p>Copyrights © 2017 TobiaszK | Template by <a href="http://w3layouts.com/">W3layouts</a>
        </p>
    </div>
</div>
</body>
</html>


