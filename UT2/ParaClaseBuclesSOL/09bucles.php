<?php
     
     include "cabecera.php";
     // bucles anidados
    
     
     echo "<h3>Generando tabla de multiplicar hasta un nº</h3>\n";
    
     $numero = rand(1, 9);
     echo "<h4>Tabla de multiplicar hasta el $numero</h4>";
     echo "<table><tr><th>X</th>";
     for ($i = 1; $i <= 10; $i++)
     {
          echo "<th> $i </th>";
     }
     echo "</tr>\n";
     for ($f = 1; $f <= $numero; $f++)
     {
         
         echo "<tr><td>$f</td>";
         for ($c = 1; $c <= 10; $c++)
         {
              echo "<td>".($f * $c)."</td>";
         }
         echo "</tr>\n";
     }
       
     echo "</table>"; 
     
     include "pie.php";
?>
