<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="estilo<?php
        if(isset($_COOKIE["estilo"])){
            echo $_COOKIE["estilo"];
        }
    ?>.css" rel="stylesheet" type="text/css"> 
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="estilos.php" method="post">
        <label for="seleccionEstilo" class="form-label">Seleccione un Estilo</label>
        <select class="form-select" name="seleccionEstilo">
            <option value="1">Estilo1</option>
            <option value="2">Estilo2</option>
            <option value="3">Estilo3</option>
        </select>
        <input type="submit" value="Actualizar Estilo">
    </form>
</body>
</html>