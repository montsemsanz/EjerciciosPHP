<?php
    include "cabecera.php";
   

    $nombre = 'Pedro';

    // Saludo dependiendo de la hora del día
    $hora = date("H");
    if ($hora >= 6 & $hora <= 14)
    {
        echo 'Buenos días ' . $nombre." son las ".$hora." horas";
    } 
    else if ($hora > 14 && $hora <= 20)
    {

        echo 'Buenas tardes ' . $nombre." son las ".$hora." horas";
    } 
    else 
    {
        echo ' Buenas noches ' . $nombre." son las ".$hora." horas";;
    } 
   
    
    include "pie.php";
 
?>
