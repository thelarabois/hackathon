<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require_once __DIR__.'/user.php';
require_once __DIR__. '/dashboard.php';
require_once __DIR__. '/inventory.php';
require_once __DIR__. '/transaction.php';
require_once __DIR__. '/rewards.php';
require_once __DIR__. '/sales.php';
require_once __DIR__. '/sell.php';
