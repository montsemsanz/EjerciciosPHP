<?php
    require_once "includes/cabecera.php";
    
    $frase = "esto:es:el:final:de:la:ut2";
    $palabras = explode(":", $frase);
    echo "<table>\n";
    foreach ($palabras as $palabra)
    {
        $primero = substr($palabra, 0, 1);
        $ultimo = substr($palabra, strlen($palabra) - 1, 1);
        $nueva = strtoupper($primero).substr($palabra, 1, strlen($palabra) - 2).strtoupper($ultimo);
        echo "<tr><td>$nueva</td></tr>\n";
    }
    echo "</table>\n";
    require_once "includes/pie.php";
?>
