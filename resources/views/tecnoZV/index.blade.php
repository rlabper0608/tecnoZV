@extends('layout')

@section('content')

    <div class="container">
        <h2>Listado de pisos disponibles</h2>

        <div class="pisos-lista">
            
            <div class="piso">
                <img src="https://via.placeholder.com/300x200" alt="Piso 1">
                <h3>Piso Centro Moderno</h3>
                <p class="precio">155.000 €</p>
                <a href="{{ route('pisos.show', $piso['id']) }}" class="boton">Ver detalles</a>
            </div>

            <div class="piso">
                <img src="https://via.placeholder.com/300x200" alt="Piso 2">
                <h3>Ático con Terraza</h3>
                <p class="precio">210.000 €</p>
                <a href="{{ route('pisos.show', $piso['id']) }}" class="boton">Ver detalles</a>
            </div>

            <div class="piso">
                <img src="https://via.placeholder.com/300x200" alt="Piso 3">
                <h3>Piso Económico Delicias</h3>
                <p class="precio">99.000 €</p>
                <a href="{{ route('pisos.show', $piso['id']) }}" class="boton">Ver detalles</a>
            </div>

            <div class="piso">
                <img src="https://via.placeholder.com/300x200" alt="Piso 4">
                <h3>Vivienda Reformada</h3>
                <p class="precio">185.000 €</p>
                <a href="{{ route('pisos.show', $piso['id']) }}" class="boton">Ver detalles</a>
            </div>

            <div class="piso">
                <img src="https://via.placeholder.com/300x200" alt="Piso 5">
                <h3>Estudio Ideal Inversión</h3>
                <p class="precio">75.000 €</p>
                <a href="{{ route('pisos.show', $piso['id']) }}" class="boton">Ver detalles</a>
            </div>

        </div>
    </div>

@endsection