<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php

    $titulo = "Introducción a la Programación Web con PHP";

    $titulo_minusculas = strtolower($titulo);

    $remplazo = str_replace(" ","-",$titulo_minusculas);
    $remplazo_tildes = str_replace("ó","o",$remplazo);

    printf("http://$remplazo_tildes")

    ?>
</body>
</html>