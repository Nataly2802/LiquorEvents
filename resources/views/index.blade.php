<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('IMG/Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>LiquorEvents - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header>
        <div style="text-align:center;">
            <img src="{{ asset('IMG/Logo.png') }}" width="300" height="200" alt="Logo LiquorEvents">
        </div>
        <nav class="menu"> 
            <ul>

                <li><a href="{{ route('inicio_sesion') }}">Iniciar Sesión</a></li>
                <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
                <li><a href="{{ route('contactenos') }}">Contáctenos</a></li>
                <li><a href="{{ route('recomendaciones') }}">Recomendaciones</a></li>
            </ul>
        </nav>
    </header>

    <div class="text-center mt-4">
        <h2>Bienvenido a LiquorEvents</h2>
        <p>Tu mejor aliado para eventos y licoreras.</p>
        <h4 class="mt-3">TORNEOS</h4>
    </div>


    <div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('IMG/resize_1.jpeg') }}" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('IMG/resize_2.jpeg') }}" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('IMG/resize_3.jpeg') }}" class="d-block w-100" alt="Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('IMG/resize_4.jpeg') }}" class="d-block w-100" alt="Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('IMG/resize_5.jpeg') }}" class="d-block w-100" alt="Imagen 5">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('IMG/resize_6.jpeg') }}" class="d-block w-100" alt="Imagen 6">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('IMG/resize_7.jpeg') }}" class="d-block w-100" alt="Imagen 7">
            </div>
        </div>

  
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
    </div>
