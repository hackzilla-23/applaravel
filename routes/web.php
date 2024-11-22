<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/' , [UserController::class, 'index'])->name('login');
Route::get('/', [UserController::class, 'index'])->name('login');
// Route::get('/', function () {
//     return view('login');
// })->name('login');


Route::get('/register',[RegisterController::class,'register'])->name('registermmmm');
// route::get('/register', function() {
    //     return view('register');
    // })->name('registermmmm');
route::post('/register' , [UserController::class, 'store'])->name('register_personne');