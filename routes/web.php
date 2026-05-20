<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Mahasiswa\Create;
use App\Livewire\Mahasiswa\Index;
use App\Livewire\Mahasiswa\Edit;

Route::view('/', 'welcome');

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


// =====================
// ROUTE SETTINGS
// =====================

Route::view('/settings/profile', 'profile')
    ->middleware(['auth'])
    ->name('settings.profile');

Route::view('/settings/password', 'profile')
    ->middleware(['auth'])
    ->name('settings.password');

Route::view('/settings/appearance', 'profile')
    ->middleware(['auth'])
    ->name('settings.appearance');


// =====================
// ROUTE MAHASISWA
// =====================

Route::middleware(['auth'])->group(function () {

    Route::get('/mahasiswa', Index::class)
        ->name('mahasiswa.index');

    Route::get('/mahasiswa/create', Create::class)
        ->name('mahasiswa.create');

    Route::get('/mahasiswa/edit/{id}', Edit::class)
        ->name('mahasiswa.edit');
});

require __DIR__.'/auth.php';