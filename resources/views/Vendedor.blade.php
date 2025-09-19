@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Acciones del Empleado</h2>
    
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Consultar Venta</h5>
                    <p class="card-text">Revisar historial de ventas realizadas.</p>
                    <a href="#" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Crear Venta</h5>
                    <p class="card-text">Registrar una nueva venta al cliente.</p>
                    <a href="#" class="btn btn-success">Ir</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Imprimir Ticket</h5>
                    <p class="card-text">Generar comprobante de la venta.</p>
                    <a href="#" class="btn btn-secondary">Ir</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Modificar Venta</h5>
                    <p class="card-text">Editar los datos de una venta anterior.</p>
                    <a href="#" class="btn btn-warning">Ir</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Eliminar Venta</h5>
                    <p class="card-text">Cancelar o borrar ventas inválidas.</p>
                    <a href="#" class="btn btn-danger">Ir</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Consultar Inventario</h5>
                    <p class="card-text">Ver disponibilidad de productos.</p>
                    <a href="#" class="btn btn-info">Ir</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Modificar Inventario</h5>
                    <p class="card-text">Actualizar el stock de productos.</p>
                    <a href="#" class="btn btn-dark">Ir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de Venta -->
    <div class="mt-5">
        <h2 class="text-center mb-4">Formulario de Venta</h2>
        <form id="ventaForm" class="card shadow p-4">
            <div class="mb-3">
                <label for="producto" class="form-label">Producto</label>
                <input type="text" id="producto" name="producto" class="form-control" placeholder="Cerveza Poker 330ml" required>
            </div>

            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="2" min="1" required>
            </div>

            <div class="mb-3">
                <label for="codigo" class="form-label">Código de Barras</label>
                <input type="text" id="codigo" name="codigo" class="form-control" placeholder="987654321" required>
            </div>

            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" id="cliente" name="cliente" class="form-control" placeholder="Luis Rojas" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Registrar Venta</button>
        </form>
    </div>
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
@endsection
