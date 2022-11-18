<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Modificacion Ciudad</title>
</head>
<boby>
<?php

include ("Conexion.inc");
//Captura datos desde el Form anterior
$vId = $_POST['id'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM ciudades WHERE id ='$vId'";
$vResultado = mysqli_query($conn, $vSql) or die (mysqli_error($conn));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
    echo ("Ciudad Inexistente...!!! <br>");
    echo ("<A href='formModiIni.html'>Continuar</A>");
}else{
?>
<form action="modi.php" method="POST" name="formModi">
    <table width="356">
        <input type="hidden" name="id" value="<?php echo $vId ?>">
        <tr>
            <td> Ciudad:</td>
            <td> <input type="text" name="ciudad" size="20" maxlength="45" required>
        </tr>
        <tr>
            <td> Pais:</td>
            <td> <input type="text" name="pais" size="20" maxlength="45" required>
        </tr>
        <tr>
            <td> Habitantes: </td>
            <td> <input type="number" name="habitantes" size="20" required></td>
        </tr>
        <tr>
            <td> Superficie: </td>
            <td> <input type="number" name="superficie" size="20" step="any"></td>
        </tr>
        <tr>
            <td>Tiene Metro:</td>
            <td> <input type="checkbox" name="tieneMetro"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"> 
                <input type="submit" name="submit" value="Modificar">
            </td>
        </tr>
    </table>
</form>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($conn);
?>
</body>
</html>