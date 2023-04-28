<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\ProductsController@index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductsController@show')->name('products.show');
Route::get('/admin', 'App\Http\Controllers\ProductsController@listing')->name('products-listing');
Route::get('/admin/{id}/edit', 'App\Http\Controllers\ProductsController@edit')->name('products.edit');
Route::put('/products/{id}', 'App\Http\Controllers\ProductsController@update')->name('products.update');
Route::get('/admin/edit', 'App\Http\Controllers\ProductsController@create')->name('products.create');
Route::post('/products', 'App\Http\Controllers\ProductsController@store')->name('products.store');