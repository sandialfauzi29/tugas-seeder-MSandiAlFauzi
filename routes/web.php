<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Mahasiswa\Create;


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/mahasiswa/create', Create::class)->middleware('auth');

require __DIR__.'/auth.php';
