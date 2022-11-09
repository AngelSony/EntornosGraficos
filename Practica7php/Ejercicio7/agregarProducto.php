<?php
session_start();
include("functions.php");
if(isset($_SESSION["carrito"])){
    if(isset($_POST["agregar"])){

        $carrito = $_SESSION["carrito"];
        $id = $_POST["id"];
        array_push($carrito, $id);
        $_SESSION["carrito"] = $carrito;
        header("Location: index.php");
    }else{
        echo "Errro en el post";
    }
}else{
    echo "Error en la sesión";
}

?>