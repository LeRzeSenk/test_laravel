<?php

use Illuminate\Support\Facades\Route;


Route::get('/','MainController@index')->name('index');
Route::get('/categories','MainController@categories')->name('categories');
