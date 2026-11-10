<?php
    include "funciones_ficheros.php";

    $mensaje = "";
    $error = "";

    $nombre = "";
    $apellido1 = "";
    $apellido2 = "";
    $fecna = "";
    $localidad = "";

    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = test_input(trim($_POST["nombre"] ?? ""));
        $apellido1 = test_input(trim($_POST["apellido1"] ?? ""));
        $apellido2 = test_input(trim($_POST["apellido2"] ?? ""));
        $fecna = test_input(trim($_POST["fecna"] ?? ""));
        $localidad = test_input(trim($_POST["localidad"] ?? ""));
    }

    if( empty($nombre) && empty($apellido1) && empty($apellido2) && empty($fecna) && empty($localidad)){
        guardar_datos($nombre, $apellido1, $apellido2, $fecna, $localidad);
    }
?>