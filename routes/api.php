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
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/users/admin', [UserController::class, 'storeUserAdmin']);
Route::post('/users/entrepreneur', [UserController::class, 'storeUserEntrepreneur']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::put('/users/password/{user}', [UserController::class, 'updatePassword']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

// Entrepreneurs
Route::get('/entrepreneurs', [EntrepreneurController::class, 'index']);
Route::get('/entrepreneurs/{entrepreneur}', [EntrepreneurController::class, 'show']);
Route::put('/entrepreneurs/{entrepreneur}', [EntrepreneurController::class, 'update']);

