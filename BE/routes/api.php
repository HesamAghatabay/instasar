<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::resource('/register', UserController::class);
Route::middleware(['auth.api'])->resource('/posts', PostController::class);


