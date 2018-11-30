<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/socios', function () {
    return view('socios');
});
*/

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/index', function () {
    return view('index');
});



Route::resource('/socios','SocioController');
Route::resource('/usuario','UsuarioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
