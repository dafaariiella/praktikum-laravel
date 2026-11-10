<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

// Dashboard
Route::get('/dashboard', function () {
    return view('surat-masuk.dashboard');
})->name('dashboard');

// Surat Masuk (P4: resource route CRUD)
Route::resource('surat-masuk', SuratMasukController::class)
    ->parameters(['surat-masuk' => 'id']);

// Surat Keluar (Latihan mandiri P4: resource route CRUD)
Route::resource('surat-keluar', SuratKeluarController::class)
    ->parameters(['surat-keluar' => 'id']);
