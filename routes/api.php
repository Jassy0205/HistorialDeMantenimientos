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

Route::get('/v1/observations', [App\Http\Controllers\api\v1\ObservationController::class, 'list']);
Route::get('/v1/users', [App\Http\Controllers\api\v1\UserController::class, 'index']);

Route::apiResource('/v1/computers/{id}/observations', App\Http\Controllers\api\v1\ObservationController::class)->only([
    'index', 'show'
]);

Route::apiResource('/v1/computers', App\Http\Controllers\api\v1\ComputerController::class)->only([
    'index', 'show'
]);

Route::post('/v1/login', [App\Http\Controllers\api\v1\AuthController::class, 'login'])->name('api.login');
Route::post('/v1/registro', [App\Http\Controllers\api\v1\UserController::class, 'store'])->name('api.creation');


Route::middleware('auth:sanctum')->group(function () {
        //ruta para el CRUD de usuarios
        Route::singleton('/v1/profile', App\Http\Controllers\api\v1\UserController::class);

        Route::apiResource('/v1/categories', App\Http\Controllers\api\v1\CategoryController::class);
        Route::post('/v1/logout', [App\Http\Controllers\api\v1\AuthController::class, 'logout'])->name('api.logout');

        Route::apiResource('/v1/computers', App\Http\Controllers\api\v1\ComputerController::class)->except([
            'index', 'show'
        ]);

        Route::apiResource('/v1/computers/{id}/observations', App\Http\Controllers\api\v1\ObservationController::class)->except([
            'index', 'show', 'list'
        ]);
    }
); 
