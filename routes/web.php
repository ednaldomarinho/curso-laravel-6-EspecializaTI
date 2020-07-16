<?php

Route::get('redirect3', function () {
    return redirect()->route('url.name');
});

Route::get('/nome-url', function(){
    return '<h2>Hey Hey Hey</h2>';
})->name('url.name');

Route::view('/view', 'welcome');

// Route::get('/view', function () {
//     return view('welcome');
// });

Route::redirect('/redirect1', 'redirect2');

Route::get('redirect2', function () {
     return "<h1>Redirect 2</h1>";
 });

// Route::get('redirect1', function () {
//     return redirect('/redirect2');
// });

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
