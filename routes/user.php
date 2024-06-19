<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('user')->group(function () {
        Route::post('/login', [UserController::class, 'post'])->name('user.post');
    });
});

