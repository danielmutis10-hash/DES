<?php
include "funciones.php";

$op = "";
$binario = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $op = test_input($_POST["numero"] ?? "");
    
    $binario = binario($op);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conversor</title>
</head>
<body>

    <div class="resultado">
        <strong>Resultado de la conversión</strong><br>
        <h5>Número Decimal:</h5> 
        <?php echo $op; ?>
        <br>
        <h5>Número Binario:</h5>
        <?php echo $binario; ?>
    </div>
    
</body>
</html>