<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>LiquorEvents - Panel Administrador</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body { font-family: Arial, sans-serif; background:#f5faff; margin:0; }
    header {
      background:#00c3d6; color:white; padding:15px;
      display:flex; align-items:center; justify-content:space-between;
    }
    header img { height:40px; }
    header nav a {
      color:white; text-decoration:none; font-weight:bold;
      margin-left:20px;
    }
    section { margin:20px; }
    h2 { background:#00c3d6; color:white; padding:10px; border-radius:8px; }
    .cards { display:flex; gap:15px; flex-wrap:wrap; margin-top:10px; }
    .card {
      flex:1; min-width:200px; background:#e6fafd;
      padding:20px; border-radius:10px; text-align:center;
      box-shadow:0 3px 8px rgba(0,0,0,0.1);
    }
    .card button {
      margin-top:10px; padding:8px 15px; border:none;
      background:#00c3d6; color:white; border-radius:5px;
      cursor:pointer;
    }
    .card button:hover { background:#009aa8; }
  </style>
</head>
<body>

<header>
  <div style="display:flex; align-items:center; gap:10px;">
    <img src="logo.png" alt="LiquorEvents Logo">
    <h1>LiquorEvents - Panel Administrador</h1>
  </div>
  <nav>
    <a href="#">Vista Empleado</a>
    <a href="#">Vista Participante</a>
    <a href="#">Cerrar Sesión</a>
  </nav>
</header>

<section>
  <h2><i class="fa fa-users"></i> Gestión de Usuarios</h2>
  <div class="cards">
    <div class="card">
      <h3>Consultar Usuario</h3>
      <p>Buscar usuarios registrados en el sistema.</p>
      <button>Ir</button>
    </div>
    <div class="card">
      <h3>Modificar Usuario</h3>
      <p>Actualizar datos de un usuario.</p>
      <button>Ir</button>
    </div>
    <div class="card">
      <h3>Bloquear Usuario</h3>
      <p>Desactivar usuarios del sistema.</p>
      <button>Ir</button>
    </div>
  </div>
</section>

<section>
  <h2><i class="fa fa-box"></i> Gestión de Productos</h2>
  <div class="cards">
    <div class="card">
      <h3>Consultar Productos</h3>
      <p>Ver lista de productos disponibles.</p>
      <button>Ir</button>
    </div>
    <div class="card">
      <h3>Insertar Producto</h3>
      <p>Agregar un nuevo producto.</p>
      <button>Ir</button>
    </div>
    <div class="card">
      <h3>Modificar Producto</h3>
      <p>Actualizar la información de un producto.</p>
      <button>Ir</button>
    </div>
  </div>
</section>

<section>
  <h2><i class="fa fa-trophy"></i> Gestión de Torneos</h2>
  <div class="cards">
    <div class="card">
      <h3>Crear Torneo</h3>
      <p>Registrar un nuevo torneo.</p>
      <a href="gestionar.html"><button>Ir</button></a>
    </div>
    <div class="card">
      <h3>Consultar Torneos</h3>
      <p>Ver lista de torneos registrados.</p>
      <a href="gestionar.html"><button>Ir</button></a>
    </div>
  </div>
</section>

<section>
  <h2><i class="fa fa-calendar-check"></i> Reservas</h2>
  <div class="cards">
    <div class="card">
      <h3>Reservar Juego / Mesa</h3>
      <p>Seleccionar juego, tiempo y cantidad de personas.</p>
      <a href="gestionar.html"><button>Ir</button></a>
    </div>
  </div>
</section>

</body>
</html>
