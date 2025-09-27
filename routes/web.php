<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/about', 'about');


Route::get('/product/{category}', function(string $category) {
    return "Current Category: $category";
})->whereAlpha('category');



Route::get('user/{id}', function (int $id){
    return "Working";
})->whereNumber('id', '{10,20}');
