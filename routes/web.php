<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/{language}/{slug}', [PageController::class, 'show']);

Route::get('/{slug}', [PageController::class, 'show1']);
