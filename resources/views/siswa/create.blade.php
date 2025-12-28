@extends('dashboard')

@section('content')
<div style="max-width:600px; margin:20px auto; padding:30px; background:#fff0f6; border-radius:20px; box-shadow: 0 8px 20px rgba(255, 182, 193, 0.4);">
    <h2 style="color:#ff69b4; text-align:center; margin-bottom:20px;">Tambah Siswa</h2>

    <!-- Tombol kembali -->
    <a href="{{ route('siswa.index') }}" style="display:inline-block; margin-bottom:20px; padding:10px 20px; background:#ffb6c1; color:#fff; border-radius:10px; text-decoration:none; transition:0.3s;">
        Kembali ke Daftar Siswa
    </a>

    <!-- Validasi error -->
    @if ($errors->any())
        <div style="color:red; margin-bottom:20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form input siswa -->
    <form action="{{ route('siswa.store') }}" method="POST" style="display:flex; flex-direction:column; gap:15px;">
        @csrf
        <div>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}" required style="width:100%; padding:8px; border-radius:8px; border:1px solid #ffb6c1;">
        </div>

        <div>
            <label>Umur:</label><br>
            <input type="number" name="umur" value="{{ old('umur') }}" required style="width:100%; padding:8px; border-radius:8px; border:1px solid #ffb6c1;">
        </div>

        <div>
            <label>Kelas:</label><br>
            <input type="text" name="kelas" value="{{ old('kelas') }}" required style="width:100%; padding:8px; border-radius:8px; border:1px solid #ffb6c1;">
        </div>

        <div>
            <label>Alamat:</label><br>
            <textarea name="alamat" style="width:100%; padding:8px; border-radius:8px; border:1px solid #ffb6c1;">{{ old('alamat') }}</textarea>
        </div>

        <button type="submit" style="padding:10px 20px; background:#ff69b4; color:#fff; border:none; border-radius:10px; cursor:pointer; transition:0.3s;">
            Simpan
        </button>
    </form>
</div>
@endsection
