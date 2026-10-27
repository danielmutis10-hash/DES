<?php
    function guardar_datos($nombre, $apellido1, $apellido2, $fecna, $localidad){
        $linea = cortar_posicion($nombre, 40);
        $linea .= cortar_posicion($apellido1, 41);
        $linea .= cortar_posicion($apellido2, 42);
        $linea .= cortar_posicion($fecna, 10);
        $linea .= cortar_posicion($localidad, 27);

        $linea .= "\n";

        $fichero = fopen("alumnos1.txt", "a");

        fwrite($fichero, $linea);
        fclose($fichero);

    }

    function cortar_posicion($a, $longitud){

        $cortar = mb_substr($a, 0, $longitud);

        return str_pad($cortar, $longitud, "", STR_PAD_RIGHT);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>