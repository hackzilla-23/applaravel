<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/user-api', function (Request $request){
    return response()->json([
        'success' => 'premier test',
        'data' => 'test data',
        // 'roles' => $request->user('api')->roles,
    ]);
});
 Route::get('/allUsers', [UserController::class, 'takenusers']);