<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/user-api', function (){
    return response()->json([
        'success' => 'premier test',
        'data' => 'test data',
        // 'roles' => $request->user('api')->roles,
    ]);
});
Route::get('/allUsers', [UserController::class, 'takenusers']);
Route::post('/addUser', [UserController::class, 'storeapi']);
Route::delete('/deleteuser/{id}', [UserController::class, 'deleteapi']);
Route::post('/updateuser/{id}', [UserController::class, 'updateapi']);
Route::post('/loginapi', [UserController::class, 'apilogin']);
Route::post('/addproductapi', [ProductController::class, 'storeapi'])->middleware("auth:sanctum");
Route::post('/logout', [UserController::class, 'apilogout'])->middleware("auth:sanctum");