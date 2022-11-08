<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejercicio 5</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["usuario"]) && isset($_SESSION["contrasenia"])){
    if(!empty($_SESSION["usuario"]) && !empty($_SESSION["contrasenia"])){
    $usuario = $_SESSION["usuario"];
    $contrasenia = $_SESSION["contrasenia"];

?>
    <h2><?php echo "Ususario: ".$usuario;?></h2>
    <h2><?php echo "Contraseña: ".$contrasenia;?></h2>
<?php }else{ ?>
    <h2>Usted ha ingresado mal sus datos</h2>
<?php }}else{?>
    <h2>Fallo en la sesión</h2>
<?php }?>
</body>
</html>