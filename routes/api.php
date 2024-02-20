<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Public Routes
Route::get('/users',[UserController::class, 'index']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::post('/users',[UserController::class,'store']);
Route::put('/users/{id}',[UserController::class,'update']);
Route::delete('/users/{id}',[UserController::class,'destroy']);

// Protected Routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});