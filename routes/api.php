<?php

use App\Http\Controllers\API\FireController;
use App\Http\Controllers\API\GeoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('fire', \App\Http\Controllers\Api\FireController::class);

Route::middleware('json.request')->group(function () {
    Route::post('/login', [\App\Http\Controllers\Api\User\AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function() {
        Route::get('/user', [\App\Http\Controllers\Api\User\UserController::class, 'index']);
        Route::get('/user/{user}', [\App\Http\Controllers\Api\User\UserController::class, 'show']);
        Route::resource('geograph', GeoController::class);
        Route::post('geograph/{id}', [GeoController::class, 'update']);
        Route::post('fire/{id}', [FireController::class, 'update']);
        Route::get('fire/{id}', [FireController::class, 'show']);
        // Route::resource('img_geograph', ImgGeoController::class);
        // Route::post('img_geograph/{id}', [ImgGeoController::class,'update']);
    });
});
