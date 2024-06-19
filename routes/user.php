<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    //Super Admin
    Route::prefix('superAdmin')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('superadmin.index');
        Route::post('/add', [UserController::class, 'add'])->name('superadmin.add');
        Route::patch('/edit/{id}', [UserController::class, 'edit'])->name('superadmin.edit');
        Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('superadmin.delete');
    });

    //Admin or the LGU
    Route::get('admin/', [UserController::class, 'index'])->name('admin.index');
});

