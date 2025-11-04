@extends('layout')

@section('content')
<div class="container">
    <h2>Contacto</h2>

    <p>Si deseas ponerte en contacto con nosotros, rellena el siguiente formulario
    y te responderemos lo antes posible.</p>

    <div class="detalle-piso" style="max-width:600px;">
        <form action="#" method="POST">
            @csrf

            <label for="nombre"><strong>Nombre:</strong></label><br>
            <input type="text" id="nombre" name="nombre" required style="width:100%; padding:8px; margin:5px 0 10px;"><br>

            <label for="email"><strong>Email:</strong></label><br>
            <input type="email" id="email" name="email" required style="width:100%; padding:8px; margin:5px 0 10px;"><br>

            <label for="mensaje"><strong>Mensaje:</strong></label><br>
            <textarea id="mensaje" name="mensaje" rows="5" required style="width:100%; padding:8px; margin:5px 0 15px;"></textarea><br>

            <button type="submit" class="boton">Enviar</button>
        </form>
    </div>

    <br>
    <a href="{{ url('/') }}" class="boton">Volver al inicio</a>
</div>
@endsection
