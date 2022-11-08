<?php
//Métodos comentados ya que la función mail() de php no funciona en local
if(!isset($_POST['submit'])){
    $destinatario = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $cuerpo = $_POST["mensaje"];
    //mail($destinatario,$asunto,$cuerpo);
    echo "Mail enviado a ".$destinatario." Asunto: ".$asunto." Consulta: ".$cuerpo;
}
//header("Location: index.html");
?>
