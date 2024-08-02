<?php

use App\Http\Controllers\NoteController;
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
// on this case                    ^^^^^   -> [WelcomeController::class,'welcome'] acts as a function () {return view}

// made a route for every method of NoteController
// Route::get('/note', [NoteController::class, 'index'])->name('note.index');
// Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
// Route::post('/note', [NoteController::class,'store'])->name('note.store');
// Route::get('/note/{id}', [NoteController::class,'show'])->name('note.show'); // takes {id} an id placed in url
// Route::get('/note/{id}/edit', [NoteController::class,'edit'])->name('note.edit');
// Route::put('/note/{id}', [NoteController::class,'update'])->name('note.update'); // can also add constraints like ->where($id=2)
// Route::delete('/note/{id}', [NoteController::class,'destroy'])->name('note.destroy');

# All 7 of those can be made in 1 line

Route::resource('note', NoteController::class);