<?php
if(!isset($_POST['submit'])){
    $destinatario = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $cuerpo = $_POST["mensaje"];
    mail($destinatario,$asunto,$cuerpo);
}
header("Location: index.html");
?>