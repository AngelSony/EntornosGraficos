<?php
if(isset($_COOKIE["contador"])){
    $cont = $_COOKIE["contador"];
    $cont++;
    setcookie("contador", $cont, time() + 60*60*24*30);
}else{
    setcookie("contador", 1, time() + 60*60*24*30);
}
?>