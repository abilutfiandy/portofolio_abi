<?php

use App\Http\Controllers\FrontControler;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontController::class, 'index']);
