@extends('layouts.app')

@section('content')
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
@endsection
