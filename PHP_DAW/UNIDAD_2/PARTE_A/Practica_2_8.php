<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.8</title>
    <style>
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
    <!-- Práctica 2.8. Crea un programa que muestre un tiquet de compra de una frutería.
Los precios de los productos se deben guardar en constantes y los pesos en
variables.
Para redondear los precios de la compra se puede usar la función number_format()
de la siguiente manera:(aprecha, ve al manual on-line de php, y busca para que
sirve y cómo utilizar esta función) -->

    <?php

    define('JUDIAS', "Judías");

    define('PRECIO_JUDIAS', 3.50);

    $peso_judias = 1.21;

    $coste_judias = number_format(PRECIO_JUDIAS * $peso_judias,2);

    define('PATATAS',"Patatas");

    define('PRECIO_PATATAS',0.40);

    $peso_patatas = 1.73;

    $coste_patatas = number_format(PRECIO_PATATAS * $peso_patatas,2);

    define('TOMATES',"Tomates");

    define('PRECIO_TOMATES',1.00);

    $peso_tomates = 2.08;

    $coste_tomates = number_format(PRECIO_TOMATES * $peso_tomates,2);

    define('MANZANAS',"Manzanas");

    define('PRECIO_MANZANAS',1.20);

    $peso_manzanas = 2.15;

    $coste_manzanas = number_format(PRECIO_MANZANAS * $peso_manzanas,2);

    define('UVAS',"Uvas");

    define('PRECIO_UVAS',2.50);

    $peso_uvas = 0.77;

    $coste_uvas = number_format(PRECIO_UVAS * $peso_uvas,2);

    $total= $coste_judias + $coste_patatas + $coste_tomates + $coste_manzanas + $coste_uvas;

    $total= number_format($total, 2);

    //echo number_format($coste_judias, 2);

    echo "<h3></h3>";

        echo "<table>
        <caption>Ticket - Frutería Virgen de las coles</caption>         
            <thead><th>Producto</th>
                <th>Precio/kg</th>
                    <th>Peso</th>
                        <th>Precio</th></thead>
            <tbody>
            <tr><td>".JUDIAS."</td>
                <td>".PRECIO_JUDIAS."</td>
                    <td>$peso_judias</td>
                        <td>$coste_judias</td></tr>
            <tr><td>".PATATAS."</td>
                <td>".PRECIO_PATATAS."</td>
                    <td>$peso_patatas</td>
                        <td>$coste_patatas</td></tr>
            <tr><td>".TOMATES."</td>
                <td>".PRECIO_TOMATES."</td>
                    <td>$peso_tomates</td>
                        <td>$coste_tomates</td></tr>
            <tr><td>".MANZANAS."</td>
                <td>".PRECIO_MANZANAS."</td>
                    <td>$peso_manzanas</td>
                        <td>$coste_manzanas</td></tr>
            <tr><td>".UVAS."</td>
                <td>".PRECIO_UVAS."</td>
                    <td>$peso_uvas</td>
                        <td>$coste_uvas</td></tr>
            </tbody>
            <tfoot>
                <tr><td colspan='4' id='coste'>Total: $total euros</td></tr>
                <tr><td colspan='4'>Gracias por su visita vuelva pronto</tr>
            </tfoot>
        </table>";

    ?>
    
</body>
</html>