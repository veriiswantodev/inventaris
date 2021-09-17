<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\InventarisController;



// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route Barang
Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang/add', [BarangController::class, 'add']);
Route::match(['get', 'post'], '/barang/edit/{id}/', [BarangController::class, 'edit']);
Route::get('/barang/{id}/delete', [BarangController::class, 'delete']);

// Route Inventaris
Route::get('/inventaris', [InventarisController::class, 'index']);
Route::post('/inventaris/add', [InventarisController::class, 'add']);
// Route::match(['get', 'post'], '/edit/{id}', [InventarisController::class, 'edit']);

// Route Tempat
Route::get('/tempat', [TempatController::class, 'index']);
Route::post('/tempat/add', [TempatController::class, 'add']);
Route::match(['get', 'post'], '/tempat/edit/{id}', [TempatController::class, 'edit']);
Route::get('/tempat/{id}/delete', [TempatController::class, 'delete']);
