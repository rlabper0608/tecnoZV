@extends('layout')

@section('content')

    <div class="container">
        <h2>Listado de pisos disponibles</h2>

        <div class="pisos-lista">
            
          @foreach ($pisos as $piso)
                <div class="piso">
                    <img src="{{ asset($piso['imagen']) }}" alt="{{ $piso['nombre'] }}">
                    <h3>{{ $piso['nombre'] }}</h3>
                    <p class="precio">{{ number_format($piso['precio'], 0, ',', '.') }} €</p>

                    <a href="{{ route('tecnoZV.show', $piso['id']) }}" class="boton">
                        Ver detalles
                    </a>
                </div>
            @endforeach


        </div>
    </div>

@endsection