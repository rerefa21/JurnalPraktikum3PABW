<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor', [LaporBanjirController::class, 'create'])->name('lapor.create');

Route::post('/lapor', [LaporBanjirController::class, 'store'])->name('lapor.store');

Route::get('/laporan', [LaporBanjirController::class, 'index'])->name('lapor.index');