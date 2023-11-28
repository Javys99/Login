<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a>Pagina privada @auth de {{Auth::user()->email}} @endauth </a>
    <h1>Tu seccion privada </h1>
    <a href="{{ route('logout') }}"></a><button type="button">Salir</button>
</body>
</html>