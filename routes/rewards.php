<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('rewards')->group(function () {
        // Route::get('/', [UserController::class, 'index'])->name('user.index');
        // Route::post('/login', [UserController::class, 'post'])->name('user.post');
    });
});

