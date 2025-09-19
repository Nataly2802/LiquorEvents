@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="mb-3"><label>Nombre</label><input type="text" name="nombre" class="form-control"></div>
        <div class="mb-3"><label>Apellido</label><input type="text" name="apellido" class="form-control"></div>
        <div class="mb-3"><label>Correo</label><input type="email" name="correo" class="form-control"></div>
        <div class="mb-3"><label>Teléfono</label><input type="text" name="telefono" class="form-control"></div>
        <div class="mb-3"><label>Dirección</label><input type="text" name="direccion" class="form-control"></div>
        <div class="mb-3"><label>Documento</label><input type="text" name="documento" class="form-control"></div>
        <button class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
