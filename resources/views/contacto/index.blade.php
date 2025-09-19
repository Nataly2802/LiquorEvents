@extends('layouts.app')

@section('title', 'Contáctenos')

@section('content')
    <h1>Contáctenos</h1>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contacto.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Correo electrónico</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mensaje</label>
            <textarea name="mensaje" rows="4" class="form-control" required></textarea>
        </div>
        <button class="btn btn-primary">Enviar</button>
    </form>
@endsection
