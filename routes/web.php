<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
})->name('home');

Route::get('/accounting', function () {
    return view('accounting');
})->name('accounting');