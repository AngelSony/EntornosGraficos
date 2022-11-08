<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="ingresaUsuario.php" method="POST">
        <label for="usuario" class="form-label" value="Ingrese un Nombre de Usuario"></label>
        <input type="text" name="usuario">
        <input type="submit" value="Aceptar">
    </form>
    <br>
    <?php
        if(isset($_COOKIE["usuario"])){
            echo "<p>El último usuario ingresado es ".$_COOKIE["usuario"]."</p>";
        }
    ?>
</body>
</html>