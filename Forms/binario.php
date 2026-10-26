<?php
include "funciones.php";

$op = "";
$binario = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $op = test_input($_POST["op"] ?? "");
    
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
        <h5>Número Decimal: <?php echo $op; ?> </h5>
        <h5>Número Binario: <?php echo $binario; ?></h5>
    </div>
    
</body>
</html>