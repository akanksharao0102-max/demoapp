<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Page specific CSS -->
    @stack('styles')
</head>
<body>

<header class="navbar">
    <div class="nav-container">
        <div class="logo">Demo App</div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        </ul>
    </div>
</header>

{{-- 👇 BADHA PAGE NI BODY AA JAGYA AAVSE --}}
<main>
    @yield('content')
</main>

</body>
</html>
