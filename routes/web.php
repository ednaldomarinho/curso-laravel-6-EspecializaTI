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
