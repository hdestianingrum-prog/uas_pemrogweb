<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index() {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create() {
        return view('siswa.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'kelas' => 'required'
        ]);
        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }

    public function edit(Siswa $siswa) {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa) {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'kelas' => 'required'
        ]);
        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui!');
    }

    public function destroy(Siswa $siswa) {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus!');
    }
}
