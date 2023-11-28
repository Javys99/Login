<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('inicia-sesion') }}" method="post">
    @csrf
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>
   
    <label for="password">Paasword</label>
    <input type="password" name="password" id="password">
    <br>

    <label for="nombre"> Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    

    <input type="submit" value="Acceder">
    <p>¿No tienes cuenta? <a href="{{ route('registro') }}">Registrate</a></p>

    </form>
</body>
</html>