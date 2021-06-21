<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('login','App\Http\Controllers\UserController@display');

Route::get('logout','App\Http\Controllers\UserController@logout');

Route::post('login','App\Http\Controllers\UserController@login');

Route::get('/','App\Http\Controllers\ProductController@index');

Route::get('detail/{id}','App\Http\Controllers\ProductController@detail');

Route::get('search','App\Http\Controllers\ProductController@search');

Route::post('addtocart','App\Http\Controllers\ProductController@addtocart');

Route::get('cart','App\Http\Controllers\ProductController@cart');

Route::get('remove/{id}','App\Http\Controllers\ProductController@remove');

Route::get('order','App\Http\Controllers\ProductController@order');

Route::post('ordersuccess','App\Http\Controllers\ProductController@ordersuccess');

Route::get('orderplaced','App\Http\Controllers\ProductController@orderplaced');

Route::get('registerl','App\Http\Controllers\UserController@registerl');

Route::post('register','App\Http\Controllers\UserController@register');

/*----------- Routes for clicked icons ------------------*/

Route::get('mobile','App\Http\Controllers\ProductController@mobile');

Route::get('fridge','App\Http\Controllers\ProductController@fridge');

Route::get('tv','App\Http\Controllers\ProductController@tv');

Route::get('wm','App\Http\Controllers\ProductController@wm');

Route::get('laptop','App\Http\Controllers\ProductController@laptop');

Route::get('ac','App\Http\Controllers\ProductController@ac');

Route::get('m','App\Http\Controllers\ProductController@m');
