<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dressing Company')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <!-- <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/clients">Clients</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </nav> -->
    </header>

    <main>
        @yield('content')
    </main>

    <!-- <footer>
        <p>&copy; {{ date('Y') }} Dressing Company. All rights reserved.</p>
    </footer> -->
</body>
</html>
