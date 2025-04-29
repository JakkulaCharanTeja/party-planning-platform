<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\ThemeController;

Route::get('/', function () {
    return view('welcome');
});

// Resource routes
Route::resource('vendors', VendorController::class);
Route::resource('guests', GuestController::class);
Route::resource('budgets', BudgetController::class);
Route::resource('timelines', TimelineController::class);

// Theme routes
Route::get('/themes', [ThemeController::class, 'index'])->name('themes.index'); // Theme index
Route::get('/switch-theme/{theme}', [ThemeController::class, 'switchTheme'])->name('switchTheme'); // Switch theme
Route::get('/themes/create', [ThemeController::class, 'create'])->name('themes.create'); // Custom theme creation
