<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>a)</h1>
    <?php
        $matriz = array("x" => "bar", 12 => true);
        echo $matriz["x"]; // bar
        echo $matriz[12]; // 1
    ?>
    <h1>b)</h1>
    <?php
        $matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
        echo $matriz["unamatriz"][6]; // 5
        echo $matriz["unamatriz"][13];// 9
        echo $matriz["unamatriz"]["a"];// 42
    ?>
    <h1>c)</h1>
    <?php
        $matriz = array(5 => 1, 12 => 2);
        $matriz[] = 56; // Nada, no se hace referencia a ninguna posición
        $matriz["x"] = 42; // Nada pues la posición no existe
        unset($matriz[5]); //Quita el valor de la posición 5
        unset($matriz); //Limpia el array 
    ?> 
</body>
</html>