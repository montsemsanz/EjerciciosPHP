<?php
    include "cabecera.php";
?>
            <h3>Variables y tipos de datos</h3><hr />
            <?php
                /*
                 * Ejercicio para que resuelvan los alumnos
                 */
                 $nombre = "Pepe";
                 $edad = 23;
                 $altura = 1.78;
                 $modulo = 'Implantaci&oacute;n de aplicaciones web';
                 $horas = 5;
                 $pendientePrimero = true;
            ?>
            <h4>Datos de un alumno</h4>
            <?php 
                echo "<table><caption>Datos de un alumno</caption>\n";
                echo "<tr><td>Nombre</td><td> ".$nombre."</td></tr>\n";
                echo "<tr><td>Edad</td><td> ".$edad."</td></tr>\n";
                echo "<tr><td>Altura</td><td> ".$altura."</td></tr>\n";
                echo "<tr><td>M&oacute;dulo</td><td> $modulo</td></tr>\n";
                echo "<tr><td>Algo pendiente de primero?</td><td> ".$pendientePrimero."</td></tr>\n";
                echo "</table>\n";
                
       include "pie.php";          
               
?>
       
