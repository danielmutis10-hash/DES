<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    
    <?php

        $num1 = 3;
        $num2 = 7;

        $i = 0;
        $resultado = 0;

        for ($x = $num1; $x <= $num2; $x++)
        {
            echo "<table border='1' cellpading='5' cellspacing='0'>";
            echo "<tr><th>Operación</th><th>Resultado</th></tr>";

            for ( $i = 1; $i <=10; $i++ )
            {
                $resultado = $x * $i;

                echo "<tr>";
                echo "<td> $x x $i </td>";
                echo "<td> $resultado </td>";
                echo "</tr>";

            }

            echo "<br>";   
            echo "</table>";
        }

    ?>

</body>
</html>