<?php

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

Route::get('/', 'ProductController@home');

Route::get('/faq', function() {
	return view('faq');
});

Route::get('/about', function() {
	return view('about');
});

Route::resource('products', 'ProductController');


Route::get('products/categories/{category}', 'CategoryController@index');
