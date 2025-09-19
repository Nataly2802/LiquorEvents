@extends('layouts.app')

@section('title', 'Lista de Torneos')

@section('content')
    <h1 class="mb-3">Torneos</h1>
    <a href="{{ route('torneos.create') }}" class="btn btn-primary mb-3">Nuevo torneo</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($torneos as $torneo)
            <tr>
                <td>{{ $torneo->id }}</td>
                <td>{{ $torneo->nombre }}</td>
                <td>{{ $torneo->descripcion }}</td>
                <td>${{ number_format($torneo->precio, 0, ',', '.') }}</td>
                <td>{{ $torneo->stock }}</td>
                <td>
                    <a href="{{ route('torneos.edit', $torneo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('torneos.destroy', $torneo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
