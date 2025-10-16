<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ecommerce Tech') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <!-- Usaremos una fuente más moderna si es posible, pero mantenemos Nunito como fallback -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- Mantener el enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- CSS PERSONALIZADO: Diseño Serio y Azul de Alta Tecnología -->
    <style>
        /* Variables y Colores */
        :root {
            --color-primary: #007AFF;
            /* Azul Vívido */
            --color-background: #F4F7F9;
            /* Gris frío claro */
            --color-text-dark: #1A1A1A;
            --color-text-link: #444444;
            --color-shadow: rgba(0, 0, 0, 0.05);
        }

        /* ESTILO GENERAL DEL CUERPO */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: var(--color-background);
            color: var(--color-text-dark);
            min-height: 100vh;
        }

        /* ESTILO DE LA BARRA DE NAVEGACIÓN (NAVBAR) */
        .navbar {
            /* Sobrescribir Bootstrap: eliminar fondo blanco y sombra */
            background-color: #FFFFFF !important;
            border-bottom: 2px solid var(--color-primary);
            /* Línea de acento azul */
            box-shadow: 0 4px 12px var(--color-shadow) !important;
            /* Sombra más pronunciada y premium */
            padding-top: 15px;
            padding-bottom: 15px;
        }

        /* Marca (Logo/Nombre) */
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-text-dark) !important;
            transition: color 0.3s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Enlaces de Navegación */
        .nav-link {
            font-weight: 500;
            color: var(--color-text-link) !important;
            padding: 8px 15px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--color-primary) !important;
            background-color: #F0F5FF;
            /* Fondo muy suave al pasar el ratón */
        }

        /* Enlaces Activos */
        .nav-item a.nav-link.active {
            color: var(--color-primary) !important;
            border-bottom: 2px solid var(--color-primary);
        }

        /* Dropdown */
        .dropdown-menu {
            border: 1px solid #E0E7E9;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            color: var(--color-text-dark);
        }

        .dropdown-item:hover {
            background-color: #F0F5FF;
            color: var(--color-primary);
        }

        /* Contenido Principal */
        main.py-4 {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
        }
    </style>
</head>

<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Mantener el enlace a Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
