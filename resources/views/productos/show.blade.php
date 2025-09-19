@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>
    <ul class="list-group">
        <li class="list-group-item"><b>Nombre:</b> {{ $producto->nombre }}</li>
        <li class="list-group-item"><b>Descripción:</b> {{ $producto->descripcion }}</li>
        <li class="list-group-item"><b>Precio:</b> ${{ number_format($producto->precio, 0, ',', '.') }}</li>
        <li class="list-group-item"><b>Stock:</b> {{ $producto->stock }}</li>
    </ul>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
