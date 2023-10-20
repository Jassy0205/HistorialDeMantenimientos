<?php

use Illuminate\Http\Request;
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

//Route::get('/v1/prueba', [App\Http\Controllers\api\v1\ComputerController::class, 'list']);

//Ruta para el CRUD de usuario
Route::apiResource('/v1/users', App\Http\Controllers\api\v1\UserController::class);

Route::apiResource('/v1/computers', App\Http\Controllers\api\v1\ComputerController::class);
Route::apiResource('/v1/observations', App\Http\Controllers\api\v1\ObservationController::class);
Route::apiResource('/v1/categories', App\Http\Controllers\api\v1\CategoryController::class);