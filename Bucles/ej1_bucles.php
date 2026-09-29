<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
    <?php

        $inicio = 1;
        $fin = 100;

        $i = 0;
        $cantidad = 0;
        $pares = 0;
        $impares = 0;
        $multiplos_tres = 0;
        $suma_total = 0;

        for ($i = $inicio; $i <= $fin; $i++) 
        {
            $cantidad ++;
            $suma_total += $i;

            if ($i % 2 == 0)
            {
                $pares++;
            }else
            {
                $impares++;
            }

            if ($i % 3 == 0)
            {
                $multiplos_tres++;
            }

        }

        echo "Números del 1 al 100 <br>";
        echo "<br>";
        printf("Cantidad de números: $cantidad <br>");
        printf("Números pares: $pares <br>");
        printf("Números impares: $impares <br>");
        printf("Múltiplos de 3: $multiplos_tres <br>");
        printf("Suma total: $suma_total <br>");
        


    ?>

</body>
</html>