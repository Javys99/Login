<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=c:\Users\mrcom\OneDrive\Documentos\proyecto\resources\views\login\registro.blade.php, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('validar-registro') }} " method="post">
    @csrf
   

    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>
   
    <label for="password">Paasword</label>
    <input type="password" name="password" id="password">
    <br>


    
    <input type="submit" value="Registrarse">
</form>
</body>
</html>