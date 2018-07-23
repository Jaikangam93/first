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



Route::get('/home', function () {
    return view('home');
});



Route::get('/about', 'pagesController@getabout')->name('about');

Route::get('/resume', 'pagesController@resume')->name('resume');
Route::get('/landing', 'pagesController@landing')->name('landing');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

/*
Route::get('/login','Auth\LoginController@getlogin');
Route::post('/login','Auth\LoginController@postlogin');
*/









