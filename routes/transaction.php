<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('transaction')->group(function () {
        Route::get('/', [TransactionController::class, 'index'])->name('transaction.index');
        Route::post('/buy', [TransactionController::class, 'buy'])->name('transaction.buy');
        // Route::post('/login', [UserController::class, 'post'])->name('user.post');
    });
});

