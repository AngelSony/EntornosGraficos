<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio1</title>
</head>
<body>

<?php

    function doble($i) {
        return $i*2; //variable i tipo integer y operador aritmético *
    }

    $a = TRUE; //variable a tipo boolean
    $b = "xyz"; //variable b tipo string
    $c = 'xyz'; //variable c tipo string
    $d = 12; //variable d tipo integer

    echo gettype($a); //funcion gettype con parámetro $a. devuelve el tipo de dato de la variable, en este caso boolean
    echo gettype($b); //
    echo gettype($c);
    echo gettype($d);
    
    if (is_int($d)) {
        $d += 4;
    }
    if (is_string($a)) {
    echo "Cadena: $a";
    }

    $d = $a ? ++$d : $d*3;
    $f = doble($d++);
    $g = $f += 10; //variable f y g tipo integer

    echo $a, $b, $c, $d, $f , $g;
    
?> 

</body>
</html>