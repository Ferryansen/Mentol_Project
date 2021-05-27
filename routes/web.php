<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/admin','ProductController@index')->name('product.sets');

Route::prefix('/product')->group(function() {
    // Route::get('/create','ProductController@create')->name('product.create');
    Route::post('/create','ProductController@store')->name('product.store');

    Route::get('/{id}', 'ProductController@show')->name('product.show');

    Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::patch('/edit/{id}', 'ProductController@update')->name('product.update');

    Route::delete('/delete/{id}', 'ProductController@delete')->name('product.delete');
});