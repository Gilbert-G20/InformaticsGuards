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
            <h3>Iniciar Sesión</h3>
        </div>
        <div class="form-box">
            <form action="/auth/login" method="POST">
                @csrf
                <div class="form-element">
                <label>Correo:</label>
                    <input type="email" name="email" placeholder="Su correo electrónico">
                </div>
                <div class="form-element">
                <label>Contraseña:</label>
                    <input type="password" name="contraseña" placeholder="Su contraseña">
                </div>
                <div class="form-element">
                    <input type="submit" value="Ingresar">
                </div>
            </form>
        </div>
    </main>
    @include ('layouts.footer')
</body>
</html>