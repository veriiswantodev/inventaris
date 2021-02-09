<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\RuangController;

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

Route::get('/', function () {
    return view('dashboard');
});


// Route Inventaris
Route::get('/inventaris', [InventarisController::class, 'index']);
Route::post('/inventaris/addinventaris/', [InventarisController::class, 'add']);


// Route Jenis
Route::get('/jenis', [JenisController::class, 'index']);
Route::post('/jenis/addjenis', [JenisController::class, 'addjenis']);
Route::get('/jenis/{id}/edit', [JenisController::class, 'edit']);
Route::post('/jenis/{id}/update', [JenisController::class, 'update']);
Route::get('/jenis/{id}/delete', [JenisController::class, 'deletejenis']);

// Route Ruang
Route::get('/ruang', [RuangController::class, 'index']);
Route::post('/ruang/addruang', [RuangController::class, 'addruang']);
Route::get('/ruang/{id}/edit', [RuangController::class, 'edit']);
Route::post('/ruang/{id}/update', [RuangController::class, 'update']);
Route::get('/ruang/{id}/delete', [RuangController::class, 'deleteruang']);