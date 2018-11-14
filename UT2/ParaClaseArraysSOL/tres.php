<?php

        require_once 'funciones.php';
        include "includes/cabecera.php";

        $barrio = "ITURRAMA";
        echo "<p>Código postal de $barrio: " . queCodigoPostalTiene($barrio);
        echo "<hr />";
        $barrio = "ROCHAPEA";
        echo "<p>Código postal de $barrio: " . queCodigoPostalTiene($barrio);
        include "includes/pie.php";
?>
