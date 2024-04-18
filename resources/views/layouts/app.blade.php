{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Color Match en Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .navbar-custom {
            background-color: #3F51B5; /* Índigo principal */
            border-bottom: 3px solid #303F9F; /* Índigo más oscuro para el borde */
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #ffffff; /* Texto blanco para mejor contraste */
        }
        .navbar-custom .navbar-nav .nav-link:hover,
        .navbar-custom .navbar-nav .nav-link.active,
        .navbar-custom .navbar-nav .nav-link.active:hover {
            background-color: #1A237E; /* Índigo más oscuro para hover y active */
            color: #fff; /* Mantener el texto blanco */
        }
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1 0 auto;
        }
        .footer {
            flex-shrink: 0;
            height: 50px;
            background-color: #f5f5f5;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Fashion Color Match en Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('colors.form') ? 'active' : '' }}" href="{{ route('colors.form') }}">Compatibilidad de Colores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('help') ? 'active' : '' }}" href="{{ route('help') }}">Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4 content">
        @yield('content')
    </div>
    <footer class="footer">
        © {{ date('Y') }} - @deivisjoro -Derechos Reservados.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
