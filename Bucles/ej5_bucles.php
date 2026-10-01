<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    
    <?php

        $num = 5;

        $acumulador = "";
        $factorial = 1;
        $i = 0;

        for ($i = $num; $i >= 1; $i--)
        {
            $factorial *= $i;
            $acumulador .= $i;

            if ($i > 1)
            {
                $acumulador .= "x";
            }
        }

        echo $num , "! = ", $acumulador , " = " , $factorial;

    ?>

</body>
</html>