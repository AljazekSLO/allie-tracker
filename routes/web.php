<?php

use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Route::view('/', 'dashboard')
//     ->middleware(['auth'])
//     ->name('dashboard');

Route::get('/', function() {
    return redirect()->route('visits');
})->name('dashboard');


Route::get('/visited', [VisitController::class, 'index'])
    ->middleware(['auth'])
    ->name('visits');

Route::get('/visit/create', [VisitController::class, 'store'])
    ->middleware(['auth'])
    ->name('create-visit');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';
