<?php

use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('sales')->group(function () {
        // Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::post('/sale', [SalesController::class, 'post'])->name('sale.post');
    });
});
