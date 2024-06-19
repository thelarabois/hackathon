<?php

use App\Http\Controllers\SellController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('sell')->group(function () {
        Route::post('/', [SellController::class, 'post'])->name('sell.post');
    });
});

