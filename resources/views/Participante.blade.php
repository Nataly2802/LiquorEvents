<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LiquorEvents - Participante</title>

  {{-- Estilos --}}
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
  <header>
    <h1 style="text-align:center;">Participante</h1>
    <div style="text-align:center;">
      <img src="{{ asset('IMG/Logo.png') }}" width="300" height="200" alt="Logo LiquorEvents">
    </div>
    <nav class="menu"> 
      <ul>
        <li><a href="{{ url('login') }}">Cerrar Sesión</a></li>
      </ul>
    </nav>
  </header>

  <main class="section">
    <h2 style="text-align:center;">Acciones del Participante</h2>
    <div class="card-grid">
      <article class="card">
        <h3>Consultar Torneo</h3>
        <p>Ver torneos disponibles para inscribirte.</p>
      </article>
      <article class="card">
        <h3>Consultar Juegos</h3>
        <p>Explorar los juegos de cada torneo.</p>
      </article>
      <article class="card">
        <h3>Inscribirse a Torneo</h3>
        <p>Acceder e inscribirse a un torneo activo.</p>
      </article>
      <article class="card">
        <h3>Crear Equipo</h3>
        <p>Formar equipo con otros participantes.</p>
      </article>
      <article class="card">
        <h3>Reservar Torneo</h3>
        <p>Confirmar tu participación oficial.</p>
      </article>
      <article class="card">
        <h3>Cancelar Reserva</h3>
        <p>Cancelar inscripción a un torneo.</p>
      </article>
    </div>
  </main>
</body>
</html>
