<?php
        
        require_once 'funciones.php';
       
        $numero1 = rand(1, 6);
        $numero2 = rand(1, 6);
        $produc = producto($numero1, $numero2);
         
        $resultado = "Producto mediante sumas<br /> Número 1: $numero1 <br />";
        $resultado .= "Número 2: $numero2 <br />";
        $resultado .= "Producto: $produc <br />";
        include "includes/resultado.php";
?>
