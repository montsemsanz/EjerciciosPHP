<?php
    include "cabecera.php";
     // generamos un aleatorio entre 1 y 7 y visualizamos el nombre del día de la semana
    $dia = rand(1, 7);
    if ($dia == 1)
    {
        echo "Hoy es Lunes<br />";
    }
    else if ($dia == 2)
    {
        echo "Hoy es Martes<br />";
    } 
    else if ($dia == 3)
    {
        echo "Hoy es Mi&eacute;rcoles<br />";
    } 
    else if ($dia == 4)
    {
        echo "Hoy es Jueves<br />";
    } 
    else if ($dia == 5)
    {
        echo "Hoy es Viernes<br />";
    } 
    else  if ($dia == 6)
    {
        echo "Hoy es Sábado<br />";
    } 
    else
    {
             echo "Hoy es Domingo<br />";
    }
    
    include "pie.php";
 
?>
