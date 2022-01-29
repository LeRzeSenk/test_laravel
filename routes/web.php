<?php

use Illuminate\Support\Facades\Route;


Route::get('/','MainController@index')->name('index');
Route::get('/categories','MainController@categories')->name('categories');
Route::get('/basket','MainController@basket')->name('basket');
Route::get('/order','MainController@order')->name('order');
Route::get('/product','MainController@product')->name('product');
