<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Api\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);