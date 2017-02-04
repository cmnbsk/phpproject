@extends('layouts.app')

{{--Message section (post updated, created, deleted)--}}
@if(Session::get('message'))
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-info fade in alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('message') }}
        </div>
    </div>
@endif

@section('content')
    <div class="single">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="single-grid">
                    <h2>Edytuj swoje dane</h2>
                    <div class="panel-body">
                        <form class="form-horizontal" action="{{ action('UserController@update') }}" method="post">
                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">

                                Imię: <input type="text" name="firstname" class="form-control"
                                             value="{{ $useredit->firstname }}" autofocus required>
                                {{ ($errors->has('firstname')) ? $errors->first('firstname') : '' }}<br>

                                Nazwisko: <input type="text" class="form-control" name="surname"
                                                 value="{{ $useredit->surname }}" autofocus required>
                                {{ ($errors->has('surname')) ? $errors->first('surname') : '' }}<br>

                                E-mail: <input type="text" class="form-control" name="email"
                                               value="{{ $useredit->email }}" autofocus required>
                                {{ ($errors->has('email')) ? $errors->first('email') : '' }}<br>

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
                                        Płeć:<br><input id="gender" type="radio" name="gender" value="mężczyzna"
                                                        required
                                                        autofocus>
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

                                Zainteresowania:
                                <textarea class="form-control" name="interests"
                                          rows="2">{{ $useredit->interests }}</textarea>
                                {{ ($errors->has('interests')) ? $errors->first('interests') : '' }}<br>

                                O mnie:
                                <textarea class="form-control" name="about_me"
                                          rows="2">{{ $useredit->about_me }}</textarea>
                                {{ ($errors->has('about_me')) ? $errors->first('about_me') : '' }}<br>

                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-primary" name="name" value="Zapisz zmiany">
                                <a class="btn btn-default" role="button" href="{{action('BlogController@index')}}">Wróć do strony głównej</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

