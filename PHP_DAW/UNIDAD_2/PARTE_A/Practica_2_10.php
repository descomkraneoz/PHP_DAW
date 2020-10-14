<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.10</title>
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
    <!-- Práctica 2.10.  Amplia el programa anterior comparando precios de productos
("Los tomates son más baratos que las judías...") -->

<h1>Comparador de precios de los Alimentos</h1>

<form action="Practica_2_10.php" method="get">

<label>Producto Uno: </label><select name="productoUno">
<option value="0">...</option>
<option value="JUDIAS">Judías</option>
<option value="PATATAS">Patatas</option>
<option value="TOMATES">Tomates</option>
<option value="MANZANAS">Manzanas</option>
<option value="UVAS">Uvas</option>
</select>
<label>&nbsp;</label>
<label>Producto Dos: </label><select name="productoDos">
<option value="0">...</option>
<option value="JUDIAS">Judías</option>
<option value="PATATAS">Patatas</option>
<option value="TOMATES">Tomates</option>
<option value="MANZANAS">Manzanas</option>
<option value="UVAS">Uvas</option>
</select>
<br><br>
<input type="submit" name="enviando" value="¡Compara!">

</form>
    

    <?php

    define('PRECIO_JUDIAS', 3.50);

    define('PRECIO_PATATAS',0.40);

    define('PRECIO_TOMATES',1.00); 

    define('PRECIO_MANZANAS',1.20);    

    define('PRECIO_UVAS',2.50);
    

    if(isset($_GET["enviando"])){ 

        $busqueda_alimento_uno=$_GET["productoUno"]; //variable que almacena el primer alimento que recoge del formulario
        $busqueda_alimento_dos=$_GET["productoDos"]; //variable que almacena el segundo alimento que recoge del formulario

        $compara_alimento_uno="";
        $compara_alimento_dos="";

        switch($busqueda_alimento_uno){

            case "JUDIAS":
                $compara_alimento_uno=PRECIO_JUDIAS;
                break;

            case "PATATAS":
                $compara_alimento_uno=PRECIO_PATATAS;
                break;

            case "TOMATES":
                $compara_alimento_uno=PRECIO_TOMATES;
                break;

            case "MANZANAS":
                $compara_alimento_uno=PRECIO_MANZANAS;
                break;

            case "UVAS":
                $compara_alimento_uno=PRECIO_UVAS;
                break;
        }

        switch($busqueda_alimento_dos){

            case "JUDIAS":
                $compara_alimento_dos=PRECIO_JUDIAS;
                break;

            case "PATATAS":
                $compara_alimento_dos=PRECIO_PATATAS;
                break;

            case "TOMATES":
                $compara_alimento_dos=PRECIO_TOMATES;
                break;

            case "MANZANAS":
                $compara_alimento_dos=PRECIO_MANZANAS;
                break;

            case "UVAS":
                $compara_alimento_dos=PRECIO_UVAS;
                break;
        }

        //paso de variables a minúsculas, es un paso meramente estético
        $busqueda_alimento_uno=strtolower($busqueda_alimento_uno);
        $busqueda_alimento_dos=strtolower($busqueda_alimento_dos);

        //Comprobación de ver que alimento es más caro y cual más barato
        if($compara_alimento_uno>$compara_alimento_dos){

            echo "<h3>El alimento " . ucfirst($busqueda_alimento_uno) . " tienen un precio mas alto que " . ucfirst($busqueda_alimento_dos) . "</h3><br>"; 

        }elseif($compara_alimento_uno==$compara_alimento_dos){

            echo "<h3>El alimento " . ucfirst($busqueda_alimento_uno) . " tiene el mismo precio que " . ucfirst($busqueda_alimento_dos) . "</h3><br>"; 
        
        }else{

            echo "<h3>El alimento " . ucfirst($busqueda_alimento_uno) . " tienen un precio mas bajo que " . ucfirst($busqueda_alimento_dos) . "</h3><br>";

        }                        

    }else{

        $busqueda_alimento_uno=""; 
        $busqueda_alimento_dos=""; 

        echo "<h1>Bienvenid@, elige para comparar</h1>";

    }


    ?>


</body>
</html>