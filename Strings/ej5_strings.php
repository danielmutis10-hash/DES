<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php

    $url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo";

    $cachos = explode("/", $url);
    $cachitos = explode("?", $cachos[4]);
    $cachititos = explode("&", $cachitos[1]);

    $protocolo = substr($url,0,5);
    $dominio = $cachos[2];
    $ruta = sprintf("/$cachos[3]/$cachitos[0]");
    $fichero = $cachitos[0];
    $parametros = $cachitos[1];
    $id = substr($cachititos[0],3,2);
    $pos_marca = strpos($cachititos[1],"=");
    $marca = substr($cachititos[1],6, $pos_marca + 1);
    

    echo "Salida 1 <br>";
    printf("Protocolo: $protocolo <br>");
    printf("Dominio: $dominio <br>");
    printf("Ruta: $ruta <br>");
    printf("Fichero: $fichero <br>");
    printf("Parámetros: $parametros <br>");

    echo "<br>"; 

    echo "Salida 2 <br>";
    printf("Protocolo: $protocolo <br>");
    printf("Dominio: $dominio <br>");
    printf("Ruta: $ruta <br>");
    printf("Fichero: $fichero <br>");
    printf("Id producto: $id <br>");
    printf("Marca: $marca");


    ?>
</body>
</html>