<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>LiquorEvents</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

  <header>
    <h1 class="titulo">Administrador</h1>
    <img src="{{ asset('IMG/Logo.png') }}" alt="Logo LiquorEvents" class="logo" width="300" height="200">
    <nav class="menu"> 
        <ul>
          <li><a href="{{ url('inicio-sesion') }}">Cerrar Sesión</a></li>
          <li><a href="{{ url('vendedor') }}">Vista Empleado</a></li>
          <li><a href="{{ url('participante') }}">Vista Participante</a></li>
        </ul>
    </nav>
  </header>

  <div class="section">
    <h2 class="subtitulo">Gestión de Usuario</h2>
    <div class="card-grid">
      <div class="card"><h3>Consultar Usuario</h3><p>Buscar usuarios registrados en el sistema.</p></div>
      <div class="card"><h3>Modificar Usuario</h3><p>Actualizar datos personales de administrador.</p></div>
      <div class="card"><h3>Bloquear Usuario</h3><p>Desactivar usuarios del sistema.</p></div>
      <div class="card"><h3>Validar Usuario</h3><p>Verificar identidad del usuario.</p></div>
    </div>
  </div>

  <div class="section">
    <h2 class="subtitulo">Gestión de Productos</h2>
    <div class="card-grid">
      <div class="card"><h3>Consultar Productos</h3><p>Buscar productos existentes en el sistema.</p></div>
      <div class="card"><h3>Modificar Productos</h3><p>Editar información de productos existentes.</p></div>
      <div class="card"><h3>Insertar Productos</h3><p>Agregar nuevos productos por código de barras.</p></div>
      <div class="card"><h3>Eliminar Productos</h3><p>Quitar productos no disponibles.</p></div>
      <div class="card"><h3>Añadir al Inventario</h3><p>Agregar stock de productos al inventario.</p></div>
    </div>
  </div>

  <div class="section">
    <h2 class="subtitulo">Gestión de Torneos</h2>
    <div class="card-grid">
      <div class="card"><h3>Consultar Torneo</h3><p>Buscar información de torneos activos.</p></div>
      <div class="card"><h3>Modificar Torneo</h3><p>Actualizar detalles de un torneo.</p></div>
      <div class="card"><h3>Crear Torneo</h3><p>Registrar un nuevo torneo.</p></div>
      <div class="card"><h3>Actualizar Torneo</h3><p>Modificar datos importantes.</p></div>
      <div class="card"><h3>Bloquear Torneo</h3><p>Inactivar torneos finalizados o cancelados.</p></div>
    </div>
  </div>

</body>
</html>
