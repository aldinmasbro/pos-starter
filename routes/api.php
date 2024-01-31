<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// pos login
Route::post('login', [\App\Http\Controllers\Api\AuthConttroller::class, 'login']);

// pos logout
Route::post('logout', [\App\Http\Controllers\Api\AuthConttroller::class,'logout'])->middleware('auth:sanctum');

// api resource product
Route::apiResource('products', \App\Http\Controllers\Api\ProductConttroller::class)->middleware('auth:sanctum');
