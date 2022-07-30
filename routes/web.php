<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/geograph', function() {
    return Inertia::render('View/Geograph/Geograph');
})->name('geograph');

Route::get('/news', function() {
    return Inertia::render('View/News/News');
})->name('news');

Route::get('/method', function() {
    return Inertia::render('View/Method/Method');
})->name('method');

Route::name('post.')->group(function() {
    Route::post('/register', [\App\Http\Controllers\Web\User\AuthController::class, 'register'])->name('register');
    Route::post('/login', [\App\Http\Controllers\Web\User\AuthController::class, 'login'])->name('login');
});

Route::name('app.')->prefix('app')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return Inertia::render('App/Welcome');
    })->name('home');
    Route::get('/setting', function () {
        return Inertia::render('App/Setting');
    })->name('setting');
    Route::get('/fire', [\App\Http\Controllers\Web\Fire\FireController::class, 'index'])->name('fire');
    Route::get('/geograph', [\App\Http\Controllers\Web\Geograph\GeographController::class, 'index'])->name('geograph');
    Route::get('/profile', [\App\Http\Controllers\Web\User\UserController::class, 'index'])->name('profile');
    Route::get('/edit', [\App\Http\Controllers\Web\User\UserController::class, 'edit'])->name('edit');
});
