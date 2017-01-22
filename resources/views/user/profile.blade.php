@extends('layouts.app')

{{--Message section (post updated, created, deleted)--}}
@if(Session::get('message'))
    <div class="alert alert-info">
        <strong>{{ Session::get('message') }}</strong>
    </div>
@endif

@section('content')

    <h1>Informacje o profilu</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" action="{{ action('UserController@update') }}" method="post">
                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                Imię: <input type="text" name="firstname" class="form-control"
                                             value="{{ $useredit->firstname }}" autofocus>


                                {{ ($errors->has('firstname')) ? $errors->first('firstname') : '' }}<br>
                                Nazwisko: <input type="text" class="form-control" name="surname"
                                                 value="{{ $useredit->surname }}" autofocus>
                                {{ ($errors->has('surname')) ? $errors->first('surname') : '' }}<br>
                                E-mail: <input type="text" class="form-control" name="email"
                                               value="{{ $useredit->email }}" autofocus>
                                {{ ($errors->has('email')) ? $errors->first('email') : '' }}<br>
                                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">


                                    <div class="col-md-6">

                                        Kraj: <select class="form-control" name="country" value="{{ old('country') }}"
                                                      required
                                                      autofocus>
                                            <option selected="selected">
                                                {{ $useredit->country }}
                                            </option>
                                            <option value="Anglia">Anglia</option>
                                            <option value="Białoruś">Białoruś</option>
                                            <option value="Czechy">Czechy</option>
                                            <option value="Niemcy">Niemcy</option>
                                            <option value="Polska">Polska</option>
                                            <option value="Rosja">Rosja</option>
                                            <option value="Słowacja">Słowacja</option>
                                            <option value="Szwecja">Szwecja</option>
                                            <option value="Ukraina">Ukraina</option>
                                        </select>
                                        @if ($errors->has('country'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                Miasto: <input type="text" class="form-control" name="city"
                                               value="{{ $useredit->city }}" autofocus>
                                {{ ($errors->has('city')) ? $errors->first('city') : '' }}<br>
                                <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">

                                    <div class="col-md-6">
                                        Wiek: <select class="form-control" name="age" value="{{ old('age') }}" required
                                                      autofocus>
                                            <option selected="selected">
                                                {{ $useredit->age }}
                                            </option>
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


                                    <div class="col-md-6">
                                        Płeć: <input id="gender" type="radio" name="gender" value="mężczyzna" required
                                                     autofocus>
                                        Mężczyzna
                                        <input id="gender" type="radio" name="gender" value="kobieta"  required
                                               autofocus>
                                        Kobieta

                                        @if ($errors->has('gender'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">


                                    <div class="col-md-6">
                                        Wykształcenie: <select class="form-control" name="education"
                                                               value="{{ old('education') }}"
                                                               required autofocus>
                                            <option selected="selected">
                                                {{ $useredit->education }}
                                            </option>
                                            <option value="podstawowe">podstawowe</option>
                                            <option value="gimnazjalne">gimnazjalne</option>
                                            <option value="zasadnicze/zawodowe">zasadnicze/zawodowe</option>
                                            <option value="średnie">średnie</option>
                                            <option value="wyższe">wyższe</option>

                                        </select>

                                        @if ($errors->has('education'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                Zainteresowania: <input type="text" class="form-control" name="interests"
                                                        value="{{ $useredit->interests }}" autofocus>
                                {{ ($errors->has('interests')) ? $errors->first('interests') : '' }}<br>
                                O mnie: <input type="text" class="form-control" name="about_me"
                                               value="{{ $useredit->about_me }}" autofocus>
                                {{ ($errors->has('about_me')) ? $errors->first('about_me') : '' }}<br>

                                {{-- <h2>Zmiana hasła:</h2>
                                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                     <label for="password" class="col-md-4 control-label">Podaj stare hasło: </label>

                                     <div class="col-md-6">
                                         <input id="password" type="password" class="form-control" name="password" required>

                                         @if ($errors->has('password'))
                                             <span class="help-block">
                                                             <strong>{{ $errors->first('password') }}</strong>
                                                         </span>
                                         @endif
                                     </div>
                                 </div>

                                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                     <label for="password" class="col-md-4 control-label">Nowe hasło: </label>

                                     <div class="col-md-6">
                                         <input id="password" type="password" class="form-control" name="password" required>

                                         @if ($errors->has('password'))
                                             <span class="help-block">
                                                             <strong>{{ $errors->first('password') }}</strong>
                                                         </span>
                                         @endif
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="password-confirm1" class="col-md-4 control-label">Potwierdź nowe hasło: </label>

                                     <div class="col-md-6">
                                         <input id="password-confirm1" type="password" class="form-control" name="password_confirmation" required>
                                     </div>
                                 </div>--}}

                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-primary" name="name" value="Zapisz zmiany">
                            </div>
                        </form>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
@endsection

{{--<label for="profil_name">Nazwa użytkownika: </label>
{{ Auth::user()->name }}<br/>
<label for="profil_firstname">Imię: </label>
{{ Auth::user()->firstname }}<br/>
<label for="profil_surname">Nazwisko: </label>
{{ Auth::user()->surname }}<br/>
<label for="profil_country">Kraj: </label>
{{ Auth::user()->country }}<br/>
<label for="profil_city">Miasto: </label>
{{ Auth::user()->city }}<br/>
<label for="age">Wiek: </label>
{{ Auth::user()->age }}<br/>
<label for="profil_gender">Płeć: </label>
{{ Auth::user()->gender }}<br/>
<label for="profil_education">Wykształcenie: </label>
{{ Auth::user()->education }}<br/>
<label for="profil_interests">Zainteresowania: </label>
{{ Auth::user()->interests }}<br/>
<label for="profil_about_me">O mnie: </label>
{{ Auth::user()->about_me }}<br/>--}}


