<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
{
    AuthController,
    DashboardController,
    BarangController,
    TempatController,
    KategoriController
};

Route::get('/', function () {
    return redirect('/login');
});

// Route Login & Logout
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Route Barang
Route::resource('/barang', BarangController::class);
Route::get('/barang/data', [BarangController::class, 'data'])->name('barang.data');
Route::resource('/barang', BarangController::class);


// Route Tempat
Route::get('/tempat', [TempatController::class, 'index'])->name('tempat.index');
Route::get('/tempat/data', [TempatController::class, 'data'])->name('tempat.data');
Route::resource('/tempat', TempatController::class);

// Route Kategori
Route::get('/kategori/data', [KategoriController::class, 'data'])->name('kategori.data');
Route::resource('/kategori', KategoriController::class);