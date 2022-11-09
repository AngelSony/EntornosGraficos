<?php

if(isset($_POST["buscar"])){
    if(!empty($_POST["frase"])){
        include("functions.php");
        $result = buscar($_POST["frase"]);
        session_start();
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        $_SESSION["canciones"] = $arr;
        header("Location: index.php");
    }else{
        echo "Debe ingresar una frase";
    }
}else{
    echo "Error";
}

?>