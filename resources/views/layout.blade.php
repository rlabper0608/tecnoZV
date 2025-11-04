<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoZV - Pisos en Venta</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <header>
        <h1>TecnoZV - Venta de Pisos</h1>
    </header>

    <nav>
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ route('tecnoZV.index') }}">Pisos</a>
        <a href="{{ route('tecnoZV.atencion') }}">Atención al Cliente</a>
        <a href="{{ route('tecnoZV.contacto') }}">Contacto</a>
    </nav>

    <div class="container my-5">
      @yield('content')
    </div>

    <footer>
        © 2024 TecnoZV - Todos los derechos reservados
    </footer>

</body>
</html>
