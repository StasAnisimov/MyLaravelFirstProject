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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('register/confirm/{token}', 'Auth\RegisterController@confirmEmail');
Route::get('/blog', function () {
    return view('site.blog');
});
Route::get('/buy', function () {
    return view('site.buy');
});
Route::get('/restaurant', function () {
    return view('site.restaurant');
});
Route::get('/vacancies', function () {
    return view('site.vacancies');
});
