<?php
if(isset($_POST["usuario"])){
    if(!empty($_POST["usuario"])){
        if(is_string($_POST["usuario"])){
            $usuario = $_POST['usuario'];
            setcookie("usuario", $usuario, time()+60*60*24*30);
        }else{
            //Usuario no válido
        }
    }
}
header("Location: index.php");
?>