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
    return view('contenido/contenido');
})->middleware('auth');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout'); //Ruta para salir de la sesión

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pacientes','PacienteController@index');
Route::post('/pacientes/registrar','PacienteController@store');
Route::put('/pacientes/actualizar','PacienteController@update');
