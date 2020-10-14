<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2.1 y 2.2</title>
</head>
<body>

<!-- Práctica 2.1. Crea un programa que saque tres veces por pantalla el texto "En un
lugar de la mancha...". Cada vez que muestre el mensaje debe hacerlo mediante
una forma distinta. Para ello, utiliza las tres formas que se han visto de sacar
resultados por pantalla. -->

<!-- Práctica 2.2. Añade comentarios al programa anterior. -->

    <?php
        
        static $texto ="<h2>En un lugar de la Mancha...</h2>"; //variable estática con el texto que voy a mostrar, la puse estática porque no va a cambiar  

        echo "<h2>Utilizando la instrucción echo: </h2>" . $texto . "<br>"; //Se limita a interpretar el texto que se pone a continuación e insertarlo en la página web.

        print("<h2>Utilizando la instrucción print: </h2>" . $texto . "<br>"); //Hace lo mismo que echo pero su funcionamiento depende de su activación en la configuración del servidor.

    ?>

    <?= "<h2>Utilizando la etiqueta: < ? = ... ? > </h2>" . $texto . "<br>" ?> <!-- Es otra forma del echo -->
    
</body>
</html>