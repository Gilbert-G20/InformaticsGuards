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
        <div class="title-box">
            <h3>Registro</h3>
        </div>
        <div class="form-box">
            <form action="/auth/register" method ="POST">
                @csrf
                <div class="form-element">
                    <label>DNI:</label>
                    <input type="text" name="DNI" placeholder="Su DNI">
                </div>
                <div class="form-element">
                    <label>Nombre:</label>
                    <input type="text" name="Nombre" placeholder="Su nombre">
                </div>
                <div class="form-element">
                    <label>Apellido:</label>
                    <input type="text" name="Apellido" placeholder="Su Apellido">
                </div>
                <div class="form-element">
                    <label>Fecha de Nacimiento:</label>
                    <input type="date" name="fecha_nacimiento">
                </div>
                <div class="form-element">
                    <label>Correo:</label>
                    <input type="email" name="email" placeholder="Su correo electrónico">
                </div>
                <div class="form-element">
                    <label>Teléfono:</label>
                    <input type="text" name="telefono" placeholder="Su Teléfono">
                </div>
                <div class="form-element">
                    <label>Contraseña:</label>
                    <input type="password" name="contraseña" placeholder="Su contraseña">
                </div>
                <div class="form-element">
                    <label>Rol:</label>
                    <input type="radio" name="role" value="admin"> Admin
                    <input type="radio" name="role" value="client"> Cliente
                </div>
                    <div class="form-element">
                    <input type="submit" value="Registrar">
                </div>
            </form>
        </div>
    </main>
    @include ('layouts.footer')
</body>
</html>