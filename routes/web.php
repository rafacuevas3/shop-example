<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('product/add/{code}/{quantity?}', 'CartController@add')->name('product.add');
Route::get('product/details/{code}', 'CartController@product_details')->name('product.details');
Route::get('product/not-found', 'CartController@product_not_found_exception')->name('product.not-found');

Route::get('cart/details', 'CartController@details')->name('cart.details');
Route::get('cart/trash', 'CartController@trash')->name('cart.trash');
Route::get('cart/remove/{id}', 'CartController@remove')->name('cart.remove');