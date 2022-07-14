<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app3.css') }}">
    <title>InformaticsGuards</title>
</head>
<body>
    @include ('layouts.header')
    <main>
        <form action="/inicio/register" method ="POST">
            @csrf
            <label>DNI:</label>
            <input type="text" name="DNI" placeholder="Su DNI">
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Su nombre">
            <label>Apellido:</label>
            <input type="text" name="apellido" placeholder="Su Apellido">
            <label>Fecha de Nacimiento:;</label>
            <input type="text" name="Fecha de Nacimiento" placeholder="Fecha de Nacimiento">
            <label>Telefono:</label>
            <input type="text" name="Telefono" placeholder="Su Telefono">
            <label>Contraseña:</label>
            <input type="text" name="Contraseña" placeholder="Su Contraseña">
            <label>Role:</label>
            <input type="text" name="Role" placeholder="Su Role">
            <input type="submit" value="Guardar">
        </form>
    </main>
    @include ('layouts.footer')
</body>
</html>