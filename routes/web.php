<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Car Suvidha (Frontend Only)
|--------------------------------------------------------------------------
|
| Clean, interactive cab booking platform routes.
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/fleet', function () {
    return view('fleet');
})->name('fleet');

Route::get('/outstation', function () {
    return view('outstation');
})->name('outstation');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
