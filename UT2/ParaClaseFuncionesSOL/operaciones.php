<?php
      
       require_once 'funciones.php';
      
      
      
      $numero1 = 5;
      $numero2 = 6;
      $suma = sumar($numero1, $numero2);
      $resta = restar($numero1, $numero2);
      $producto = multiplicar($numero1, $numero2);
      $cuadrado = cuadrado($numero1);
      
      $resultado = "N&uacute;mero1: $numero1 N&uacute;mero2: $numero2<br />\n";
      $resultado .= "Suma: $suma <br/>\n";
      $resultado .= "Resta: $resta<br />\n";
      $resultado .= "Producto: $producto<br />\n";
      $resultado .= "Cuadrado: $cuadrado";
      
      include "includes/resultado.php"; // vista resultado, plantilla
     
?>
