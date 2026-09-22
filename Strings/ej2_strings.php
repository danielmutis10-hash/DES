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

    $nombre_limpio = trim($nombre);

    $normalizado = ucwords(strtolower($nombre_limpio));

    $longitud = strlen($normalizado);

    $cachitos = explode(" ", $normalizado);
    $primer_nombre = $cachitos[0];
    $primer_apellido = $cachitos[1];
    $segundo_apellido = $cachitos[2];

    $inicial1 = substr($primer_nombre,0,1);
    $inicial2 = substr($primer_apellido,0,1);
    $inicial3 = substr($segundo_apellido,0,1);



    //Los apartados que pide el ejercicio

    printf("Cadena original:\"". $nombre ."\" <br> ");
    printf("Nombre normalizado: $normalizado <br>");
    printf("Número de caracteres: $longitud <br>");
    printf("Nombre: $primer_nombre <br>");
    printf("Primer apellido: $primer_apellido <br>");
    printf("Segundo apellido: $segundo_apellido <br>");
    printf("Iniciales: $inicial1.$inicial2.$inicial3 <br>");
    printf("Nombre de usuario: ". strtolower($primer_nombre).".".strtolower($primer_apellido));

    


    ?>
</body>
</html>