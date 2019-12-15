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
use App\Http\Controllers\IndexController;

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/admin', 'AdminController@index');

Route::get('/admin/post', 'AdminController@indexposts');
Route::post('/admin/post', 'AdminController@agregarPost');

route::get('/admin/modificar/{id}', 'AdminController@mostrar');
route::post('/admin/modificar/{id}', 'AdminController@modificar');

route::get('/admin/eliminar/{id}', 'AdminController@eliminar');

Route::get('/admin/usuarios', 'AdminController@usuarios');

route::get('/usuarios/eliminar/{id}', 'AdminController@usuariosEliminar');

Route::get('/posteos', 'IndexController@categorias');

route::get('/categoria/{id}', 'IndexController@posteosCat');

route::get('/post/{id}', 'IndexController@mostrarPost');

Route::post('/agregarComentario', 'IndexController@agregarComentario');

route::get('/contacto', 'IndexController@mostrarContacto');



