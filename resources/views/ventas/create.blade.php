@extends('layouts.app')
@section('title', 'Registrar Venta')

@section('content')
<h1>Nueva Venta</h1>
<form action="{{ route('ventas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id" class="form-control" required>
            @foreach($clientes as $c)
                <option value="{{ $c->id }}">{{ $c->nombre }} {{ $c->apellido }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Producto</label>
        <select name="producto_id" class="form-control" required>
            @foreach($productos as $p)
                <option value="{{ $p->id }}">{{ $p->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Cantidad</label>
        <input type="number" name="cantidad" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Total</label>
        <input type="number" name="total" class="form-control" required>
    </div>
    <button class="btn btn-success">Guardar</button>
</form>
@endsection
