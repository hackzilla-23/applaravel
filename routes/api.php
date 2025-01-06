<?php

<<<<<<< HEAD
use App\Http\Controllers\ProductController;
=======
use App\Http\Controllers\UserController;
>>>>>>> 2f28e5341aafa9d754f891cffb0caa96ff70473f
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

<<<<<<< HEAD
Route::get('/user-api', function (){
=======
Route::get('/user-api', function (Request $request) {
>>>>>>> 2f28e5341aafa9d754f891cffb0caa96ff70473f
    return response()->json([
        'success' => 'Test Successful',
        'data' => 'test data',
    ]);
});
<<<<<<< HEAD
Route::get('/allUsers', [UserController::class, 'takenusers']);
Route::post('/addUser', [UserController::class, 'storeapi']);
Route::delete('/deleteuser/{id}', [UserController::class, 'deleteapi']);
Route::post('/updateuser/{id}', [UserController::class, 'updateapi']);
Route::post('/loginapi', [UserController::class, 'apilogin']);
Route::post('/addproductapi', [ProductController::class, 'storeapi'])->middleware("auth:sanctum");
Route::post('/logout', [UserController::class, 'apilogout'])->middleware("auth:sanctum");
=======

Route::get('/allusers', [UserController::class, "takeUsers"]);
>>>>>>> 2f28e5341aafa9d754f891cffb0caa96ff70473f
