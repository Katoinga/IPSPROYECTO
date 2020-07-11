
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
//Controller de Reportes
Route::get('/laravel_google_chart', 'LaravelGoogleGraph@index');
Route::get('chart', 'ChartController@index')->name('chart');

//Controller de Decreto
Route::get('decretoSupremo','DecretoController@view')->name('decretoSupremo');

//Controller de Universidades
Route::get('/universidades/busqueda','UniversidadesController@busqueda')->name('busqueda');
Route::resource('universidades','UniversidadesController');

//Controller de LoginAndRegister
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
