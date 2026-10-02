<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php

    $email = "alberto.garcia@educa.madrid.org";

    $cachitos_email = explode("@", $email);
    $usuario = $cachitos_email[0];
    $dominio = $cachitos_email[1];

    $dominio_cachitos = explode(".", $dominio);
    
    $organizacion = $dominio_cachitos[0];
    $entidad = $dominio_cachitos[1];
    $extension = $dominio_cachitos[2];

    $longitud_usuario = strlen($usuario);
    $longitud_dominio = strlen($dominio);


    printf("Email: $email <br>");
    echo"<br>";
    printf("Usuario: $usuario <br>");
    printf("Dominio: $dominio <br>");
    printf("Organización: $organizacion <br>");
    printf("Extensión: $extension <br>");
    echo"<br>";
    printf("El usuario contiene $longitud_usuario caracteres.<br>");
    printf("El dominio contiene $longitud_dominio caracteres.<br>");


    ?>
</body>
</html>