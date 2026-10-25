<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor', [LaporBanjirController::class, 'index'])->name('laporan.index');
Route::get('/lapor/tambah', [LaporBanjirController::class, 'create'])->name('laporan.create');
Route::post('/lapor', [LaporBanjirController::class, 'store'])->name('laporan.store');