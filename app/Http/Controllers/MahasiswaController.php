<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; // WAJIB ADA
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Ambil data
        $data = Mahasiswa::all();

        // Kirim ke view
        return view('mahasiswa', compact('data'));
    }
}