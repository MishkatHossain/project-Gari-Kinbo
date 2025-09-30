<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ShowCarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::controller(CarController::class)->group(function(){
//     Route::get('/car', 'index');
//     Route::get('/my-cars', 'myCars');
// });


Route::get('/car', [ShowCarController::class]);

// Route::get('/car', [CarController::class, 'index']);

Route::get('/car', [ShowCarController::class]);

Route::fallback(function () {
    return "Nah! Just an Error";
});
