<?php
if(isset($_POST["login"])){
    session_start();
    //Parámetros para crear la conección
    $hostname = "localhost";
    $username = "root";
    $password ="123456";
    $db = "base2";
    $conn = mysqli_connect($hostname,$username,$password) or die("Error al Conectar");
    mysqli_select_db($conn,$db);

    $correo = $_POST["correo"];
    $vSql = "SELECT * from alumnos WHERE mail = '".$correo."'";
    $vResultado = mysqli_query($conn, $vSql);
    $fila = mysqli_fetch_array($vResultado);
    $_SESSION["nombre"] = $fila["nombre"];

    header("Location: nombreAlumno.php");
}else{
    echo "Error";
}
?>