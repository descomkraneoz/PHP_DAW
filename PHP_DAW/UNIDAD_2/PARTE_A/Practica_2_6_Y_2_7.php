<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.6 y 2.7</title>
    <style>
        h1, h2, h3{
            text-align: center;
        }
        table{
            width: 25%;
            background-color: #FFC;
            border: 2px dotted #F00;
            margin:auto;
        }  
        td{
            text-align: center;
            padding: 10px;
        }
        #t_resu {
        width:300px;
        margin:auto;
        background-color:#C4FFB3;
        border:2px solid blue;
        padding:5px;
    }
    </style>
</head>
<body>
    <!-- Práctica 2.6. Define dos constantes que contienen datos sobre el planeta Tierra:
su  radio  y  su  distancia  al  Sol  (en  kilómetros).  Luego  muéstralos  por  pantalla.
Puedes encontrar estos datos en http://es.wikipedia.org/wiki/Tierra. -->
<!-- Práctica 2.7.  Modifica el programa anterior añadiéndole la constante PI. Opera
con estas constantes para obtener la distancia de una vuelta al mundo siguiendo
el  ecuador  y  muéstrala  por  pantalla  (circunferencia  =  2  *  PI  *  radio).  Calcula
también a cuantas vueltas al mundo equivale la distancia entre la Tierra y el Sol, y
muéstralo por pantalla. -->

<h2>Planeta Tierra</h2>
    <table width="800" border="0">
    <tr>
    <td><img src="img/sol.jpg" width="300" height="280"></td>
    <td><img src="img/tierra.jpg" width="300" height="280"></td>
    </tr>
    <tr>
    <td><img src="img/distancia.jpg" width="300" height="280"></td>
    <td><img src="img/radio.png" width="300" height="280"></td>
    </tr>
    </table>

    <br>

    <h3>Curiosidades</h3>

    <?php

        define("RADIO_EN_KM",6378.1);

        define("DISTANCIA_AL_SOL_EN_KM",150000000);

        $vueltaEcuador= 2 * M_PI * RADIO_EN_KM; // 40.067 km        

        $vueltas=  (DISTANCIA_AL_SOL_EN_KM*1)/$vueltaEcuador; //3743448.9643125

        $radioEnKm=number_format(RADIO_EN_KM,2,',','.'); //number_format(número a convertir,decimales a mostrar,'separador decimal','separador de millares')

        $distanciaAlSolEnKm=number_format(DISTANCIA_AL_SOL_EN_KM,0,',','.');

        $vueltaEcuador= number_format($vueltaEcuador, 2, ",", ".");

        $vueltas= number_format($vueltas, 0, ",", ".");



        echo "<table id=t_resu>         
        <tr><td>Radio de la Tierra en Km: </td><td> <b>$radioEnKm</b> </td></tr>
        <tr><td>Distancia en Km al Sol: </td><td> <b>$distanciaAlSolEnKm</b> </td></tr>
        <tr><td>Distancia de una vuelta al mundo por el ecuador en Km: </td><td> <b>$vueltaEcuador</b> </td></tr>  
        <tr><td>Número de vueltas al mundo que equivale la distancia entre la Tierra y el Sol en Km: </td><td> <b>$vueltas</b> </td></tr>         
    </table>";

    ?>
    
</body>
</html>