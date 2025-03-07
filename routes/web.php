<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/accounting', function () {
    return view('accounting');
})->name('accounting');