<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>InformaticsGuards</title>
</head>
<body>
    @include ('layouts.header')
    <main>
    <div class="contenedor">

    <button class="btn btn1">Turnos disponibles por semana</button>
    <button class="btn btn2">Turnos confirmados por semana</button>

    </div>
    </main>
    @include ('layouts.footer')
</body>
</html>