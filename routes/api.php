<?php

use App\Http\Controllers\Api\AdController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

Route::apiResource('ads', AdController::class)->only(['index', 'show']);

Route::middleware('jwt.auth')->group(function ()
{
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    Route::apiResource('ads', AdController::class)->except(['index', 'show']);
});

Route::apiResource('categories', CategoryController::class)->only(['index', 'show']);
Route::apiResource('cities', CityController::class)->only(['index', 'show']);

Route::middleware('jwt.auth')->group(function()
{
    Route::get('/profile', [ProfileController::class, 'show']);
    Route::post('/profile', [ProfileController::class, 'update']);
    Route::get('/profile/my_ads', [ProfileController::class, 'myAds']);
    Route::delete('/profile', [ProfileController::class, 'destroy']);
});

