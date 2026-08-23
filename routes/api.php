<?php

use App\Http\Controllers\EntrepreneurController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Users
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::put('/users/password/{user}', [UserController::class, 'updatePassword']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

// Entrepreneurs
Route::get('/entrepreneurs', [EntrepreneurController::class, 'index']);
Route::post('/entrepreneurs', [EntrepreneurController::class, 'store']);
Route::get('/entrepreneurs/{entrepreneur}', [EntrepreneurController::class, 'show']);
Route::put('/entrepreneurs/{entrepreneur}', [EntrepreneurController::class, 'update']);
// Route::delete('/entrepreneurs/{entrepreneur}', [EntrepreneurController::class, 'destroy']); 