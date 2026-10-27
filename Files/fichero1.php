<?php
    include "funciones_ficheros.php";

    $mensaje = "";
    $error = "";

    $nombre = "";
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = trim($_POST["nombre"] ?? "");
    }
?>