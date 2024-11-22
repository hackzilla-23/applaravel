<?php

use App\Http\Controllers\RegiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// })->name('login');

Route::get('/', [UserController::class, 'index'])->name('login');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

Route::get('/register', [RegiController::class, 'regi'])->name('register');

// Route::get('/index', function () {
//     return view('index');
// });
