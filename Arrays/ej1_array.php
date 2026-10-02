<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
    <?php
    
        $indice = 0 ;
        $impares = array();
        $suma = 0;
        $valor = 0;

        $num = 1;

        while(count($impares) < 20)
        {
            if($num % 2 != 0)
            {
                $impares[] = $num;
            }
            $num++;
        }

        echo "<table border='1' cellpading='5' cellspacing='0' border_cursor='center'>";
        echo "<tr><th>Indice</th><th>Valor</th><th>Suma</th></tr>";

        foreach($impares as $indice => $valor)
        {
            $suma += $valor;

            echo "<tr>";
            echo "<td> $indice </td>";
            echo "<td> $valor </td>";
            echo "<td> $suma </td>";
            echo "</tr>";
        }

        echo "</table>";

    ?>

</body>
</html>