<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');


Route::get('/basket', 'BasketController@basket')->name('basket');
Route::get('/basket/order', 'BasketController@order')->name('order');
Route::post('/basket/order-confirm', 'BasketController@orderConfirm')->name('order-confirm');
Route::post('/basket/add/{id}', 'BasketController@add')->name('add-basket');
Route::post('/basket/remove/{id}', 'BasketController@remove')->name('remove-basket');


Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product}', 'MainController@product')->name('product');
