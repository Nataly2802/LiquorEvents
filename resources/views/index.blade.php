<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('IMG/Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>LiquorEvents - Inicio</title>
</head>
<body>
    <header>
        <div style="text-align:center;">
            <img src="{{ asset('IMG/Logo.png') }}" width="300" height="200" alt="Logo LiquorEvents">
        </div>
        <nav class="menu"> 
            <ul>
             
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
                <li><a href="{{ route('contactenos') }}">Contáctenos</a></li>
                <li><a href="{{ route('recomendaciones') }}">Recomendaciones</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 style="text-align:center;">Bienvenido a LiquorEvents</h2>
        <p style="text-align:center;">Tu mejor aliado para eventos y licoreras.</p>
    </main>
</body>
</html>
