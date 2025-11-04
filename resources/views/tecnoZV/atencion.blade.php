@extends('layout')

@section('content')
<div class="container">
    <h2>Atención al Cliente</h2>

    <p>En TecnoZV estamos para ayudarte. Si tienes preguntas sobre alguno de nuestros pisos,
    o necesitas información adicional, ponte en contacto con nuestro equipo.</p>

    <div class="detalle-piso">
        <p><strong>Horario de atención:</strong></p>
        <ul>
            <li>Lunes a Viernes: 9:00 - 19:00</li>
            <li>Sábados: 10:00 - 14:00</li>
        </ul>

        <p><strong>Teléfono:</strong> 976 123 456</p>
        <p><strong>Email:</strong> atencion@tecnozv.com</p>
    </div>

    <br>

    <a href="{{ url('/') }}" class="boton">Volver al inicio</a>
</div>
@endsection
