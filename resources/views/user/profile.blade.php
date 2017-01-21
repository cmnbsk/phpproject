@extends('layouts.app')

@section('content')
    <script src="../js/app.js"></script>
    <link href="../css/app.css" rel="stylesheet">

    <h1>Informacje o profilu</h1>
    <div class="container">
        <form class="" action="{{ action('UserController@update') }}" method="post">
            Imię: <input type="text" name="firstname" value="{{ $useredit->firstname }}">
            {{ ($errors->has('firstname')) ? $errors->first('firstname') : '' }}<br>
            Nazwisko: <input type="text" name="surname" value="{{ $useredit->surname }}">
            {{ ($errors->has('surname')) ? $errors->first('surname') : '' }}<br>
            Państwo: <input type="text" name="country" value="{{ $useredit->country }}">
            {{ ($errors->has('country')) ? $errors->first('country') : '' }}<br>
            Miasto: <input type="text" name="city" value="{{ $useredit->city }}">
            {{ ($errors->has('city')) ? $errors->first('city') : '' }}<br>
            Wiek: <input type="text" name="age" value="{{ $useredit->age }}">
            {{ ($errors->has('age')) ? $errors->first('age') : '' }}<br>
            Płeć: <input type="text" name="gender" value="{{ $useredit->gender }}">
            {{ ($errors->has('gender')) ? $errors->first('gender') : '' }}<br>
            Wykształcenie: <input type="text" name="education" value="{{ $useredit->education }}">
            {{ ($errors->has('education')) ? $errors->first('education') : '' }}<br>
            Zainteresowania: <input type="text" name="interests" value="{{ $useredit->interests }}">
            {{ ($errors->has('interests')) ? $errors->first('interests') : '' }}<br>
            O mnie: <input type="text" name="about_me" value="{{ $useredit->about_me }}">
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
            <input type="submit" name="name" value="Zapisz zmiany">
        </form>
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


