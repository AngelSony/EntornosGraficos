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

    echo gettype($a); //funcion gettype con parámetro $a. devuelve el tipo de dato de la variable, en este caso Boolean
    echo "<br>";
    echo gettype($b); //funcion gettype con parámetro $b. devuelve el tipo de dato de la variable, en este caso String
    echo "<br>";
    echo gettype($c); //funcion gettype con parámetro $c. devuelve el tipo de dato de la variable, en este caso String
    echo "<br>";
    echo gettype($d); //funcion gettype con parámetro $d. devuelve el tipo de dato de la variable, en este caso Integer
    echo "<br>";
    
    if (is_int($d)) { //Sentencia IF qeu evalúa el resultadod e la función booleana is_int() la cual devuelve true si el parámetro $d es de tipo entero
        $d += 4; //A la variable $d se le incrementa su valor en 4 si el IF sale por verdadero
    }
    if (is_string($a)) { //Sentencia IF que evalúa la función is-string() la cual devolverá true si la vatiable $a es de tipo String
        echo "Cadena: $a"; //Se concatena texto con la variable String, aunque no se mostrasrá ya que $a no es de tipo String
        echo "<br>";
    }

    $d = $a ? ++$d : $d*3; //Manera resumida de la sentencia IF (operador ?). Si $d es igual a $a entonces a $d se incrementa su valor en 1 (operador incremento ++), si no, se la multiplica por 3 (operador multiplcación *)
    $f = doble($d++);//A $d se le aplica la función doble y LUEGO se le suma 1 ya que el operador incremento se ubica a la derecha. Es decir que el incremento se realiza luego de evaluar la función. Luego se guarda el valor de la función en la variable $f de tipo integer
    $g = $f += 10; //A la variable $f de le incrementa en 10 su valor y luego se lo asigna a la variable $g

    echo $a,"<br>", $b,"<br>", $c,"<br>", $d,"<br>", $f ,"<br>", $g; //Se muestran los valores de las variables
    /* La salida por pantalla resulta:

    boolean
    string
    string
    integer
    1
    xyz
    xyz
    18
    44
    44

    */
    
?> 

</body>
</html>