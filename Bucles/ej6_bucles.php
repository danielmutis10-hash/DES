<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    
    <?php

        $capital = 1000;
        $intereses = 5;
        $anios = 5;

        $i = 0;
        $final = $capital;
        $aux = ($intereses / 100)+1;
        $final_formato = 0;

        echo "Capital inicial: ", $capital, " €";
        echo "<br>";
        for ($i = 1; $i <= $anios; $i++) 
        {

            $final *= $aux;
            $final_formato = number_format($final, 2, '.', '');

            echo "Año ", $i , ": " , $final_formato , " € <br>";
        }

        echo "<br>";
        echo "Capital final: ", $final_formato , " €";

    ?>

</body>
</html>