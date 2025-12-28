@extends('dashboard')

@section('content')
<h1>Daftar Siswa</h1>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<table style="width:100%; border-collapse: collapse; margin-bottom: 20px;">
    <tr style="background-color:#ff69b4; color:#fff;">
        <th>ID</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach($siswa as $s)
    <tr style="background-color:#fff0f6;">
        <td>{{ $s->id }}</td>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->umur }}</td>
        <td>{{ $s->kelas }}</td>
        <td>{{ $s->alamat }}</td>
        <td>
            <a href="{{ route('siswa.edit', $s->id) }}" style="background:#ffb6c1; color:white; padding:5px 10px; border-radius:5px; text-decoration:none;">Edit</a>
            <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Hapus data?')" style="background:#ff69b4; color:white; border:none; border-radius:5px; padding:5px 10px; cursor:pointer;">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<!-- Tombol di bawah tabel -->
<div style="margin-top:20px;">
    <a href="{{ route('siswa.create') }}" style="background:#ff69b4; color:white; padding:10px 20px; border-radius:10px; text-decoration:none; margin-right:10px;">Tambah Siswa</a>
    <a href="{{ route('dashboard') }}" style="background:#ffb6c1; color:white; padding:10px 20px; border-radius:10px; text-decoration:none;">Kembali ke Dashboard</a>
</div>
@endsection
