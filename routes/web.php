<?php

use App\Http\Controllers\MahasiswaController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('mahasiswa/{mahasiswa}/delete', [MahasiswaController::class, 'confirmDelete'])->name('mahasiswa.confirmDelete');