<?php
Route::redirect('/', '/home');
Route::redirect('/index', '/home');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('/productos', 'ProductosController')->middleware('auth');

Route::resource('/pedido', 'PedidosController');
