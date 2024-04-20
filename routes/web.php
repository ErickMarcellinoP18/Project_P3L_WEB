<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin/dashboard');
});

Route::get('/loginAdmin', function () {
    return view('admin/loginAdminPage');
});

Route::get('/login', function () {
    return view('loginPage');
});
