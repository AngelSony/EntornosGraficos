<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listado completo </title>
</head>
<body>
<?php
    include("Conexion.inc");
    $vSql = "SELECT * FROM ciudades";
    $vResultado = mysqli_query($conn, $vSql);
    $total_registros=mysqli_num_rows($vResultado);
?>
    <table border=1>
        <tr>
            <td><b>Id</b></td>
            <td><b>Ciudad</b></td>
            <td><b>Pais</b></td>
            <td><b>Habitantes</b></td>
            <td><b>Superficie</b></td>
            <td><b>Tiene Metro</b></td>
        </tr>
<?php
    while ($fila = mysqli_fetch_array($vResultado))
{?>
        <tr>
            <td><?php echo ($fila['id']); ?></td>
            <td><?php echo ($fila['ciudad']); ?></td>
            <td><?php echo ($fila['pais']); ?></td>
            <td><?php echo ($fila['habitantes']); ?></td>
            <td><?php echo ($fila['superficie']); ?></td>
            <td><?php echo ($fila['tieneMetro'] ? "SI" : "NO"); ?></td>
        </tr>
        <tr>
            <td colspan="5">
<?php
}
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($conn);
?>
            </td>
        </tr>
    </table>
    <p>&nbsp;</p>
    <p align="center"><a href="index.html">Volver al Menu del ABMC</a></p>
</body>
</html>