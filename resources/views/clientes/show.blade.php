@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>
    <ul class="list-group">
        <li class="list-group-item"><b>Nombre:</b> {{ $cliente->nombre }} {{ $cliente->apellido }}</li>
        <li class="list-group-item"><b>Correo:</b> {{ $cliente->correo }}</li>
        <li class="list-group-item"><b>Teléfono:</b> {{ $cliente->telefono }}</li>
        <li class="list-group-item"><b>Dirección:</b> {{ $cliente->direccion }}</li>
        <li class="list-group-item"><b>Documento:</b> {{ $cliente->documento }}</li>
    </ul>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
