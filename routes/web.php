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

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "<h1>Produto: {$idProduct}</h1>";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "<h1>Posts da categoria: {$flag}</h1>";
});

Route::get('/categorias/{flag}', function ($flag) {
    return "<h1>Produtos da categoria: {$flag}</h1>";
});


Route::match(['get', 'post'],'/match', function () {
    return "<h1>Match</h1>";
});

Route::any('/any', function () {
    return "<h1>Any</h1>";
});

Route::get('/empresa', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
    
});
