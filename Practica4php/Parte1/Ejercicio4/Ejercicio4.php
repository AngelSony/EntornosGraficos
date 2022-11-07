<?php
    echo "El $flor $color \n";
    include 'datos.php';
    echo " El $flor $color";

    //el primer echo devuelve solo "El " y un WARNING debido a que las variables que utiliza no están declarada ya que no se ha incluido el archivo que las declara aún.
    //El siguiente echo devuelve la frase "El clavel blanco" ya que el archivo que las declara ya está incluido.
?> 