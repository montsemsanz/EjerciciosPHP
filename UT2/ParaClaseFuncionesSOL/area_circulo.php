<?php
      require_once 'funciones.php';
      
      
      $radio = 5;
      $area = areaCirculo($radio);
      $resultado = "El &aacute;rea de un c&iacute;rculo de radio $radio es ".number_format($area, 2);
      
      include "includes/resultado.php"; // vista resultado, plantilla
     

