<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Error 500</title>


  <link rel="icon" href="{{ asset('IMG/Logo.png') }}" type="image/x-icon">


  <link rel="stylesheet" href="{{ asset('css/errores.css') }}" />
</head>
<body class="error-page">
  <header>
    <img src="{{ asset('IMG/Logo.png') }}" alt="Logo" class="logo" />
  </header>
    
  <div class="img">
    <img src="{{ asset('IMG/Robot Error.png') }}" alt="Mascota" width="450">
  </div>

  <main>
    <h1 class="error-code">500</h1>
    <p class="error-msg">Lo sentimos, ocurrió un error interno en el servidor.</p>
    <a href="{{ url('index') }}" class="btn-home">Volver al inicio</a>
  </main>
</body>
</html>
