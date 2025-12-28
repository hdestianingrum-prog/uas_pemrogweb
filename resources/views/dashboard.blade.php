@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1>Dashboard</h1>
<p>Selamat datang, {{ auth()->user()->name }}</p>

<!-- Link ke halaman CRUD Siswa -->
<a href="{{ route('siswa.index') }}">Kelola Data Siswa</a>

<hr>

<!-- Logout -->
<form action="{{ route('logout') }}" method="POST" class="logout-form">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
