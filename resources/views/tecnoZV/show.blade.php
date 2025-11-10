@extends('layout')

@section('content')

<div class="container">
    <div class="detalle-piso">

        <h2>{{ $piso['nombre'] }}</h2>

        <img src="{{ asset($piso['imagen']) }}" alt="{{ $piso['nombre'] }}" style="width:100%; max-width:500px; border-radius:8px;">

        <p><strong>Dirección:</strong> {{ $piso['direccion'] }}</p>
        <p><strong>Precio:</strong> {{ number_format($piso['precio'], 0, ',', '.') }} €</p>
        <p><strong>Metros cuadrados:</strong> {{ $piso['metros'] }} m²</p>
        <p><strong>Habitaciones:</strong> {{ $piso['habitaciones'] }}</p>

        <br>

        <a href="{{ route('tecnoZV.index') }}" class="boton">Volver al listado</a>

    </div>
</div>

@endsection
