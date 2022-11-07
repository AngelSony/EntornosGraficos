<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    //Item a)
    echo "a)<br>";
    //Primer código
    $i = 1;
    while ($i <= 10) {
        print $i++;
    }
    echo "<br>";
    //Segundo código
    $i = 1;
    while ($i <= 10):
        print $i;
        $i++;
    endwhile;
    echo "<br>";
    //Tercer código
    $i = 0;
    do {
        print ++$i;
    } while ($i<10);
    //Los tres código son equivalentes y producen las mismas salidas.


    //Item b)
    echo "<br>b)<br>";
    //Primer código
    for ($i = 1; $i <= 10; $i++) {
        print $i;
    }
    echo "<br>";
    //Segundo código
    for ($i = 1; $i <= 10; print $i, $i++) ;
    echo "<br>";
    //Tercer código
    for ($i = 1; ;$i++) {
        if ($i > 10) {
            break;
        }
        print $i;
    }
    echo "<br>";
    //Cuarto código
    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        print $i;
        $i++;
    }
    //Las cuatro fromas de escribir el código producen la misma salida y son equivalentes


    //Item c)
    echo "<br>c)<br>";
    $i = 1; //Le doy valores a i para probar el código
    //Primer código
    if ($i == 0) {
        print "i equals 0";
    } elseif ($i == 1) {
        print "i equals 1";
    } elseif ($i == 2) {
        print "i equals 2";
    }
    echo "<br>";
    //Segundo código
    switch ($i) {
        case 0:
            print "i equals 0";
            break;
        case 1:
            print "i equals 1";
            break;
        case 2:
            print "i equals 2";
            break;
    }
    //Por último, estos dos códigos también son equivalentes
    ?>
</body>
</html>