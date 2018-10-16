<?php
     include "cabecera.php";

     echo "<h3>Tabla de una fila</h3>";
     echo "<table><tr>";
     for ($c = 1; $c <= 10; $c++)
     {
         echo "<td> $c </td>";
     }
     echo "</tr>\n</table>";
     
     echo "<h3>Tabla de una columna</h3>";
     echo "<table>";
     for ($f = 1; $f <= 10; $f++)
     {
         echo "<tr><td> $f </td>\n</tr>";
     }
     echo "</table>";
     
     include "pie.php";
?>
