<?php
include "funciones.php";

    //Creacion de los jugadores
    $jugadores = [
        $_POST['jugador1'] ?? 'Jugador1',
        $_POST['jugador2'] ?? 'Jugador2',
        $_POST['jugador3'] ?? 'Jugador3',
        $_POST['jugador4'] ?? 'Jugador4'
    ];

    //recogemos parametros que se piden en los campos html
    $cartasPorJugador = intval($_POST['cartas'] ?? 4);
    $apuestaTotal = floatval($_POST['apuesta'] ?? 300000);

    //creacion de la baraja y la removida de los valores del 7.5
    $baraja = crear_baraja();
    $valores = convertir($baraja);
    $valoresRemovidos = removerBaraja($valores);

    $partidaJugadores = array();
    $cartasJugador = array();
    $maxPuntuacion = 0;
    $ganador = 'Nadie';
    $premio = 0;

    foreach($jugadores as $nombreJugador){
        $puntosTotales = 0.0;

        for ($i = 0; $i < $cartasPorJugador; $i++){
            $indiceSacado = array_pop($valoresRemovidos); //sacamos el ultimo valor
            $cartaActual = $baraja[$indiceSacado]; /*Obtenemos el valor en cadena*/
            $puntosActuales = floatval($valores[$indiceSacado]); //saca el valor en puntos

            $cartasJugador[] = $cartaActual; /*guardamos la cadena de valores en 
            un array para cada jugador*/
            $puntosTotales += $puntosActuales;
        }

        //guardamos los resultados de cada uno de los jugadores en una partida
        $partidaJugadores[$nombreJugador] = [
            "cartas" => $cartasJugador, //guardamos las cartas de cada jugador
            "puntos" => $puntosTotales, //Sus puntos totales
            "premio" => $premio //aun no hecho 
        ];

        if ($puntosTotales <= 7.5 && $puntosTotales > $maxPuntuacion) {
            $maxPuntuacion = $puntosTotales;
            $ganador = $nombreJugador;
        }
    }

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado de la partida — Siete y Media</title>
    <link rel="stylesheet" href="css/end.css">
</head>

<body>
    <main class="shell">
        <header class="banner">
            <h1>🂡 Juego de las Siete y Media</h1>
            <p>Reto 2.2 · Resultado de la partida</p>
        </header>
        <section class="panel">
            
            <?php if ($maxPuntuacion > 0): ?>
                <div class="notice-1">¡Tenemos un ganador!</div>
                <div class="notice-2"><?= $ganador ?> ha ganado con <strong><?= $maxPuntuacion ?> puntos</strong> y recibe <?= number_format($apuestaTotal, 2, ',', '.') ?> €</div>
            <?php else: ?>
                <div class="notice-bad"> No hay ganadores: todos han superado 7,5 puntos. El bote acumulado es <?= number_format($apuestaTotal, 2, ',', '.') ?> € </div>
            <?php endif; ?>

            <h2>Cartas y puntuaciones</h2>
            <div class="tablewrap">
                <table class="score">
                    <thead>
                        <tr>
                            <th>Jugador</th>
                            <th>Cartas obtenidas</th>
                            <th>Puntuación</th>
                            <th>Premio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($partidaJugadores as $nombre => $datos){ 
                            $esGanador = ($nombre == $ganador);?>
                            <tr class="<?= $esGanador ? 'win' : '' ?>">
                                <td><strong><?= $nombre ?></td>
                                <td>
                                    <div class="cards">
                                        <?php foreach ($datos['cartas'] as $carta){ ?>
                                            <div class="playing">
                                                <img src="images/<?= $carta ?>.PNG" width="40">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </td>
                                <td>
                                    <span class="total"><?= number_format($datos['puntos'] ,1 , '.') ?></span>
                                </td>
                                <td>
                                    <span class="premio-jugador"><?= number_format($datos['premio'] ,2 , ',' , '.') ?></span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <p style="margin-top:22px"><a class="back" href="media7.html">← Volver al formulario</a></p>
        </section>
    </main>
</body>

</html>