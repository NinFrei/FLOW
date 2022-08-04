<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/modetrends', function () {
    return view('modetrends');
});

Route::get('/beaty', function () {
    return view('beaty');
});

Route::get('/empowerment', function () {
    return view('empowerment');
});

Route::get('/lifestyle', function () {
    return view('lifestyle');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

