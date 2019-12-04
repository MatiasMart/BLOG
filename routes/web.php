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

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/admin', 'AdminController@index');

Route::get('/admin/post', 'AdminController@indexposts');
Route::post('/admin/post', 'AdminController@agregarPost');

route::get('/admin/modificar/{id}', 'AdminController@mostrar');
route::post('/admin/modificar/{id}', 'AdminController@modificar');

route::get('/admin/eliminar/{id}', 'AdminController@eliminar');

Route::get('/admin/usuarios', 'AdminController@indexusuarios');
