<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('starter');
});
Route::get('/1', function () {
  return view('demo/file1');
});
Route::get('/2', function () {
  return view('demo/file2');
});
Route::get('/3', [DemoController::class, 'index']);

// Dosen Route
Route::get('/dosen', [DosenController::class, 'index'])->name('dosenList');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosenCreate');
Route::post('/dosen/create', [DosenController::class, 'store'])->name('dosenStore');

// Mahasiswa Route
Route::get('/mhs', [MahasiswaController::class, 'index'])->name('mahasiswaList');
Route::get('/mhs/create', [MahasiswaController::class, 'create'])->name('mhsCreate');
Route::post('/mhs/create', [MahasiswaController::class, 'store'])->name('mhsStore');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
