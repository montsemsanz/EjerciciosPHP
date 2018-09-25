<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenido">
        <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
        <div id="principal">
            <h3>Variables y tipos de datos - Constantes</h3><hr />
            <?php
                // trabajamos con variables y constantes
                 define ("INSTITUTO", 'María Ana Sanz');
                 define ("HORAS", 5);
                 $nombre = "Pepe";
                 $edad = 23;
                 $altura = 1.78;
                 $modulo = 'Implantaci&oacute;n de aplicaciones web';
                 $pendientePrimero = true;
            ?>
            <h4>Datos de un alumno</h4>
            <?php 
                echo "<p>Instituto: ".INSTITUTO." </p>\n";
                echo "<p>Nombre: ".$nombre."</p>\n";
                echo "<p>Edad: $edad</p>\n";
                echo '<p>Altura: '.$altura.'</p>'; // no se puede interpolar (expandir) con comillas simples
                echo "<p>Módulo: $modulo</p>\n";
                echo '<p>Horas:  '.HORAS.'</p>'; // las constantes no se expanden
                echo '<p>Algo pendiente de primero?:'.$pendientePrimero.'</p>';
            ?>
              
         </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
