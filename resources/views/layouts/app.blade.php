<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #ffe6f0; /* Pink background */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff0f6; /* Light pink card */
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(255, 182, 193, 0.4);
            text-align: center;
        }
        h1 { color: #ff69b4; margin-bottom: 10px; }
        p { color: #d1477f; font-size: 18px; margin-bottom: 30px; }
        a, button {
            display: inline-block;
            margin: 10px 10px 10px 0;
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        a { background-color: #ffb6c1; color: #fff; }
        a:hover { background-color: #ff69b4; }
        button { background-color: #ff69b4; color: #fff; }
        button:hover { background-color: #ff1493; }
        hr { border: none; border-top: 2px solid #ffb6c1; margin: 20px 0; }
        .logout-form { margin-top: 30px; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
