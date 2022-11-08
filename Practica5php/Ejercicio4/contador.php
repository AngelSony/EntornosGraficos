<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>

    <?php session_start();?>
</head>
<body>
    <?php
        if(!isset($_SESSION["cont"])){
            $_SESSION["cont"] = 1;
        }else{
            $_SESSION["cont"]++;
        }
        echo "Has visitado ".($_SESSION["cont"]." páginas.")
    ?>
    <br>
    <a href="index.php">Otra página</a>
</body>
</html>