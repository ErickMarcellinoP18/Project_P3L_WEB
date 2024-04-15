<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('adminPage');
});

Route::get('/login', function () {
    return view('loginPage');
});

