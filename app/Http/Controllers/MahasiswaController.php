<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data = Mahasiswa::all();
        return view('mahasiswa.mahasiswa', compact('data'));
    }

    public function create() {
        return view('mahasiswa.create');
    }

    public function store(Request $request) {
        $request->validate([
            'npm' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'nidn' => 'required',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function edit($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $request->validate([
            'npm' => 'required|unique:mahasiswas,npm,'.$id,
            'nama' => 'required',
            'nidn' => 'required',
        ]);

        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id) {
        Mahasiswa::findOrFail($id)->delete();
        return redirect()->route('mahasiswa.index');
    }

    public function show($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }
}