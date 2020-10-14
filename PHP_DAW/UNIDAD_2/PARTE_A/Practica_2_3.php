<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2.3</title>
    <style>
    table {
        width:300px;
        margin:auto;
        background-color:#ffc;
        border:2px solid #f00;
        padding:5px;
    }
    h1 {
        text-align:center;
        color:blue;
    }
    </style>
</head>
<body>
<!-- Práctica 2.3.  Crea  un  programa  que almacene un nombre y dos apellidos en
variables. Luego los debe mostrar por pantalla. -->

<form action="Practica_2_3.php" method="get"> <!-- formulario para recoger los datos del ejercicio, los puedo visualizar en la barra del navegador gracias al method="get" -->
    <table>
        <tr><td>Nombre: </td><td> <input type="text" name="nombre"></td></tr>
        <tr><td>Primer apellido</td><td> <input type="text" name="ape_uno"></td></tr>
        <tr><td>Segundo apellido</td><td> <input type="text" name="ape_dos"></td></tr>
        <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Dale!">
        </td></tr></table>
</form>

    <?php

    if(isset($_GET["enviando"])){ 

        $busqueda_nom=$_GET["nombre"]; //variable que almacena el nombre que recoge del formulario 
        $busqueda_ape_uno=$_GET["ape_uno"]; //variable que almacena el primer apellido que recoge del formulario
        $busqueda_ape_dos=$_GET["ape_dos"]; //variable que almacena el segundo apellido que recoge del formulario

    echo "<h1>Bienvenid@ " . $busqueda_nom ." " . $busqueda_ape_uno ." " . $busqueda_ape_dos . "</h1>"; //mensaje que muestra un saludo con las variables

    }else{

        $busqueda_nom=""; 
        $busqueda_ape_uno=""; 
        $busqueda_ape_dos=""; 

        echo "<h1>Bienvenid@, rellena el formulario</h1>";

    }


    ?>
    
</body>
</html>