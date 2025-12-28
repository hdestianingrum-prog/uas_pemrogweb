<!-- resources/views/siswa/edit.blade.php -->

@extends('dashboard')

@section('content')
<h2>Edit Siswa</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST" style="background:#ffe6f0; padding:20px; border-radius:15px; display:inline-block;">
    @csrf
    @method('PUT')

    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ $siswa->nama }}" required><br><br>

    <label>Umur:</label><br>
    <input type="number" name="umur" value="{{ $siswa->umur }}" required><br><br>

    <label>Kelas:</label><br>
    <input type="text" name="kelas" value="{{ $siswa->kelas }}" required><br><br>

    <label>Alamat:</label><br>
    <textarea name="alamat">{{ $siswa->alamat }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

<br><br>
<a href="{{ route('siswa.index') }}">Kembali ke Daftar Siswa</a>
@endsection
