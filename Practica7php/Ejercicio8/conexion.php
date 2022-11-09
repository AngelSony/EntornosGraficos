<?php

    $hostname = "localhost";
    $username = "root";
    $password = "123456";
    $db = "prueba";
    $conn = mysqli_connect($hostname, $username, $password) or die("Error al conectar");
    mysqli_select_db($conn, $db);

?>