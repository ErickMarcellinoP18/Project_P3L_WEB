<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KaryawanController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PresensiController;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\HampersController;

Route::apiResource('user', UserController::class);
Route::post('/login', [UserController::class, 'authenticate']);

Route::apiResource('karyawan', KaryawanController::class);
Route::post('/loginAdmin', [KaryawanController::class, 'authenticate']);

Route::apiResource('presensi', PresensiController::class);

Route::apiResource('produk', ProdukController::class);
Route::get('produkShow/{id}', [ProdukController::class, 'showByUser']);

Route::apiResource('/hampers', HampersController::class);
