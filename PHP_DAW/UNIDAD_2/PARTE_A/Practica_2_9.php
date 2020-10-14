<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.9</title>
    <style>
        h2{
            text-align: center;
        }
    table {
        width:300px;
        margin:auto;
        background-color:#ffc;
        border:2px solid #f00;
        padding:5px;
    } 
    td {
        text-align:center;
    }   
    
    #coste{
        text-align:right;
        background-color:#f00;
        border:2px solid #ffc;
        
    }

    </style>
</head>
<body>
    <!-- Práctica  2.9.  Este  nuevo  programa  utiliza  las  constantes  del  ejercicio  2.8.
Usando la sentencia if para comparar precios, muestra el nombre de aquellos
productos que cuesten menos de 1.50 euros/kg. -->

    <?php

    define('PRECIO_A_COMPARAR', 1.5);//constante del precio para hacer comparaciones con los productos

    define('JUDIAS', "Judías");

    define('PRECIO_JUDIAS', 3.50);    

    define('PATATAS',"Patatas");

    define('PRECIO_PATATAS',0.40);    

    define('TOMATES',"Tomates");

    define('PRECIO_TOMATES',1.00);    

    define('MANZANAS',"Manzanas");

    define('PRECIO_MANZANAS',1.20);
    
    define('UVAS',"Uvas");

    define('PRECIO_UVAS',2.50);
    

    $alimentos = array("judias"=>array(JUDIAS,
                                    PRECIO_JUDIAS),

                    "patatas"=>array(PATATAS,
                                    PRECIO_PATATAS),

                    "tomates"=>array(TOMATES,
                                    PRECIO_TOMATES),

                    "manzanas"=>array(MANZANAS,
                                    PRECIO_MANZANAS),

                    "uvas"=>array(UVAS,
                                    PRECIO_UVAS),
                                
                                );

    if (PRECIO_JUDIAS>PRECIO_A_COMPARAR) {        

        unset($alimentos['judias']);//elimino del array las judias por ser su precio mayor de 1.5 euros/kg        

    }else { 
        
        echo var_dump($alimentos['judias']); //imprimo las judias si su precio es menor de 1.5 euros/kg

    }

    if (PRECIO_PATATAS>PRECIO_A_COMPARAR) {        

        unset($alimentos['patatas']);
        

    }else { 
        
        echo var_dump($alimentos['patatas']); 

    }

    if (PRECIO_TOMATES>PRECIO_A_COMPARAR) {        

        unset($alimentos['tomates']);
        

    }else { 
        
        echo var_dump($alimentos['tomates']); 

    }

    if (PRECIO_MANZANAS>PRECIO_A_COMPARAR) {        

        unset($alimentos['manzanas']);
        

    }else { 
        
        echo var_dump($alimentos['manzanas']); 

    }

    if (PRECIO_UVAS>PRECIO_A_COMPARAR) {        

        unset($alimentos['uvas']);
        

    }else { 
        
        echo var_dump($alimentos['uvas']); 

    }

    ?>
    
</body>
</html>