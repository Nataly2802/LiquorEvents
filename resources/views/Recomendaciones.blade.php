<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('IMG/Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>LiquorEvents - Recomendaciones</title>
</head>
<body>
    <header>
        <div style="text-align:center;">
            <img src="{{ asset('IMG/Logo.png') }}" width="300" height="200" alt="Logo LiquorEvents">
        </div>
        <nav class="menu"> 
            <ul>
                <li><a href="{{ url('login') }}">Iniciar Sesión</a></li>
                <li><a href="{{ url('catalogo') }}">Catálogo</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 style="text-align:center;">Recomendaciones</h2>
        <p style="text-align:center;">Aquí podrás ver las recomendaciones de eventos y productos.</p>
    </main>
</body>
</html>

