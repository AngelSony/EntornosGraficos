<?php
    $hostname = "localhost";
    $username = "root";
    $password ="123456";
    $db = "compras";
    $conn = mysqli_connect($hostname,$username,$password) or die("Error al Conectar");
    mysqli_select_db($conn,$db);
?>