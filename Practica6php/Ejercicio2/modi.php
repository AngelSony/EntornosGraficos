<?php

include ("Conexion.inc");
//Captura datos desde el Form anterior
$Id = $_POST["id"];
$ciudad = $_POST["ciudad"];
$pais = $_POST["pais"];
$habitantes = $_POST["habitantes"];
$superficie = $_POST["superficie"];
$tieneMetro = isset($_POST["tieneMetro"]) ? 1 : 0;
//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE ciudades set 
    ciudad='$ciudad', 
    pais='$pais', 
    habitantes=$habitantes, 
    superficie=$superficie, 
    tieneMetro=$tieneMetro 
where id='$Id'";

mysqli_query($conn,$vSql) or die (mysqli_error($link));
echo("La Ciudad fue Modificada exitosamente<br>");
echo ("<a href='index.html'>Volver al Menu del ABMC</a>");
// Cerrar la conexion
mysqli_close($conn);

?>