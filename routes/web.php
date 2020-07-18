<?php

use App\Http\Controllers\ProductController;

Route::any('products/search', 'ProductController@search')->name('products.search');

Route::resource('products', 'ProductController');//->middleware('auth');


/*
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::post('products', 'ProductController@store')->name('products.store');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}/show', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');
*/

Route::get('/login', function(){
    return '<h2>Tela de Login</h2>';
})->name('login');

Route::get('/', function(){
    return view('welcome');
})->name('welcome');