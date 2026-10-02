<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
    <?php
    
        $temperaturas = array(18,21,19,24,25,22,20,26,23,21);

        $temperatura = 0;
        $dias = 1;
        $aux = 0;
        $dia_anterior = 0;
        $dia_anterior_texto = "";


        $max_dias = 0;
        $max_temperatura = 0;
        $min_dias = 0;
        $min_temperatura = 0;
        $media = 0;

        echo "<table border='1' cellpadding='6' cellspacing='3'";
        echo "<tr><th>Día</th><th>Temperatura</th><th>Diferencia día anterior</th></tr>";

        foreach ( $temperaturas as $aux => $temperatura)
        {
            $dias = $aux +1;
            
            if ($aux == 0)
            {
                $dia_anterior_texto = "-";
            }else
            {
                $dia_anterior = $temperatura - $temperaturas[$aux-1];

                if ($dia_anterior > 0)
                {
                    $dia_anterior_texto = "+". $dia_anterior;
                }else if ($dia_anterior < 0)
                {
                    $dia_anterior_texto = $dia_anterior;
                }else
                {
                    $dia_anterior_texto = "0";
                }
            }
            
            echo "<tr>";
            echo "<td align='center'> $dias </td>";
            echo "<td align='center'> $temperatura </td>";
            echo "<td align='center'> $dia_anterior_texto </td>";
            echo "</tr>";
        }

        echo "</table>" ;



    ?>

</body>
</html>