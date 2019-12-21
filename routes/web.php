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
Route::get('/detalles/{id}','CabanasController@detalle');
// Route::get('/detalles/{id}',function (){
//   return view('detalles');
// });
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
Route::get('/mis-reservas',function (){
  return view('mis-reservas');
});
Route::get('/potrerillos',function (){
  return view('potrerillos');
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

Route::get('/contacto', function(){
  return view('/contacto');
});

Route::get('/perfil-user', function(){
  return view('/perfil-user');
});

Route::post('/guardar-usuario',"usuariosController@actualizar");
Route::post('/guardar-foto-usuario',"usuariosController@foto");

Route::get('/mis-cabanas/{id}',"CabanasController@mostrar");

Route::get('/mis-reservas/{id}',"CabanasController@reservas");

// Route::get('/mis-cabanas', function(){
//   
// });

Route::post('/mis-cabanas-agregar',"CabanasController@agregar");
