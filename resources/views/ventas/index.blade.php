@extends('layouts.app')
@section('title', 'Ventas')

@section('content')
<h1>Ventas</h1>
<a href="{{ route('ventas.create') }}" class="btn btn-primary mb-3">Registrar Venta</a>
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th><th>Cliente</th><th>Producto</th><th>Cantidad</th><th>Total</th><th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ventas as $v)
        <tr>
            <td>{{ $v->id }}</td>
            <td>{{ $v->cliente->nombre }} {{ $v->cliente->apellido }}</td>
            <td>{{ $v->producto->nombre }}</td>
            <td>{{ $v->cantidad }}</td>
            <td>${{ number_format($v->total, 0, ',', '.') }}</td>
            <td>{{ $v->fecha }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
