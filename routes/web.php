<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\SpeechController;


Route::get('/', [DashboardController::class, 'index']);
Route::redirect('/home', url('/'));
Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::prefix('/api')->group(function() {
    Route::get("/", [APIController::class, 'index']);
    Route::get('/storage/{any}', [APIController::class, 'storage'])->where('any', '^(?!api).*$');
    Route::prefix('/login')->group( function() {
        Route::get('/google/{token}', [APIController::class, 'checkLoginGoogle'])->middleware('guest');
        Route::get('/facebook/{token}', [APIController::class, 'checkLoginFacebook'])->middleware('guest');
    });
    Route::prefix('/speech')->group(function() {
        Route::post('/search', [SpeechController::class, 'search']);
    });
});