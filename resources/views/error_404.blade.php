<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Error 404 - Página no encontrada</title>

  <link rel="stylesheet" href="{{ asset('css/errores.css') }}">

  <link rel="icon" href="{{ asset('IMG/Logo.png') }}" type="image/x-icon">
</head>
<body class="error-page">
  <header>
    <img src="{{ asset('IMG/Logo.png') }}" alt="Logo" class="logo">
  </header>
  
  <main>
    <div class="content-wrapper">
      <div class="text-section">
        <h1 class="error-code">404</h1>
        <div class="img">
          <img src="{{ asset('IMG/Robot Error.png') }}" alt="Mascota" width="450">
        </div>
        <p class="error-msg">Oops... No encontramos la página que estás buscando.</p>
        <a href="{{ url('index') }}" class="btn-home">Volver al inicio</a>
      </div>
    </div>
  </main>
</body>
</html>
