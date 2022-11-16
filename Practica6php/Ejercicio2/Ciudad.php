<?php

class Ciudad{
    private $id;
    private $ciudad;
    private $pais;
    private $habitantes;
    private $superficie;
    private $tieneMetro;

    function setId($id){
        $this -> id = $id;
    }
    function getId(){
        return $this -> id;
    }
    function setCiudad($ciudad){
        $this -> ciudad  = $ciudad;
    }
    function getCiudad(){
        return  $this -> ciudad;
    }
    function setPais($pais){
        $this -> pais = $pais;
    }
    function getPais(){
        return  $this -> pais;
    }
    function setHabitantes($habitantes){
        $this -> habitantes = $habitantes;
    }
    function getHabitantes(){
        return  $this -> habitantes;
    }
    function setSuperficie($superficie){
        $this -> superficie = $superficie;
    }
    function getSuperficie(){
        return  $this -> superficie;
    }
    function setTieneMetro($tieneMetro){
        $this -> tieneMetro = $tieneMetro;
    }
    function getTieneMetro(){
        return  $this -> tieneMetro;
    }
}

?>