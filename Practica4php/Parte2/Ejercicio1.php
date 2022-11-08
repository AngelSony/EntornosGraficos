<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<?php
    //Código de la Izquierda
   /* $a = array( 
        'color' => 'rojo',
        'sabor' => 'dulce',
        'forma' => 'redonda',
        'nombre' => 'manzana',
        4
    );

    foreach($a as $elemento){
        echo $elemento."<br>";
    }*/
?>
<?php
    $a['color'] = 'rojo';
    $a['sabor'] = 'dulce';
    $a['forma'] = 'redonda';
    $a['nombre'] = 'manzana';
    $a[] = 4;

    foreach($a as $elemento){
        echo $elemento."<br>";
    }
    echo $a[4];

//Los códigos dan el mismo resultado en el caso de un foreach, sin embargo, el elemento 4 no tiene una posición definida dentro del array y por lo tanto no se puede hacer referencia a él mediante su posición, pues no se sabe.
?>
</body>
</html>