<?php
if(isset($_POST['btn'])){
    $titular = $_POST["titular"];
    setcookie("titular", $titular, time() + 60*60*24*30);
}
header("Location: index.php");
?>