<?php
    include "cabecera.php";
        
    define ("PUNTOS", 100);    
    
    $puntosIniciales = 300;
    $totalPuntos = $puntosIniciales;
    $bonificacion = false;   
    
    echo "<p>Puntos iniciales ".$puntosIniciales."<p>";
    if ($bonificacion)   
    {
        $totalPuntos += PUNTOS;
        echo "<p>Con bonificación de ".PUNTOS. " puntos<p>";
    }
    
    echo "<p>Puntos totales ".$totalPuntos."<p>";
    
    include "pie.php";
 
?>
