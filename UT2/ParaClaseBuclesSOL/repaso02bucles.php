<?php
        include "cabecera.php";
        
        echo "<h3>Filas formando triángulo</h3>";
        
        echo "<table> \n";
         
        for ($fila = 1; $fila <= 8; $fila++)
        {
            echo "<tr><td class='menor'>$fila</td>";
           
            for ($columna = 1; $columna < $fila; $columna++)
            {
                 echo "<td>$columna</td>";               
            }
            echo "<td class='amarillo'>$fila</td></tr>";
            
        }
        echo "</table>";
        
        include "pie.php"
?>
