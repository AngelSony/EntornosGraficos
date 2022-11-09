<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION["carrito"])){
        $carrito = $_SESSION["carrito"];
    }else{
        $_SESSION["carrito"] = array();
    }
    include("functions.php");
    $result = getAll();
    ?>
<h1>Catálogo disponible</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Producto</th>
        <th>Precio</th>
    </tr>
    <?php
    while($productos = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $productos['id'] ?></td>
            <td><?php echo $productos['producto'] ?></td>
            <td><?php echo $productos['precio'] ?></td>
            <td>
                <form action="agregarProducto.php" method="POST">
                    <input name="id" value="<?php echo $productos['id'] ?>" hidden>
                    <input type="submit" value="Agregar al Carrito" name="agregar" onclick="confirm('¿Desea agregarlo al carrito?')">
                </form>
            </td>
        </tr>
    <?php } ?>
<?php
if(count($_SESSION["carrito"]) != 0){
?>
</table>
<h1>Carrito Actual</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Producto</th>
        <th>Precio</th>
    </tr>
    <?php
    foreach($carrito as $id){
    $rs = getOne($id);
    $producto = mysqli_fetch_array($rs);
    ?>
        <tr>
            <td><?php echo $producto['id'] ?></td>
            <td><?php echo $producto['producto'] ?></td>
            <td><?php echo $producto['precio'] ?></td>
        </tr>
    <?php } ?>
</table>
<?php } ?>

</body>
</html>