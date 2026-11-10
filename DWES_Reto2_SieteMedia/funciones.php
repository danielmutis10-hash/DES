<?php
function crear_baraja()
{
    $x = 1;
    $baraja = [];
    for ($i = 0; $i < 10; $i++) {
        $x++;
        if ($i == 0 && $i < 7) {
            $baraja[$i] = $x + "C";
        } else {
            if ($i == 7) {
                $baraja[$i] = "JC";
            } elseif ($i == 8) {
                $baraja[$i] = "KC";
            } else {
                $baraja[$i] = "QC";
            }
        }
    }

    $x = 0;
    for ($i = 10; $i < 20; $i++) {
        $x++;
        if ($i == 10 && $i < 17) {
            $baraja[$i] = $x + "D";
        } else {
            if ($i == 17) {
                $baraja[$i] = "JD";
            } elseif ($i == 18) {
                $baraja[$i] = "KD";
            } else {
                $baraja[$i] = "QD";
            }
        }
    }

    $x = 0;
    for ($i = 20; $i < 30; $i++) {
        $x++;
        if ($i == 20 && $i < 27) {
            $baraja[$i] = $x + "P";
        } else {
            if ($i == 27) {
                $baraja[$i] = "JP";
            } elseif ($i == 28) {
                $baraja[$i] = "KP";
            } else {
                $baraja[$i] = "QP";
            }
        }
    }

    $x = 0;
    for ($i = 30; $i < 40; $i++) {
        $x++;
        if ($i == 30 && $i < 37) {
            $baraja[$i] = $x + "T";
        } else {
            if ($i == 37) {
                $baraja[$i] = "JT";
            } elseif ($i == 38) {
                $baraja[$i] = "KT";
            } else {
                $baraja[$i] = "QT";
            }
        }
    }

    return $baraja;
}

function removerBaraja($valores)
{
    shuffle($valores);
    return $valores;
}

function convertir($baraja){
    $valores = array();
    for($i = 0; $i < count($baraja); $i++){
        if($i == 7 || $i == 8 ||$i == 9){
            $valores[$i] = 0.5;
        }elseif ($i == 17 || $i == 18 ||$i == 19){
            $valores[$i] = 0.5;
        }elseif ($i == 27 || $i == 28 ||$i == 29){
            $valores[$i] = 0.5;
        }elseif ($i == 37 || $i == 38 ||$i == 39){
            $valores[$i] = 0.5;
        }else{
            $valores[$i] = $i + 1;
        }
    }
    return $valores;
}

?>