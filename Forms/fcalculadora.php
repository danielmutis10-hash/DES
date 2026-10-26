<?php
include "funciones.php";

$op1 = "";
$op2 = "";
$operacion = "suma";
$resultado = null;
$simbolo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $op1 = floatval(test_input($_POST["op1"]));
    $op2 = floatval(test_input($_POST["op2"]));
    $operacion = test_input($_POST['operacion']);


    switch ($operacion) {
        case 'suma': 
            $resultado = sumar($op1, $op2); 
            $simbolo = "+"; 
            break;
        case 'resta': 
            $resultado = restar($op1, $op2); 
            $simbolo = "-"; 
            break;
        case 'producto': 
            $resultado = multiplicar($op1, $op2); 
            $simbolo = "×"; 
            break;
        case 'division': 
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <div class="calculadora">
        <h1 id="titulo" >CALCULADORA</h1>

        <form name="calculadora" class="formulario" action="fcalculadora.php" method="post">
            <div class="form-group">
                <label>Operando 1:</label>
                <input type="text" name="op1" id="op1" size=15 required><br>
            </div>

            <div class="form-group">
                <label for="op2">Operando 2:</label>
                <input type="text" name="op2" id="op2" value="" size=15 required><br>
            </div>

            <div class="form-group">
                <label">Selecciona una operación</label>
                <div class="radio">
                    <label><input type="radio" name="operacion" value="suma">Suma</label>
                    <label><input type="radio" name="operacion" value="resta">Resta</label>
                    <label><input type="radio" name="operacion" value="producto">Producto</label>
                    <label><input type="radio" name="operacion" value="division">División</label>
                </div>
            </div>

            <div class="button">
                <button type="submit">Enviar</button>
                <button type="reset">Borrar</button>
            </div>


        </form>
    </div>

    <div class="calculadora">
        <h2 id="titulo2">CALCULADORA</h2>
        <div class="solve">
            <br>
            <?php echo "$op1 $simbolo $op2 = $resultado";?>
        </div>
    </div>

</body>
</html>