@extends('layout')

@section('content')
    @foreach ($pisos as $piso)
        <div class="piso">
            <img src="{{ asset($piso['imagen']) }}" alt="{{ $piso['nombre'] }}">
            <h3>{{ $piso['nombre'] }}</h3>
            <p class="precio">{{ number_format($piso['precio'], 0, ',', '.') }} €</p>

            <a href="{{ route('pisos.show', $piso['id']) }}" class="boton">
                Ver detalles
            </a>
        </div>
    @endforeach
@endsection
