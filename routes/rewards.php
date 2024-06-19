<?php

use App\Http\Controllers\RewardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('rewards')->group(function () {
        Route::get('/', [RewardController::class, 'index'])->name('rewards.index');
        // Route::post('/login', [UserController::class, 'post'])->name('user.post');
    });
});

