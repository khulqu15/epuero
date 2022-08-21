<?php

use App\Http\Controllers\API\GeoController;
use App\Http\Controllers\API\ImgGeoController;
use Illuminate\Http\Request;
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

Route::middleware('json.request')->group(function () {
    Route::post('/login', [\App\Http\Controllers\Api\User\AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function() {
        Route::get('/user', [\App\Http\Controllers\Api\User\UserController::class, 'index']);
        Route::get('/user/{user}', [\App\Http\Controllers\Api\User\UserController::class, 'show']);
        Route::resource('geograph', GeoController::class);
        Route::resource('img_geograph', ImgGeoController::class);
        Route::post('img_geograph/{id}', [ImgGeoController::class,'update']);
    });
});