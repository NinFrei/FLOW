<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactController1;

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

Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');

Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');

Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');

Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');


Route::get('/contact/all', [ContactController::class,'allData'])->name('contact-data');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');




//Route::get('/messages', [MessageController::class, 'showAll']);

//Route::post('/create', [MessageController::class, 'create']);

//Route::get('/message/{id}', [MessageController::class, 'details']);

//Route::delete('/message/{id}', [MessageController::class, 'delete']);


