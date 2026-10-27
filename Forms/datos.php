<?php
    include "funciones.php";

    $nombre = "";
    $apellido1 = "";
    $apellido2 = "";
    $email = "";
    $sexo = "";
    $error = "";
    $exito = false;

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nombre = strval(test_input($_POST["nombre"] ?? ""));
        $apellido1 = strval(test_input($_POST["ape1"] ?? ""));
        $apellido2 = strval(test_input($_POST["ape2"] ?? ""));
        $email = strval(test_input($_POST["email"] ?? ""));
        $sexo = strval(test_input($_POST["sexo"] ?? ""));

        if(empty($nombre) || empty($email) || empty($sexo)){
            $error = "Por favor, rellene todos los campos obligatorios";
        }else{
            $exito = true;

            guardar_datos($nombre,$apellido1,$apellido2,$email,$sexo);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado datos</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .resultado-box{
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 420px;
        }

        h2{
            color: #1a365d;
            font-size: 18px;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .alert-success{
            background-color: #f0fff4;
            border: 1px solid #c6f6d5;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
            color: #22543d;
            font-weight: bold;
            font-size: 13px;
        }

        .alert-error{
            background-color: #fff5f5;
            border: 1px solid #fed7d7;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
            color: #c53030;
            font-weight: bold;
            font-size: 13px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        th, td{
            border: 1px solid #e2e8f0;
            padding: 8px 12px;
            text-align: left;
        }

        th{
            background-color: #f7fafc;
            color: #4a5568;
        }

        td{
            color: #2d3748;
        }

        .btn-volver{
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #2b6cb0;
            font-weight: bold;
            font-size: 14px;
        }

        .btn-volver:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="resultado-box">
        <h2>Datos Alumnos</h2>

        <?php if ($exito){?>
            <div class="alert-success">
                Datos guardados correctamente
            </div>

            <!-- Tabla HTML con los datos introducidos -->
            <table>
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td><?php echo $nombre; ?></td>
                </tr>
                <tr>
                    <td><strong>Apellido1</strong></td>
                    <td><?php echo $apellido1; ?></td>
                </tr>
                <tr>
                    <td><strong>Apellido2</strong></td>
                    <td><?php echo $apellido2; ?></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td><strong>Sexo</strong></td>
                    <td><?php echo $sexo; ?></td>
                </tr>
            </table>
        <?php }else{?>
            <div class="alert-error">
                <?php echo $error; ?>
            </div>
        <?php }?>

    </div>
</body>
</html>