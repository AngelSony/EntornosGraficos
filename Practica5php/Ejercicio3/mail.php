<?php
//Métodos comentados ya que la función mail() de php no funciona en local
if(!isset($_POST['submit'])){
    $destinatario = $_POST["correo"];
    $asunto = "Recomendación de Sitio";
    $cuerpo = "Hola, soy tu amigo y te recomiendo este sitio";
    //mail($destinatario,$asunto,$cuerpo);
    echo "Mail enviado a ".$destinatario." Asunto: ".$asunto." Consulta: ".$cuerpo;
}
//header("Location: index.html");
?>
