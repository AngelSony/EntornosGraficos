<?php
if(isset($_POST["seleccionEstilo"])){
    $estilo = $_POST["seleccionEstilo"];
    setcookie("estilo", $estilo, time() + (60*60*24*30));
    header("Location: index.php");
}else{
    if(isset($_COOKIE["estilo"])){
        $estilo = $_COOKIE["estilo"];
        header("Location: index.php");
    }
}
?>