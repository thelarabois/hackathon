<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::post('/', [DashboardController::class, 'index'])->name('dashboard.index');
    });
});
