<?php
     include "cabecera.php";
     // generamos una serie de enlaces
     
     echo "<h3>Generando enlaces</h3>";
     
     for ($i = 1; $i <= 10; $i++)
     {
         echo "<p><a href='#' />  Enlace $i </p>\n";
     }
      
     
     include "pie.php";
?>
