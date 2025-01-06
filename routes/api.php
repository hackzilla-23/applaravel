<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::get('/user-api', function (Request $request){
    // return view('');
    return response()->json([
        "success" =>"premier test",
        "data" => "test data",
    ]);
});
Route::get('/allusers',[UserController::class, "takenusers"]);
Route::post('/adduser', [UserController::class, "storeapi"]);
Route::delete('/deleteuser/{id}', [UserController::class, "deleteapi"]);
// Route::put('/updateuser/{id}', [UserController::class, "deleteapi"]);
Route::post('/loginapi', [UserController::class, "apilogin"]);
Route::post('/addproductapi', [ProductController::class, "storeapi"])->middleware("auth:sanctum");