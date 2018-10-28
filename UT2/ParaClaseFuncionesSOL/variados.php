<?php

        include "includes/cabecera.php";
        require_once 'funciones.php';
       

        $precio = 456;
        $descuento = 6;
        echo "<p>Precio: " . $precio . "&euro;</p>\n";
        echo "<p>Descuento: " . $descuento . "%</p>\n";
        echo "<p>Precio final con descuento: " . calcularPrecioFinal($precio, $descuento) . "&euro;</p>\n";
        lineaHorizontal();
        $dia = 6;
        echo "<p>El d&iacute;a correspondiente al n&deg; " . $dia . " es " . diaSemana($dia) . "</p>\n";
        lineaHorizontal();
        $horas = 3;
        $minutos = 36;
        echo "<p>$horas hora y $minutos minutos son " . totalSegundos($horas, $minutos) . " segundos</p>\n";
        lineaHorizontal();
        echo "<p>El g&eacute;nero correspondiente a 'FIC' es ".nombreGenero('FIC')."</p>\n";
        lineaHorizontal();
        include "includes/pie.php";
?>
