<?php

function getAll(){
    include("conexion.php");
    $vSql = "SELECT * FROM catalogo";
    $vResultado = mysqli_query($conn, $vSql);
    mysqli_close($conn);
    return $vResultado;
}
function getOne($id){
    include("conexion.php");
    $vSql = "SELECT * FROM catalogo WHERE id='".$id."'";
    $vResultado = mysqli_query($conn, $vSql);
    mysqli_close($conn);
    return $vResultado;
}

?>