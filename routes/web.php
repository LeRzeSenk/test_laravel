<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);
Route::group(['middleware' => 'auth',
              'namespace' => 'Admin'],function (){
    Route::group(['middleware' => 'is.admin'],function (){
        Route::get('/orders', 'OrderController@index')->name('orders');
        Route::get('/home', 'OrderController@index')->name('home');
        Route::get('/orders/delete/{id}', 'OrderController@deleteOrder')->name('delete-order');
    });
});

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');

Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');


Route::get('/basket', 'BasketController@basket')->name('basket');
Route::get('/basket/order', 'BasketController@order')->name('order');
Route::post('/basket/order-confirm', 'BasketController@orderConfirm')->name('order-confirm');
Route::post('/basket/add/{id}', 'BasketController@add')->name('add-basket');
Route::post('/basket/remove/{id}', 'BasketController@remove')->name('remove-basket');


Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product}', 'MainController@product')->name('product');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('home');
