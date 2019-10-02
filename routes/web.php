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

/* Route::get('/', function () {
    return view('admin.index');
});
 */

Route::get('/','UsuarioController@index');

Route::get('region/', 'RegionController@index');
Route::get('region/{id}/delegaciones','RegionController@delegaciones');

Route::post('/nuevo_usuario', 'UsuarioController@store')->name('nuevo.registro');
Route::get('/confirmacion/{code}/registro', 'UsuarioController@show')->name('confirmacion.registro');

Route::post('/buscar', 'UsuarioController@busqueda')->name('buscar.registro');
