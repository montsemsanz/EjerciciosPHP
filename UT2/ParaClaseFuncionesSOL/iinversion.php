<?php
      require_once 'funciones.php';
      
       
      
      $cantidad = 1500;
       
      $años = 6;
      $nuevaCantidad = calcularCantidad($cantidad, $años);
      
      
      $resultado = "Cantidad inicial $cantidad<br />";
      $resultado .= "Inter&eacute;s: ".INTERES." % <br/>";
      $resultado .= "Años: $años<br />";
      $resultado .= "Nueva cantidad: ".number_format($nuevaCantidad, 2)."<br />";
      
      
      include "includes/resultado.php"; // vista resultado, plantilla
     
?>
