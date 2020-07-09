
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
Route::get('chart', 'ChartController@index')->name('chart');
Route::get('decretoSupremo','DecretoController@view')->name('decretoSupremo');
Route::resource('simple','Filtro2Controller');
Route::get('universidades/simple','UniversidadesController@simple')->name('simple');
/*Route::get('universidades','UniversidadesController@index');*/
Route::resource('universidades','UniversidadesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
