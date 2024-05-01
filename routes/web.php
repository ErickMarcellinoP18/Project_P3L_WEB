<?php

use App\Http\Controllers\PenitipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HampersController;
use App\Http\Controllers\PembelianBahanBakuController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PengeluaranLainController;


Route::get('/', function () {
    return view('admin/dashboardPage');
});

//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

//Logout
Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');
Route::get('home ', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin/dashboardPage');
});

Route::get('/loginAdmin', function () {
    return view('admin/loginAdminPage');
});

Route::get('/produk/createTitipan', 'App\Http\Controllers\ProdukController@createTitipan')->name('produk.createTitipan');
Route::resource('/produk', ProdukController::class);
Route::resource('/hampers', HampersController::class);
Route::resource('/beliBahan', PembelianBahanBakuController::class);
Route:: resource('/bahan_baku', BahanBakuController::class);
Route::resource('/customer', CustomerController::class);
Route::resource('/penitip',PenitipController::class);
Route::resource('/pengeluaran_lain', PengeluaranLainController::class);
