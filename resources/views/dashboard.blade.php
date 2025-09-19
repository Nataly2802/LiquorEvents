@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Saludo -->
    <h1 class="mb-3">Dashboard</h1>
    <p>Bienvenido, <strong>{{ auth()->user()->name }}</strong> — rol: <span class="text-primary">{{ auth()->user()->rol }}</span></p>

    <!-- Acciones del Empleado -->
    <h3 class="text-center my-4">Acciones del Empleado</h3>
    <div class="row g-3 mb-5">
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Consultar Venta</h5>
                    <p class="card-text">Revisar historial de ventas realizadas.</p>
                    <a href="#" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Crear Venta</h5>
                    <p class="card-text">Registrar una nueva venta al cliente.</p>
                    <a href="#" class="btn btn-success">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Imprimir Ticket</h5>
                    <p class="card-text">Generar comprobante de la venta.</p>
                    <a href="#" class="btn btn-secondary">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Modificar Venta</h5>
                    <p class="card-text">Editar los datos de una venta anterior.</p>
                    <a href="#" class="btn btn-warning">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Eliminar Venta</h5>
                    <p class="card-text">Cancelar o borrar ventas inválidas.</p>
                    <a href="#" class="btn btn-danger">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Consultar Inventario</h5>
                    <p class="card-text">Ver disponibilidad de productos.</p>
                    <a href="#" class="btn btn-info">Ir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de Venta -->
    <h3 class="text-center mb-4">Formulario de Venta</h3>
    <div class="card shadow-sm">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="producto" class="form-label">Producto</label>
                    <input type="text" class="form-control" id="producto" value="Cerveza Poker 330ml">
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" value="2">
                </div>
                <div class="mb-3">
                    <label for="codigo" class="form-label">Código de Barras</label>
                    <input type="text" class="form-control" id="codigo" value="987654321">
                </div>
                <div class="mb-3">
                    <label for="cliente" class="form-label">Cliente</label>
                    <input type="text" class="form-control" id="cliente" value="Luis Rojas">
                </div>
                <button type="submit" class="btn btn-success w-100">Registrar Venta</button>
            </form>
        </div>
    </div>

</div>
@endsection
