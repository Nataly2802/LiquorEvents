@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Bienvenido, {{ auth()->user()->name }} — rol: {{ auth()->user()->rol }}</p>
</div>
@endsection

