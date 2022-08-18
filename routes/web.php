<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/modetrends', function () {
    return view('modetrends');
})->name('modetrends');

Route::get('/beauty', function () {
    return view('beauty');
})->name('beauty');

Route::get('/empowerment', function () {
    return view('empowerment');
})->name('empowerment');

Route::get('/lifestyle', function () {
    return view('lifestyle');
})->name('lifestyle');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/aboutme', function () {
    return view('aboutme');
})->name('aboutme');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', function () {
    return "Danke!";
});

Route::post('/contact/submit', [ContactController::class, 'submit'])->name ('contact-form');





Route::get('/messages', [MessageController::class, 'showAll']);

Route::post('/create', [MessageController::class, 'create']);

Route::get('/message/{id}', [MessageController::class, 'details']);

Route::delete('/message/{id}', [MessageController::class, 'delete']);


