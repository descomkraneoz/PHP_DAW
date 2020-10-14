<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.12</title>
</head>
<body>
    <!-- Práctica 2.12. Usa un bucle for para imprimir por pantalla las horas del día. -->

    <h1>Horas del día</h1>

    <?php        

        for ($hora = 0; $hora < 24; $hora++) {

            if ($hora !== 23) {

                echo $hora . "h. ";

            }else {

                echo $hora . "h. <br>";

            }	

        }

    ?>

</body>
</html>