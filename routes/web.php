<?php

Route::get('/home/{id}', 'HomeController@prueba');

Route::get('/index', 'HomeController@index');

// Route::get('/login', 'HomeController@login');

Route::resource('/productos', 'ProductosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
