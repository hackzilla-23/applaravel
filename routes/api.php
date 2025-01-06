<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/user-api', function (Request $request) {
    return response()->json([
        'success' => 'Test Successful',
        'data' => 'test data',
    ]);
});
Route::get('/allUsers', [UserController::class, 'takenusers']);
Route::post('/addUser', [UserController::class, 'storeapi']);
Route::delete('/deleteuser/{id}', [UserController::class, 'deleteapi']);
Route::post('/updateuser/{id}', [UserController::class, 'updateapi']);
Route::post('/loginapi', [UserController::class, 'apilogin']);
Route::post('/addproductapi', [ProductController::class, 'storeapi'])->middleware("auth:sanctum");
Route::post('/logout', [UserController::class, 'apilogout'])->middleware("auth:sanctum");


Route::get('/allusers', [UserController::class, "takeUsers"]);
