<?php

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

Route::get('/allusers', [UserController::class, "takeUsers"]);
