<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
})->name('home');

Route::get('/accounting', function () {
    return view('accounting');
})->name('accounting');

Route::get('/hr', function () {
    return view('hr');
})->name('hr');

Route::get('/inventory', function () {
    return view('inventory');
})->name('inventory');

Route::get('/customer', function () {
    return view('customer');
})->name('customer');

Route::get('/task', function () {
    return view('task');
})->name('task');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/payroll', function () {
    return view('payroll');
})->name('payroll');
