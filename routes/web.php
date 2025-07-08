<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman Profil
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Halaman Program Pesantren
Route::get('/program', function () {
    return view('program');
})->name('program');

// Halaman Galeri Pembangunan
Route::get('/galeri/pembangunan', function () {
    return view('galeri_pembangunan');
})->name('galeri.pembangunan');

// Halaman Galeri Pesantren
Route::get('/galeri/pesantren', function () {
    return view('galeri_pesantren');
})->name('galeri.pesantren');

// Tampilkan form login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login']);

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman admin (akses login dibatasi di controller)
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// Aksi Approve dan hapus Pendaftaran
Route::post('/admin/approve/{id}', [AdminController::class, 'approve'])->name('admin.approve');
Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

// Form Pendaftaran Santri
Route::controller(PendaftaranController::class)->group(function () {
    Route::get('/pendaftaran', 'create')->name('pendaftaran.form');
    Route::post('/pendaftaran', 'store')->name('pendaftaran.store');
});
