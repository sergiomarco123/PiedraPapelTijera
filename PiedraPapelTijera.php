<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
</head>
<body>
    <h1>¡Piedra, papel, tijera!</h1>
    <p>Actualice la página para mostrar otra partida</p><br></br>
    <label><b>Jugador 1 </b></label><label><b>Jugador 2</b></label><br>

    <?php   
        $movimientosJ1=
        ["piedra"=> "&#x1F91C;",
        "papel"=>"&#x1F596",
        "tijera"=>"&#x1F91A;"];

        $movimientosJ2=
        ["piedra"=>"&#x1F91B;",
        "papel"=>"&#x1F596",
        "tijera"=>"&#x1F91A;"];            

        $resolucion1 = array_rand($movimientosJ1);
        $emoji1 = $movimientosJ1["$resolucion1"];
        $resolucion2 = array_rand($movimientosJ2);
        $emoji2 = $movimientosJ2["$resolucion2"];
        echo "<label style='font-size:50px'>$emoji1</label>";
        echo "<label style='font-size:50px'>$emoji2</label><br></br>";
        
            if ($resolucion1 == $resolucion2) {
                echo "Empate";
            } elseif (($resolucion1 == 'piedra' && $resolucion2 == 'tijera') ||
                      ($resolucion1 == 'papel' && $resolucion2 == 'piedra') ||
                      ($resolucion1 == 'tijera' && $resolucion2 == 'papel')) {
                echo "¡Ha ganado Jugador 1!";
            } else {
                echo "¡Ha ganado jugador 2!";
            }
        
    

    ?>

</body>
</html>