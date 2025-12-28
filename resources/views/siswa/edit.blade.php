@extends('dashboard')

@section('content')
<h2>Edit Post</h2>

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}" required><br><br>
    <textarea name="content" required>{{ $post->content }}</textarea><br><br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('posts.index') }}">Kembali ke Daftar Post</a>
@endsection
