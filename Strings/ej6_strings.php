<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php

    $log = "192.168.1.25 - GET /productos/listado.php - 200 - Mozilla/5.0"; 

    $cachitos = explode("-", $log);
    $cachititos = explode("/", $cachitos[1]); //Corta en cachitos la parte con metodo y recursos
    

    $ip = trim($cachitos[0]);
    $metodo = trim($cachititos[0]);
    $recurso = sprintf("$cachititos[1]/$cachititos[2]");
    $http = trim($cachitos[2]);
    $navegador = trim($cachitos[3]);
    $tipo = strtoupper(substr($cachititos[2],8,3));



    ?>
</body>
</html>