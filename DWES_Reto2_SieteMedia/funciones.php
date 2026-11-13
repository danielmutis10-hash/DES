<?php
function crear_baraja()
{
    $baraja = array();
    $cachitos = ["C", "D", "P", "T"]; // Corazones, Diamantes, Picas, Tréboles

    foreach ($cachitos as $cachito) {
        for ($num = 1; $num <= 10; $num++) {
            if ($num <= 7) {
                // Cartas del 1 al 7
                $baraja[] = $num . $cachito;
            } elseif ($num == 8) {
                $baraja[] = "J" . $cachito;
            } elseif ($num == 9) {
                $baraja[] = "K" . $cachito;
            } else {
                $baraja[] = "Q" . $cachito;
            }
        }
    }

    return $baraja;
}

function removerBaraja($valores)
{
    $indices = range(0, count($valores)- 1);
    shuffle($indices);
    return $indices;
}

function convertir($baraja) {
    $valores = array();
    for ($i = 0; $i < count($baraja); $i++) {
        $posicionEnPalo = $i % 10;

        if ($posicionEnPalo >= 7) {
            $valores[$i] = 0.5;
        } else {
            $valores[$i] = $posicionEnPalo + 1;
        }
    }
    return $valores;
}

?>