<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return 'Halaman Home Bisa';
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);