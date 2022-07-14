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
    <form action="/admin/admin2/{{ $usuario->id}}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>DNI:</label>
        <input type="text" name="DNI" placeholder="Su DNI" value="{{ $usuario->DNI}}">
        <label>Nombre:</label>
        <input type="text" name="Nombre" placeholder="Su Nombre" value="{{ $usuario->Nombre}}">
        <label>Apellido:</label>
        <input type="text" name="Apellido" placeholder="Su Apellido" value="{{ $usuario->Apellido}}">
        <label>Fecha de Nacimiento:</label>
        <input type="text" name="Fecha de Nacimiento" placeholder="Su fecha de Nacimiento" value="{{ $usuario->fecha_nacimiento}}">
        <label>telefono:</label>
        <input type="text" name="Telefono" placeholder="Su Telefono" value="{{ $usuario->telefono}}">
        <label>contraseña:</label>
        <input type="text" name="Contraseña" placeholder="Su contraseña" value="{{ $usuario->contraseña}}">
        <label>role:</label>
        <input type="text" name="Role" placeholder="Su Role" value="{{ $usuario->role}}">
        <input type="submit" value="Guardar">
    </form>
    </main>
    @include ('layouts.footer')
</body>
</html>
