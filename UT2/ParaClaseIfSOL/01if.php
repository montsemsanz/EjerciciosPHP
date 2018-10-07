<?php
    include "cabecera.php";
    
    $nota = rand(1, 10);
    $nombre = "Juan Carlos";
    if ($nota < 5)
    {
        echo "$nombre ha suspendido el curso<br />";
    }
    else if ($nota < 6)
    {
        echo "$nombre ha tendido un SUFICIENTE<br />";
    }
    else if ($nota < 7)
    {
        echo "$nombre ha tendido un BIEN <br />";
    }
    else if ($nota < 9)
    {
        echo "$nombre ha tendido un NOTABLE <br />";
    }
    else
    {
        echo "$nombre ha tendido un SOBRESALIENTE <br />";
    }
     
    
    include "pie.php";
 
?>
