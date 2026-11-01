<?php

use Illuminate\Support\Facades\Route;

// Site routes
Route::prefix('')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::middleware(['auth'])->group(function () {
    // App routes
    Route::prefix('app')->group(function () {});

    // Admin routes
    Route::prefix('admin')->group(function () {});
});
