<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION["canciones"])){
        foreach($canciones = $_SESSION["canciones"] as $c){
    ?>
        <h3><?php echo $c["canciones"] ?></h3>
    <?php } } ?>
    <form action="buscarCancion.php" method="POST">
        <label for="frase" class="form-label" value="Ingrese Frase"></label>
        <input type="text" class="form-control" name="frase" required>
        <input type="submit" value="Buscar" name="buscar" class="btn btn-primary">
    </form>
</body>
</html>