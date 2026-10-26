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

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>