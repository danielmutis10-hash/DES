<?php
include "funciones.php";

$op = "";
$conversion = "todos";
$binario = "";
$octal = "";
$hexadecimal = "";
$mostrar = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $op = intval(test_input($_POST["op"] ?? ""));
    $conversion = $_POST["operacion"] ?? "todos";

    if ($op !== "") {
        $mostrar = true;
    
        $binario = binario($op);
        $octal = octal($op);
        $hexadecimal = hexadecimal($op);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Conversor</title>
</head>
<body>

<div class="conversor">
    <h2>CONVERSOR NUMERICO</h2>

    <?php if ($mostrar){ ?>
        <div class="resultado">
            <strong>Resultado de la conversión</strong>

            <h5>Número Decimal: <?php echo $op; ?></h5>
            
            <?php if ($conversion == 'binario' || $conversion == 'todos'){ ?>
                <h5>Número Binario: <?php echo $binario; ?></h5>
            <?php } ?>
            
            <?php if ($conversion == 'octal' || $conversion == 'todos'){ ?>
                <h5>Número Octal: <?php echo $octal; ?></h5>
            <?php } ?>
            
            <?php if ($conversion == 'hexadecimal' || $conversion == 'todos'){ ?>
                <h5>Número Hexadecimal: <?php echo $hexadecimal; ?></h5>
            <?php } ?>
        </div>
    <?php } ?>
</div>

</body>
</html>