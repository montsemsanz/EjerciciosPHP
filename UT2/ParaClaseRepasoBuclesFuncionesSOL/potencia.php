<?php
        require_once 'funciones.php';
        
        $numero1 = rand(1, 6);
        $numero2 = rand(1, 6);
        $poten = potencia($numero1, $numero2);
         
        $resultado = "Potencia de dos nºs<br /> Número 1: $numero1 <br />";
        $resultado .= "Número 2: $numero2 <br />";
        $resultado .= "Potencia: $poten <br />";
        include "includes/resultado.php";
?>
