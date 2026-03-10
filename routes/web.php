<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::prefix('admin')->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('transaction', TransactionController::class);
    Route::get('transaction-report', [TransactionController::class, 'report'])->name('transaction.report');
})->name('user');


