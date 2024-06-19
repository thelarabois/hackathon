<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::post('/add', [UserController::class, 'add'])->name('user.add');
        Route::patch('/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::delete('/delete', [UserController::class, 'delete'])->name('user.delete');
    });
});