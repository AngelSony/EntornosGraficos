<?php

include ("Conexion.inc");
$vId = $_POST ['id'];
$vSql = "SELECT * FROM ciudades WHERE id='$vId' ";
$vResultado = mysqli_query($conn, $vSql);
if(mysqli_num_rows($vResultado) == 0){
    echo ("Ciudad Inexistente...!!! <br>");
    echo ("<A href='formBaja.html'>Continuar</A>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM ciudades WHERE id = '$vId'";
mysqli_query($conn, $vSql);
    echo("La Ciudad fue Borrada<br>");
    echo("<A href='index.html'>Volver al Menu del ABMC</A>");
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($conn);

?>