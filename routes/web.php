<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//TEST KONTROLERA
//Route::get('/login', function(){
//    return view('errors/503');
//});

Route::get('/profile',function(){
    return view('user/profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'BlogController@index');
Route::get('create', 'BlogController@create');
Route::get('show/{id}', 'BlogController@show');
Route::get('edit/{id}', 'BlogController@edit');
Route::delete('destroy/{id}', 'BlogController@destroy');
Route::post('store', 'BlogController@store');
Route::put('{id}', 'BlogController@update');

Route::get('user/profile', 'UserController@edit');
Route::put('user/profile', 'UserController@update');