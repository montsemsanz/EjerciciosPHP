<?php
     
     include "cabecera.php";
     // bucles 
    
     
     echo "<h3>Generando tabla de multiplicar de un nº</h3>\n";
    
     $numero = rand(1, 9);
     echo "<h4>Tabla de multiplicar del $numero</h4>";
     echo "<table>";
     for ($i = 1; $i <= $numero; $i++)
     {
          echo "<tr><td>$numero * $i </td><td>".($numero * $i)."</td></tr>\n";
     }
       
     echo "</table>"; 
     
     include "pie.php";
?>
