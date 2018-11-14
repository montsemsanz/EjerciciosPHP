<?php
      include "includes/cabecera.php";
      
    
      
      foreach ($resul as $art)
      {
          
          echo "<div class='articulo'>";
          echo "<span class='descripcion'>Descripción ".$art['desc']."</span>";
          echo "<span class='precio'>Precio ".$art['precio']."</span>";
          echo "</div>";
      }
     
      
      include "includes/pie.php";
?>
