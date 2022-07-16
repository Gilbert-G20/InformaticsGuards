<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app1.css') }}">
    <title>InformaticsGuards</title>
</head>
<body>
    @include ('layouts.header')
    <main>
        <div class="show-box">
            <p> DNI: {{ $usuario->DNI}}</p>
            <p> Nombre: {{ $usuario->Nombre}}</p>
            <p> Apellido: {{ $usuario->Apellido}}</p>
            <p> Fecha de nacimietno: {{ $usuario->fecha_nacimiento}}</p>
            <p> telefono: {{ $usuario->telefono}}</p>
            <p> contraseña: {{ $usuario->contraseña}}</p>
            <p> role: {{ $usuario->role}}</p>
        </div>
    </main>
    @include ('layouts.footer')
</body>
</html>