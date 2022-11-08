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
//Se verifica que el submit esté seteado
if (!isset($_POST['submit'])) {
    //Luego que la variable no esté vacía apra evitar el WARNING
    if(!empty($_POST["nombre"])){
        echo comprobar_nombre_usuario($_POST["nombre"]);
    }else{
        echo "";
    }
}


//Código dado por el enunciado
function comprobar_nombre_usuario($nombre_usuario){
    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
    //compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
    for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }
    echo $nombre_usuario . " es válido<br>";
    return true;
} 
//Fin código dado por el enunciado
?>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <label class="form-label" for="nombre"><label>
    <input class="form-control" type="text" name="nombre">
    <input type="submit" class="btn btn-primary" name="Comprobar Nombre">Comprobar Nombre</input>
</form>
</body>
</html>