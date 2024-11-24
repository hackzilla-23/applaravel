<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// })->name('login');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'regi'])->name('register');

// Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/register', [UserController::class, 'store'])->name('register_personne');

Route::get('/error/404', [UserController::class, 'error'])->name('404');

Route::get('/password/mot_de_passe_oublie', [UserController::class, 'newpass'])->name('MDPo');

Route::post('/password/mot_de_passe_oublie', [UserController::class, 'reset'])->name('changePass');

Route::post('/', [UserController::class, 'logs'])->name('login_personne');
