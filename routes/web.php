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

Route::get('/', 'PostController@index');
Route::get('/newpost','PostController@nuevopost');
Route::get('cambiarStatus', 'PostController@cambiarstatus')->name('cambiar.status');
Route::get('cambiarStatus2', 'PostController@cambiarstatus2')->name('cambiar.status2');