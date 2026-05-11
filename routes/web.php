<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    return "Hello, World!";
});

Route::get('/dosen', function () {
    return view('Dosen.index');
});

