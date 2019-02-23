<?php


Route::get('/', function () {
    return view('welcome');
})->name('home');

//Ruta para el CRUD de Tipos de Productos
Route::resource('/admin/tiposproductos','admin\TiposproductosController');

	/*
	Route::get('/admin/tiposproductos','admin/TiposproductosController@index')->name('tiposproductos.index');
	Route::get('/admin/tiposproductos/create','admin/TiposproductosController@create')->name('tiposproductos.create');
	Route::post('/admin/tiposproductos','admin/TiposproductosController@store')->name('tiposproductos.store');
	Route::get('/admin/tiposproductos/{id}','admin/TiposproductosController@show');
	Route::get('/admin/tiposproductos/{id}/edit','admin/TiposproductosController@edit');
	Route::put('/admin/tiposproductos/{id}','admin/TiposproductosController@update');
	Route::delete('/admin/tiposproductos/{id}','admin/TiposproductosController@destroy');
	*/