<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Livewire\Mahasiswa\Create;
use App\Livewire\Mahasiswa\Index;
use App\Livewire\Mahasiswa\Edit;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


// =====================
// ROUTE BAWAAN BREEZE
// =====================
Route::middleware('auth')->group(function () {

    Route::get('/settings/profile', [ProfileController::class, 'edit'])
        ->name('settings.profile');

    Route::patch('/settings/profile', [ProfileController::class, 'update'])
        ->name('settings.profile.update');

    Route::delete('/settings/profile', [ProfileController::class, 'destroy'])
        ->name('settings.profile.destroy');
});


// =====================
// ROUTE MAHASISWA
// =====================
Route::get('/mahasiswa', Index::class)->middleware('auth');
Route::get('/mahasiswa/create', Create::class)->middleware('auth');
Route::get('/mahasiswa/edit/{id}', Edit::class)->middleware('auth');


require __DIR__.'/auth.php';