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



Route::get('/usuarios','Usuarioscontroller@index');

Route::get('/usuarios/{id}','Usuarioscontroller@ver')->where('id','[0-9]+');

Route::get('/usuarios/nuevo','Usuarioscontroller@crear');

Route::get('/usuarios/{nombre}/{apodo}','Bienvenidacontroller@nuevo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
