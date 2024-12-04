<?php

use App\Http\Controllers\RegiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/' , [UserController::class, 'index'])->name('login');
Route::get('/', [UserController::class, 'login'])->name('login');
// Route::get('/', function () {
//     return view('login');
// })->name('login');

// Route::get('/register',[RegisterController::class,'register'])->name('registermmmm');
Route::get('/register', [UserController::class, 'regi'])->name('register');
// route::get('/register', function() {
//     return view('register');
// })->name('registermmmm');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

// Route::get('/register',[RegisterController::class,'register'])->name('registermmmm');

// route::get('/register', function() {
//     return view('register');
// })->name('registermmmm');
Route::post('/register', [UserController::class, 'store'])->name('register_personne');

Route::post('/login', [UserController::class, 'logs'])->name('login_personne');

Route::get('/password',[UserController::class,'newpass'])->name('MDPo');
// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/', [RegiController::class, 'regi'])->name('register');

// Route::get('/index', function () {
//     return view('index');
// });
