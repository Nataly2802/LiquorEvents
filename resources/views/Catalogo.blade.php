<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- Favicon desde public/IMG --}}
  <link rel="icon" href="{{ asset('IMG/Logo.png') }}">
  {{-- Estilos desde public/css --}}
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <title>LiquorEvents</title>
</head>
<body>
  <header>
    <h1 class="titulo">Catálogo</h1>
    {{-- Logo desde public/IMG --}}
    <img src="{{ asset('IMG/Logo.png') }}" alt="Logo LiquorEvents" class="logo" width="250" height="150">
    <nav class="menu"> 
      <ul>
        {{-- Enlaces con rutas de Laravel --}}
        <li><a href="{{ url('index') }}">Inicio</a></li>
        <li><a href="{{ url('contactenos') }}">Contáctenos</a></li>
      </ul>
    </nav>
  </header>

  <div class="section">
    <h2 class="subtitulo">Aguardiente</h2>
    <div class="card-grid">
      <div class="card"><h3>Aguardiente Néctar</h3><img src="{{ asset('IMG/Necta.png') }}" alt="Botella Aguardiente Néctar"></div>
      <div class="card"><h3>Aguardiente Rosado</h3><img src="{{ asset('IMG/Rosado.png') }}" alt="Botella Aguardiente Rosado"></div>
      <div class="card"><h3>Aguardiente Amarillo</h3><img src="{{ asset('IMG/amarillo.png') }}" alt="Botella Aguardiente Amarillo"></div>
    </div>
  </div>

  <div class="section">
    <h2 class="subtitulo">Whisky</h2>
    <div class="card-grid">
      <div class="card"><h3>Buchanan's</h3><img src="{{ asset('IMG/buchanan.png') }}" alt="Whisky Buchanan's"></div>
      <div class="card"><h3>Something Special</h3><img src="{{ asset('IMG/something.png') }}" alt="Whisky Something Special"></div>
      <div class="card"><h3>Black & White</h3><img src="{{ asset('IMG/Black.png') }}" alt="Whisky Black & White"></div>
      <div class="card"><h3>Johnnie Walker Red Label</h3><img src="{{ asset('IMG/Red label.png') }}" alt="Whisky Johnnie Walker Red Label"></div>
      <div class="card"><h3>Grant's</h3><img src="{{ asset('IMG/Grants.png') }}" alt="Whisky Grant's"></div>
    </div>
  </div>

  <div class="section">
    <h2 class="subtitulo">Ron</h2>
    <div class="card-grid">
      <div class="card"><h3>Ron Viejo de Caldas 5 años</h3><img src="{{ asset('IMG/Caldas 5 años.png') }}" alt="Ron Viejo de Caldas 5 años"></div>
      <div class="card"><h3>Ron Viejo de Caldas Esencial</h3><img src="{{ asset('IMG/Caldas escencial.png') }}" alt="Ron Viejo de Caldas Esencial"></div>
    </div>
  </div>
</body>
</html>
