<?php

use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('siswa', 'siswa')
    ->middleware(['auth'])
    ->name('siswa');

Route::view('tambahkursus', 'tambah')
    ->middleware(['auth'])
    ->name('tambahkursus');

Route::get('tambahsiswa', [SiswaController::class, 'index'])
    ->middleware(['auth'])
    ->name('tambahsiswa');

Route::post('postsiswa', [SiswaController::class,'store'])
    ->middleware(['auth'])
    ->name('postsiswa');

    // Import Export Kursus
Route::post('import-excel', [ImportExportController::class,'import'])
    ->middleware(['auth'])
    ->name('import.excel');

    //Export PDF
Route::get('exportpdf', [ImportExportController::class,'exportPDF'])
    ->middleware(['auth'])
    ->name('export.pdf');
    
    Route::post('tambahkursus', [KursusController::class,'store'])
    ->middleware(['auth'])
    ->name('postkursus');
require __DIR__.'/auth.php';

// Tambah Kursus
// Tambah Siswa