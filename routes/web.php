<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {

//     echo "hi";
//     //return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
