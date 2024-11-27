<?php

use App\Http\Controllers\RegiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// })->name('login');

Route::get('/login', [UserController::class, 'index'])->name('login');

Route::post('/register', [UserController::class, 'store'])->name('register_personne');
// Route::get('/register', function () {
//     return view('register');
// })->name('register');

Route::get('/', [RegiController::class, 'regi'])->name('register');

// Route::get('/index', function () {
//     return view('index');
// });
