<?php
if(isset($_COOKIE['titular'])){
    //Se asigna tiempo pasado para eliminar una cookie
    setcookie("titular", NULL, time() - 60);
}
header("Location: index.php");
?>