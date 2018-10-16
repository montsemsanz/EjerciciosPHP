<?php
     include "cabecera.php";
     echo "<h3>Lista de viñetas con for</h3>";
     echo "<ul>";
     for ($i = 1; $i <= 10; $i++)
     {
         echo "<li> Iteración $i </li>";
     }
     echo "</ul>";
     
     echo "<h3>Lista de viñetas con while</h3>";
     echo "<ol>";
     $i = 1;
     while ($i <= 10)
     {
         echo "<li> Iteración $i </li>";
         $i++;
     }
     echo "</ol>";
    
     include "pie.php";
?>
