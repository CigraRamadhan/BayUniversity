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

use App\Http\Controllers\JurusanController;

Route::resource('jurusan', JurusanController::class);

use App\Http\Controllers\KelasController;

Route::resource('kelas', KelasController::class);

use App\Http\Controllers\MahasiswaController;
Route::resource('mahasiswa', MahasiswaController::class);
