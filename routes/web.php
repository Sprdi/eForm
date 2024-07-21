<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//route resource for pemohons
Route::resource('/pemohons', \App\Http\Controllers\PemohonController::class)->middleware(['auth', 'verified']);
Route::get('/export-pemohons', [\App\Http\Controllers\PemohonController::class, 'export'])->name('pemohons.export');
Route::get('/export-pemohons-pdf', [\App\Http\Controllers\PemohonController::class, 'exportPdf'])->name('pemohons.exportPdf');
require __DIR__.'/auth.php';
