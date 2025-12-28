<!-- resources/views/siswa/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #ffe6f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            background: #fff0f6;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(255, 182, 193, 0.4);
        }
        h1 {
            text-align: center;
            color: #ff69b4;
        }
        a.button {
            display: inline-block;
            background-color: #ffb6c1;
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            margin-bottom: 20px;
        }
        a.button:hover {
            background-color: #ff69b4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ffb6c1;
            text-align: center;
        }
        th {
            background-color: #ff69b4;
            color: #fff;
        }
        button {
            background-color: #ff69b4;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff1493;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="button">Tambah Siswa</a>
        <a href="{{ route('dashboard') }}" class="button">Kembali ke Dashboard</a>

        @if(session('success'))
            <p style="color:green;">{{ session('success') }}</p>
        @endif

        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach($siswa as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->umur }}</td>
                <td>{{ $s->kelas }}</td>
                <td>{{ $s->alamat }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $s->id) }}" class="button">Edit</a>
                    <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
