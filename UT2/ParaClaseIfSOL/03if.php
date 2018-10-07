<?php
    include "cabecera.php";
     
    $pais = "Francia" ;

    switch ($pais)
    {

        case "Holanda":
            $capital = "Amsterdam";
            break;

        case "Bélgica" :
            $capital = "Bruselas";
            break;

        case "Alemania" :
            $capital = "Berlín";
            break;

        case "Francia" :
            $capital = "Paris";
            break;

        default: echo "País no correcto.";
            break;
    }

    echo "La capital de  $pais es $capital." ;


    include "pie.php";
 
?>
