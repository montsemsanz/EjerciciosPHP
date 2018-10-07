<?php
    include "cabecera.php";
     
    $idioma = "castellano" ;

    if ($idioma == "ingles" )
    {
        echo "Welcome!" ;
    }
    else if ($idioma == "castellano" )
    {
         echo "Bienvenido!" ;
    }
    else if ($idioma == "frances" )
    { 
        echo "Bienvenu!" ;
    }
    else
    {
        echo "idioma no v&aacute;lido." ;
    } 

    include "pie.php";
 
?>
