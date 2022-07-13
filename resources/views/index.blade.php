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
        @include ('layouts.content')
    </main>
    @include ('layouts.footer')
</body>
</html>