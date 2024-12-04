<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsPersonne;
use Illuminate\Support\Facades\Route;

//pour regrouper les elements
Route::prefix('/blog')->name('blog')->controller(UserController::class)->group(function() {
    // Route::get('/' , [UserController::class, 'index'])->name('login');
    Route::get('/' , 'index')->name('login');
});

// Route::get('/' , [UserController::class, 'index'])->name('login');
// Route::get('/', [UserController::class, 'login'])->name('login');
Route::get('/', [UserController::class, 'product_dashboard'])->name('login');
// Route::get('/', function () {
//     return view('login');
// })->name('login');

// Route::get('/register',[RegisterController::class,'register'])->name('registermmmm');
Route::get('/register', [RegisterController::class, 'register'])->name('register');

// route::get('/register', function() {
//     return view('register');
// })->name('registermmmm');

Route::post('/register', [UserController::class, 'store'])->name('register_personne');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'regi'])->name('register');

Route::get('/dashboard', [UserController::class, 'main_dashboard'])->name('dashboard');

Route::get('/dashboard/product', [UserController::class, 'product_dashboard'])->name('main_dash');

Route::get('/product/edit', [UserController::class, 'edit'])->name('edit');

Route::get('/product/new_product', [UserController::class, 'add'])->name('add_product');

// Route::middleware('auth')->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::post('/register', [UserController::class, 'store'])->name('register_personne');

Route::get('/error/404', [UserController::class, 'error'])->name('404');

Route::get('/password/mot_de_passe_oublie', [UserController::class, 'newpass'])->name('MDPo');

Route::post('/password/mot_de_passe_oublie', [UserController::class, 'reset'])->name('changePass');

Route::post('/', [UserController::class, 'logs'])->name('login_personne');

Route::get('/disconnect', [UserController::class, 'logout'])->name('logout_personne');

/*Quand tu utilises la class*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware(IsAdmin::class);

/*Quand tu utilises la class et le parametre*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware(IsAdmin::class.'admin');

/*Quand tu utilises les alias*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware('is_admin');

/*Quand tu utilises la alias et le parametre*/
Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware('is_admin:admin');

/*Quand tu utilises les groups avec les class*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware([IsAdmin::class , IsPersonne::class]);

/*Quand tu utilises les group avec les appendToGroup ou prependToGRoup*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware('group_admin');


Route::post('/delete_product', [ProductController::class, 'delete_product'])->name('delete_product');

Route::post('/edit_Product', [ProductController::class, 'update_product'])->name('edit_Product');

Route::get('/email', function(){
    return view('email');
})->name('email');

