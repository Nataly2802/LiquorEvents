@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3"><label>Nombre</label><input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}"></div>
        <div class="mb-3"><label>Apellido</label><input type="text" name="apellido" class="form-control" value="{{ $cliente->apellido }}"></div>
        <div class="mb-3"><label>Correo</label><input type="email" name="correo" class="form-control" value="{{ $cliente->correo }}"></div>
        <div class="mb-3"><label>Teléfono</label><input type="text" name="telefono" class="form-control" value="{{ $cliente->telefono }}"></div>
        <div class="mb-3"><label>Dirección</label><input type="text" name="direccion" class="form-control" value="{{ $cliente->direccion }}"></div>
        <div class="mb-3"><label>Documento</label><input type="text" name="documento" class="form-control" value="{{ $cliente->documento }}"></div>
        <button class="btn btn-warning">Actualizar</button>
    </form>
</div>
@endsection
