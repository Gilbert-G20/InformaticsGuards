<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
    <title>InformaticsGuards</title>
</head>
<body>
    @include ('layouts.header')
    <main>
        <h1>Lista de Usuarios</h1>
        <table>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Contraseña</th>
                <th>Role</th>
                <th>Operaciones</th>
            </tr>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->DNI }}</td>
                <td>{{ $usuario->Nombre }}</td>
                <td>{{ $usuario->Apellido }}</td>
                <td>{{ $usuario->fecha_nacimiento }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->contraseña }}</td>
                <td>{{ $usuario->role }}</td>
                <td>
                    <a href="/admin/admin2_2/{{$usuario->id}}">Ver</a>
                    <a href="/admin/admin2/{{$usuario->id}}">Editar</a>
                    <a href="/admin/eliminar/{{$usuario->id}}" onclick="return eliminarUsuario('Eliminar Usuario')">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </table>
    </main>
    @include ('layouts.footer')
</body>

<script>
    function eliminarUsuario(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>

</html>