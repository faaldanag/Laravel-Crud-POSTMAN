<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('Productos','ProductosController@index')->name('Productos.index');
Route::get('Productos/{id}','ProductosController@show')->name('Productos.show');
Route::post('Productos','ProductosController@store')->name('Productos.store');
Route::put('Productos/{id}','ProductosController@update')->name('Productos.update');
Route::delete('Productos/{id}','ProductosController@destroy')->name('Productos.destroy');


Route::get('Tiendas','TiendasController@index')->name('Tiendas.index');
Route::get('Tiendas/{id}','TiendasController@show')->name('Tiendas.show');
Route::post('Tiendas','TiendasController@store')->name('Tiendas.store');
Route::put('Tiendas/{id}','TiendasController@update')->name('Tiendas.update');
Route::delete('Tiendas/{id}','TiendasController@destroy')->name('Tiendas.destroy');




