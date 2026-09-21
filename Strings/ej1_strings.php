<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php

    $ip="192.18.16.204";
    
    /*usamos explode para dividir cada parte de la cadena en un punto
    en especifico y usando un array podemos seccionar las partes*/
    $octetos = explode(".", $ip);

    //Separamos los octetos de la ip

    $binario1 = sprintf("%08b", $octetos[0]);
    $binario2 = sprintf("%08b", $octetos[1]);
    $binario3 = sprintf("%08b", $octetos[2]);
    $binario4 = sprintf("%08b", $octetos[3]);

    /*La representación de los octetos se usa en %s ya que php lo usa para buscar las
    variable o funciones que hemos empleado y las pone a continuación*/
    printf("IP $ip en binario es %s.%s.%s.%s", $binario1, $binario2, $binario3, $binario4);



    ?>
</body>
</html>