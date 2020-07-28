
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
Route::get('/reports', 'LaravelGoogleGraph@index');
Route::get('chart', 'ChartController@index')->name('chart');

//Controller de Decreto
Route::get('decretoSupremo','DecretoController@view')->name('decretoSupremo');

//Controller de Universidades
Route::get('/universidades/busqueda/search','UniversidadesController@search')->name('search');

Route::get('/universidades/busqueda','UniversidadesController@busqueda')->name('busqueda');
Route::get('/universidades/ver/{nombre}','UniversidadesController@show')->name('ver');
Route::resource('universidades','UniversidadesController');

Route::get('full-text-search', 'Full_text_search_Controller@index');

Route::post('full-text-search/action', 'Full_text_search_Controller@action')->name('full-text-search.action');

Route::get('full-text-search/normal-search', 'Full_text_search_Controller@normal_search')->name('full-text-search.normal-search');

//Controller de LoginAndRegister
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
