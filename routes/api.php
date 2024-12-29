<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/register', [AuthController::class, 'register']); // POST: Register a user
Route::post('/login', [AuthController::class, 'login']); // POST: Login
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum'); // POST: Logout (with auth)

Route::get('/users', [AuthController::class, 'index'])->middleware('auth:sanctum'); // GET: List users
Route::get('/users/{id}', [AuthController::class, 'show'])->middleware('auth:sanctum'); // GET: Get user by ID
Route::put('/users/{id}', [AuthController::class, 'update'])->middleware('auth:sanctum'); // PUT: Update user
Route::delete('/users/{id}', [AuthController::class, 'destroy'])->middleware('auth:sanctum'); // DELETE: Delete user

