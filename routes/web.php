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

Route::get('/', function () {
    return view('welcome');
});

//TEST KONTROLERA
//Route::get('/login', function(){
//    return view('errors/503');
//});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'HomeController@logouts');

Route::get('blog', 'BlogController@index');
Route::get('blog/create', 'BlogController@create');
Route::get('blog/show/{id}', 'BlogController@show');
Route::get('blog/edit/{id}', 'BlogController@edit');
Route::delete('blog/destroy/{id}', 'BlogController@destroy');
Route::post('blog/store', 'BlogController@store');
Route::put('blog/{id}', 'BlogController@update');