<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\GameSummaryController;
use App\Http\Controllers\UnityAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);


Route::post('/register', [UnityAuthController::class, 'register']);
Route::get('/test', function () {
    return response()->json(['message' => 'CORS OK']);
});


Route::post('/progreso', [App\Http\Controllers\Api\GameProgressController::class, 'store']);

Route::post('/resumen', [GameSummaryController::class, 'store']);
