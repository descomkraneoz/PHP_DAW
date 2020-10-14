<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.11</title>
    <style>
        h1, h3{
            text-align: center;
        }
    form {
        width:400px;
        margin:auto;
        background-color:#ffc;
        border:2px solid #f00;
        padding:5px;
    } 
    

    </style>
</head>
<body>
    <!-- Práctica 2.11.  Completa el siguiente programa que dado un nombre de fruta
nos dice su precio, utilizando las constantes del ejercicio 2.8. En el caso de que
la  fruta  no  tenga  asignado  un  precio  debe  dar  el  mensaje  "No  quedan
existencias de esta fruta". -->

<h1>Elige alimento para ver su precio</h1>

<form action="Practica_2_11.php" method="get">

<label>Producto: </label><select name="productoUno">
<option value="0">...</option>
<option value="JUDIAS">Judías</option>
<option value="PATATAS">Patatas</option>
<option value="TOMATES">Tomates</option>
<option value="MANZANAS">Manzanas</option>
<option value="UVAS">Uvas</option>
</select>
<label>&nbsp;</label>
<br><br>
<input type="submit" name="enviando" value="¡Ver Precio!">

</form>
    

    <?php

    define('PRECIO_JUDIAS', 3.50);

    define('PRECIO_PATATAS',0.40);

    define('PRECIO_TOMATES',1.00); 

    define('PRECIO_MANZANAS',1.20);    

    define('PRECIO_UVAS',2.50);
    

    if(isset($_GET["enviando"])){ 

        $busqueda_alimento_uno=$_GET["productoUno"]; //variable que almacena el primer alimento que recoge del formulario

        $mensaje="El precio del alimento ".$busqueda_alimento_uno. " es: ";

        switch($busqueda_alimento_uno){

            case "JUDIAS":
                echo "<h3>".$mensaje ." ". PRECIO_JUDIAS ." euros/kg</h3>";
                break;

            case "PATATAS":
                echo "<h3>".$mensaje ." ". PRECIO_PATATAS." euros/kg</h3>";
                break;

            case "TOMATES":
                echo "<h3>".$mensaje ." ". PRECIO_TOMATES." euros/kg</h3>";
                break;

            case "MANZANAS":
                echo "<h3>".$mensaje ." ". PRECIO_MANZANAS." euros/kg</h3>";
                break;

            case "UVAS":
                echo "<h3>".$mensaje ." ". PRECIO_UVAS." euros/kg</h3>";
                break;

            default:
            echo "<h3>No quedan existencias de esa fruta</h3>";
            break;
        }           

    }else{

        $busqueda_alimento_uno=""; 

        echo "<h1>Bienvenid@, elige para ver su precio</h1>";

    }


    ?>


</body>
</html>