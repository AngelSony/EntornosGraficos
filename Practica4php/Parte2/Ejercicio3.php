<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>a)</h1>
    <?php
        $fun = getdate();
        echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
        segundos, del $fun[mday]/$fun[mon]/$fun[year]";
        /*La salida es:
        Has entrado en esta pagina a las 2 horas, con 56 minutos y 20 segundos, del 8/11/2022
        */
    ?>
    <h1>b)</h1>
    <?php
        function sumar($sumando1,$sumando2){
            $suma=$sumando1+$sumando2;
            echo $sumando1."+".$sumando2."=".$suma;
        }
        sumar(5,6);
        /*La salida es:
        5+6=11
        */
        ?>
</body>
</html>