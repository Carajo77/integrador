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
    return view('inicio');
});
Route::get('/detalles',function (){
  return view('detalles');
});
Route::get('/ingreso',function (){
   return view('ingreso');
});
Route::get('/contrasena',function (){
  return view('contrasena');
});
Route::get('/registrarse',function (){
  return view('registrarse');
});

Route::get('/pepe',function (){
  return view('pepe');
});
Route::get('/cabañas',function (){
  return view('cabanas');
});
Route::get('/preguntas-frecuentes',function (){
  return view('preguntas-frecuentes');
});
Route::get('/alojamiento',function (){
  return view('alojamiento');
});

Route::get('/cabanas','CabanasController@listado');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post("/form-contacto","contactController@almacenar");

Route::get('/experiencias', function(){
  return view('/experiencias');
});

Route::get('/perfil-user', function(){
  return view('/perfil-user');
});

Route::post('/guardar-usuario',"usuariosController@actualizar");
Route::post('/guardar-foto-usuario',"usuariosController@foto");
