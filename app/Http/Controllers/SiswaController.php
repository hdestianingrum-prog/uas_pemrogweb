<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    // Menampilkan semua siswa
    public function index() {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    // Form tambah siswa
    public function create() {
        return view('siswa.create');
    }

    // Simpan siswa baru ke database
    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'kelas' => 'required'
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }

    // Form edit siswa
    public function edit(Siswa $siswa) {
        return view('siswa.edit', compact('siswa'));
    }

    // Update data siswa di database
    public function update(Request $request, Siswa $siswa) {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'kelas' => 'required'
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui!');
    }

    // Hapus siswa
    public function destroy(Siswa $siswa) {
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus!');
    }
}
