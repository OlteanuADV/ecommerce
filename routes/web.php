<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\APIController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'login'])->middleware('guest');

Route::prefix('/api')->group(function() {
    Route::get("/", [APIController::class, 'index']);
    
    Route::prefix('/login')->group( function() {
        Route::get('/google/{token}', [APIController::class, 'checkLoginGoogle'])->middleware('guest');
        Route::get('/facebook/{token}', [APIController::class, 'checkLoginFacebook'])->middleware('guest');
    });
});