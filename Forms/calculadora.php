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

    $resultado = "";
    $simbolo = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $op1 = floatval($_POST["op1"]);
        $op2 = floatval($_POST["op2"]);
        $operacion = $_POST["operacion"];

        switch ($operacion){
            case "suma":
                $resultado = sumar($op1, $op2);
                $simbolo = "+";
                break;
            case "resta":
                $resultado = restar($op1, $op2);
                $simbolo = "-";
                break;
            case "producto":
                $resultado = multiplicar($op1, $op2);
                $simbolo = "x";
                break;
            case "division":
                $resultado = dividir($op1, $op2);
                $simbolo = "";
                break;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reasultado calculadora</title>
</head>
<body>
    <div class="calculadora">
        <h2 id="titulo2">CALCULADORA</h2>
        <div class="solve">
            <br>
            <?php echo "$op1 $simbolo $op2 = $resultado";?>
        </div>
    </div>
</body>
</html>