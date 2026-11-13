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
    $maxPuntuacion = 0;
    $ganador = 'Nadie';

    foreach($jugadores as $nombreJugador){
        $cartasJugador = array();
        $puntosTotales = 0.0;

        for ($i = 0; $i < $cartasPorJugador; $i++){
            $indiceSacado = array_pop($valoresRemovidos);
            $cartaActual = $baraja[$indiceSacado];
            $puntosActuales = floatval($valores[$indiceSacado]);

            $cartasJugador[] = $cartaActual;
            $puntosTotales += $puntosActuales;
        }

        $partidaJugadores[$nombreJugador] = [
            "cartas" => $cartasJugador,
            "puntos" => $puntosTotales
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
                <div class="notice">El ganador es <strong><?= $ganador ?></strong> con un total de <strong><?= $maxPuntuacion ?> puntos</strong>! Apuesta en juego: <?= number_format($apuestaTotal, 2, ',', '.') ?> €</div>
            <?php else: ?>
                <div class="notice bad"> Todos los jugadores se han pasado de 7.5 puntos o no hay ganador válido en esta ronda.</div>
            <?php endif; ?>

            <h2>Cartas y puntuaciones</h2>
            <div class="tablewrap">
                <table class="score">
                    <thead>
                        <tr>
                            <th>Jugador</th>
                            <th>Cartas obtenidas</th>
                            <th>Puntuación total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($partidaJugadores as $nombre => $datos){ 
                            $esGanador = ($nombre == $ganador);?>
                            <tr class="<?= $esGanador ? 'win' : '' ?>">
                                <td><strong><?= $nombre ?></strong> <?= $esGanador ?></td>
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
                                    <span class="total"><?= $datos['puntos'] ?> pts</span>
                                    <?php if ($datos['puntos'] > 7.5){ ?>
                                        <small style="color:red; display:block;">(¡Te pasaste!)</small>
                                    <?php } ?>
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