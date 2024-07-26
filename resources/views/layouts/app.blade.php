<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <header class="flex justify-between items-center bg-white h-20 shadow-lg">
        <nav>
            <h2>Imat</h2>
        </nav>

        <ul class="flex space-x-2 mx-5">
            <li><a href="equipos">Equipos</a></li>
            <li><a href="cronograma"></a>Cronograma</li>
            <li><a href="histrorial mantenimiento">Historial matenimiento</a></li>
            <li><a href="personal mantenimiento">Personal mantenimiento</a></li>
        </ul>
    </header>

    <div class="container mx-auto mt-5">
        @yield('content')
    </div>

</body>

</html>