<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php

    $nombre = " aLBeRTo gaRCia loPEz ";

    //Hacemos cachitos de la cadena para luego poner la primera letra en mayusculas
    $cachitos = explode(" ", $nombre);

    //minusculas de toda la cadena
    $minusculas = sprintf(strtolower($nombre));

    $normalizado = sprintf();

    printf("$minusculas");

    ?>
</body>
</html>