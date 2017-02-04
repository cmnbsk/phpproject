@extends('layouts.app')

@section('content')
    <div class="single">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="single-grid">
                    {{--<div class="container">--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-md-8 col-md-offset-2">--}}
                    <div class="panel panel-default">
                        <div class="panel-heading">Rejestracja</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}


                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <label for="firstname" class="col-md-4 control-label">Imię: </label>

                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control" name="firstname"
                                               value="{{ old('firstname') }}" required autofocus>

                                        @if ($errors->has('firstname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                    <label for="surname" class="col-md-4 control-label">Nazwisko: </label>

                                    <div class="col-md-6">
                                        <input id="surname" type="text" class="form-control" name="surname"
                                               value="{{ old('surname') }}" required autofocus>

                                        @if ($errors->has('surname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-mail:</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Hasło: </label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password"
                                               required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Potwierdź
                                        hasło: </label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label for="city" class="col-md-4 control-label">Miasto: </label>

                                    <div class="col-md-6">
                                        <input id="city" type="text" class="form-control" name="city"
                                               value="{{ old('city') }}" autofocus>

                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                    <label for="age" class="col-md-4 control-label">Wiek: </label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="age" value="{{ old('age') }}" required
                                                autofocus>
                                            <option value="mniej niż 16 lat">mniej niż 16 lat</option>
                                            <option value="16-19">16-19</option>
                                            <option value="20-24">20-24</option>
                                            <option value="25-29">25-29</option>
                                            <option value="30-39">30-39</option>
                                            <option value="40-49">40-49</option>
                                            <option value="50-59">50-59</option>
                                            <option value="60 lub więcej">60 lub więcej</option>
                                        </select>

                                        @if ($errors->has('age'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <label for="gender" class="col-md-4 control-label">Płeć: </label>

                                    <div class="col-md-6">
                                        <input id="gender" type="radio" name="gender" value="mężczyzna" required
                                               autofocus checked="checked">
                                        Mężczyzna
                                        <input id="gender" type="radio" name="gender" value="kobieta" required
                                               autofocus>
                                        Kobieta

                                        @if ($errors->has('gender'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('interests') ? ' has-error' : '' }}">
                                    <label for="education" class="col-md-4 control-label">Zainteresowania: </label>

                                    <div class="col-md-6">
                                        <input id="interests" type="text" class="form-control" name="interests"
                                               value="{{ old('interests') }}" autofocus>

                                        @if ($errors->has('interests'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('interests') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('about_me') ? ' has-error' : '' }}">
                                    <label for="about_me" class="col-md-4 control-label">O mnie: </label>

                                    <div class="col-md-6">
                                        <input id="about_me" type="text" class="form-control" name="about_me"
                                               value="{{ old('about_me') }}" autofocus>

                                        @if ($errors->has('about_me'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('about_me') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Zarejestruj się
                                        </button>
                                        <a class="btn btn-default" role="button" href="{{action('BlogController@index')}}">Wróć do strony głównej</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection