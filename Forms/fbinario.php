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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
    <div class="binario">
        <h1 id="titulo" >CONVERSOR BINARIO</h1>

        <form name="binario" class="formulario" action="fbinario.php" method="post">
            <div class="form-group">
                <label>Número Decimal:</label>
                <input type="number" name="op" id="op" size=15 required><br>
            </div>

            <div class="button">
                <button type="submit">Enviar</button>
                <button type="reset">Borrar</button>
            </div>
        </form>
        
        

    </div>

    <div class="resultado">
        <br>
        <strong>Resultado de la conversión</strong><br>
        <h5>Número Decimal: <?php echo $op; ?> </h5>
        <h5>Número Binario: <?php echo $binario; ?></h5>
    </div>

</body>
</html>
