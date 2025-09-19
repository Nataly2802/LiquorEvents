@extends('layouts.app')

@section('title', 'Editar Torneo')

@section('content')
    <h1>Editar Torneo</h1>
    <form action="{{ route('torneos.update', $torneo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $torneo->nombre }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $torneo->descripcion }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" name="precio" class="form-control" value="{{ $torneo->precio }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" value="{{ $torneo->stock }}" required>
        </div>
        <button class="btn btn-success">Actualizar</button>
        <a href="{{ route('torneo.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
