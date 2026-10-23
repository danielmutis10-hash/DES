<?php
    include "funciones.php";

    $resultado = "";
    $simbolo = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $op1 = floatval(test_input($_POST["op1"]));
        $op2 = floatval(test_input($_POST["op2"]));
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
                $simbolo = "/";
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