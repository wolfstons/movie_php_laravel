<?php

use App\Http\Controllers\UserConroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserConroller::class, 'index']);
Route::get('/users/{user}', [UserConroller::class, 'show']);
Route::put('/users/{user}', [UserConroller::class, 'update']);
Route::post('/users', [UserConroller::class, 'store']);
Route::delete('/users/{user}', [UserConroller::class, 'destroy']);
