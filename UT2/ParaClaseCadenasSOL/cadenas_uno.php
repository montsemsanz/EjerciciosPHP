<?php
    require_once "includes/cabecera.php";
     
    $frase = " Ejemplo   de cadenas     ";
    $frase = trim($frase);
    $longitud = strlen($frase);
    echo "<p>Longitud de la frase \"$frase\" - $longitud </p>\n"; 
   
   // frase en may�sculas
    
   echo "<p> frase en mayúsculas ".strtoupper($frase)."</p>\n";   
    
 
    require_once "includes/pie.php";
?>
