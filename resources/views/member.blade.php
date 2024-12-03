<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<h1>Welcome, {{ Auth::user()->name }}</h1>
    <ul>
        @foreach ($user as $u)
            <li>{{ $u->name }} - {{ $u->email }}</li>
        @endforeach
    </ul>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
