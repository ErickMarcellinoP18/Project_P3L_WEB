<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KaryawanController;
use App\Http\Controllers\Api\UserController;

Route::apiResource('user', UserController::class);
Route::post('/login', [UserController::class, 'authenticate']);

Route::apiResource('karyawan', KaryawanController::class);
Route::post('/loginAdmin', [KaryawanController::class, 'authenticate']);
