@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Venta</h1>
    <p><b>ID:</b> {{ $venta->id }}</p>
    <p><b>Cliente:</b> {{ $venta->cliente->nombre ?? 'N/A' }}</p>
    <p><b>Fecha:</b> {{ $venta->fecha }}</p>
    <p><b>Total:</b> ${{ number_format($venta->total, 0, ',', '.') }}</p>

    <h4>Productos</h4>
    <ul>
        @foreach($venta->productos as $prod)
        <li>{{ $prod->nombre }} - Cantidad: {{ $prod->pivot->cantidad }} - Precio: ${{ number_format($prod->pivot->precio, 0, ',', '.') }}</li>
        @endforeach
    </ul>

    <a href="{{ route('ventas.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
