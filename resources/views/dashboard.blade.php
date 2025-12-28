<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>
<p>Selamat datang, {{ Auth::user()->name }}</p>

<form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>

</body>
</html>
