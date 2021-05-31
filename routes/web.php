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

Route::middleware('auth')->group(function() {
    Route::get('/member', 'MemberController@index')->name('member.index');
    
    Route::prefix('/order')->group(function() {
        Route::post('/checkout', 'memberController@store')->name('member.order');
    });


    Route::get('/cart', 'CartController@index')->name('cart.faktur');
    
    Route::prefix('/faktur')->group(function() {
        Route::post('/send', 'CartController@store')->name('cart.store');

        Route::delete('/delete/{id}', 'CartController@delete')->name('cart.delete');
    });


    Route::middleware('admin')->group(function() {
        Route::get('/admin','ProductController@index')->name('product.sets');
    });

    Route::prefix('/product')->group(function() {
        Route::post('/create','ProductController@store')->name('product.store');

        Route::get('/{id}', 'ProductController@show')->name('product.show');

        Route::patch('/edit/{id}', 'ProductController@update')->name('product.update');

        Route::delete('/delete/{id}', 'ProductController@delete')->name('product.delete');
    });
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
