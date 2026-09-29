<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
    <?php

        $num = 8;

        $i = 0;
        $resultado = 0;

        echo "<table border='1' cellpading='5' cellspacing='0'>";
        echo "<tr><th>Operación</th><th>Resultado</th></tr>";

        for ( $i = 1; $i <=10; $i++ )
        {
            $resultado = $num * $i;

            echo "<tr>";
            echo "<td>", $num, "x", $i , "</td>";
            echo "<td>", $resultado , "</td>";
            echo "</tr>";

        }

        echo "</table>";

    ?>

</body>
</html>