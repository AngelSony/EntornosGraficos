<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejercicio 4</title>
    
</head>
<body>
<?php
    if(isset($_COOKIE["titular"])){
        $titular = $_COOKIE["titular"]; ?>

        <h1><?php echo $titular;?></h1>
        <form action="borrarTitular.php" method="POST">
            <input type="submit" value="Borrar Titular">
        </form>
    <?php
    }else{?>
        <h1>Elegir Titular</h1>
        <form   action="seleccionarTitular.php" method="POST">
            <input type="radio"name="titular" value="Noticia Política">Noticia Política<br>
            <input type="radio"name="titular" value="Noticia Economica">Noticia Economica<br>
            <input type="radio"name="titular" value="Noticia Deportiva">Noticia Deportiva<br>
            <input type="submit" value="Seleccionar Titular" name="btn">
        </form>
    <?php
    }
?>
</body>
</html>