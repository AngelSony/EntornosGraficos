<?php
if(isset($_POST["login"])){
    session_start();
    $_SESSION["usuario"] = $_POST["username"];
    $_SESSION["contrasenia"] = $_POST["password"];
    header("Location: muestraDatos.php");
}else{
    header("Location: index.html");
}
?>