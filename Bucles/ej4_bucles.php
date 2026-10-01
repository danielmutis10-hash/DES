<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
    <?php

        $num = 17;
        $cont = 0;
        $i = 0;

        echo "Número analizado: ", $num, "<br><br>";

        for ( $i = 2; $i < $num; $i++ )
        {
            if ($num % $i == 0)
            {
                $cont ++;
                echo"Probando divisor ", $i," &rarr; Es divisible <br>";
            }else
            {
                echo "Probando divisor ", $i," &rarr; No divisible <br>";
            }
        }

        echo "<br>";
        
        if ($num > 1 && $cont == 0)
        {
            echo "El número", $num , "es primo";
        }else
        {
            echo "El número ", $num , " no es primo";
        }

    ?>

</body>
</html>