<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.13 y 2.14</title>
</head>
<body>

    <!-- Práctica 2.13. Usa dos (y sólo dos) bucles for anidados para imprimir por
pantalla las horas del día y sus cuartos. -->

    <!-- Práctica 2.14. Modifica el programa anterior para que distinga entre AM y PM,
obteniendo un resultado similar al siguiente: -->

    <?php

    $cuartosDeHoras = array("00", "15", "30", "45");        

        for ($hora = 0; $hora < 24; $hora++) {            

            for($cuarto = 0; $cuarto<count($cuartosDeHoras); $cuarto++){

                if ($hora !== 23) {

                    //echo $hora . " h. ".$cuartosDeHoras[$cuarto] . " m.<br>";

                }else {

                //echo $hora . "h. ".$cuartosDeHoras[$cuarto] . " m.<br>";

                }

                if($hora>=0 && $hora<=11){

                    echo "Son las ".$hora . " AM y ".$cuartosDeHoras[$cuarto] . " minutos.<br>";

                }else{

                    echo "Son las ".$hora . " PM y ".$cuartosDeHoras[$cuarto] . " minutos.<br>";

                }

            }

        }

    ?>

</body>
</html>