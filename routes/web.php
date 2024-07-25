<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/welcome', [WelcomeController::class,'welcome'])->name('welcome'); // Using Controller [Controller::class, 'function'] the ->name('name') is to set name?