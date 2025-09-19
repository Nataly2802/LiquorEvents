@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Torneo</h1>
    <ul class="list-group">
        <li class="list-group-item"><b>Nombre:</b> {{ $torneo->nombre }}</li>
        <li class="list-group-item"><b>Fecha:</b> {{ $torneo->fecha }}</li>
        <li class="list-group-item"><b>Lugar:</b> {{ $torneo->lugar }}</li>
        <li class="list-group-item"><b>Descripción:</b> {{ $torneo->descripcion }}</li>
    </ul>
    <a href="{{ route('torneos.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
