<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <link rel="icon" href="{{ asset('IMG/Logo.png') }}">

  
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">

  <title>LiquorEvents</title>
</head>
<body>
  <header>
    <img src="{{ asset('IMG/Logo.png') }}" alt="Logo LiquorEvents" class="logo" width="250" height="150">
    <nav class="menu"> 
      <ul>
        <li><a href="{{ url('login') }}">Iniciar Sesión</a></li>
        <li><a href="{{ url('catalogo') }}">Catálogo</a></li>
        <li><a href="{{ url('contactenos') }}">Contáctenos</a></li>
        <li><a href="{{ url('recomendaciones') }}">Recomendaciones</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h1>Torneos</h1>

      
      <div id="miCarrusel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('IMG/resize_1.jpeg') }}" class="d-block w-100" alt="Torneo de billar">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('IMG/resize_2.jpeg') }}" class="d-block w-100" alt="Competencia de bolirana">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('IMG/resize_3.jpeg') }}" class="d-block w-100" alt="Juego de tejo">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('IMG/resize_4.jpeg') }}" class="d-block w-100" alt="Campeonato deportivo">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('IMG/resize_5.jpeg') }}" class="d-block w-100" alt="Evento social con bebidas">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('IMG/resize_6.jpeg') }}" class="d-block w-100" alt="Participantes en torneo">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('IMG/resize_7.jpeg') }}" class="d-block w-100" alt="Entrega de premios">
          </div>
        </div>
      </div>

      
      <button onclick="login();">Inscribirme</button>
    </section>
  </main>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
          crossorigin="anonymous"></script>


  <script>
    function login() {
      location.href = "{{ url('registro') }}";
    }
  </script>
</body>
</html>
