<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2.4 y 2.5</title>
    <style>
    table {
        width:300px;
        margin:auto;
        background-color:#ffc;
        border:2px solid #f00;
        padding:5px;
    }
    h2 {
        text-align:center;
        color:red;
    }
    h3 {
        text-align:center;
        color:blue;
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
<!-- Práctica 2.4.  Crea  un  programa  que almacene un nombre y dos apellidos en
variables. Luego los debe mostrar por pantalla. Amplía  el  programa  anterior  con  más  datos  personales.  Luego
muéstralos por pantalla en una ficha similar a la que se muestra a continuación: -->

<form action="Practica_2_4_Y_2_5.php" method="get"> <!-- formulario para recoger los datos del ejercicio, los puedo visualizar en la barra del navegador gracias al method="get" -->
    <table>
        <tr><td>Nombre</td><td> <input type="text" name="nombre"></td></tr>
        <tr><td>Apellidos</td><td> <input type="text" name="apellidos"></td></tr>
        <tr><td>Edad</td><td> <input type="text" name="edad"></td></tr>
        <tr><td>Domicilio</td><td> <input type="text" name="domicilio"></td></tr>
        <tr><td>Código Postal</td><td> <input type="text" name="cp"></td></tr>
        <tr><td>Teléfono</td><td> <input type="text" name="telefono"></td></tr>
        <tr><td>Profesión</td><td> <input type="text" name="profesion"></td></tr>
        <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Dale!">
        </td></tr></table>
</form>

    <?php

    /* isset($_GET["enviando"]) determina si al enviar los datos del formulario las variables devuelven un valor distinto a null o false
     y por tanto estan definidas por el usuario */
    if(isset($_GET["enviando"])){ 

        $busqueda_nom=$_GET["nombre"]; //variable que almacena el nombre que recoge del formulario 
        $busqueda_apellidos=$_GET["apellidos"]; //variable que almacena los apellidos que recoge del formulario
        $busqueda_edad=$_GET["edad"]; //variable que almacena la edad que recoge del formulario
        $busqueda_domicilio=$_GET["domicilio"]; //variable que almacena el domicilio que recoge del formulario
        $busqueda_cp=$_GET["cp"]; //variable que almacena el cp que recoge del formulario
        $busqueda_telefono=$_GET["telefono"]; //variable que almacena el telefono que recoge del formulario
        $busqueda_profe=$_GET["profesion"]; //variable que almacena la profesion que recoge del formulario

        echo "<h2>Bienvenid@ " . $busqueda_nom ." " . $busqueda_apellidos . "</h2>"; //mensaje que muestra un saludo con las variables

        echo "<h3>Estos son tus datos:</h3>";

        echo "<table id=t_resu>         
            <tr><td>Nombre: </td><td> <b>$busqueda_nom</b> </td></tr>
            <tr><td>Apellidos: </td><td> <b>$busqueda_apellidos</b> </td></tr>
            <tr><td>Edad: </td><td> <b>$busqueda_edad</b> </td></tr>
            <tr><td>Domicilio: </td><td> <b>$busqueda_domicilio</b> </td></tr>
            <tr><td>Código Postal: </td><td> <b>$busqueda_cp</b> </td></tr>
            <tr><td>Teléfono: </td><td> <b>$busqueda_telefono</b> </td></tr>
            <tr><td>Profesión: </td><td> <b>$busqueda_profe</b> </td></tr>   
        </table>"; //tabla que muestra los datos recogidos en las variables 
        
    }else{
        $busqueda_nom=""; 
        $busqueda_apellidos=""; 
        $busqueda_edad=""; 
        $busqueda_domicilio=""; 
        $busqueda_cp=""; 
        $busqueda_telefono=""; 
        $busqueda_profe="";
    }    
    
    ?>
    
</body>
</html>