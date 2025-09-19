<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('IMG/Logo.png') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <title>LiquorEvents - Catálogo</title>
</head>
<body>
  <header>
    <h1 class="titulo">Catálogo</h1>
    <img src="{{ asset('IMG/Logo.png') }}" alt="Logo LiquorEvents" class="logo" width="250" height="150">
    <nav class="menu"> 
      <ul>
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li><a href="{{ route('contactenos') }}">Contáctenos</a></li>
      </ul>
    </nav>
  </header>

  <main class="container">
    @if($productos->count() > 0)
      {{-- Opcional: agrupar por Tipo_producto si lo quieres así --}}
      @php $grupos = $productos->groupBy('Tipo_producto'); @endphp

      @foreach($grupos as $tipo => $items)
        <section class="section">
          <h2 class="subtitulo">{{ $tipo ?: 'General' }}</h2>
          <div class="card-grid">
            @foreach($items as $prod)
              <article class="card">
                <h3>{{ $prod->Nombre }}</h3>
                {{-- Manejo de imagen: chequea si el archivo existe en public/IMG --}}
                @php
                  $foto = $prod->Foto;
                  $path = null;
                  if($foto) {
                      // si en DB guardaste solo el nombre (ej: resize_1.jpeg)
                      $possible = public_path('IMG/' . $foto);
                      if(file_exists($possible)) {
                          $path = asset('IMG/' . $foto);
                      } else {
                          // si ya guardaste 'IMG/...' en DB
                          if(file_exists(public_path($foto))) {
                              $path = asset($foto);
                          }
                      }
                  }
                  if(!$path) {
                      $path = asset('IMG/default.png'); // coloca un default.png en public/IMG
                  }
                @endphp

                <img src="{{ $path }}" alt="{{ $prod->Nombre }}" style="max-width:220px; display:block; margin:0.5rem auto;">

                <p>Precio: {{ $prod->Precio_venta ?? '—' }}</p>
                <p>Stock: {{ $prod->Stock_total ?? '—' }}</p>
              </article>
            @endforeach
          </div>
        </section>
      @endforeach

    @else
      <p>No hay productos registrados.</p>
    @endif
  </main>
</body>
</html>
