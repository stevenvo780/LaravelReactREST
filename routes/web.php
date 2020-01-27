<?php
Route::redirect('/', '/home');
Route::redirect('/index', '/home');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('/productos', 'ProductosController')->middleware('auth');
/* Route::resource('/api/productos', 'api/ProductosControllerREST')->middleware('auth'); */

Route::get('/api/productos', 'api\ProductosControllerREST@index');

Route::put('/api/productos/actualizar', 'api/ProductosControllerREST@update');

Route::post('/api/productos/guardar', 'api/ProductosControllerREST@store');

Route::delete('/api/productos/borrar/{id}', 'api/ProductosControllerREST@destroy');

Route::get('/api/productos/buscar', 'api/ProductosControllerREST@show');

Route::resource('/pedido', 'PedidosController'); 
