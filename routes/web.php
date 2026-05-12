<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    return "Hello, World!";
});

Route::get('/dosen', function () {
    return view( 'Dosen.index');
});


Route::resource('jurusan', JurusanController::class);


Route::resource('kelas', KelasController::class);

Route::resource('mahasiswa', MahasiswaController::class);
