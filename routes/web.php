<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotulensiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiaranController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect('login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(SiaranController::class)->group(function() {
        Route::get('/siaran', 'index')->name('siaran.index');
        Route::get('/siaran/tambah', 'create')->name('siaran.create');
        Route::post('/siaran/tambah', 'store')->name('siaran.store');
        Route::get('/siaran/ubah/{kode_siaran}', 'edit')->name('siaran.edit');
        Route::post('/siaran/ubah/{kode_siaran}', 'update')->name('siaran.update');
        Route::get('/siaran/hapus/{kode_siaran}', 'destroy')->name('siaran.destroy');
    });

    Route::controller(ArsipController::class)->group(function() {
        Route::get('/arsip', 'index')->name('arsip.index');
        Route::get('/arsip/tambah', 'create')->name('arsip.create');
        Route::post('/arsip/tambah', 'store')->name('arsip.store');
        Route::get('/arsip/ubah/{id}', 'edit')->name('arsip.edit');
        Route::post('/arsip/ubah/{id}', 'update')->name('arsip.update');
        Route::get('/arsip/hapus/{id}', 'destroy')->name('arsip.destroy');
    });

    Route::controller(NotulensiController::class)->group(function() {
        Route::get('/notulensi', 'index')->name('notulensi.index');
        Route::get('/notulensi/tambah', 'create')->name('notulensi.create');
        Route::post('/notulensi/tambah', 'store')->name('notulensi.store');
        Route::get('/notulensi/ubah/{id}', 'edit')->name('notulensi.edit');
        Route::post('/notulensi/ubah/{id}', 'update')->name('notulensi.update');
        Route::get('/notulensi/hapus/{id}', 'destroy')->name('notulensi.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
