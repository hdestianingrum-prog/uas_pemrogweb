<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type=text], input[type=email], input[type=password] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .text-center {
            text-align: center;
            margin-top: 10px;
        }
        .error, .success {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .error { background: #f8d7da; color: #842029; }
        .success { background: #d1e7dd; color: #0f5132; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
            <button type="submit">Register</button>
        </form>

        <p class="text-center">Sudah punya akun? <a href="{{ route('login.form') }}">Login</a></p>
    </div>
</body>
</html>
