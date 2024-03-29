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

Route::get('/', 'ClienteController@index');

Route::get('admin', function(){
	return view('dashboard');
});

Route::resource('clientes', 'ClienteController');


Route::put('/asd','ClienteController@show');
//Route::resource('equipos', 'EquipoController');