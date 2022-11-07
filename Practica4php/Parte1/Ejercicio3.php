<html>
<head><title>Documento 1</title></head>
<body>
<?php
    //Item a)
    echo "a)<br>";
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $col;$c++) {
            echo "<td>&nbsp;</td>\n";
        } echo "</tr>\n";
    }
    echo "</table>\n";
    //Este primer código realiza una iteración dentro de otra para generar por cada una de las filas (<tr>) sus 2 columnas (<td>)
    //Al cambiar loas valores de $row y $col podemos cambiar las filas y columnas de la tabla de forma dinámica
?>
<?php   
    //Item b)
    echo "<br>b)<br>";
    if (!isset($_POST['submit'])) {
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Edad: <input name="age" size="2">
            <input type="submit" name="submit" value="Ir">
        </form>
        <?php
    }else{
        $age = $_POST['age'];
        if ($age >= 21) {
            echo 'Mayor de edad';
        }else{
            echo 'Menor de edad';
        }
    }
    //El código lo que ahce de primeras es ver si el $_POST['submit'] está seteado. Lo que coloquialmente querría decir que ya se ha accionado el botón del formulario.
    //Si no está seteado, entonces se crea un formulario para ingresar la edad.
    //si está seteado, se entiende que ya existe una edad ingresada y en se evalúa su valor para mostrar un mensaje acorde a unc riterio.
?>
</body></html>