<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body class="bg-custom-success d-flex flex-column min-vh-100">
    <!-- Navbar with Logo (Always Visible) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm py-2">
        <div class="container d-flex align-items-center">
            <!-- Logo + Brand -->
            <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
                <img src="{{ asset('images/images.png') }}" 
                     alt="BSU Logo" 
                     class="img-fluid me-2"
                     style="max-width: 45px; height: auto;">
                <span class="navbar-brand mb-0 h1 fw-bold text-black">BSU Digital ID System</span>
            </a>

            <!-- Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Dynamic Page-Specific Links -->
            <div class="collapse navbar-collapse" id="navbarContent">
                {{ $navbar ?? '' }}
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-success text-center py-3 mt-auto text-white">
        <p class="mb-0">&copy; {{ date('Y') }} BSU Digital ID System. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
