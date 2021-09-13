<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\InventarisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/barang', [BarangController::class, 'index']);
Route::post('/add', [BarangController::class, 'add']);
Route::get('/inventaris', [InventarisController::class, 'index']);
Route::get('/tempat', [TempatController::class, 'index']);
Route::get('/mutas', [MutasiController::class, 'index']);
