<?php

include("Conexion.inc");
//Captura datos desde el Form anterior
$ciudad = $_POST["ciudad"];
$pais = $_POST["pais"];
$habitantes = $_POST["habitantes"];
$superficie = $_POST["superficie"];
$tieneMetro = isset($_POST["tieneMetro"]) ? 1 : 0;

//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(id) as cantidad FROM ciudades WHERE ciudad='$ciudad'";
$vResultado = mysqli_query($conn, $vSql) or die (mysqli_error($conn));;
$vCantCiudades = mysqli_fetch_assoc($vResultado);

//$vCantCiudades = mysqli_result($vResultado, 0);
if ($vCantCiudades ['cantidad'] != 0){
    echo ("La ciudad ya Existe<br>");
    echo ("<a href='index.html'>Volver al Menu del ABMC</a>");
}else {
    $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
        values ('$ciudad','$pais', '$habitantes', '$superficie', '$tieneMetro')";
    mysqli_query($conn, $vSql) or die (mysqli_error($conn));
    echo("La Ciudad fué registrada Exitosamente<br>");
    echo ("<a href='index.html'>Volver al Menu del ABMC</a>");
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($conn);

?>