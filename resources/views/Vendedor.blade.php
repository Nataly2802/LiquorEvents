<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>LiquorEvents</title>
  <link rel="stylesheet" href="css/index.css">
  <style>
    .text-center {
      text-align: center;
    }
  </style>
</head>
<body>

  <header class="text-center">
    <h1>Empleado</h1>
    <img src="IMG/Logo.png" width="300" height="200" alt="Logo LiquorEvents">
    <nav class="menu"> 
      <ul>
        <li><a href="Inicio_sesión.html">Cerrar Sesión</a></li>
      </ul>
    </nav>
  </header>
  <br><br>

  <div class="section">
    <h2 class="text-center">Acciones del Empleado</h2>
    <div class="card-grid">
      <div class="card">
        <h3>Consultar Venta</h3>
        <p>Revisar historial de ventas realizadas.</p>
      </div>
      <div class="card">
        <h3>Crear Venta</h3>
        <p>Registrar una nueva venta al cliente.</p>
      </div>
      <div class="card">
        <h3>Imprimir Ticket</h3>
        <p>Generar comprobante de la venta.</p>
      </div>
      <div class="card">
        <h3>Modificar Venta</h3>
        <p>Editar los datos de una venta anterior.</p>
      </div>
      <div class="card">
        <h3>Eliminar Venta</h3>
        <p>Cancelar o borrar ventas inválidas.</p>
      </div>
      <div class="card">
        <h3>Consultar Inventario</h3>
        <p>Ver disponibilidad de productos.</p>
      </div>
      <div class="card">
        <h3>Modificar Inventario</h3>
        <p>Actualizar el stock de productos.</p>
      </div>
    </div>
  </div>

  <div class="section">
    <h2 class="text-center">Formulario de Venta</h2>
    <form id="ventaForm">
      <label for="producto">Producto</label>
      <input type="text" id="producto" name="producto" placeholder="Cerveza Poker 330ml" required>

      <label for="cantidad">Cantidad</label>
      <input type="number" id="cantidad" name="cantidad" placeholder="2" min="1" required>

      <label for="codigo">Código de Barras</label>
      <input type="text" id="codigo" name="codigo" placeholder="987654321" required>

      <label for="cliente">Cliente</label>
      <input type="text" id="cliente" name="cliente" placeholder="Luis Rojas" required>

      <button type="submit" class="boton">Registrar Venta</button>
    </form>
  </div>

  <script>
    document.getElementById("ventaForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const producto = document.getElementById("producto").value.trim();
      const cantidad = document.getElementById("cantidad").value.trim();
      const codigo = document.getElementById("codigo").value.trim();
      const cliente = document.getElementById("cliente").value.trim();

      if (!producto || !cantidad || !codigo || !cliente) {
        alert("Todos los campos son obligatorios.");
        return;
      }

      alert("Venta registrada correctamente");
      this.reset(); 
    });
  </script>

</body>
</html>
