<?php

function buscar($frase){
    include("conexion.php");
    $vSql = "SELECT * FROM buscador WHERE canciones LIKE '%".$frase."%'";
    $vResultado = mysqli_query($conn, $vSql);
    mysqli_close($conn);
    return $vResultado;
}

?>