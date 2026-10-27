<?php    
    function sumar($a, $b){
        return $a + $b;
    }

    function restar($a, $b){
        return $a - $b;
    }

    function multiplicar($a, $b)
    {
        return $a * $b;
    }

    function dividir($a, $b){
        if ($b == 0){
            return U_ZERO_ERROR;
        }
        return $a / $b;
    }

    function binario($a){
        if ($a !== ""){
            return decbin(intval($a));
        }
        return "";
    }

    function octal($a){
        if ($a !== ""){
            return decoct(intval($a));
        }
        return "";
    }

    function hexadecimal($a){
        if ($a !== ""){
            return dechex(strval($a));
        }
        return "";
    }

    function guardar_datos($nombre, $apellido1, $apellido2, $email, $sexo){
        
        $registro = "$nombre;$apellido1;$apellido2;$email;$sexo\n";

        file_put_contents("datos.txt",$registro, FILE_APPEND);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>