<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/botones.css') }}">
    <title>InformaticsGuards</title>
</head>
<body>
    @include ('layouts.header')
    <hr>
    <h2>Menú de Administrador</h2>
    <hr>
    @foreach ($usuarios as $usuario)
        <h5>Bienvenido, {{ $usuario->Nombre }} {{ $usuario->Apellido }}</h5>
    @endforeach
    <main>
        <div class="contenedor">
            <a href="{{ url('admin2_1') }}"><button class="btn btn1">Datos de usuarios</button></a>
            <a href="{{ url('admin3') }}"><button class="btn btn2">Turnos de usuarios</button></a>
        </div>
    </main>
    @include ('layouts.footer')
</body>
</html>