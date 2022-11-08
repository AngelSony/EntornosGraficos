<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>
        <?php
            if(isset($_COOKIE["contador"])){
                $cont = $_COOKIE["contador"];
                if($cont > 0){
                    echo "Usted ha visitado ".$cont." veces esta página";
                }else{
                    echo "¡Bienvenido a la página!";
                }
            }else{
                echo "¡Bienvenido a la página!";
            }
            include "contador.php";
        ?>
    </h1>
</body>
</html>